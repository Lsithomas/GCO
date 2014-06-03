<?php
mysql_connect("localhost", "root", "");
mysql_select_db("gestion");

$iddevisfour = $_GET['iddevisfour'];
//Import des élément de devis
$sql_devis_four = mysql_query("SELECT * FROM `devis_four` WHERE iddevisfour =".$iddevisfour);
$donnee_devis_four = mysql_fetch_array($sql_devis_four);

$idcmdfour = $donnee_devis_four['iddevisfour'];
$idfournisseur = $donnee_devis_four['idfournisseur'];
$date_cmd_four = $donnee_devis_four['date_devis_four'];
$art1 = $donnee_devis_four['art1'];
$art2 = $donnee_devis_four['art2'];
$art3 = $donnee_devis_four['art3'];
$art4 = $donnee_devis_four['art4'];
$art5 = $donnee_devis_four['art5'];
$art6 = $donnee_devis_four['art6'];
$art7 = $donnee_devis_four['art7'];
$art8 = $donnee_devis_four['art8'];
$art9 = $donnee_devis_four['art9'];
$art10 = $donnee_devis_four['art10'];
$art11 = $donnee_devis_four['art11'];
$art12 = $donnee_devis_four['art12'];
$qte1 = $donnee_devis_four['qte1'];
$qte2 = $donnee_devis_four['qte2'];
$qte3 = $donnee_devis_four['qte3'];
$qte4 = $donnee_devis_four['qte4'];
$qte5 = $donnee_devis_four['qte5'];
$qte6 = $donnee_devis_four['qte6'];
$qte7 = $donnee_devis_four['qte7'];
$qte8 = $donnee_devis_four['qte8'];
$qte9 = $donnee_devis_four['qte9'];
$qte10 = $donnee_devis_four['qte10'];
$qte11 = $donnee_devis_four['qte11'];
$qte12 = $donnee_devis_four['qte12'];
$pvht1 = $donnee_devis_four['pvht1'];
$pvht1 = $donnee_devis_four['pvht1'];
$pvht2 = $donnee_devis_four['pvht2'];
$pvht3 = $donnee_devis_four['pvht3'];
$pvht4 = $donnee_devis_four['pvht4'];
$pvht5 = $donnee_devis_four['pvht5'];
$pvht6 = $donnee_devis_four['pvht6'];
$pvht7 = $donnee_devis_four['pvht7'];
$pvht8 = $donnee_devis_four['pvht8'];
$pvht9 = $donnee_devis_four['pvht9'];
$pvht10 = $donnee_devis_four['pvht10'];
$pvht11 = $donnee_devis_four['pvht11'];
$pvht12 = $donnee_devis_four['pvht12'];
$port = $donnee_devis_four['port'];
$remise = $donnee_devis_four['remise'];
$eco_part = $donnee_devis_four['eco-part'];
$ptht_cmd_four = $donnee_devis_four['ptht_devis_four'];
$taxe_cmd_four = $donnee_devis_four['taxedevisfour'];
$ptttc_cmd_four = $donnee_devis_four['ptttc_devis_four'];













$sql_cmd_four = "INSERT INTO `cmd_four`(`idcmdfour`, `idfournisseur`, `date_cmd_four`, `etat_cmd_four`, `date_livraison_cmd_four`, `art1`, `qte1`, `art2`, `qte2`, `art3`, `qte3`, `art4`, `qte4`, `art5`, `qte5`, `art6`, `qte6`, `art7`, `qte7`, `art8`, `qte8`, `art9`, `qte9`, `art10`, `qte10`, `art11`, `qte11`, `art12`, `qte12`, `pvht1`, `pvht2`, `pvht3`, `pvht4`, `pvht5`, `pvht6`, `pvht7`, `pvht8`, `pvht9`, `pvht10`, `pvht11`, `pvht12`, `port`, `remise`, `eco-part`, `ptht_cmd_four`, `taxe_cmd_four`, `ptttc_cmd_four`)
VALUES ('','$idfournisseur','$date_cmd_four','1','','$art1','$qte1','$art2','$qte2','$art3','$qte3','$art4','$qte4','$art5','$qte5','$art6','$qte6','$art7','$qte7',
  '$art8','$qte8','$art9','$qte9','$art10','$qte10','$art11','$qte11','$art12','$qte12','$pvht1','$pvht2','$pvht3','$pvht4','$pvht5','$pvht6','$pvht7','$pvht8','$pvht9','$pvht10','$pvht11',
  '$pvht12','$port','$remise','$eco_part','$ptht_cmd_four','$taxe_cmd_four','$ptttc_cmd_four')";
mysql_query($sql_cmd_four);

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
        <li><a href="#">ACHAT</a> </li>
        <li><a href="index.devis.php">DEVIS</a></li>
        <li><a href="nouv.client.php" class="active"><span class="semi-bold">Transfere en Commande</span></a></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>ACHAT - <span class="semi-bold">Transfere en commande</span></h3>
      </div>
      <?php
      if($sql_cmd_four == true){
      ?>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-body no-border">
              <div class="row-fluid">
                <div class="alert alert-block alert-success fade in">
                  <button data-dismiss="alert" class="close" type="button"></button>
                  <h4 class="alert-heading"><i class="icon-warning-sign"></i> SUCCES!</h4>
                  <p> Le Commande Numéro CMDFOUR000<?php echo $iddevisfour; ?> &agrave; &eacute;t&eacute; transf&eacute;rer avec succ&egrave;s. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <?php 
      if($sql_cmd_four == false){
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