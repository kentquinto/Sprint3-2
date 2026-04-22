<?php
require_once "Interfaces.php";
class TransportCard implements Check {
    public function check(): void {
        echo "Transport Card check \n";
    }
}
?>