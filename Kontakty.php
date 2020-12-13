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
                  echo "/Kontakty.php?lang=en";
                } else if ($_SESSION['lang'] == "en") {
                  echo "/Kontakty.php?lang=sk";
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
                  echo "/Kontakty.php?lang=en";
                } else if ($_SESSION['lang'] == "en") {
                  echo "/Kontakty.php?lang=sk";
                } ?> ">
        <?php 
          if($_SESSION['lang'] == "en") {
            echo "Slovak version";
          } else {
            echo "English version";
          }
        ?></a></div>
  </div>

     <div class="main">
        <section>
          <div id="templatemo_main">
            <h1>
              <?php echo (${$_SESSION['lang']}['h1_kontakty'] ); ?>
              </h1>
              <h4>
                <?php echo (${$_SESSION['lang']}['h4_kontakty'] ); ?>
                </h4>
              <p>
                <?php echo (${$_SESSION['lang']}['p_kontakty'] ); ?>
                </p>
            <div class="half left">
                <div id="contact_form">
                  <form method="post" name="contact" action="#">        
                    <label for="author"><?php echo (${$_SESSION['lang']}['kontakty_form_meno'] ); ?></label>
                    <input type="text" id="author" name="author" class="required input_field" />
                    <div class="cleaner h10"></div>
                    <label for="email"><?php echo (${$_SESSION['lang']}['kontakty_form_email'] ); ?></label> 
                    <input type="text" id="email" name="email" class="validate-email required input_field" />
                    <div class="cleaner h10"></div>              
                     <label for="subject">Subject:</label>
                      <input type="text" name="subject" id="subject" class="input_field" />
                      <div class="cleaner h10"></div> 
                       <label for="text"><?php echo (${$_SESSION['lang']}['kontakty_form_sms'] ); ?></label>
                     <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                   <div class="cleaner h10"></div>          
                <input type="submit" value="Send" id="submit" name="submit" class="submit_btn left" />
              <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn right" />
           </form>
        </div>   
      </div>       
          <div class="half right">
                <h4>Facebook</h4>
                  <h5>Vadym Tilihuzov</h5>       
         <strong><?php echo (${$_SESSION['lang']}['kontakty_tel'] ); ?>Tel.čislo:</strong> +421******* <br />
        <strong>Email:</strong> <a href="mailto:vad.tili@gmail.com">vad.tili@gmail.com.com</a>  <br />
      <div class="cleaner h40"></div>
    </div>  
    <div class="clear h40"></div>
    
   </div>
   </section>
   
  </div>
  <?php include('includes/footer.php') ?>
</body>
</html>