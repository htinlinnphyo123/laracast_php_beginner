<?php

    namespace Http\Forms;
    use Core\Validator;
    use Core\ValidationException;
    
    class LoginForm
    {
        protected $errors = [];
        public function __construct(public array $attribute)
        {
            if(!Validator::email($attribute['email'])){
                $this->errors['invalid_format'] = 'Invalid Email';
            }
            if(!Validator::string($attribute['password'],5,50)){
                $this->errors['password'] = 'Password must be between 5 and 50.';
            }
        }
        public static function validate($attribute)
        {
            $instance = new static($attribute);
            return $instance->failed() ? $instance->throw() : $instance;
        }
        public function throw()
        {
            ValidationException::throw($this->getErrors(),$this->attribute);
        }
        public function failed()
        {
            return count($this->errors);
        }
        public function getErrors()
        {
            return $this->errors;
        }
        public function setError($field,$value)
        {
            $this->errors[$field] = $value;
            return $this;
        }
    }



?>