<?php
require_once("payment.php");

class paypal extends payment{

    $id;
    $email;

    public function __construct($id, $email){
        parent::__construct($id);
        $this->email = $email;
    }
}

?>