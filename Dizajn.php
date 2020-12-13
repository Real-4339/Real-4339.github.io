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
    <div class="maim"><img src="Gif/Maimbot.png" /></div>

    <span class="clude">
  <div class="version"><a href="<?php 
                 if($_SESSION['lang'] == "sk") {
                  echo "/Dizajn.php?lang=en";
                } else if ($_SESSION['lang'] == "en") {
                  echo "/Dizajn.php?lang=sk";
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
                  echo "/Dizajn.php?lang=en";
                } else if ($_SESSION['lang'] == "en") {
                  echo "/Dizajn.php?lang=sk";
                } ?> ">
        <?php 
          if($_SESSION['lang'] == "en") {
            echo "Slovak version";
          } else {
            echo "English version";
          }
        ?></a></div>
  </div>

     <div class="article">
      <h1> <?php echo (${$_SESSION['lang']}['h1_dizajn'] ); ?></h1>
      <br /> 
      <hr />
      <p>
      <?php echo (${$_SESSION['lang']}['dizajn_article_1'] ); ?>
      </p>
      <br>
      <img class = "diz_img_1" src="Gif/Originals/12p.jpg" alt="image description" title="image tooltip"/>
      <br />
      <br />
      <img class = "diz_img" src="Gif/Originals/11p.jpg" alt="image description" title="image tooltip"/>
      <br />
      <br />
      <br>
    </div>
    <div class="article">
      <p><?php echo (${$_SESSION['lang']}['dizajn_article_2'] ); ?></p>
      <br>
    </div>
    <div class="article">
      <h1><?php echo (${$_SESSION['lang']}['dizajn_h1_article_1'] ); ?></h1>
      <br />
      <hr />
      <p><?php echo (${$_SESSION['lang']}['dizajn_article_3'] ); ?></p>
         <br />
   <img class = "diz_img" src="Gif/Originals/10p.jpg" alt="image description" title="image tooltip"/>
      <br />
      <br />
      <p><?php echo (${$_SESSION['lang']}['dizajn_article_4'] ); ?></p>
         <br />
     <img class = "diz_img" src="Gif/Originals/9p.jpg" alt="image description" title="image tooltip"/>
         <br />
         <br />
         <p>
           <?php echo (${$_SESSION['lang']}['dizajn_article_5'] ); ?>
         </p>

           <h2>
             <?php echo (${$_SESSION['lang']}['dizajn_h2_article_1'] ); ?>
          </h2>        

         <p>
           <?php echo (${$_SESSION['lang']}['dizajn_article_6'] ); ?>
        </p>
     <br />
    </div>
    <div class="article">
      <h1>
        <?php echo (${$_SESSION['lang']}['dizajn_h1_article_2'] ); ?>
      </h1>
      <br />
      <hr />
      <p>
        <?php echo (${$_SESSION['lang']}['dizajn_article_7'] ); ?>
      </p>
        <br />
   <img class = "diz_img" src="Gif/Originals/8p.jpg" alt="image description" title="image tooltip"/>
      <br />
      <p>
        <?php echo (${$_SESSION['lang']}['dizajn_article_8'] ); ?>
      </p>
            <br />
            <img class = "diz_img" src="Gif/Originals/14.jpg" alt="image description" title="image tooltip"/>
           <br />
           <br />
         <p>
           <?php echo (${$_SESSION['lang']}['dizajn_article_9'] ); ?>
        </p>
            
            <h2>
              <?php echo (${$_SESSION['lang']}['dizajn_h2_article_2'] ); ?>
            </h2>

        <p>
          <?php echo (${$_SESSION['lang']}['dizajn_article_10'] ); ?>
        </p>
          
          <h2>
            <?php echo (${$_SESSION['lang']}['dizajn_h2_article_3'] ); ?>
          </h2>
      <p>
        <?php echo (${$_SESSION['lang']}['dizajn_article_11'] ); ?>
      </p>
     <br />
    </div>
    <div class="article">
      <h1>
        <?php echo (${$_SESSION['lang']}['dizajn_h1_article_3'] ); ?>
      </h1>
      <br />
      <hr />
      <p>
        <?php echo (${$_SESSION['lang']}['dizajn_article_12'] ); ?>
      </p>
     <br />
    </div>
    <div class="article">
      <h1>
        <?php echo (${$_SESSION['lang']}['dizajn_h1_article_4'] ); ?>
      </h1>
      <br />
      <hr />
      <p>
        <?php echo (${$_SESSION['lang']}['dizajn_article_13'] ); ?>
      </p>
            <br />
    <img class = "diz_img_2" src="Gif/Originals/pp.png" alt="image description" title="image tooltip"/>
    <br />
    <br />
    <p>
      <?php echo (${$_SESSION['lang']}['dizajn_article_14'] ); ?>
    </p>
    </div>
    <div class="article">
      <h1>
        <?php echo (${$_SESSION['lang']}['dizajn_h1_article_5'] ); ?>
      </h1>
      <br />
      <hr />
      <p>
        <?php echo (${$_SESSION['lang']}['dizajn_article_15'] ); ?>
      </p>
     <br />
    <img class = "diz_img" src="Gif/Originals/2p.jpg" alt="image description" title="image tooltip"/>
    <br />
    <br />
    <p>
      <?php echo (${$_SESSION['lang']}['dizajn_article_16'] ); ?>
    </p>
    </div>
    <div class="article">
      <h1>
        <?php echo (${$_SESSION['lang']}['dizajn_h1_article_6'] ); ?>
      </h1>
      <br />
      <hr />
      <p>
        <?php echo (${$_SESSION['lang']}['dizajn_article_17'] ); ?>
      </p>
      <br />
    </div>
  <?php include('includes/footer.php') ?>
</body>
</html>