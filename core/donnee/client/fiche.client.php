<?php 
include ('../../../inc/header.php');
include ('../../../inc/pagecontainer.php');
$idclient = $_GET['idclient'];
$sql_client = mysql_query("SELECT * FROM client WHERE idclient=$idclient");
$donnee_client = mysql_fetch_array($sql_client);
$date = date("d-m-Y");
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
        <li><p>Vous êtes Ici</p></li>
        <li><a href="index.php">Client</a></li>
        <li><a href="#" class="active">Fiche Client - <?php echo $donnee_client['nom']; ?> <?php echo $donnee_client['prenom']; ?></a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Client - <span class="semi-bold">CLI000<?php echo $donnee_client['idclient']; ?> - <?php echo $donnee_client['nom']; ?> <?php echo $donnee_client['prenom']; ?></span></h3>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Client - <span class="semi-bold">Général</span></h4>
              <div class="tools"> <a class="collapse" href="javascript:;"></a> <a class="config" data-toggle="modal" href="#grid-config"></a> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row-fluid">
                  <table width="100%">
                    <tr>
                      <td width="50%">N° Client:</td>
                      <td width="50%">CLI000<?php echo $donnee_client['idclient']; ?></td>
                    </tr>
                    <tr>
                      <td width="50%">Raison social:</td>
                      <td width="50%"><?php echo $donnee_client['raison_social']; ?></td>
                    </tr>
                    <tr>
                      <td width="50%">Identité:</td>
                      <td width="50%"><?php echo $donnee_client['nom']; ?> <?php echo $donnee_client['prenom']; ?></td>
                    </tr>
                    <tr>
                      <td>Adresse:</td>
                      <td>
                        <?php echo $donnee_client['adresse1']; ?><br>
                        <?php echo $donnee_client['adresse2']; ?><br>
                        <?php echo $donnee_client['cp']; ?> <?php echo $donnee_client['ville']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Telephone:</td>
                      <td><?php echo $donnee_client['tel']; ?></td>
                    </tr>
                    <tr>
                      <td>Fax:</td>
                      <td><?php echo $donnee_client['fax']; ?></td>
                    </tr>
                    <tr>
                      <td>Portable:</td>
                      <td><?php echo $donnee_client['port']; ?></td>
                    </tr>
                    <tr>
                      <td>E-Mail:</td>
                      <td><?php echo $donnee_client['mail']; ?></td>
                    </tr>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Client - <span class="semi-bold">Finance & Paiement</span></h4>
              <div class="tools"> <a class="collapse" href="javascript:;"></a> <a class="config" data-toggle="modal" href="#grid-config"></a> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row-fluid">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 220px;"><div data-always-visible="1" data-height="220px" class="scroller" style="overflow: hidden; width: auto; height: 220px;">
                    Mode de Paiement Par default:
                    <br />
                    <h2>RIB</h2>
                  <table width="100%" border="2px">
                    <tr>
                      <th>Code Banque</th>
                      <th>Code Guichet</th>
                      <th>N° de Compte</th>
                      <th>Clé RIB</th>
                    </tr>
                    <tr>
                      <td><?php echo $donnee_client['code_banque']; ?></td>
                      <td><?php echo $donnee_client['code_guichet']; ?></td>
                      <td><?php echo $donnee_client['code_cpt']; ?></td>
                      <td><?php echo $donnee_client['cle_rib']; ?></td>
                    </tr>
                  </table>
                  <br />

                  <table width="100%" border="2px">
                    <tr>
                      <th width="70%">IBAN</th>
                      <th width="30%">BIC (swift)</th>
                    </tr>
                    <tr>
                      <td><?php echo $donnee_client['iban']; ?></td>
                      <td><?php echo $donnee_client['bic']; ?></td>
                    </tr>
                  </table>

                  <br />
                  <table width="100%" border="2px">
                    <tr>
                      <td>Encours:</td>
                      <td><?php echo $donnee_client['encour']; ?> €</td>
                    </tr>
                  </table>
                </div><div class="slimScrollBar ui-draggable" style="background: none repeat scroll 0% 0% rgb(161, 178, 189); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 166.897px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: none repeat scroll 0% 0% rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
	  <br><br>
    </div>
    <!-- END PAGE -->
  </div>
</div>
<!-- END CHAT --> 
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<!-- END PAGE LEVEL PLUGINS -->
<!-- PAGE JS -->
<script src="assets/js/tabs_accordian.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
</body>
</html>