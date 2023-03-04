<?php
require_one("payment.php");

class card extends payment {
    $id;
    $cardName;
    $cardNumber;
    $cardType;

    public function __construct($id, $cardName, $cardNumber, $cardType){
        parent::__construct($id);
        $this ->$cardName = $cardName;
        $this ->$cardNumber = $cardNumber;
        $this ->$cardType = $cardType;
    }
}


?>