<?php
class Account
{
    public $id;
    public $name;
    public $email;
    public $password;
    public $document;

    public function __construct($name,$document){

        $this->name=$name;
        $this->document=$document;
    }
}

?>