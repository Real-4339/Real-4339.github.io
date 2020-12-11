<?php

include('includes/db.php');

$name = $_POST['name'];

$count = mysqli_query($connection, "SELECT * FROM `comments` WHERE `autor` = '$name'");

if(0 == mysqli_num_rows($count))
{

}
else
{
    echo 'Uz existuje take konto';
}
