<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <h1>Agradecemos o contato!</h1>
    <?php
    if (isset($_SESSION ['mensagem']) &&
        isset($_SESSION ['viagens'])) {
          include "../modelo/viagens.class.php";
          $viagens = new Viagens();
          $viagens = unserialize ($_SESSION ['viagens']);
          echo '<br/>'.$_SESSION ['mensagem'].
               '<br/><br/>Dados:<br/>'.$viagens;
        }
     ?>
  </body>

</html>
