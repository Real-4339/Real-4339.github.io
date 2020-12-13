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
    <div class="maim"><img src="Gif/Maimbot.svg" /></div>

    <span class="clude">
  <div class="version"><a href="<?php 
                 if($_SESSION['lang'] == "sk") {
                  echo "/Porovnanie.php?lang=en";
                } else if ($_SESSION['lang'] == "en") {
                  echo "/Porovnanie.php?lang=sk";
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
      <li><a href="Dizajn.php">Dizajn</a></li>
      <li><a href="Prislusenstvo.php">Prislušenstvo</a></li>
      <li><a href="Porovnanie.php">Porovnavanie</a></li>      
      </ul>
    </div>
  </div>
  <div class="version_1"><a href="<?php 
                 if($_SESSION['lang'] == "sk") {
                  echo "/Porovnanie.php?lang=en";
                } else if ($_SESSION['lang'] == "en") {
                  echo "/Porovnanie.php?lang=sk";
                } ?> ">
        <?php 
          if($_SESSION['lang'] == "en") {
            echo "Slovak version";
          } else {
            echo "English version";
          }
        ?></a></div>
  </div>


     <div class="article_1">
        <h1 class="h1_0"><?php echo (${$_SESSION['lang']}['porov_h1_1'] ); ?></h1>
        <br />
        <hr />
        <p><?php echo (${$_SESSION['lang']}['porov_article_1'] ); ?></p>
        <br>
        <img style="width:86%; max-width: 440px; border-radius: 6px;" src="Gif/Originals/1p.jpg" alt="image description" title="image tooltip"/>
        <br />
        <p><?php echo (${$_SESSION['lang']}['porov_article_2'] ); ?>
          </p>   
       <br />
        <img class = "por_img" src="Gif/Originals/2p.jpg" alt="image description" title="image tooltip"/>
        <br />
        <br />
        <p><?php echo (${$_SESSION['lang']}['porov_article_3'] ); ?>
          </p>
          <br />
          <img class = "por_img" src="Gif/Originals/4p.jpg" alt="image description" title="image tooltip"/>
          <br />
         <p><?php echo (${$_SESSION['lang']}['porov_article_4'] ); ?>
           </p>
            <br />
            <img class = "por_img" src="Gif/Originals/art07.jpg" alt="image description" title="image tooltip"/>
            <br />
          <p><?php echo (${$_SESSION['lang']}['porov_article_5'] ); ?>
            </p>
             <br />
             <img class = "por_img" src="Gif/Originals/art08.jpg" alt="image description" title="image tooltip"/>
             <br />
         <p><?php echo (${$_SESSION['lang']}['porov_article_6'] ); ?>
           </p>
         <br />
         <img class = "por_img" src="Gif/Originals/art12.jpg" alt="image description" title="image tooltip"/>
         <br />
        <p><?php echo (${$_SESSION['lang']}['porov_article_7'] ); ?>
          </p>
         <br />
         <img class = "por_img" src="Gif/Originals/12p.jpg" alt="image description" title="image tooltip"/>
         <br /> 
         <p><?php echo (${$_SESSION['lang']}['porov_article_8'] ); ?>
           </p>
         <br />
         <img class = "por_img" src="Gif/Originals/art10.jpg" alt="image description" title="image tooltip"/>
         <br /> 
       <p><?php echo (${$_SESSION['lang']}['porov_article_9'] ); ?>
         </p>
          <br />
          <img class = "por_img" src="Gif/Originals/art31.jpg" alt="image description" title="image tooltip"/>
          <br /> 
        <p><?php echo (${$_SESSION['lang']}['porov_article_10'] ); ?>
          </p>
         <br />
         <img class = "por_img" src="Gif/Originals/art35.jpg" alt="image description" title="image tooltip"/>
         <br /> 
         <p><?php echo (${$_SESSION['lang']}['porov_article_11'] ); ?>
           </p>
         <br />
         <img class = "por_img" src="Gif/Originals/art21.jpg" alt="image description" title="image tooltip"/>
         <br /> 
       <p><?php echo (${$_SESSION['lang']}['porov_article_12'] ); ?>
         </p>
        <br />
         <img class = "por_img" src="Gif/Originals/art27.jpg" alt="image description" title="image tooltip"/>
         <br />
         <p><?php echo (${$_SESSION['lang']}['porov_article_13'] ); ?>
           </p>
      <br />
      </div>
      <div class="article_1">
        <h1 class="h1_0"><h1 class="h1_0"><?php echo (${$_SESSION['lang']}['porov_h1_2'] ); ?>Záver</h1>
        <br />
        <hr />
        <p><?php echo (${$_SESSION['lang']}['porov_article_14'] ); ?>
         </p>
        <br />
        <br>
      </div>
  <?php include('includes/footer.php') ?>
</body>
</html>