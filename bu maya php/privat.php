<?php

class montor{
    public $merek = "";

    function __construct()
    {
        $this->merek = ""; //public = Bebas diakses dari mana saja.
                            //private = hanya bisa diakses di class itu sendiri  
    }
}

$brum = new montor();
$brum->merek = "Honda";

echo $brum->merek;
