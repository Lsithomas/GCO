<?php
$idclient = $_POST['idclient'];
$civilite = $_POST['civilite'];
$iduser = $_POST['iduser'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse1 = $_POST['adresse1'];
$adresse2 = $_POST['adresse2'];
$cp = $_POST['cp'];
$ville = $_POST['ville'];
$tel = $_POST['tel'];
$fax = $_POST['fax'];
$port = $_POST['port'];
$mail = $_POST['mail'];
$raison_social = $_POST['raison_social'];
$num_siret = $_POST['num_siret'];
$num_tva = $_POST['num_tva'];
$code_banque = $_POST['code_banque'];
$code_guichet = $_POST['code_guichet'];
$code_cpt = $_POST['code_cpt'];
$cle_rib = $_POST['cle_rib'];
$mode_paiement_default = $_POST['mode_paiement_default'];
$encour = $_POST['encour'];
$iban = $_POST['iban'];
$bic = $_POST['bic'];
$mail_paypal = $_POST['mail_paypal'];

mysql_connect("localhost", "root", "");
mysql_select_db("gestion");


$sql_client = "UPDATE `client` SET `iduser`='$iduser',`raison_social`='$raison_social',`num_siret`='$num_siret',`num_tva`='$num_tva',`civilite`='$civilite',`nom`='$nom',`prenom`='$prenom',`adresse1`='$adresse1',
`adresse2`='$adresse2',`cp`='$cp',`ville`='$ville',`tel`='$tel',`fax`='$fax',`port`='$port',`mail`='$mail',`mode_paiement_default`='$mode_paiement_default',`code_banque`='$code_banque',`code_guichet`='$code_guichet',
`code_cpt`='$code_cpt',`cle_rib`='$cle_rib',`iban`='$iban',`bic`='$bic',`encour`='$encour',`mail_paypal`='$mail_paypal' WHERE idclient =".$idclient;
mysql_query($sql_client);


include ('../../../inc/header.php');
include ('../../../inc/pagecontainer.php');
?>
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">  
      <ul class="breadcrumb">
        <li>
          <p>VOUS ETES ICI</p>
        </li>
        <li><a href="#">Donn&eacute;e</a> </li>
        <li><a href="index.php">Client</a></li>
        <li><a href="nouv.client.php" class="active"><span class="semi-bold">Modifier Client</span></a></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>CLIENT - <span class="semi-bold">Modifier Client</span></h3>
      </div>
      <?php
      if($sql_client == true){
      ?>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-body no-border">
              <div class="row-fluid">
                <div class="alert alert-block alert-success fade in">
                  <button data-dismiss="alert" class="close" type="button"></button>
                  <h4 class="alert-heading"><i class="icon-warning-sign"></i> SUCCES!</h4>
                  <p> Le client <b><?php echo $nom; ?> <?php echo $prenom; ?></b> &agrave; &eacute;t&eacute; Modifier avec succ&egrave;s. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <?php 
      if($sql_client == false){
      ?>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-body no-border">
              <div class="row-fluid">
                <div class="alert alert-block alert-error fade in">
                  <button data-dismiss="alert" class="close" type="button"></button>
                  <h4 class="alert-heading"><i class="icon-warning-sign"></i> ERROR!</h4>
                  <p> Une Erreur de type <b><?php echo $error; ?></b> s'est produit. V&eacute;rifier votre Code. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
 </div>
<!-- END CONTAINER -->
<!-- END CONTAINER -->

<!-- BEGIN CORE JS FRAMEWORK--> 
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<!-- END CORE JS FRAMEWORK --> 
<!-- BEGIN PAGE LEVEL JS --> 	
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script> 	
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS --> 	

<!-- BEGIN CORE TEMPLATE JS --> 
<script src="<?php echo $rootsite; ?>assets/js/core.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>assets/js/chat.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>assets/js/demo.js" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS --> 
</body>
</html>