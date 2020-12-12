
<span class="clude">
  <div class="version"><a href="<?php 
                 if($_SESSION['lang'] == "sk") {
                   echo "/Domaca.php?lang=en";
                 } else if ($_SESSION['lang'] == "en") {
                   echo "/Domaca.php?lang=sk";
                 } ?> ">
        <?php 
          if($_SESSION['lang'] == "en") {
            echo "Slovak version";
          } else {
            echo "English version";
          }
        ?></a></div>
    <?php include('includes/header.php') ?></span>

  <div class="tabs">
  <div class="tab">
    <input type="radio" id="tab-1" name="tab-group-1" />
    <label for="tab-1">Menu <i>▼</i></label>
    <div class="tab close-tab">
      <input type="radio" id="tab-close" name="tab-group-1" />
      <label for="tab-close">Menu <i>▲</i></label>
    </div>
    <div class="content">
      <ul>
      <li><a href="Domaca.php">Domaca</a></li>
      <li><a href="Fotogaleria.php">Fotogaleria</a></li>
      <li><a href="Kontakty.php">Kontakty</a></li>
      <li><a href="Technicka šp.php">Technicka špecifikacia</a></li>
      <li><a href="Prislusenstvo.php">Prislušenstvo</a></li>
      <li><a href="Porovnanie.php">Porovnavanie</a></li>      
      </ul>
    </div>
  </div>
  <div class="version_1"><a href="<?php 
                 if($_SESSION['lang'] == "sk") {
                   echo "/Domaca.php?lang=en";
                 } else if ($_SESSION['lang'] == "en") {
                   echo "/Domaca.php?lang=sk";
                 } ?> ">
        <?php 
          if($_SESSION['lang'] == "en") {
            echo "Slovak version";
          } else {
            echo "English version";
          }
        ?></a></div>
  </div>
  