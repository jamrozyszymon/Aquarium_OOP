<?php

namespace classes\notification;

class User
{
    private $email;
    private $phoneNumber;

    public function __construct($email, $phoneNumber)
    {
        $this->email= $email;
        $this->phoneNumber=$phoneNumber;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
}
