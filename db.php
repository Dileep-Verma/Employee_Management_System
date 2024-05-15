<?php
$servername="localhost";
$username="root";
$password= "";
$dbname= "library";
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn){
    echo "connection is successfully";
}else{
    echo "connection is failed";
}

?>