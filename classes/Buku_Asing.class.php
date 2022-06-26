<?php

// CLASS
class Buku_Asing extends Buku
{
    public function __construct()
    {
        print_r("<br>IMPLEMENTASI OVERRIDING CLASS BUKU ASING SEBAGAI CHILDREN DARI CLASS BUKU <br><br>");
    }
    // OVERRIDING DIDALAM PHP DENGAN ACCESS MODIFIER PUBLIC
    public function __call($name, $argument)
    {
        if ($name == "specs") {
            switch (count($argument)) {
                case 1:
                    return "Buku ini berjudul '" . $argument[0] . "' <br>";
                    break;
                case 2:
                    return "Buku ini berjudul '" . $argument[0] . "', dengan penulis adalah " . $argument[1] . "<br>";
                    break;
                default:
                    return "Kamu Harus Mengisi Parameter";
                    break;
            }
        }
    }
}
