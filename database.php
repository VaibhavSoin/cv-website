<?php 
$connect = mysqli_connect('localhost','root','','applications','3306');
if(!$connect){
    echo 'Failed to connect';
} ?>