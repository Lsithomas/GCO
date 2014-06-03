<?php
$designation = $_POST['desc_court'];
$idfamillearticle = $_POST['idfamillearticle'];
$idsousfamillearticle = $_POST['idsousfamillearticle'];
$idfournisseur = $_POST['idfournisseur'];
$ref_fournisseur = $_POST['ref_fournisseur'];
$ref_interne = $_POST['ref_interne'];
$date_debut = $_POST['date_debut'];
$date_fin = $_POST['date_fin'];
$duree_garantie = $_POST['duree_garantie'];
$num_serie = $_POST['num_serie'];
$code_barre = $_POST['code_barre'];
$desc_court = $_POST['desc_court'];
$desc_long = $_POST['desc_long'];
$poids = $_POST['poids'];
$prix_achat_ht = $_POST['prix_achat_ht'];
$prix_vente_ht = $_POST['prix_vente_ht'];
$prix_vente_ttc = $_POST['prix_vente_ttc'];
$stock_minima = $_POST['stock_minima'];
$stock_reel = $_POST['stock_reel'];
$images = $_POST['images'];





mysql_connect("localhost", "root", "");
mysql_select_db("gestion");


$sql_article = "INSERT INTO `article`(`idarticle`, `idfamillearticle`, `idsousfamillearticle`, `idfournisseur`, `ref_fournisseur`, `ref_interne`, `desc_court`, `desc_long`, `date_debut`, `date_fin`, `num_serie`, `poids`, `duree_garantie`, `stock_minima`, `stock_reel`, `code_barre`, `prix_achat_ht`, `prix_vente_ht`, `prix_vente_ttc`, `images`) 
VALUES ('','$idfamillearticle','$idsousfamillearticle','$idfournisseur','$ref_fournisseur','$ref_interne','$desc_court','$desc_long','$date_debut','$date_fin','$num_serie','$poids','$duree_garantie','$stock_minima','$stock_reel','$code_barre','$prix_achat_ht','$prix_vente_ht','$prix_vente_ttc','$images')";
mysql_query($sql_article);
echo $sql_article;


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
        <li><a href="index.php">Article</a></li>
        <li><a href="nouv.client.php" class="active"><span class="semi-bold">Nouvelle Article</span></a></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>ARTICLE - <span class="semi-bold">Nouvelle Article</span></h3>
      </div>
      <?php
      if($sql_article == true){
      ?>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-body no-border">
              <div class="row-fluid">
                <div class="alert alert-block alert-success fade in">
                  <button data-dismiss="alert" class="close" type="button"></button>
                  <h4 class="alert-heading"><i class="icon-warning-sign"></i> SUCCES!</h4>
                  <p> L'article' <b><?php echo $designation; ?></b> &agrave; &eacute;t&eacute; cr&eacute;er avec succ&egrave;s. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <?php 
      if($sql_article == false){
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