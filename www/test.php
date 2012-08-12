

<?php


$username = "sbobonet";
$password = "Zndrtsui!!2";
$hostname = "box458.bluehost.com"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");


mysql_select_db("sbobonet_kracktube", $dbhandle) or die(mysql_error());


$result = mysql_query("SELECT * FROM media");

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    printf("<a href='http://www.youtube.com/watch?v=%s'>%s</a><br/>", $row[5],$row[5]);  
}

mysql_free_result($result);
 


echo "Connected to MySQL<br>";
?>

