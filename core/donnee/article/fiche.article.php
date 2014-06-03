<?php 
include ('../../../inc/header.php');
include ('../../../inc/pagecontainer.php');
$idarticle = $_GET['idarticle'];
$sql_article = mysql_query("SELECT * FROM article, fournisseur, famille_article, sous_famille_article
  WHERE fournisseur.idfournisseur = article.idfournisseur 
  AND famille_article.idfamillearticle = article.idfamillearticle
  AND sous_famille_article.idsousfamillearticle = article.idsousfamillearticle
  AND idarticle=".$idarticle);
$donnee_article = mysql_fetch_array($sql_article);
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
        <li><a href="index.php">Article</a></li>
        <li><a href="#" class="active">Fiche Article - <?php echo $donnee_article['desc_court']; ?></a> </li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Article - <span class="semi-bold">ART000<?php echo $donnee_article['idarticle']; ?> - <?php echo $donnee_article['desc_court']; ?></span></h3>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Article - <span class="semi-bold">Général</span></h4>
              <div class="tools"> <a class="collapse" href="javascript:;"></a> <a class="config" data-toggle="modal" href="#grid-config"></a> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row-fluid">
                  <table width="100%">
                    <tr>
                      <td>Article N°</td>
                      <td>ART000<?php echo $donnee_article['idarticle']; ?></td>
                    </tr>
                    <tr>
                      <td>Libellé</td>
                      <td><?php echo $donnee_article['desc_court']; ?></td>
                    </tr>
                    <tr>
                      <td>Fournisseur</td>
                      <td><?php echo $donnee_article['raison_social']; ?></td>
                    </tr>
                    <tr>
                      <td>Code Barre</td>
                      <td><?php echo $donnee_article['code_barre']; ?></td>
                    </tr>
                    <tr>
                      <td>Famille Article</td>
                      <td><?php echo $donnee_article['designation']; ?></td>
                    </tr>
                    <tr>
                      <td>Sous Famille Article</td>
                      <td><?php echo $donnee_article['designation_famille']; ?></td>
                    </tr>
                    <tr>
                      <td>Référence Fournisseur</td>
                      <td><?php echo $donnee_article['ref_fournisseur']; ?></td>
                    </tr>
                    <tr>
                      <td>Référence Interne</td>
                      <td><?php echo $donnee_article['ref_interne']; ?></td>
                    </tr>
                    <tr>
                      <td>En Stock à partir du:</td>
                      <td>
                        <?php
                          if($donnee_article['date_debut'] >= $date){echo "<font color=red>".$donnee_article['date_debut']."</font>";}else{echo $donnee_article['date_debut'];}
                        ?>
                      </td>
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
              <h4>Article - <span class="semi-bold">Descriptif et caracteristique</span></h4>
              <div class="tools"> <a class="collapse" href="javascript:;"></a> <a class="config" data-toggle="modal" href="#grid-config"></a> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row-fluid">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 220px;"><div data-always-visible="1" data-height="220px" class="scroller" style="overflow: hidden; width: auto; height: 220px;">
                    
                  <table width="100%">
                    <?php echo $donnee_article['desc_long']; ?>
                  </table>
                </div><div class="slimScrollBar ui-draggable" style="background: none repeat scroll 0% 0% rgb(161, 178, 189); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 166.897px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: none repeat scroll 0% 0% rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h4>Article - <span class="semi-bold">Stock et Tarif</span></h4>
      <div class="row">
        <div class="col-md-6">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Article - <span class="semi-bold">Stock</span></h4>
              <div class="tools"> <a class="collapse" href="javascript:;"></a> <a class="config" data-toggle="modal" href="#grid-config"></a> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row-fluid">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 220px;"><div data-always-visible="1" data-height="220px" class="scroller" style="overflow: hidden; width: auto; height: 220px;">
                    <div class="row spacing-bottom 2col">
                      <div class="col-md-6 col-sm-6 spacing-bottom">
                        <div class="tiles red added-margin">
                          <div class="tiles-body">
                            <div class="controller"> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
                            <div class="tiles-title"> Stock Minimal </div>
                            <div class="heading"><span data-animation-duration="1200" data-value="<?php echo $donnee_article['stock_minima']; ?>" class="animate-number"><?php echo $donnee_article['stock_minima']; ?></span> </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6">
                        <div class="tiles green added-margin">
                          <div class="tiles-body">
                            <div class="controller"> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
                            <div class="tiles-title"> Stock Réel </div>
                            <div class="row-fluid">
                              <div class="heading"> <span data-animation-duration="700" data-value="<?php echo $donnee_article['stock_reel']; ?>" class="animate-number"><?php echo $donnee_article['stock_reel']; ?></span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
                      if($donnee_article['stock_reel'] == 0){echo "<h2><font color=red>Veuillez Commander le produit</font></h2>";}else{echo "";}
                      ?>
                </div><div class="slimScrollBar ui-draggable" style="background: none repeat scroll 0% 0% rgb(161, 178, 189); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 166.897px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: none repeat scroll 0% 0% rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
              </div>
              <table width="100%">
              <tr>
                <td>Numéro de Serie: <b><?php echo $donnee_article['num_serie']; ?></b></td>
                <td>Code Barre: <b><?php echo $donnee_article['code_barre']; ?></b></td>
                <td>Poids: <b><?php echo $donnee_article['poids']; ?></b></td>
              </tr>
            </table>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Article - <span class="semi-bold">Tarif</span></h4>
              <div class="tools"> <a class="collapse" href="javascript:;"></a> <a class="config" data-toggle="modal" href="#grid-config"></a> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row-fluid">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 220px;"><div data-always-visible="1" data-height="220px" class="scroller" style="overflow: hidden; width: auto; height: 220px;">
                  <table width="100%">
                    <tr>
                      <th>Prix Achat HT</th>
                      <th>Prix Vente HT</th>
                      <th>Prix Vente TTC</th>
                    </tr>
                    <tr>
                      <td><?php echo $donnee_article['prix_achat_ht']; ?> €</td>
                      <td><?php echo $donnee_article['prix_vente_ht']; ?> €</td>
                      <td><h2><b><?php echo $donnee_article['prix_vente_ttc']; ?> €</b></h2></td>
                    </tr>
                  </table>
                </div><div class="slimScrollBar ui-draggable" style="background: none repeat scroll 0% 0% rgb(161, 178, 189); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 166.897px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: none repeat scroll 0% 0% rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple">
            <div class="grid-title no-border">
              <h4>Article - <span class="semi-bold">Images</span></h4>
              <div class="tools"> <a class="collapse" href="javascript:;"></a> <a class="config" data-toggle="modal" href="#grid-config"></a> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
            </div>
            <div class="grid-body no-border">
              <div class="row-fluid">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 220px;"><div data-always-visible="1" data-height="220px" class="scroller" style="overflow: hidden; width: auto; height: 220px;">
                  <img width="300px" height="235px" src="<?php echo $donnee_article['images']; ?>" /> 
                  <img width="150px" height="115px" src="<?php echo $donnee_article['images2']; ?>" />
                  <img width="150px" height="115px" src="<?php echo $donnee_article['images3']; ?>" />
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