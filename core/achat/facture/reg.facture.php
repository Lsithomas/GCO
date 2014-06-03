<?php

mysql_connect("localhost", "root", "");
mysql_select_db("gestion");
$idfactfour = $_GET['idfactfour'];

$sql_fact_four = mysql_query("SELECT * FROM fact_four WHERE idfactfour =".$idfactfour);
$donnee_fact_four = mysql_fetch_array($sql_fact_four);
$etat_fact_four = $donnee_fact_four['etat_fact_four'];

//verification
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
        <li><a href="nouv.facture.php" class="active"><span class="semi-bold">Réglement facture</span></a></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>ACHAT - <span class="semi-bold">Réglement Facture</span></h3>
      </div>
        <div class="row">
            <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  <h4>Facture - <span class="semi-bold">Réglement</span></h4>
                  <div class="tools"> <a class="collapse" href="javascript:;"></a> <a class="config" data-toggle="modal" href="#grid-config"></a> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
                </div>
                <div class="grid-body no-border">
                  <form action="valid.reg.facture.php" id="form_traditional_validation" novalidate="novalidate">
                    <div class="form-group">
                      <label class="form-label">Numéro de la Facture</label>
                      <div class="input-with-icon  right">                                       
                        <i class=""></i>
                        <input type="text" class="form-control" id="form1CardHolderName" name="idfactfour" value="<?php echo $donnee_fact_four['idfactfour']; ?>">                                 
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-label">Mode de Réglement</label>
                      <span class="help">Séléctionner le mode de reglement</span>
                        <div class="input-with-icon  right">                                       
                          <i class=""></i>
                          <select class="select2" name="mode_reglement">
                            <option value="1">Espèce</option>
                            <option value="2">CB Comptant</option> 
                            <option value="3">CB 3 Fois</option>  
                            <option value="4">Chèque Comptant</option> 
                            <option value="5">Chèque 2 Fois</option> 
                            <option value="6">Chèque 3 Fois</option>
                            <option value="7" disabled>Virement</option>
                            <option value="8" disabled>Prélèvement</option>                         
                        </div>
                    </div>
                    <div class="form-group">
                      <label class="form-label">Montant n°1</label>
                      <div class="input-with-icon  right">                                       
                        <i class=""></i>
                        <input type="text" class="form-control" id="form1CardHolderName" name="montant_reg1">                                 
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-label">Montant n°2</label>
                      <div class="input-with-icon  right">                                       
                        <i class=""></i>
                        <input type="text" class="form-control" id="form1CardHolderName" name="montant_reg2">                                 
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-label">Montant n°3</label>
                      <div class="input-with-icon  right">                                       
                        <i class=""></i>
                        <input type="text" class="form-control" id="form1CardHolderName" name="montant_reg3">                                 
                      </div>
                    </div>
                      <div class="form-actions">  
                        <div class="pull-right">
                          <button class="btn btn-success btn-cons" type="submit">Valider</button>
                          <button class="btn btn-white btn-cons" type="button">Cancel</button>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>    
          </div>
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