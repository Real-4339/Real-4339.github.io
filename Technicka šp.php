<?php include('./lang/en.php'); ?>
<?php include('./lang/sk.php'); ?>
<?php include("./functions.php"); ?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For people</title>
    <link rel="apple-touch-icon" sizes="57x57" href="Favikon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="Favikon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="Favikon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="Favikon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="Favikon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="Favikon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="Favikon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="Favikon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="Favikon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="Favikon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="Favikon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="Favikon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="Favikon/favicon-16x16.png">
  <link rel="manifest" href="Favikon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="site.css">
</head>
<body>
    <div class="maim"><img src="Gif/Maimbot.png" width="10%" height="10%" /></div>
    <div class="version"><a href="<?php 
                 if($_SESSION['lang'] == "sk") {
                   echo "/Technicka šp.php?lang=en";
                 } else if ($_SESSION['lang'] == "en") {
                   echo "/Technicka šp.php?lang=sk";
                 } ?> ">
        <?php 
          if($_SESSION['lang'] == "en") {
            echo "Slovak version";
          } else {
            echo "English version";
          }
        ?></a></div>
    <header id="block_1">
        <nav>
         <ul class="menu">
            <li class="flex"><a href="Porovnanie.php">Porovnavanie</a></li> 
          <li><a href="Prislusenstvo.php">Prislušenstvo</a></li>   
          <li><a href="Dizajn.php">Dizajn</a></li>
          <li><a href="Technicka šp.php">Technicka špecifikacia</a></li>
          <li><a href="Kontakty.php">Kontakty</a></li>
          <li><a href="Fotogaleria.php">Fotogaleria</a></li>
          <li><a href="Domaca.php">Domaca</a></li>
         </ul>
        </nav>
     </header>  
     <hr class="hry"/> 
     <div id="container">
   <section id="main_section">
     <article id="artrit">
      <div class="pop">
        <hr /> 
        <?php echo (${$_SESSION['lang']}['tech_tab_1'] ); ?>
        <hr />
      </div>
      <div class="pop">
      <?php echo (${$_SESSION['lang']}['tech_tab_2'] ); ?>
      <div class="pop">
        <hr />
        <?php echo (${$_SESSION['lang']}['tech_tab_3'] ); ?>
      <div class="pop">
        <hr />
        <?php echo (${$_SESSION['lang']}['tech_tab_4'] ); ?>
      <div class="pop">
        <hr />
        <?php echo (${$_SESSION['lang']}['tech_tab_5'] ); ?>
      <div class="pop">
        <hr />
        <?php echo (${$_SESSION['lang']}['tech_tab_6'] ); ?>
      <div class="pop">
        <hr />
        <?php echo (${$_SESSION['lang']}['tech_tab_7'] ); ?>
      <div class="pop">
        <hr />
        <?php echo (${$_SESSION['lang']}['tech_tab_8'] ); ?>
      <div class="pop">
        <hr />
        <?php echo (${$_SESSION['lang']}['tech_tab_9'] ); ?>
      <div class="pop">
        <hr />
        <?php echo (${$_SESSION['lang']}['tech_tab_10'] ); ?>
      <div class="pop">
        <hr />
        <?php echo (${$_SESSION['lang']}['tech_tab_11'] ); ?>
      <div class="pop">
        <hr />
        <?php echo (${$_SESSION['lang']}['tech_tab_12'] ); ?>
   <aside id="main_aside">
     <blockquote class="block">
     <?php echo (${$_SESSION['lang']}['tech_block_1'] ); ?>
     <blockquote class="block">
      <h3><?php echo (${$_SESSION['lang']}['tech_h3_1'] ); ?></h3>
      <p><img class="Right" style="width: 180px;" src="Gif/Originals/3p_n.jpg" alt="image description" title="image tooltip"/>
      <?php echo (${$_SESSION['lang']}['tech_block_2'] ); ?>  
      </p>
        <hr />
     </blockquote>
     <blockquote class="block">
      <h3><?php echo (${$_SESSION['lang']}['tech_h3_2'] ); ?></h3>
      
      <p><img class="Left" style="width: 180px;" src="Gif/Originals/2p.jpg" alt="image description" title="image tooltip"/>
      <?php echo (${$_SESSION['lang']}['tech_block_3'] ); ?></p>
        <hr />
     </blockquote>
     <blockquote class="block">
      <h3><?php echo (${$_SESSION['lang']}['tech_h3_3'] ); ?></h3>
      <p><img class="Right" style="width: 180px;" src="Gif/Originals/8p.jpg" alt="image description" title="image tooltip"/>
      <?php echo (${$_SESSION['lang']}['tech_block_4'] ); ?></p>
        <hr />
     </blockquote>
     <blockquote class="block">
      <h1><?php echo (${$_SESSION['lang']}['tech_h1_1'] ); ?></h1>
      <p><img class="Left" style="width: 180px;" src="Gif/Originals/9p.jpg" alt="image description" title="image tooltip"/>
      <?php echo (${$_SESSION['lang']}['tech_block_5'] ); ?></p>
        <hr />
     </blockquote>
     <blockquote class="block">
      <h3><?php echo (${$_SESSION['lang']}['tech_h3_4'] ); ?></h3>
      <p><img class="Right" style="width: 180px; transform: translate(0,-5px);" src="Gif/Originals/11p.jpg" alt="image description" title="image tooltip"/>
      <?php echo (${$_SESSION['lang']}['tech_block_6'] ); ?></p>
        <hr />
     </blockquote>
     <blockquote class="block">
      <h3><?php echo (${$_SESSION['lang']}['tech_h3_5'] ); ?></h3>
      <p><img class="Left" style="width: 180px;" src="Gif/Originals/12p.jpg" alt="image description" title="image tooltip"/>
      <?php echo (${$_SESSION['lang']}['tech_block_7'] ); ?></p>
        <hr />
     </blockquote>
     <blockquote class="block">
      <audio controls>
        <source src="Gif/Originals/din-iphone.mp3" type="audio/mpeg" />
      </audio>
      <audio controls>
      <source src="Gif/Originals/zvuk-iphone.mp3" type="audio/mpeg" />
      </audio>
      <audio controls class="audio">
        <source src="Gif/Originals/zvonok_-_ajfon.mp3" type="audio/mpeg" />
      </audio>
        <hr />
     </blockquote>
   </aside>
  </div>
  <footer class="footer">
    <p>E-mail: vad.tili@gmail.com</p>
    <p>Tel. čislo: +4217****9</p>
    <p class="copyright">Copyright &copy by Vadym Tilihuzov</p>
</footer>
</body>
</html>