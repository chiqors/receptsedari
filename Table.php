<?php

require_once('ThreeChairs.php');

class Table
{
    private $socket;

    public function __construct(ThreeChairs $socket)
    {
        $this->socket = $socket;
    }

    public function checkForBooking() {
        $this->socket->one();
        $this->socket->two();
        $this->socket->three();
    }
}