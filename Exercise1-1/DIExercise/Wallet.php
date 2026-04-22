<?php
require_once "Interfaces.php";
class Wallet implements Check {
    public function check(): void {
        echo "Wallet check \n";
    }
}
?>