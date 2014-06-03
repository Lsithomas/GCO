<?php
mysql_connect("localhost", "root", "");
mysql_select_db("gestion");

$idreceptionfour = $_GET['idreceptionfour'];
//Import des élément de devis
$date = date("d-m-Y");
$date_mois30 = date("d-m-Y",strtotime("+30 DAYS"));
$sql_reception_four = mysql_query("SELECT * FROM `reception_four` WHERE idreceptionfour =".$idreceptionfour);
$donnee_reception_four = mysql_fetch_array($sql_reception_four);
$sql_cmd_four = mysql_query("SELECT * FROM cmd_four WHERE idcmdfour =".$donnee_reception_four['idcmdfour']);
$donnee_cmd_four = mysql_fetch_array($sql_cmd_four);


$idcmdfour = $donnee_reception_four['idcmdfour'];
$idfournisseur = $donnee_reception_four['idfournisseur'];
$date_reception_four = date("d-m-Y");
$art1 = $donnee_reception_four['art1'];
$art2 = $donnee_reception_four['art2'];
$art3 = $donnee_reception_four['art3'];
$art4 = $donnee_reception_four['art4'];
$art5 = $donnee_reception_four['art5'];
$art6 = $donnee_reception_four['art6'];
$art7 = $donnee_reception_four['art7'];
$art8 = $donnee_reception_four['art8'];
$art9 = $donnee_reception_four['art9'];
$art10 = $donnee_reception_four['art10'];
$art11 = $donnee_reception_four['art11'];
$art12 = $donnee_reception_four['art12'];
$qte1 = $donnee_reception_four['qte1'];
$qte2 = $donnee_reception_four['qte2'];
$qte3 = $donnee_reception_four['qte3'];
$qte4 = $donnee_reception_four['qte4'];
$qte5 = $donnee_reception_four['qte5'];
$qte6 = $donnee_reception_four['qte6'];
$qte7 = $donnee_reception_four['qte7'];
$qte8 = $donnee_reception_four['qte8'];
$qte9 = $donnee_reception_four['qte9'];
$qte10 = $donnee_reception_four['qte10'];
$qte11 = $donnee_reception_four['qte11'];
$qte12 = $donnee_reception_four['qte12'];
$pvht1 = $donnee_cmd_four['pvht1'];
$pvht2 = $donnee_cmd_four['pvht2'];
$pvht3 = $donnee_cmd_four['pvht3'];
$pvht4 = $donnee_cmd_four['pvht4'];
$pvht5 = $donnee_cmd_four['pvht5'];
$pvht6 = $donnee_cmd_four['pvht6'];
$pvht7 = $donnee_cmd_four['pvht7'];
$pvht8 = $donnee_cmd_four['pvht8'];
$pvht9 = $donnee_cmd_four['pvht9'];
$pvht10 = $donnee_cmd_four['pvht10'];
$pvht11 = $donnee_cmd_four['pvht11'];
$pvht12 = $donnee_cmd_four['pvht12'];
$port = $donnee_cmd_four['port'];
$remise = $donnee_cmd_four['remise'];
$eco_part = $donnee_cmd_four['eco-part'];
$ptht_cmd_four = $donnee_cmd_four['ptht_cmd_four'];
$taxe_cmd_four = $donnee_cmd_four['taxe_cmd_four'];
$ptttc_cmd_four = $donnee_cmd_four['ptttc_cmd_four'];

















