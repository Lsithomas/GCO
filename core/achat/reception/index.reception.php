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
        <li><a href="index.reception.php" class="active">RECEPTION</a></li>
      </ul>
      <div class="page-title"> <a href="<?php echo $rootsite; ?>"><i class="icon-custom-left"></i></a>
        <h3>Achat - <span class="semi-bold">RECEPTION</span></h3>

      </div>
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>Liste des <span class="semi-bold">Reception Fournisseur</span></h4>
              <a href="nouv.reception.php"><button class="btn btn-primary btn-cons" type="button"><i class="fa fa-plus"></i>&nbsp;Nouvelle Reception</button></a>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body ">
              <table class="table table-striped" id="example2" >
                <thead>
                  <tr>
                    <th>ID Commande</th>
                    <th>Date de reception</th>
                    <th>Fournisseur</th>
                    <th>Action</th>
                    <th></th>
                    <th HIDDEN>Etat</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql_reception_four = mysql_query("SELECT * FROM reception_four, fournisseur WHERE reception_four.idfournisseur = fournisseur.idfournisseur");
                    while($donnee_reception_four = mysql_fetch_array($sql_reception_four))
                      {
                  ?>

                  <tr class="odd gradeX">
                    <td>RECFOUR000<?php echo $donnee_reception_four['idreceptionfour']; ?></td>
                    <td><?php echo $donnee_reception_four['date_reception_four']; ?></td>
                    <td><?php echo $donnee_reception_four['raison_social']; ?></td>
                    <td>
                      <a href="fiche.reception.php?idreceptionfour=<?php echo $donnee_reception_four['idreceptionfour']; ?>"><button class="btn btn-primary btn-cons" type="button"><i class="fa fa-eye"></i>&nbsp;Fiche Reception</button></a>
                      <a href="supp.reception.php?idreceptionfour=<?php echo $donnee_reception_four['idreceptionfour']; ?>"><button class="btn btn-primary btn-cons" type="button"><i class="fa fa-eraser"></i>&nbsp;Supprimer</button>
                    </td>
                    <td></td>
                    <td HIDDEN>
                      <?php
                        switch($donnee_reception_four['etat_reception_four'])
                        {
                        case 1:
                        echo "<p class='text-info'>Commande en cour de reception</p>";
                        break;

                        case 2:
                        echo "<p class='text-success'>Commande récéptionné</p>";
                        break;

                        case 3:
                        echo "<p class='text-success'>Transférer en Facture</p>";
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
