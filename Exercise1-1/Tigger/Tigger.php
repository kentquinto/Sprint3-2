<?php
class Tigger {
    private static $instanceTigger = null;
    private int $roarCount = 0;

    private function __construct(){}

    public function roar():void {
        $this->roarCount++;
        echo "Grrr \n";
    }
    public static function getInstance():Tigger{
        if (self::$instanceTigger === null) {
            self::$instanceTigger = new Tigger();
        }
        return self::$instanceTigger;
    }
    public function getCounter():int {
        return $this->roarCount;
    }
}
$tigger=Tigger::getInstance();
for ($i=0; $i<3; $i++) {
    $tigger->roar();
}
echo $tigger->getCounter();

?>