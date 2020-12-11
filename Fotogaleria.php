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
                   echo "/Fotogaleria.php?lang=en";
                 } else if ($_SESSION['lang'] == "en") {
                   echo "/Fotogaleria.php?lang=sk";
                 } ?> ">
        <?php 
          if($_SESSION['lang'] == "en") {
            echo "Slovak version";
          } else {
            echo "English version";
          }
        ?></a></div>
    <?php include('includes/header.php') ?>
     <div class="container">
        <h1 id="h1_foto"><?php echo (${$_SESSION['lang']}['foto_h1'] ); ?></h1>
        <div id="gallery">
            <figure class="photo">
                <a href="Gif/Originals/1p.jpg"><img src="Gif/1p.jpg" alt="Prislušenstvo" style="height: 300px;"/></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/2p.jpg"><img src="Gif/2p.jpg" alt="Zatvorená obrazovka" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/3p.jpg"><img src="Gif/3p.jpg" alt="Zapnutý displej" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/4p.jpg"><img src="Gif/4p.jpg" alt="Zadná strana môjho telefónu" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/5p.jpg"><img src="Gif/5p.jpg" alt="Záves" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/6p.jpg"><img src="Gif/6p.jpg" alt="Výhľad okna" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/10p.jpg"><img src="Gif/Originals/10p.jpg" alt="Prislušenstvo" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/8p.jpg"><img src="Gif/Originals/8p.jpg" style="height: 300px;"alt="Zatvorená obrazovka" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/9p.jpg"><img src="Gif/Originals/9p.jpg"  style="height: 300px;"alt="Zapnutý displej" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/11p.jpg"><img src="Gif/Originals/11p.jpg" alt="Zadná strana môjho telefónu" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/12p.jpg"><img src="Gif/Originals/12p.jpg"  alt="Záves" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/top.jpg"><img src="Gif/Originals/top.jpg" alt="Výhľad okna" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/14.jpg"><img src="Gif/Originals/14.jpg" alt="Prislušenstvo" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/art01.jpg"><img src="Gif/Originals/art01.jpg" alt="Zapnutý displej" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/art03.jpg"><img src="Gif/Originals/art03.jpg" alt="Zadná strana môjho telefónu" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/art06.jpg"><img src="Gif/Originals/art06.jpg" alt="Záves" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/art07.jpg"><img src="Gif/Originals/art07.jpg" alt="Výhľad okna" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/art08.jpg"><img src="Gif/Originals/art08.jpg" alt="Prislušenstvo" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/art10.jpg"><img src="Gif/Originals/art10.jpg" alt="Zatvorená obrazovka" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/art12.jpg"><img src="Gif/Originals/art12.jpg" alt="Zapnutý displej" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/art21.jpg"><img src="Gif/Originals/art21.jpg" alt="Zadná strana môjho telefónu" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/art27.jpg"><img src="Gif/Originals/art27.jpg" alt="Záves" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/art31.jpg"><img src="Gif/Originals/art31.jpg" alt="Výhľad okna" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/art35.jpg"><img src="Gif/Originals/art35.jpg" alt="Zadná strana môjho telefónu" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/kop.jpg"><img src="Gif/Originals/kop.jpg" alt="Záves" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/lol.jpg"><img src="Gif/Originals/lol.jpg" alt="Výhľad okna" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/mom.jpg"><img src="Gif/Originals/mom.jpg"  style="height: 300px; margin-left: 100px;"alt="Záves" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/okjpg.jpg"><img src="Gif/Originals/okjpg.jpg" alt="Výhľad okna" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/op.jpg"><img src="Gif/Originals/op.jpg" alt="Záves" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/pp.png"><img src="Gif/Originals/pp.png"  alt="Výhľad okna" /></a>
            </figure>
            <figure class="photo">
                <a href="Gif/Originals/13p.jpg"><img src="Gif/Originals/13p.jpg" style="height: 400px;" alt="Výhľad okna" /></a>
            </figure>
            <!-- <figure class="video">
                <video controls loop width="200px" height="300px">
                    <source src="Gif/Originals/1v.MP4" />
                </video>
            </figure>
            <figure class="photo">
                <video controls loop width="300px" height="400px">
                    <source src="Gif/Originals/IMG_3758.MP4" />
                </video>            
            </figure> -->
        </div>
    </div>
  <?php include('includes/footer.php') ?>
</body>
</html>