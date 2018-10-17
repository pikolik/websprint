<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title></title>
    <meta charset='utf-8'>
    <meta name='description' content=''>
    <meta name='keywords' content=''>
    <meta name='author' content=''>
    <meta name='robots' content='all'>
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='/favicon.png' rel='shortcut icon' type='image/png'>
   <link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <link href="style.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
<script src="bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
<body id="LoginForm">
<div class="container">
<h1>&nbsp;</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h1>Pikolík</h1>
   <p>Hotelové služby</p>
   </div>
    <form id="Login" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method="post">

        <div class="form-group">


            <input type="text" class="form-control" id="inputUser" placeholder="&nbsp;Uživatelské jméno" name="username">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" placeholder="&nbsp;Heslo" name="password">

        </div>
        <button type="submit" class="btn btn-primary" name="login">Přihlásit</button>

    </form>
     <?php  
   	
/*   
define('DB_USERNAME', 'pikolikwzcz1082');
define('DB_PASSWORD', 'Japejape159');
define('DB_NAME', 'pikolikwzcz1082');
define('DB_SERVER', 'sql2.webzdarma.cz');

/* Připojení k MySQL database */

//$mysqli = new mysqli("sql2.webzdarma.cz","pikolikwzcz1082" , "Japejape159", "pikolikwzcz1082");

if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == '000' && 
                  $_POST['password'] == 'admin') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = '000';
                                                    
                  echo  '<p>Super, jste přihlášeni!</p>'; ?>
                  <meta http-equiv="refresh" content="2;url=http://pikolik.wz.cz/uvod.html">
                  <?php
               }else {
                  echo '<p>Špatné jméno nebo heslo</p>';
               }
            }
?>
    </div>
</div></div></div>



</body>
</html>