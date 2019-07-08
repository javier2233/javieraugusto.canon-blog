<?php
/**
 * Created by PhpStorm.
 * User: javier
 * Date: 6/07/2019
 * Time: 9:24 PM
 */

namespace Blog\Domain;


class User
{
    private $email;
    private $password;

    public function __construct($email, $password)
    {
            $this->email = $email;
            $this->password= $password;
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                return false;
            }
            $validatePassWord = $this->validatePass($this->password);
            if(!$validatePassWord){
                return false;
            }

    }

    public function validatePass($password){

    }
}