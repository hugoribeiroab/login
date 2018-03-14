<?php
include ("CheckSession.php");
include ("servidor/servidor.php");
header("Content-Type: text/html; charset=UTF-8", true);
session_start();
$check = new CheckSession();
if ($check->check($_SESSION)){
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Interno</title>
  <link rel="stylesheet" type="text/css" href="../css/interno.css">
</head>
<body>
	<h1>Essa é sua área Administrativa, você está logado.</h1>
	<h3>Edite aqui.</h3>
	<a href="logoff.php"><button>Sair</button></a>
</body>
</html>
<?php } ?>
