<?php

require('connect.php');


$name = $_REQUEST['name'];
$artist = $_REQUEST['artist'];
$album = $_REQUEST['album'];
$genre = $_REQUEST['genre'];
$comments = $_REQUEST['comments'];

$sql = "SELECT * FROM songs WHERE song='$username' and passwd=MD5('$passwd') LIMIT 1";
$res = $mysqli->query($sql);

if ($row = $res->fetch_assoc()) {
 echo "<h3>$row[name] $row[artist] $row[album] $row[genre] $row[comments]</h3>";
}
else {
 echo "<h3>Sorry.  Wrong username or password? </h3>";
}
