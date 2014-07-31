<!DOCTYPE html>
<html>
<head>
  <title>Facebook Login JavaScript Example</title>
  <meta charset="UTF-8">
  <style>
    .login {
      width:200px;
      height:180px;
      background-color: rgba(2, 100, 200, 0.7);
      border: 1px solid #666;
      text-align: center;
      margin:0 auto;
    }
    body {
      background-color: #E9EAED;
    }
  </style>
</head>
<body>

<?php
session_start();
  include "facebook-php-sdk-v4-4.0-dev/autoload.php";

  use Facebook\FacebookSession;
  use Facebook\FacebookRequest;
  use Facebook\GraphUser;
  use Facebook\FacebookRequestException;
  use Facebook\FacebookRedirectLoginHelper;

  FacebookSession::setDefaultApplication('225836800874912','3789aa92507bc07715212a3e6070765a');

  $redirect_url = "http://evandro.agenciakr.com.br/lab/facebook/index.php";
  $helper = new FacebookRedirectLoginHelper($redirect_url, $appId = "225836800874912", $appSecret = "3789aa92507bc07715212a3e6070765a");
  $loginUrl = $helper->getLoginUrl(array( 'email'));
?>

  <div class="login">
    <form action="login/form.php">

      <input type="text" id="login" placeholder="usuário ou e-mail">
      <input type="password" id="senha" placeholder="senha"> 
      <button type="submit">Entrar</button> <a href="#">esqueci a senha</a>
      <a href="<?=$loginUrl?>">Login no feice</a>
      <div id="status">
      </div>
    
    </form>
  </div>

</body>
</html>
