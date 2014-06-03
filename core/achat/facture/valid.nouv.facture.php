<?php
$idcmdfour = $_POST['idcmdfour'];
$idreceptionfour = $_POST['idreceptionfour'];
$idfournisseur = $_POST['idfournisseur'];
$date_fact_four = $_POST['date_fact_four'];
$date_echeance_fact_four = $_POST['date_echeance_fact_four'];
$idarticle1 = $_POST['idarticle1'];
$idarticle2 = $_POST['idarticle2'];
$idarticle3 = $_POST['idarticle3'];
$idarticle4 = $_POST['idarticle4'];
$idarticle5 = $_POST['idarticle5'];
$idarticle6 = $_POST['idarticle6'];
$idarticle7 = $_POST['idarticle7'];
$idarticle8 = $_POST['idarticle8'];
$idarticle9 = $_POST['idarticle9'];
$idarticle10 = $_POST['idarticle10'];
$idarticle11 = $_POST['idarticle11'];
$idarticle12 = $_POST['idarticle12'];
$qte1 = $_POST['qte1'];
$qte2 = $_POST['qte2'];
$qte3 = $_POST['qte3'];
$qte4 = $_POST['qte4'];
$qte5 = $_POST['qte5'];
$qte6 = $_POST['qte6'];
$qte7 = $_POST['qte7'];
$qte8 = $_POST['qte8'];
$qte9 = $_POST['qte9'];
$qte10 = $_POST['qte10'];
$qte11 = $_POST['qte11'];
$qte12 = $_POST['qte12'];
$pvht1 = $_POST['prix_vente_ht1'];
$pvht2 = $_POST['prix_vente_ht2'];
$pvht3 = $_POST['prix_vente_ht3'];
$pvht4 = $_POST['prix_vente_ht4'];
$pvht5 = $_POST['prix_vente_ht5'];
$pvht6 = $_POST['prix_vente_ht6'];
$pvht7 = $_POST['prix_vente_ht7'];
$pvht8 = $_POST['prix_vente_ht8'];
$pvht9 = $_POST['prix_vente_ht9'];
$pvht10 = $_POST['prix_vente_ht10'];
$pvht11 = $_POST['prix_vente_ht11'];
$pvht12 = $_POST['prix_vente_ht12'];
$remise = $_POST['remise'];
$port = $_POST['port'];
$eco_part = $_POST['eco-part'];

mysql_connect("localhost", "root", "");
mysql_select_db("gestion");

$ptht_fact_four = ($pvht1*$qte1)+($pvht2*$qte2)+($pvht3*$qte3)+($pvht4*$qte4)+($pvht5*$qte5)+($pvht6*$qte6)+($pvht7*$qte7)+($pvht8*$qte8)+($pvht9*$qte9)+($pvht10*$qte10)+($pvht11*$qte11)+($pvht12*$qte12)+$port+$eco_part-$remise;
$tva = $ptht_fact_four*20/100;
$ptttc_fact_four = $ptht_fact_four+$tva;





$sql_fact_four = "INSERT INTO `fact_four`(`idfactfour`, `idcmdfour`, `idreceptionfour`, `idfournisseur`, `date_fact_four`, `etat_fact_four`, `date_echeance_fact_four`, `art1`, `qte1`, 
  `art2`, `qte2`, `art3`, `qte3`, `art4`, `qte4`, `art5`, `qte5`, `art6`, `qte6`, `art7`, `qte7`, `art8`, `qte8`, `art9`, `qte9`, `art10`, `qte10`, `art11`, `qte11`, `art12`, `qte12`, 
  `pvht1`, `pvht2`, `pvht3`, `pvht4`, `pvht5`, `pvht6`, `pvht7`, `pvht8`, `pvht9`, `pvht10`, `pvht11`, `pvht12`, `port`, `remise`, `eco-part`, `ptht_fact_four`, `taxe_fact_four`, `ptttc_fact_four`) 
VALUES ('','$idcmdfour','$idreceptionfour','idfournisseur','$date_fact_four','1','$date_echeance_fact_four','$idarticle1',$qte1,'$idarticle2','$qte2','$idarticle3','qte3','$idarticle4',
  '$qte4','$idarticle5','$qte5','$idarticle6','$qte6','$idarticle7','$qte7','$idarticle8','$qte8','$idarticle9','$qte9','$idarticle10','$qte10','$idarticle11','$qte11','$idarticle12',
  '$qte12','$pvht1','$pvht2','$pvht3','$pvht4','$pvht5','$pvht6','$pvht7','$pvht8','$pvht9','$pvht10','$pvht11','$pvht12','$port','$remise','$eco_part','$ptht_fact_four','$tva',
  '$ptttc_fact_four')";
mysql_query($sql_fact_four);
echo $sql_fact_four;

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
        <li><a href="index.facture.php">FACTURE</a></li>
        <li><a href="nouv.facture.php" class="active"><span class="semi-bold">Nouvelle Facture</span></a></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>ACHAT - <span class="semi-bold">Nouvelle Facture</span></h3>
      </div>
      <?php
      if($sql_fact_four == true){
      ?>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-body no-border">
              <div class="row-fluid">
                <div class="alert alert-block alert-success fade in">
                  <button data-dismiss="alert" class="close" type="button"></button>
                  <h4 class="alert-heading"><i class="icon-warning-sign"></i> SUCCES!</h4>
                  <p> La Facture en date du  <b><?php echo $date_fact_four; ?></b> &agrave; &eacute;t&eacute; cr&eacute;er avec succ&egrave;s. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <?php 
      if($sql_fact_four == false){
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