<?php

require_once('ThreeChairsSocket.php');
require_once('TwoChairsSocket.php');

require_once('ThreeChairsAdapter.php');

require_once('Table.php');

$threechairs = new ThreeChairsSocket();
$twochairs = new ThreeChairsAdapter(new TwoChairsSocket());

$table1 = new Table($threechairs);
$table1->checkForBooking();

$table2 = new Table($twochairs);
$table2->checkForBooking();