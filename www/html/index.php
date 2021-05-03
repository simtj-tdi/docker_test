<?php 
$host = 'gabiatest_db_1'; // service name from docker-compose.yml
$user = 'exampleuser'; 
$password = 'examplepass'; 
$db = 'exampledb'; 
$conn = new mysqli($host, $user, $password, $db); 
if($conn -> connect_error){ 
    echo 'connection failed' . $conn -> connect_error;
} else {
    echo 'Sucessfully connected to MYSQL';
}

// $link = mysql_connect('gabiatest_db_1', 'root', 'examplepass');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// echo 'Connected successfully';

phpinfo();
?>
