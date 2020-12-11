<?php include('./lang/en.php'); ?>
<?php include('./lang/sk.php'); ?>
<?php include("./functions.php"); ?>

<?php

if($_SESSION['lang'] == "en") {
    echo "<footer class=\"footer\">
    <p>E-mail: vad.tili@gmail.com</p>
    <p>Phone number: +4217****9</p>
    <p class=\"copyright\">Copyright &copy by Vadym Tilihuzov</p>
</footer> ";
  } else {
    echo "<footer class=\"footer\">
    <p>E-mail: vad.tili@gmail.com</p>
    <p>Tel. čislo: +4217****9</p>
    <p class=\"copyright\">Copyright &copy by Vadym Tilihuzov</p>
</footer>";
  }