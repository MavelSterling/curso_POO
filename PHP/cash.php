<?php
require_once("payment.php");

class cash extends payment{
    $id;

    public function __construct($id){
        parent::__construct($id);
    }
}

?>