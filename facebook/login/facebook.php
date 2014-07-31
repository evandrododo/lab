Login pelo FB <br>
<pre>
<?
  session_start();
  include "../facebook-php-sdk-v4-4.0-dev/autoload.php";

  use Facebook\FacebookSession;
  use Facebook\FacebookRequest;
  use Facebook\GraphUser;
  use Facebook\FacebookRequestException;
  use Facebook\FacebookRedirectLoginHelper;

  FacebookSession::setDefaultApplication('225836800874912','3789aa92507bc07715212a3e6070765a');

  $redirect_url = "http://evandro.agenciakr.com.br/lab/facebook/login/facebook.php";
  $helper = new FacebookRedirectLoginHelper($redirect_url);

  try {
    $session = $helper->getSessionFromRedirect();
  } catch(FacebookRequestException $ex) {
    print_r($ex); // When Facebook returns an error
  } catch(\Exception $ex) {
    print_r($ex); // When validation fails or other local issues
  }

  if ($session) {
    $me = (new FacebookRequest(
      $session, 'GET', '/me'
    ))->execute()->getGraphObject(GraphUser::className());
    
    print_r($me);

    $user_id = $me->getId();
    $user_email = $me->getProperty('email');
    $user_nome = $me->getName();

    if($user_id) //ta no banco?
    {
      $email_cadastrado = $email_do_bd;
      if($user_email == $email_cadastrado)
      {
        //Usuário autorizado pelo fb
        $_SESSION['user_id']  = $user_id;
      }
      else
      {
        //O email cadastrado é diferente do email do facebook
        // Adicionar email | Mudar Email | Fazer nada
      }
    }
    else
    {
      //Ainda não existe o cadastro
      //Adiciona usuário
    }
  }
?>