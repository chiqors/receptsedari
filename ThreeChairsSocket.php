<?php

require_once('ThreeChairs.php');

class ThreeChairsSocket implements ThreeChairs
{
    public function one()
    {
        echo "Pin one exists.\n";
    }

    public function two()
    {
        echo "Pin two exists.\n";
    }

    public function three()
    {
        echo "Pin three exists.\n";
    }
}