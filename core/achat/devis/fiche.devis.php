<?php
include ('../../../inc/header.php');
include ('../../../inc/pagecontainer.php');

$iddevisfour = $_GET['iddevisfour'];

$sql_societe = mysql_query("SELECT * FROM societe WHERE idsociete = 1");
$sql_devis_four = mysql_query("SELECT * FROM fournisseur, devis_four, article WHERE devis_four.idfournisseur = fournisseur.idfournisseur AND iddevisfour=".$iddevisfour);

$donnee_societe = mysql_fetch_array($sql_societe);
$donnee_devis_four = mysql_fetch_array($sql_devis_four);
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
	 <div class="row">
      <div class="col-md-11">
        <div class="grid simple">
          <div class="grid-body no-border invoice-body"> <br>
            <div class="pull-left"> <img src="<?php echo $rootsite; ?>assets/img/invoicelogo.png" data-src="<?php echo $rootsite; ?>assets/img/invoicelogo.png" data-src-retina="<?php echo $rootsite; ?>assets/img/invoicelogo2x.png" width="222" height="31" class="invoice-logo" alt="">
              <address>
              <strong><?php echo $donnee_societe['raison_social']; ?></strong><br>
              <?php echo $donnee_societe['adresse1']; ?><br>
              <?php echo $donnee_societe['cp']; ?> <?php echo $donnee_societe['ville']; ?><br>
              <abbr title="Phone">Téléphone:</abbr> <?php echo $donnee_societe['tel']; ?><br>
              <abbr title="Mail">Mail:</abbr><?php echo $donnee_societe['mail']; ?>
              </address>
            </div>
            <div class="pull-right">
              <h2>DEVIS</h2>
            </div>
            <div class="clearfix"></div>
            <br>
            <br>
            <br>
            <div class="row">
              <div class="col-md-9">
                <h1>
              </div>
              <div class="col-md-3"> <br>
                <div>
                  <div class="pull-left"> DEVIS N° : </div>
                  <div class="pull-right"> DEVFOUR000<?php echo $donnee_devis_four['iddevisfour']; ?> </div>
                  <div class="clearfix"></div>
                </div>
                <div>
                  <div class="pull-left"> DATE DU DEVIS : </div>
                  <div class="pull-right"> <?php echo$donnee_devis_four['date_devis_four']; ?> </div>
                  <div class="clearfix"></div>
                </div>
                <br>
                <div class="well well-small green">
                  <div class="pull-left"> MONTANT TOTAL DU DEVIS: </div>
                  <div class="pull-right"> <?php echo $donnee_devis_four['ptttc_devis_four']; ?> EUR </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <table class="table">

              <thead>
                <tr>
                  <th class="text-left">DESCRIPTION</th>
                  <th style="width:30px">QTE</th>
                  <th style="width:140px" class="text-right">Prix Unitaire HT</th>
                  <th style="width:90px" class="text-right">Total HT</th>
                </tr>
              </thead>
              <tbody>
              	<?php
              	if($donnee_devis_four['art1'] == ""){echo "";}else{
              	?>
                <tr>
                  <td><?php echo $donnee_devis_four['art1']; ?></td>
                  <td><?php echo $donnee_devis_four['qte1']; ?></td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht1']; ?> €</td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht1'] * $donnee_devis_four['qte1']; ?> €</td>
                </tr>
                <?php } ?>
                <?php
              	if($donnee_devis_four['art2'] == ""){echo "";}else{
              	?>
                <tr>
                  <td><?php echo $donnee_devis_four['art2']; ?></td>
                  <td><?php echo $donnee_devis_four['qte2']; ?></td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht2']; ?> €</td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht2'] * $donnee_devis_four['qte2']; ?> €</td>
                </tr>
                <?php } ?>
                <?php
              	if($donnee_devis_four['art3'] == ""){echo "";}else{
              	?>
                <tr>
                  <td><?php echo $donnee_devis_four['art3']; ?></td>
                  <td><?php echo $donnee_devis_four['qte3']; ?></td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht3']; ?> €</td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht3'] * $donnee_devis_four['qte3']; ?> €</td>
                </tr>
                <?php } ?>
                <?php
              	if($donnee_devis_four['art4'] == ""){echo "";}else{
              	?>
                <tr>
                  <td><?php echo $donnee_devis_four['art4']; ?></td>
                  <td><?php echo $donnee_devis_four['qte4']; ?></td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht4']; ?> €</td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht4'] * $donnee_devis_four['qte4']; ?> €</td>
                </tr>
                <?php } ?>
                <?php
              	if($donnee_devis_four['art5'] == ""){echo "";}else{
              	?>
                <tr>
                  <td><?php echo $donnee_devis_four['art5']; ?></td>
                  <td><?php echo $donnee_devis_four['qte5']; ?></td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht5']; ?> €</td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht5'] * $donnee_devis_four['qte5']; ?> €</td>
                </tr>
                <?php } ?>
                <?php
              	if($donnee_devis_four['art6'] == ""){echo "";}else{
              	?>
                <tr>
                  <td><?php echo $donnee_devis_four['art6']; ?></td>
                  <td><?php echo $donnee_devis_four['qte6']; ?></td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht6']; ?> €</td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht6'] * $donnee_devis_four['qte6']; ?> €</td>
                </tr>
                <?php } ?>
                <?php
              	if($donnee_devis_four['art7'] == ""){echo "";}else{
              	?>
                <tr>
                  <td><?php echo $donnee_devis_four['art7']; ?></td>
                  <td><?php echo $donnee_devis_four['qte7']; ?></td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht7']; ?> €</td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht7'] * $donnee_devis_four['qte7']; ?> €</td>
                </tr>
                <?php } ?>
                <?php
              	if($donnee_devis_four['art8'] == ""){echo "";}else{
              	?>
                <tr>
                  <td><?php echo $donnee_devis_four['art8']; ?></td>
                  <td><?php echo $donnee_devis_four['qte8']; ?></td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht8']; ?> €</td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht8'] * $donnee_devis_four['qte1']; ?> €</td>
                </tr>
                <?php } ?>
                <?php
              	if($donnee_devis_four['art9'] == ""){echo "";}else{
              	?>
                <tr>
                  <td><?php echo $donnee_devis_four['art9']; ?></td>
                  <td><?php echo $donnee_devis_four['qte9']; ?></td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht9']; ?> €</td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht9'] * $donnee_devis_four['qte9']; ?> €</td>
                </tr>
                <?php } ?>
                <?php
              	if($donnee_devis_four['art10'] == ""){echo "";}else{
              	?>
                <tr>
                  <td><?php echo $donnee_devis_four['art10']; ?></td>
                  <td><?php echo $donnee_devis_four['qte10']; ?></td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht10']; ?> €</td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht10'] * $donnee_devis_four['qte10']; ?> €</td>
                </tr>
                <?php } ?>
                <?php
              	if($donnee_devis_four['art11'] == ""){echo "";}else{
              	?>
                <tr>
                  <td><?php echo $donnee_devis_four['art11']; ?></td>
                  <td><?php echo $donnee_devis_four['qte11']; ?></td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht11']; ?> €</td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht11'] * $donnee_devis_four['qte11']; ?> €</td>
                </tr>
                <?php } ?>
                <?php
              	if($donnee_devis_four['art12'] == ""){echo "";}else{
              	?>
                <tr>
                  <td><?php echo $donnee_devis_four['art12']; ?></td>
                  <td><?php echo $donnee_devis_four['qte12']; ?></td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht12']; ?> €</td>
                  <td class="text-right"><?php echo $donnee_devis_four['pvht12'] * $donnee_devis_four['qte12']; ?> €</td>
                </tr>
                <?php } ?>
                <tr>
                  <td colspan="2" rowspan="4" ><h4 class="semi-bold"></h4>
                    <p></p>
                    <h5 class="text-right semi-bold"></h5></td>
                  <td class="text-right"><strong>Frais de Port</strong></td>
                  <td class="text-right"><?php echo $donnee_devis_four['port']; ?> €</td>
                </tr>
                <tr>
                  <td class="text-right no-border"><strong>Remise</strong></td>
                  <td class="text-right">
                    <?php 
                      if($donnee_devis_four['remise'] == ""){echo "0.00";}else{echo $donnee_devis_four['remise'];}
                    ?> €
                  </td>
                </tr>
                <tr>
                  <td class="text-right no-border"><strong>Total HT</strong></td>
                  <td class="text-right">
                    <?php 
                      if($donnee_devis_four['ptht_devis_four'] == ""){echo "0.00 €";}else{echo $donnee_devis_four['ptht_devis_four'];}
                    ?> €

                  </td>
                </tr>
                <tr>
                  <td class="text-right no-border"><strong>Total TVA</strong></td>
                  <td class="text-right">
                    <?php 
                      if($donnee_devis_four['taxedevisfour'] == ""){echo "0.00 €";}else{echo $donnee_devis_four['taxedevisfour'];}
                    ?> €
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td class="text-right no-border"><div class="well well-small green"><strong>Total TTC</strong></div></td>
                  <td class="text-right"><strong><?php echo $donnee_devis_four['ptttc_devis_four']; ?> €</strong></td>
                </tr>
              </tbody>
            </table>
            <br>
            <br>
            <br>
            <br>
          </div>
        </div>
      </div>
      <div class="col-md-1">
        <div class="invoice-button-action-set">
          <p>
            <a href="pdf.devis.php?iddevisfour=<?php echo $donnee_devis_four['iddevisfour']; ?>"><button class="btn btn-info" type="button"><i class="fa fa-print"></i></button></a>
          </p>
          <p>
			<button class="btn btn-danger" type="button" data-target="#transfere" data-toggle="modal"><i class="fa fa-exchange"></i></button>
          </p>
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="transfere" class="modal fade" style="display: none;">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                          <br>
                          <i id="icon-resize" class="fa fa-exchange fa fa-6x custom-icon-space"></i>
                          <h4 class="semi-bold" id="myModalLabel">Transfere</h4>
                          <p class="no-margin">Transferer ce DEVIS en COMMANDE ! </p>
                          <br>
                        </div>
                        <div class="modal-body">
                        	<center>
                        	<i id="animate-icon" class="fa fa-spinner fa fa-9x fa-spin"></i><br>
                        	<p><h3>Transfere de Devis <b>N°DEVFOUR000<?php echo $donnee_devis_four['iddevisfour']; ?></b> vers Commande <b>N° CMDFOUR000<?php echo $donnee_devis_four['iddevisfour']; ?></b> en cours...</h3></p>
                        	</center>
                        </div>
                        <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-warning" type="button">Annuler</button>
                          <a href="transfere.devis.php?iddevisfour=<?php echo $donnee_devis_four['iddevisfour']; ?>"> <button class="btn btn-primary" type="button">Transfere</button></a>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
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
<script src="<?php echo $rootsite; ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN CORE TEMPLATE JS -->
<script src="<?php echo $rootsite; ?>assets/js/core.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/js/chat.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
</body>
</html>