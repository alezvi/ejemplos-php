<?php 

class Registration 
{
    private $user;

    private $errors = [];

    public function __construct() 
    {
        $this->user = new User;
    }

    public function validate(array $data) 
    {
        if (! filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = 'El email no es valido';
        }
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function register(array $data): User
    {
        $this->user->setEmail($data['email']);
        $this->user->setPassword($data['password']);
    }
}
