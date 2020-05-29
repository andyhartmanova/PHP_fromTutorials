<?php
//create connection
$conn = mysqli_connect('localhost', 'root', '12345678', 'phpblog');

//Check connection
if(mysqli_connect_errno()){
    //connection failed
    echo 'Failed to connect to MYSQL'. mysqli_connect_errno();
}