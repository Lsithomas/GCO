<?php 
include ('../../../inc/header.php');
include ('../../../inc/pagecontainer.php');
$idclient = $_GET['idclient'];
$sql_client = mysql_query("SELECT * FROM client WHERE idclient =".$idclient);
$donnee_client = mysql_fetch_array($sql_client);
?> 
<script type="text/javascript">
$("#date").mask("99/99/9999");
</script>
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
        <li><a href="#">Donnée</a> </li>
        <li><a href="index.php">Client</a></li>
        <li><a href="nouv.client.php" class="active"><span class="semi-bold">Nouveau Client</span></a></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>CLIENT - <span class="semi-bold">Modifier Client</span></h3>
      </div>    

    </div>
  </div>
</div>
<!-- END PAGE -->
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-inputmask/jquery.inputmask.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="<?php echo $rootsite; ?>assets/js/form_validations.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<script src="<?php echo $rootsite; ?>assets/js/core.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
<!-- END JAVASCRIPTS -->
</body>
</html>