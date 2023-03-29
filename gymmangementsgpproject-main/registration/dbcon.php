<?php
$_SERVER="localhost";
$user="root";
$password="";
$db="new";

$con= mysqli_connect($_SERVER,$user,$password,$db);
if(!$con){
    echo"
    <script>
        alert('no connection');
    </script>
    ";
}

?>