$sql_facture_four = "INSERT INTO `fact_four`(`idfactfour`, `idcmdfour`, `idreceptionfour`, `idfournisseur`, `date_facture_four`, `etat_fact_four`, `date_echeance_fact_four`, `art1`, `qte1`, `art2`, `qte2`, `art3`, `qte3`, `art4`, `qte4`, `art5`, `qte5`, `art6`, `qte6`, `art7`, `qte7`, `art8`, `qte8`, `art9`, `qte9`, `art10`, `qte10`, `art11`, `qte11`, `art12`, `qte12`, `pvht1`, `pvht2`, `pvht3`, `pvht4`, `pvht5`, `pvht6`, `pvht7`, `pvht8`, `pvht9`, `pvht10`, `pvht11`, `pvht12`, `port`, `remise`, `eco-part`, `ptht_fact_four`, `taxe_fact_four`, `ptttc_fact_four`) 
VALUES ('','$idcmdfour','$idreceptionfour','$idfournisseur','$date','1','$date_mois30','$art1','$qte1','$art2','$qte2','$art3','$qte3','$art4','$qte4','$art5','$qte5',
  '$art6','$qte6','$art7','$qte7','art8','$qte8','$art9','$qte9','$art10','$qte10','$art11','$qte11','$art12','$qte12','$pvht1','$pvht2','$pvht3','$pvht4','$pvht5','$pvht6','$pvht7','$pvht8',
  '$pvht9','$pvht10','$pvht11','pvht12','$port','$remise','$eco_part','$ptht_cmd_four','$taxe_cmd_four','$ptttc_cmd_four')";
$sql_article_stock1 = "UPDATE `article` SET `stock_reel`='-$qte1' WHERE desc_court ='$art1'";
$sql_article_stock2 = "UPDATE `article` SET `stock_reel`='-$qte2' WHERE desc_court ='$art2'";
$sql_article_stock3 = "UPDATE `article` SET `stock_reel`='-$qte3' WHERE desc_court ='$art3'";
$sql_article_stock4 = "UPDATE `article` SET `stock_reel`='-$qte4' WHERE desc_court ='$art4'";
$sql_article_stock5 = "UPDATE `article` SET `stock_reel`='-$qte5' WHERE desc_court ='$art5'";
$sql_article_stock6 = "UPDATE `article` SET `stock_reel`='-$qte6' WHERE desc_court ='$art6'";
$sql_article_stock7 = "UPDATE `article` SET `stock_reel`='-$qte7' WHERE desc_court ='$art7'";
$sql_article_stock8 = "UPDATE `article` SET `stock_reel`='-$qte8' WHERE desc_court ='$art8'";
$sql_article_stock9 = "UPDATE `article` SET `stock_reel`='-$qte9' WHERE desc_court ='$art9'";
$sql_article_stock10 = "UPDATE `article` SET `stock_reel`='-$qte10' WHERE desc_court ='$art10'";
$sql_article_stock11 = "UPDATE `article` SET `stock_reel`='-$qte11' WHERE desc_court ='$art11'";
$sql_article_stock12 = "UPDATE `article` SET `stock_reel`='-$qte12' WHERE desc_court ='$art12'";
mysql_query($sql_facture_four);
mysql_query($sql_article_stock1);
mysql_query($sql_article_stock2);
mysql_query($sql_article_stock3);
mysql_query($sql_article_stock4);
mysql_query($sql_article_stock5);
mysql_query($sql_article_stock6);
mysql_query($sql_article_stock7);
mysql_query($sql_article_stock8);
mysql_query($sql_article_stock9);
mysql_query($sql_article_stock10);
mysql_query($sql_article_stock11);
mysql_query($sql_article_stock12);



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
        <li><a href="index.devis.php">FACTURE</a></li>
        <li><a href="nouv.client.php" class="active"><span class="semi-bold">Transfere en Facture</span></a></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>ACHAT - <span class="semi-bold">Transfere en Facture</span></h3>
      </div>
      <?php
      if($sql_facture_four == true){
      ?>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-body no-border">
              <div class="row-fluid">
                <div class="alert alert-block alert-success fade in">
                  <button data-dismiss="alert" class="close" type="button"></button>
                  <h4 class="alert-heading"><i class="icon-warning-sign"></i> SUCCES!</h4>
                  <p> La Facture Numéro FACFOUR000<?php echo $idreceptionfour; ?> &agrave; &eacute;t&eacute; transf&eacute;rer avec succ&egrave;s. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <?php 
      if($sql_facture_four == false){
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