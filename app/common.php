<?php
require_once __DIR__ . "/../entities/Card.php";
require_once __DIR__ . "/../entities/User.php";
require_once __DIR__ . "/../data-access/BlackjackDataAccess.php";
require_once __DIR__ . "/../utils/SecUtils.php";
session_start();

$dbFile = __DIR__ . "/../database/blackjack.db";

$blackjackDataAccess = new BlackjackDataAccess($dbFile);
