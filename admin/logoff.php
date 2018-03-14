<?php
include ("CheckSession.php");
header("Content-Type: text/html; charset=UTF-8", true);
session_start();

$check = new CheckSession();
$check->check($_SESSION);

session_destroy();
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Logoff</title>
  <link rel="stylesheet" type="text/css" href="../css/logoff.css">
</head>
<body>

  <div id="logoff-box">
    <div id="logoff-box-interno">
      <div id="logoff-box-titulo">Logoff</div>
      <div class="input-div" id="input-saindo">Você saiu do Sistema!</div>
      <div id="input-botoes">
      <a href="../index.php"><button type="submit" name="logoff">OK</button></a>
      </div>
    </div>
  </div>
</body>
</html>
