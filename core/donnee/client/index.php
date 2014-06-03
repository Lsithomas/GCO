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
        <li><a href="#">Donnée</a> </li>
        <li><a href="index.php" class="active">Client</a></li>
      </ul>
      <div class="page-title"> <a href="<?php echo $rootsite; ?>"><i class="icon-custom-left"></i></a>
        <h3>Donnée - <span class="semi-bold">Client</span></h3>

      </div>
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>Liste des <span class="semi-bold">Clients</span>  <a href="nouv.client.php"><button class="btn btn-primary btn-xs btn-mini" type="button">Nouveau Client</button></a></h4>
              
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body ">
              <table class="table table-striped" id="example2" >
                <thead>
                  <tr>
                    <th>ID client</th>
                    <th>Identité</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                    <th>Adresse Mail</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql_client = mysql_query("SELECT * FROM client");
                    while($donnee_client = mysql_fetch_array($sql_client))
                      {
                  ?>
                  <tr class="odd gradeX">
                    <td>
                      <?php
                        if($donnee_client['nom'] == ""){echo "<i class=fa fa-exclamation></i>";}
                        if($donnee_client['prenom'] == ""){echo "<i class=fa fa-exclamation></i>";}
                        if($donnee_client['adresse1'] == ""){echo "<i class=fa fa-exclamation></i>";}
                        if($donnee_client['cp'] == ""){echo "<i class=fa fa-exclamation></i>";}
                        if($donnee_client['ville'] == ""){echo "<i class=fa fa-exclamation></i>";}
                        if($donnee_client['tel'] == ""){echo "<i class=fa fa-exclamation></i>";}
                        if($donnee_client['mail'] == ""){echo "<i class=fa fa-exclamation></i>";}
                      ?>
                      CLT000<?php echo $donnee_client['idclient']; ?></td>
                    <td>
                      <?php
                        if($donnee_client['civilite'] == 1){echo "M.";}
                        if($donnee_client['civilite'] == 2){echo "Mme.";}
                        if($donnee_client['civilite'] == 3){echo "Mlle.";}
                        if($donnee_client['civilite'] == 4){echo "Entreprise";}
                        if($donnee_client['civilite'] == 5){echo "SARL.";}
                        if($donnee_client['civilite'] == 6){echo "SA.";}
                        if($donnee_client['civilite'] == 7){echo "EURL.";}
                        if($donnee_client['civilite'] == 8){echo "SAS.";}
                      ?>
                      <?php echo $donnee_client['nom']; ?> <?php echo $donnee_client['prenom']; ?><br><br>
                      <i>Raison Social:<br>
                        <?php
                          if($donnee_client['raison_social'] == ""){echo "<b>Particulier</b>";}else{echo "<b>".$donnee_client['raison_social']."</b>";}
                        ?>
                    </td>
                    <td>
                      <?php echo $donnee_client['adresse1']; ?><br>
                      <?php echo $donnee_client['adresse2']; ?><br>
                      <?php echo $donnee_client['cp']; ?> <?php echo $donnee_client['ville']; ?>
                    </td>
                    <td class="center">
                      Tel: <?php echo $donnee_client['tel']; ?><br>
                      Fax: <?php echo $donnee_client['fax']; ?><br>
                      Port: <?php echo $donnee_client['port']; ?>
                    </td>
                    <td class="center"><?php echo $donnee_client['mail']; ?></td>
                    <td class="center">
                      <a href="modif.client.php?idclient=<?php echo $donnee_client['idclient']; ?>"><button class="btn btn-primary btn-cons" type="button"><i class="fa fa-paste"></i>&nbsp;Editer</button></a>
                      <a href="fiche.client.php?idclient=<?php echo $donnee_client['idclient']; ?>"><button class="btn btn-primary btn-cons" type="button"><i class="fa fa-eye"></i>&nbsp;Fiche Client</button></a>
                      <a href="supp.client.php?idclient=<?php echo $donnee_client['idclient']; ?>"><button class="btn btn-primary btn-cons" type="button"><i class="fa fa-eraser"></i>&nbsp;Supprimer</button>
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
