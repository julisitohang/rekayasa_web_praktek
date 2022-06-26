<?php

// CLASS
class Buku
{
    public function __construct()
    {
        print_r("IMPLEMENTASI OVERLOADING CLASS BUKU PARENT <br><br>");
    }
    // OVERLOADING DIDALAM PHP DENGAN ACCESS MODIFIER PUBLIC
    public function __call($name, $argument)
    {
        if ($name == "specs") {
            switch (count($argument)) {
                case 1:
                    return $argument[0] . " <br>";
                    break;
                case 2:
                    return  $argument[0] . " , " . $argument[1] . "<br>";
                    break;
                default:
                    return "Kamu Harus Mengisi Parameter";
                    break;
            }
        }
    }
}
