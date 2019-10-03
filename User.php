<?php 

class User 
{
    private $email;

    private $password;

    public function setEmail(string $email) 
    {
        $this->email = $email;
    }
    
    public function setPassword(string $password) 
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    
    public function getEmail(): string 
    {
        return $this->email;
    }

    public function getPassword(): string 
    {
        return $this->password;
    }
}
