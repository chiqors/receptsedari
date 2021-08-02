<?php

require_once('ThreeChairs.php');
require_once('TwoChairs.php');

// === Adapter  ===
// which convert TwoPins object to ThreePins
class ThreeChairsAdapter implements ThreeChairs
{
    private $socket;

    public function __construct(TwoChairs $socket)
    {
        $this->socket = $socket;
    }

    public function one()
    {
        $this->socket->one();
    }

    public function two()
    {
        $this->socket->two();
    }

    public function three()
    {
        echo "Pin three doesn't exists, but it's OK.\n";
    }
}