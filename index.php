<?php

require_once('ThreeChairsSocket.php');
require_once('TwoChairsSocket.php');

require_once('ThreeChairsAdapter.php');

require_once('Table.php');

$threechairs = new ThreeChairsSocket();
$twochairs = new ThreeChairsAdapter(new TwoChairsSocket());

$table1 = new Table($threechairs);
$table2 = new Table($twochairs);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adapter Pattern</title>
</head>
<body>
    <h1>Booking Tempat</h1>
    <b><span>Objek meja pertama (3 orang dengan 3 kursi): </span></b>
    <?php
    $table1->verifyForBooking();
    ?>
    <br>
    <b><span>Objek meja kedua (3 orang dengan 2 kursi): </span></b>
    <?php
    $table2->verifyForBooking();
    ?>
</body>
</html>