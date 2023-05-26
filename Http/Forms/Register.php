<?php

    namespace Http\Forms;
    use Core\Validator;
    use Core\App;
    use Core\DB;

    class Register
    {
        protected $errors = [];
        public function validate($email,$password)
        {
            if(!Validator::email($email)){
                $this->errors['invalid_format'] = 'Invalid Email';
            }
            if(!Validator::string($password,5,50)){
                $this->errors['password'] = 'Password must be between 5 and 50.';
            }
            return empty($this->errors);
        }
        public function createAccount($email,$password)
        {
            $db = App::resolve(DB::class);

            //check if someone already created with this email
            $user = $db->query('SELECT * FROM users WHERE email=:email',[
                'email' => $email
            ])->find();
        
            //if , redirect to login page
            if($user){
                $this->errors['already_exist'] = 'Email Already Exists';
            }
        
            //store and redirect to notes page
            if(empty($this->errors)){
                $db->query("
                    INSERT INTO users(email,password)
                    VALUES(:email,:password)",[
                        'email' => $email,
                        'password' => password_hash($password,PASSWORD_BCRYPT)
                ]);
                $id = $db->getConnection()->lastInsertId();
                login([
                    'id' => $id,
                    'email' => $email
                ]);
                return true;
            }

            return false;

            return false;
        }

        public function getErrors()
        {
            return $this->errors;
        }
    }



?>