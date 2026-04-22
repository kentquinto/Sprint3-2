<?php
require_once "Keys.php";
require_once "Phone.php";
require_once "TransportCard.php";
require_once "VehicleKey.php";
require_once "Wallet.php";

class Person {
    private Wallet $wallet;
    private Keys $keys;
    private VehicleKey $vehicleKey;
    private Phone $phone;
    private TransportCard $transportCard;

    public function __construct(Wallet $wallet, Keys $keys, VehicleKey $vehicleKey, Phone $phone, TransportCard $transportCard){
        $this->wallet=$wallet;
        $this->keys = $keys;
        $this->vehicleKey = $vehicleKey;
        $this->phone = $phone;
        $this->transportCard = $transportCard;
    }
    public function leaveHome():void{
        $this->wallet->check();
        $this->keys->check();
        $this->vehicleKey->check();
        $this->phone->check();
        $this->transportCard->check();
    }
}
?>