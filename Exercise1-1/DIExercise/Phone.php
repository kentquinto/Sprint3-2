<?php
require_once "Interfaces.php";
class Phone implements Check {
    public function check(): void {
        echo "Phone check \n";
    }
}
?>