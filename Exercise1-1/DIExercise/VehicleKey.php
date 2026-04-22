<?php
require_once "Interfaces.php";
class VehicleKey implements Check {
    public function check(): void {
        echo "VehicleKey check \n";
    }
}
?>