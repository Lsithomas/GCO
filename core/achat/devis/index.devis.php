<?php
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
        <li><a href="index.devis.php" class="active">DEVIS</a></li>
      </ul>
      <div class="page-title"> <a href="<?php echo $rootsite; ?>"><i class="icon-custom-left"></i></a>
        <h3>Achat - <span class="semi-bold">DEVIS</span></h3>

      </div>
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>Liste des <span class="semi-bold">Devis Fournisseur</span></h4>
              <a href="nouv.devis.php"><button class="btn btn-primary btn-cons" type="button"><i class="fa fa-plus"></i>&nbsp;Nouveau Devis</button></a>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body ">
              <table class="table table-striped" id="example2" >
                <thead>
                  <tr>
                    <th>ID Devis</th>
                    <th>Date du Devis</th>
                    <th>Fournisseur</th>
                    <th>Prix Total TTC</th>
                    <th>Action</th>
                    <th HIDDEN>Etat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql_devis_four = mysql_query("SELECT * FROM devis_four, fournisseur WHERE devis_four.idfournisseur = fournisseur.idfournisseur");
                    while($donnee_devis_four = mysql_fetch_array($sql_devis_four))
                      {
                  ?>

                  <tr class="odd gradeX">
                    <td>DEVFOUR000<?php echo $donnee_devis_four['iddevisfour']; ?></td>
                    <td><?php echo $donnee_devis_four['date_devis_four']; ?></td>
                    <td><?php echo $donnee_devis_four['raison_social']; ?></td>
                    <td><?php echo $donnee_devis_four['ptttc_devis_four']; ?> €</td>
                    <td>
                      <a href="fiche.devis.php?iddevisfour=<?php echo $donnee_devis_four['iddevisfour']; ?>"><button class="btn btn-primary btn-cons" type="button"><i class="fa fa-eye"></i>&nbsp;Fiche Devis</button></a>
                      <a href="supp.devis.php?iddevisfour=<?php echo $donnee_devis_four['iddevisfour']; ?>"><button class="btn btn-primary btn-cons" type="button"><i class="fa fa-eraser"></i>&nbsp;Supprimer</button>
                    </td>
                    <td HIDDEN>
                      <?php
                        switch($donnee_devis_four['etat_devis_four'])
                        {
                        case 1:
                        echo "<p class='text-info'>Devis édité</p>";
                        break;

                        case 2:
                        echo "<p class='text-success'>Devis Accepté</p>";
                        break;

                        case 3:
                        echo "<p class='text-error'>Devis Refusé</p>";
                        break;

                        case 9:
                        echo "<p class='text-success'>Transféré en Commande</p>";
                        break;
                      }
                      ?>
                    </td>
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
