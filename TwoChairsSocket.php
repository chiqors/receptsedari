<?php

require_once('TwoChairs.php');

class TwoChairsSocket implements TwoChairs
{
    public function one()
    {
        echo "Kursi satu tersedia.\n";
    }

    public function two()
    {
        echo "Kursi dua tersedia.\n";
    }
}