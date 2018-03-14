<?php
include ("admin/CheckSession.php");
header("Content-Type: text/html; charset=UTF-8", true);
session_start();
$check = new CheckSession();

if($check->isLoged($_SESSION)){
  header("Location: admin/interno.php");
}else{

?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Login</title>

  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

  <div id="login-box">
    <div id="login-box-interno">
      <div id="login-box-titulo"> Curso - Joseph </div>
      <form method="POST" name="form-login" action="validarLogin.php">
      <div class="input-div" id="input-usuario"><input type="text" id="usuario" name="usuario" placeholder="Usuário"></div>
      <div class="input-div" id="input-senha"><input type="password" id="senha" name="senha" placeholder="Senha"></div>
      <div id="input-botoes">
          <?php
          if (isset($_GET["fail"])){
            echo "<label style='color:red;'>Usuário ou Senha incorretos.</label>";
          }else{echo "<label style='color: #aeaeae;'>Feito para Joseph, com ♥</label>";}
          ?> 
          <input type="submit" name="logar" value="Entrar">
      </div>
      </form>
    </div>
  </div>
</body>
</html>
<?php
} 

?>