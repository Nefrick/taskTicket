<?php

define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Autoload.php');

// array event ID
$eventIds = [14, 21, 587, 82];

$o = new Ticket();

foreach ($eventIds as $eventId) {

    $o->reserveRandomTicket($eventId);

    echo "\n<h5>---------------------------------------------------</h5>\n";
}