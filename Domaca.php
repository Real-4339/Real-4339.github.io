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
  <div id="greeting">
  <section>
    <article class="greetings">
        <p class="p_1"> 
        <?php echo (${$_SESSION['lang']}['greetings'] ); ?>
        </p>
            <hr />
          <p class="button">  
            You are visible.<br>
    <a href="Invisible.php" style="text-decoration: none; color: midnightblue;">[Go invisible]</a></p>
    </article>
  </section>
  </div>
  <section class="article_1">
    <div class="Sec">   
    <div class="h1"><h1 class="h1_0">
    <?php echo (${$_SESSION['lang']}['domaca_h1'] ); ?>  
    </h1>
  </div>
    <small><?php echo (${$_SESSION['lang']}['napisal'] ); ?> <strong>Vadym Tilihuzov</strong><time datetime="2020-10-15" pubdate> - 15. octobra 2020</time></small>
    </div>
    <p>
      <?php echo (${$_SESSION['lang']}['domaca_article'] ); ?>
    </p>
  </section>
    <footer>
      <form class="comment" name="comment" action="comment.php" method="post">
        <p>
          <label class="kom"><?php echo (${$_SESSION['lang']}['domaca_form_meno'] ); ?></label>
          <input placeholder="Zadajte vaše meno" type="text" name="name" />
        </p>
        <p>
          <label class="kom"><?php echo (${$_SESSION['lang']}['domaca_form_kom'] ); ?></label>
          <br />
          <textarea name="text_comment" cols="100" rows="5"></textarea>
        </p>
        <p>
          <input type="hidden" name="page_id" value="150" />
          <input type="submit" value="Submit" />
        </p>
      </form>
    </footer>
  </div>
  <footer class="footer">
        <p>E-mail: vad.tili@gmail.com</p>
        <p>Tel. čislo: +4217****9</p>
        <p class="copyright">Copyright &copy by Vadym Tilihuzov</p>
  </footer>
</body>
</html>