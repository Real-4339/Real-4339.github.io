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
                   echo "/Prislusenstvo.php?lang=en";
                 } else if ($_SESSION['lang'] == "en") {
                   echo "/Prislusenstvo.php?lang=sk";
                 } ?> ">
        <?php 
          if($_SESSION['lang'] == "en") {
            echo "Slovak version";
          } else {
            echo "English version";
          }
        ?></a></div>
    <?php include('includes/header.php') ?>
     <div class="thumb">
        <h1 id="oto" style="text-shadow: black 2px 2px 2px;"><?php echo (${$_SESSION['lang']}['h1_prislusenstvo'] ); ?></h1>
        <figure>
          <img src="Gif/Originals/kop.jpg">
          <figcaption><?php echo (${$_SESSION['lang']}['prislusenstvo_fig_1'] ); ?></figcaption>
        </figure><!--
        --><figure>
          <img src="Gif/Originals/lol.jpg" style = "height: 302px;">
          <figcaption><?php echo (${$_SESSION['lang']}['prislusenstvo_fig_2'] ); ?></figcaption>
        </figure><!--
        --><figure>
          <img style = "height: 300px; background-color: white; object-fit: contain;" src="Gif/Originals/mom.jpg">
          <figcaption><?php echo (${$_SESSION['lang']}['prislusenstvo_fig_3'] ); ?></figcaption>
        </figure><!--
        --><figure>
          <img src="Gif/Originals/okjpg.jpg">
          <figcaption><?php echo (${$_SESSION['lang']}['prislusenstvo_fig_4'] ); ?></figcaption>
        </figure><!--
        --><figure>
          <img src="Gif/Originals/op.jpg" style = "height: 285px;">
          <figcaption><?php echo (${$_SESSION['lang']}['prislusenstvo_fig_5'] ); ?></figcaption>
        </figure><!--
        --><figure>
          <img src="Gif/Originals/top.jpg" style = "height: 270px;">
          <figcaption><?php echo (${$_SESSION['lang']}['prislusenstvo_fig_6'] ); ?></figcaption>
        </figure>
      </div>
  <?php include('includes/footer.php') ?>
</body>
</html>


<!-- <div>
    <h1 id="oto">Populárne prislušenstvo</h1>
    <div class="top">
    <figcaption>Nabíjačka Apple MagSafe, 3D ochranné temperované sklo pre Apple iPhone XR, Black</figcaption>
    <img src="Gif/Originals/kop.jpg" width="200px">
    
   
    <img src="Gif/Originals/lol.jpg"  width="200px">
    
    <img src="Gif/Originals/mom.jpg"  width="80px">

</div>
<div class="bottom">
   
    <img src="Gif/Originals/op.jpg"  width="200px">
  
    <img src="Gif/Originals/okjpg.jpg"  width="200px">
  
    <img src="Gif/Originals/top.jpg" width="270px">
  
</div>   
<div id="conto">
    <h1 id="oto">Populárne prislušenstvo</h1>
    <div class="gallery">
        <figure class="foto">
            <a href="Gif/Originals/kop.jpg"><img src="Gif/Originals/kop.jpg" alt="Prislušenstvo" /></a>
            <figcaption>Prislušenstvo</figcaption>
        </figure>
        <figure class="foto">
            <a href="Gif/Originals/lol.jpg"><img src="Gif/Originals/lol.jpg" alt="Zatvorená obrazovka" /></a>
            <figcaption>Zatvorená obrazovka</figcaption>
        </figure>
        <figure class="foto" style = "width: 200px;">
            <a href="Gif/Originals/mom.jpg"><img src="Gif/Originals/mom.jpg" style = "width: 200px;" alt="Zapnutý displej" /></a>
            <figcaption>Zapnutý displej</figcaption>
        </figure>
        <figure class="foto">
            <a href="Gif/Originals/okjpg.jpg"><img src="Gif/Originals/okjpg.jpg" alt="Zadná strana môjho telefónu" /></a>
            <figcaption>Zadná strana môjho telefónu</figcaption>
        </figure>
        <figure class="foto">
            <a href="Gif/Originals/op.jpg"><img src="Gif/Originals/op.jpg" alt="Záves" /></a>
            <figcaption>Záves</figcaption>
        </figure>
        <figure class="foto">
            <a href="Gif/Originals/top.jpg"><img src="Gif/Originals/top.jpg" alt="Výhľad okna" /></a>
            <figcaption>Výhľad okna</figcaption>
        </figure>
    </div>
</div> -->