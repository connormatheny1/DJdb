
<?php

require('connect.php');


$search = $_REQUEST['search'];
$search = "'%". $search . "%'";

$sql = "SELECT * FROM `project_4_ims422`.`songs` WHERE (CONVERT(`id` USING utf8) LIKE $search OR CONVERT(`name` USING utf8) LIKE $search OR CONVERT(`artist` USING utf8) LIKE $search OR CONVERT(`album` USING utf8) LIKE $search OR CONVERT(`genre` USING utf8) LIKE $search OR CONVERT(`comments` USING utf8) LIKE $search)";
$res = $mysqli->query($sql);

if ($row = $res->fetch_assoc()) {
    
 echo "<table>
 
 <tr>
    <th>Name</th>
    <th>Artist</th>
    <th>Album</th>
    <th>Genre</th>
    <th>Comments</th>
 </tr>
 <tr>
    <td>$row[name]</td>
    <td>$row[artist]</td>
    <td>$row[album]</td>
    <td>$row[genre]</td>
    <td>$row[comments]</td>
 </tr>
 
 </table>
 
 
 
 ";
}

else if($search = ""){
      echo "<div id = 'bad_search_container'>
        <div class = 'bad_search_item'><h3>Please enter something to search for.</h3>
        <a href='entry.html'><button class = 'bad_button'>Make an entry</button></a></div>
        
        <div class = 'bad_search_item'><h3>Oake another entry.</h3>
        <a href='search.html'><button class = 'bad_button'>Search again</button></a></div>
        </div>";  
    }

else {
    $search = $_REQUEST['search'];
    $row[name] = "";
    $row[artist] = "";
    $row[album] = "";
    $row[genre] = "";
 echo "<div id = 'bad_search_container'>
        <div class = 'bad_search_item'><h3>Sorry, we couldn't find a match for \"$search\". Add this song to our records.</h3>
        <a href='entry.html'><button class = 'bad_button'>Make an entry</button></a></div>
        
        <div class = 'bad_search_item'><h3>Or search again.</h3>
        <a href='search.html'><button class = 'bad_button'>Search again</button></a></div>
        </div>";
}
?>
