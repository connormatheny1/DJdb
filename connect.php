<?php

$host = "localhost";
$user = "Connor_project4";
$pw = "Dankeshane1!";
$db = "project_4_ims422";

$mysqli = new mysqli($host,$user,$pw,$db);
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  exit;
}

