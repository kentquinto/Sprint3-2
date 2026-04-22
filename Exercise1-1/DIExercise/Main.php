<?php
require_once "Person.php";
$person = new Person(new Wallet, new Keys, new VehicleKey, new Phone, new TransportCard);
$person->leaveHome();
?>