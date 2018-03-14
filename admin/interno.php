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
</head>
<body>

</body>
</html>
<?php } ?>