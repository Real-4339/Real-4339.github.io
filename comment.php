<?php

include('includes/db.php');

$name = $_POST['name'];
$komment = $_POST['text_comment'];


$sql = mysqli_query($connection, "INSERT INTO `comments` (`text`,`autor`) VALUES ('$komment', '$name')");

echo "<script>window.open('Domaca.php','_self')</script>";

?>
