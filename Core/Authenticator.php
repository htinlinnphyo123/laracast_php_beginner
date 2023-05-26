<?php

    namespace Core;
    use Core\App;
    use Core\DB;

    class Authenticator
    {
        public $errors = [];
        public function attempt($email,$password)
        {
            $db = App::resolve(DB::class);
            $user = $db->query("SELECT * FROM users WHERE email=:email",[
                'email' => $email
            ])->find();
            if(!password_verify($password,$user['password'])){
                return false;
            }
            $this->login([
                'id' => $user['id'],
                'email' => $user['email']
            ]);
            return true;
        }
        public function getErrors()
        {
            return $this->errors;
        }
        public function login($attribute){
            $_SESSION['user'] = $attribute;
            session_regenerate_id(true);
        }
    }


?>