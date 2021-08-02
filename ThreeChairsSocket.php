<?php

require_once('ThreeChairs.php');

class ThreeChairsSocket implements ThreeChairs
{
    public function one()
    {
        echo "Kursi satu tersedia.\n";
    }

    public function two()
    {
        echo "kursi dua tersedia.\n";
    }

    public function three()
    {
        echo "kursi tiga tersedia.\n";
    }
}