    <?php
    // on teste si le visiteur a soumis le formulaire de connexion
    if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
    if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {

    $base = mysql_connect ('localhost', 'root', '');
    mysql_select_db ('gestion', $base);


    // on teste si une entrée de la base contient ce couple login / pass
    $sql = 'SELECT count(*) FROM membre WHERE login="'.mysql_real_escape_string($_POST['login']).'" AND pass_md5="'.mysql_real_escape_string(md5($_POST['pass'])).'"';
    $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
    $data = mysql_fetch_array($req);

    mysql_free_result($req);
    mysql_close();

    // si on obtient une réponse, alors l'utilisateur est un membre
    if ($data[0] == 1) {
    session_start();
    $_SESSION['login'] = $_POST['login'];
    header('Location: index.php');
    exit();
    }
    // si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
    elseif ($data[0] == 0) {
    $erreur = "<div class=messenger-message message alert error message-error alert-error messenger-will-hide-after>
                  <button data-dismiss=alert class=messenger-close type=button>×</button>
                  <div class=messenger-message-inner>Erreur: Compte Non Reconnu</div>
                  <div class=messenger-spinner>
                    <span class=messenger-spinner-side messenger-spinner-side-left>
                      <span class=messenger-spinner-fill></span>
                    </span>
                    <span class=messenger-spinner-side messenger-spinner-side-right>
                      <span class=messenger-spinner-fill></span>
                    </span>
                  </div>
                </div>";
    }
    // sinon, alors la, il y a un gros problème :)
    else {
    $erreur = "<div class=messenger-message message alert error message-error alert-error messenger-will-hide-after>
                  <button data-dismiss=alert class=messenger-close type=button>×</button>
                  <div class=messenger-message-inner>Erreur: Plusieurs membres on le même login de connexion.</div>
                  <div class=messenger-spinner>
                    <span class=messenger-spinner-side messenger-spinner-side-left>
                      <span class=messenger-spinner-fill></span>
                    </span>
                    <span class=messenger-spinner-side messenger-spinner-side-right>
                      <span class=messenger-spinner-fill></span>
                    </span>
                  </div>
                </div>";
    }
    }
    else {
    $erreur = '<div class=messenger-message message alert error message-error alert-error messenger-will-hide-after>
                  <button data-dismiss=alert class=messenger-close type=button>×</button>
                  <div class=messenger-message-inner>Erreur: Au mois un des champs est vide.</div>
                  <div class=messenger-spinner>
                    <span class=messenger-spinner-side messenger-spinner-side-left>
                      <span class=messenger-spinner-fill></span>
                    </span>
                    <span class=messenger-spinner-side messenger-spinner-side-right>
                      <span class=messenger-spinner-fill></span>
                    </span>
                  </div>
                </div>';
    }
    }
    ?>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>LSI - GESTION COMMERCIAL</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-notifications/css/messenger.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-notifications/css/messenger-theme-flat.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- END CORE CSS FRAMEWORK -->
<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="error-body no-top">
<div class="container">
  <div class="row login-container column-seperation">  
        <div class="col-md-5 col-md-offset-1">
          <h2>Bienvenue sur GESTCRM</h2>
          <p>Veuillez-vous connecter pour acceder à votre espace de vente<br>
          <br>
        </div>
          <div class="col-md-5 "> <br>
             <form id="login-form" class="login-form" action="login.php" method="post">
             <div class="row">
             <div class="form-group col-md-10">
                    <label class="form-label">Nom d'utilisateur</label>
                    <div class="controls">
                <div class="input-with-icon  right">                                       
                  <i class=""></i>
                  <input type="text" name="login" id="txtusername" class="form-control">                                 
                </div>
                    </div>
                  </div>
                  </div>
              <div class="row">
                  <div class="form-group col-md-10">
                    <label class="form-label">Mot de Passe</label>
                    <span class="help"></span>
                    <div class="controls">
                <div class="input-with-icon  right">                                       
                  <i class=""></i>
                  <input type="password" name="pass" id="txtpassword" class="form-control">                                 
                </div>
                    </div>
                  </div>
                  </div>
                <div class="row">
                    <div class="col-md-10">
                      <button class="btn btn-primary btn-cons pull-right" type="submit" name="connexion" value="Connexion">Connexion</button>
                    </div>
                  </div>
              </form>
            </div>
     
    
  </div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/js/login.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/notifications.js"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<!-- END CORE TEMPLATE JS -->
</body>
</html>