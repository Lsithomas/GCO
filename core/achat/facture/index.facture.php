<?php
  include ('../../../inc/header.php');
  include ('../../../inc/pagecontainer.php');
  $date = date("d-m-Y");
  $date_liv_poss = date('d-m-Y', strtotime("+2 days"));
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
        <li><a href="index.facture.php" class="active">FACTURE</a></li>
      </ul>
      <div class="page-title"> <a href="<?php echo $rootsite; ?>"><i class="icon-custom-left"></i></a>
        <h3>Achat - <span class="semi-bold">FACTURE</span></h3>

      </div>
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>Liste des <span class="semi-bold">Facture Fournisseur</span></h4>
              <a href="nouv.facture.php"><button class="btn btn-primary btn-cons" type="button"><i class="fa fa-plus"></i>&nbsp;Nouvelle Facture</button></a>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body ">
              <table class="table table-striped" id="example2" >
                <thead>
                  <tr>
                    <th>ID Facture</th>
                    <th>Date de la facture</th>
                    <th>Fournisseur</th>
                    <th>Prix Total TTC</th>
                    <th>Action</th>
                    <th HIDDEN>Etat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql_fact_four = mysql_query("SELECT * FROM fact_four, fournisseur WHERE fact_four.idfournisseur = fournisseur.idfournisseur");
                    while($donnee_fact_four = mysql_fetch_array($sql_fact_four))
                      {
                  ?>

                  <tr class="odd gradeX">
                    <td>FACTFOUR000<?php echo $donnee_fact_four['idfactfour']; ?></td>
                    <td><?php echo $donnee_fact_four['date_fact_four']; ?></td>
                    <td><?php echo $donnee_fact_four['raison_social']; ?></td>
                    <td><?php echo $donnee_fact_four['ptttc_fact_four']; ?> €</td>
                    <td>
                      <a href="fiche.facture.php?idfactfour=<?php echo $donnee_fact_four['idfactfour']; ?>"><button class="btn btn-primary btn-cons" type="button"><i class="fa fa-eye"></i>&nbsp;Fiche Facture</button></a>
                      <a href="supp.facture.php?idfactfour=<?php echo $donnee_fact_four['idfactfour']; ?>"><button class="btn btn-primary btn-cons" type="button"><i class="fa fa-eraser"></i>&nbsp;Supprimer</button></a>
                      <a href="reg.facture.php?idfactfour=<?php echo $donnee_fact_four['idfactfour']; ?>"><button class="btn btn-danger btn-cons" type="button"><i class="fa fa-credit-card"></i>&nbsp;Reglement</button></a>

                    </td>
                    <td HIDDEN>
                      <?php
                        switch($donnee_fact_four['etat_fact_four'])
                        {
                        case 1:
                        echo "<p class='text-info'>Facture Edité</p>";
                        break;

                        case 2:
                        echo "<p class='text-warning'>Facture en attente de paiement</p>";
                        break;

                        case 3:
                        echo "<p class='text-warning'>Facture partiellement Payé</p>";
                        break;

                        case 4:
                        echo "<p class='text-succes'>Facture payé</p>";
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
