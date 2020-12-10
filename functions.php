<?php
  //Starting the session
  session_start();
  //This is the default language. We will use it 2 places, so i am put it 
  //into a varaible.
  $defaultLang = 'sk';

  //Checking, if the $_GET["language"] has any value
  //if the $_GET["language"] is not empty
  if (!empty($_GET["lang"])) { //<!-- see this line. checks 
      //Based on the lowecase $_GET['language'] value, we will decide,
      //what lanuage do we use
      switch (strtolower($_GET["lang"])) {
          case "en":
              //If the string is en or EN
              $_SESSION['lang'] = 'en';
              break;
          case "sk":
              //If the string is tr or SK
              $_SESSION['lang'] = 'sk';
                break;
          default:
              //IN ALL OTHER CASES your default langauge code will set
              //Invalid languages
              $_SESSION['lang'] = $defaultLang;
              break;
      }
  }

  //If there was no language initialized, (empty $_SESSION['lang']) then
  if (empty($_SESSION["lang"])) {
      //Set default lang if there was no language
      $_SESSION["lang"] = $defaultLang;
  }
?>