<?php

require_once('TwoChairs.php');

class TwoChairsSocket implements TwoChairs
{
    public function one()
    {
        echo "Pin one exists.\n";
    }

    public function two()
    {
        echo "Pin two exists.\n";
    }
}