<?php
  include ('../../inc/header.php');
  include ('../../inc/pagecontainer.php');
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
        <li><a href="index.php" class="active">Accueil</a></li>
      </ul>
      <div class="page-title"> <a href="<?php echo $rootsite; ?>"><i class="icon-custom-left"></i></a>
        <h3>Achat - <span class="semi-bold">Bienvenue</span></h3>

      </div>
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>Liste des <span class="semi-bold">Commande en cours</span></h4>
              
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body ">
              <table class="table table-striped" id="example2" >
                <thead>
                  <tr>
                    <th>ID Commande</th>
                    <th>Fournisseur</th>
                    <th>Montant TTC</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql_cmd_four = mysql_query("SELECT * FROM cmd_four, fournisseur WHERE cmd_four.idfournisseur = fournisseur.idfournisseur AND etat_cmd_four = 1");
                    while($donnee_cmd_four = mysql_fetch_array($sql_cmd_four))
                      {
                  ?>
                  
                  <tr class="odd gradeX">
                    <td><a href="core/achat/modif.cmd_four.php?idcmdfour=<?php echo $donnee_cmd_four['idcmdfour']; ?>">CMDFOUR000<?php echo $donnee_cmd_four['idcmdfour']; ?></a></td>
                    <td><?php echo $donnee_cmd_four['raison_social']; ?></td>
                    <td><?php echo $donnee_cmd_four['ptttc_cmd_four']; ?> €</td>
                  </tr>
                
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>Liste des <span class="semi-bold">Facture non Payé</span></h4>
              
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body ">
              <table class="table table-striped" id="example2" >
                <thead>
                  <tr>
                    <th>ID facture</th>
                    <th>Fournisseur</th>
                    <th>Montant TTC</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql_fact_four = mysql_query("SELECT * FROM fact_four, fournisseur WHERE fact_four.idfournisseur = fournisseur.idfournisseur AND etat_fact_four < 2 ");
                    while($donnee_fact_four = mysql_fetch_array($sql_fact_four))
                      {
                  ?>
                  
                  <tr class="odd gradeX">
                    <td><a href="core/achat/modif.fact_four.php?idfactfour=<?php echo $donnee_fact_four['idfactfour']; ?>">FACTFOUR000<?php echo $donnee_fact_four['idfactfour']; ?></a></td>
                    <td><?php echo $donnee_fact_four['raison_social']; ?></td>
                    <td><?php echo $donnee_fact_four['ptttc_fact_four']; ?> €</td>
                  </tr>
                
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
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
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript" ></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-datatable/extra/js/TableTools.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="<?php echo $rootsite; ?>assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="<?php echo $rootsite; ?>assets/plugins/datatables-responsive/js/lodash.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="<?php echo $rootsite; ?>assets/js/datatables.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<script src="<?php echo $rootsite; ?>assets/js/core.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/js/chat.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
<!-- END JAVASCRIPTS -->
</body>
</html>
