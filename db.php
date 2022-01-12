<?php

$mysqli = new mysqli("localhost","root","","lmsroute");

if ($mysqli->connect_error) {
    die("ERROR : " . mysqli_connect_error());
    exit();
}
