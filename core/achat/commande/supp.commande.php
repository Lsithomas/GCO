<?php


mysql_connect("localhost", "root", "");
mysql_select_db("gestion");

$idcmdfour = $_GET['idcmdfour'];

$sql_cmd_four = "DELETE FROM cmd_four WHERE idcmdfour =".$idcmdfour;
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
        <li><a href="index.devis.php">COMMANDE</a></li>
        <li><a href="#" class="active"><span class="semi-bold">Supprimer Commande</span></a></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>ACHAT - <span class="semi-bold">Supprimer Commande</span></h3>
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
                  <p> La Commande  N°CMDFOUR000<?php echo $idcmdfour; ?> &agrave; &eacute;t&eacute; supprim&eacute; avec succ&egrave;s. </p>
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