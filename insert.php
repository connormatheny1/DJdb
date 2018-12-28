<?php
require("connect.php");

$name = $_POST['name'];
$artist = $_POST['artist'];
$album = $_POST['album'];
$genre = $_POST['genre'];
$comments = $_POST['comments'];
#demo of using prepared statements for MySQL in PHP (mysqli library) 

#prepare: note the placeholders (?,?,?) standing in for VALUES
#actual VALUES get "bound" in the next section
if (!($stmt= $mysqli->prepare("INSERT into songs (name, artist, album, genre, comments) values (?,?,?,?,?)"))) {
  echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
  exit;
}


$name = $name;
$artist = $artist;
$album = $album;
$genre = $genre;
$comments = $comments;

#bind: attach values to placeholders via the string "iss"
#i: integer
#s: string
#d: double(for decimal or large numbers)
#b: for binary data
if (!$stmt->bind_param("sssss", $name, $artist, $album, $genre, $comments)) {
  echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
  exit;
}

#execute
if (!$stmt->execute()) {
  echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
  exit;
}

echo '<!doctype html>
<html> 
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
        <script src="jscript.js" type="text/javascript"></script>
        <link href="styles/main.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://use.typekit.net/win8noj.css">
        <link rel="stylesheet" href="https://use.typekit.net/hso7otw.css">
    </head>
    
    <body>
        
    <div id="main_nav">
        <a href="index.html"><h2>logo</h2></a>
    </div>

        
    <div class="landing_container"> 
        
        
        
        <div id="button_php">
            <h2>Your entry has been recorded, thank you. Click the button below to take you back to the entry form.</h2>
            <button class = "return_button">Back</button>
        </div>
        
        
        
        
        
        
        
    </div>
        
    </body>
</html>';

#Note: the bind-exececute sections may appear (together) in a loop, to
#speed and simplify multiple INSERTs.