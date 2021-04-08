 <?php
  session_start();
  require('vendor/autoload.php');
  define("INCLUDE_PATH_STATIC", "http://localhost/dankicode/Desenvolvimento%20web%20new%202.0/modulo_07/ProjetoSocial_2.0/dankiCode/Views/pages/");
    define("INCLUDE_PATH", "http://localhost/dankicode/Desenvolvimento%20web%20new%202.0/modulo_07/ProjetoSocial_2.0/");
  $app = new dankiCode\Application();
  $app->run();

  ?>