<?php include('./lang/en.php'); ?>
<?php include('./lang/sk.php'); ?>
<?php include("./functions.php"); ?>

<?php 
if($_SESSION['lang'] == "en") {
    echo "<header id=\"block_2\">
    <nav>
     <ul class=\"menu\">
        <li><a href=\"Porovnavanie_en.html\">Comparing</a></li>
  <li><a href=\"Prislušenstvo_en.html\">Accessories</a></li>
  <li><a href=\"Dizajn_en.html\">Design</a></li>
  <li><a href=\"Technicka_en šp.html\">Technical specification</a></li>
  <li><a href=\"Kontakty_en.html\">Contacts</a></li>
  <li><a href=\"Fotogaleria_en.html\">Photo gallery</a></li>
  <li><a href=\"Domaca_en.html\">Home</a></li>
     </ul>
    </nav>
 </header> ";
  } else {
    echo "<header id=\"block_1\">
    <nav>
     <ul class=\"menu\">
      <li><a href=\"Porovnanie.php\">Porovnavanie</a></li> 
      <li><a href=\"Prislusenstvo.php\">Prislušenstvo</a></li>   
      <li><a href=\"Dizajn.php\">Dizajn</a></li>
      <li><a href=\"Technicka šp.php\">Technicka špecifikacia</a></li>
      <li><a href=\"Kontakty.php\">Kontakty</a></li>
      <li><a href=\"Fotogaleria.php\">Fotogaleria</a></li>
      <li><a href=\"Domaca.php\">Domaca</a></li>
     </ul>
    </nav>
 </header> ";
  }


     

