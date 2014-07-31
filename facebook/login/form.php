Login pelo Form <br>
<pre>
<?
  session_start();

  $login = $_POST['login'];
  $senha = $_POST['senha'];


  if($login) //ta no banco
  {
    $senha_bd = "";
    //testa senha
    $salt = substr($senha_bd, 0, 12);
    if(crypt($senha,$salt) == $senha_bd)
    {
      $_SESSION['user_id']  = $user_id;
    }else{
      $erro = 401;
    }
  }
  else
  {
    //Não encontrou o login, vai tentar pelo email
    if($email) //ta no banco
    {
      $senha_bd = "";
      //testa senha
      $salt = substr($senha_bd, 0, 12);
      if(crypt($senha,$salt) == $senha_bd)
      {
        $_SESSION['user_id']  = $user_id;
      }else{
        $erro = 401;
      }
    }
    else
    {
      $erro = 401;
    }
  }
  if($erro == 401)
  {
    //$session['msg'] = "Login ou senha incorretos!";
    header("Location: /lab/facebook?erro=401");
    exit();
  }
?>