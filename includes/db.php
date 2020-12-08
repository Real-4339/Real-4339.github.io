<?php 

$connection = mysqli_connect('localhost', 'root', 'root', 'test_db');

if ( $connection == false )
{
    echo 'Nepodarilo sa pripoit k serveru!<br>';
    echo mysqli_connect_error();
    die();
}