<!DOCTYPE html>
<html lang="fr" style="width: 100%;">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Connexion | Admin</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="teal lighten-3" style="background: url('images/HANNECARD 002.jpg'); background-size:cover; ">
  <!-- Start Page Loading -->
  
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->
  <div id="login-page" class="row" style="width: 40%;">
    <div class="col s12 z-depth-4 card-panel" style="background-color:rgba(255,255,255,0.9);">
      <form class="login-form" style="width: 70%; margin: 0 auto;"  action="" method="POST">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="images/Hannecard.gif" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">Veuillez vous connecter</p>
          </div>
        </div>
        <div class="row ">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix" style="color:#80cbc4 !important;"></i>
            <input id="username" class="validate" type="email"  name="username" require>
            <label for="email" data-error="Erreur" data-success="Bon">Email</label>
          </div>
        </div>
        <div class="row ">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix" style="color:#80cbc4 !important;"></i>
            <input id="password" class="validate" type="password" name="password" require>
            <label for="password" data-error="Erreur" data-success="Bon" >Mot de passe</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Se souvenir de moi</label>
          </div>
        </div>
        <div class="row">
          <button class="btn cyan waves-effect waves-light right" type="submit" name="connexion" >Connexion
                                <i class="mdi-content-send right"></i>
                              </button>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
              <p class="margin left-align medium-small"><a href="user-forgot-password.html">Mot de passe oublié ?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>


  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.js"></script>
  <!--prism-->
  <script type="text/javascript" src="js/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="js/plugins.js"></script>

</body>


<!-- Mirrored from demo.geekslabs.com/materialize/v2.1/layout01/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 10:50:03 GMT -->
</html>