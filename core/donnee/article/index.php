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
        <li><a href="index.php" class="active">Article</a></li>
      </ul>
      <div class="page-title"> <a href="<?php echo $rootsite; ?>"><i class="icon-custom-left"></i></a>
        <h3>Donnée - <span class="semi-bold">Article</span></h3>
      </div>
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>Liste des <span class="semi-bold">Article</span>  <a href="nouv.article.php"><button class="btn btn-primary btn-xs btn-mini" type="button">Nouvelle Article</button></a></h4>
              
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body ">
              <table class="table table-striped" id="example2" >
                <thead>
                  <tr>
                    <th>ID article</th>
                    <th>Visuel</th>
                    <th>Désignation</th>
                    <th>Prix Vente TTC</th>
                    <th>Stock</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql_article = mysql_query("SELECT * FROM article");
                    while($donnee_article = mysql_fetch_array($sql_article))
                      {
                  ?>
                  <tr class="odd gradeX">
                    <td><?php echo "ART000".$donnee_article['idarticle']; ?><br><?php echo $donnee_article['ref_interne']; ?></td>
                    <td><img width="150px" height="115px" src="<?php echo $donnee_article['images']; ?>" /></td>
                    <td><?php echo $donnee_article['desc_court']; ?></td>
                    <td><?php echo $donnee_article['prix_vente_ttc']; ?> €</td>
                    <td>
                      <?php

                        if($donnee_article['stock_reel'] > 1){echo "<button type='button' data-target='#myModal' class='btn btn-white tip' data-toggle='tooltip' title='En Stock''   data-placement='right'><img src='".$rootsite."/assets/img/icon/stock-green.png' /></button>";}
                        elseif($donnee_article['stock_reel'] == 1)  {echo "<button type='button' data-target='#myModal' class='btn btn-white tip' data-toggle='tooltip' title='A Commander''   data-placement='right'><img src='".$rootsite."/assets/img/icon/stock-warning.png' /></button>";}
                        elseif($donnee_article['stock_reel'] < 1 ) {echo "<button type='button' data-target='#myModal' class='btn btn-white tip' data-toggle='tooltip' title='RUPTURE''   data-placement='right'><img src='".$rootsite."/assets/img/icon/stock-danger.png' /></button>";}
                        

                        
                      ?>
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                          <br>
                          <i class="icon-credit-card icon-7x"></i>
                          <h4 class="semi-bold" id="myModalLabel">Information de Stock</h4>
                          <br>
                        </div>
                        <div class="modal-body">
                          <img src="<?php echo $rootsite; ?>/assets/img/icon/stock-green.png" />: <b>EN STOCK</b><br><p>Le stock de Produit est supérieur au minima de commande du dit produit. <u>Aucune commande nécessaire</u>.</p><br><br>
                          <img src="<?php echo $rootsite; ?>/assets/img/icon/stock-warning.png" />: <b>STOCK BAS</b><br><p>Le Produit est encore en stock mais il est soit réservé ou pratiquement en rupture. <u>Commande Nécessaire</u>.</p><br><br>
                          <img src="<?php echo $rootsite; ?>/assets/img/icon/stock-danger.png" />: <b>RUPTURE</b><br><p>Le produit n'est plus en stock, soit il est directemet en rupture chez le fournisseur ou une commande est nécessaire. <u>Commande nécessaire</u>.</p>
                        </div>
                        <div class="modal-footer">
                          
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                    </td>
                    <td>
                      <a href="modif.article.php?idarticle=<?php echo $donnee_article['idarticle']; ?>"><button class="btn btn-primary btn-cons" type="button"><i class="fa fa-paste"></i>&nbsp;Editer</button></a>
                      <a href="fiche.article.php?idarticle=<?php echo $donnee_article['idarticle']; ?>"><button class="btn btn-primary btn-cons" type="button"><i class="fa fa-eye"></i>&nbsp;Fiche Article</button></a>
                      <a href="supp.article.php?idarticle=<?php echo $donnee_article['idarticle']; ?>"><button class="btn btn-primary btn-cons" type="button"><i class="fa fa-eraser"></i>&nbsp;Supprimer</button>
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
<script src="<?php echo $rootsite; ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-mixitup/jquery.mixitup.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="<?php echo $rootsite; ?>assets/js/datatables.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/js/messages_notifications.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/js/search_results.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<script src="<?php echo $rootsite; ?>assets/js/core.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/js/chat.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
<!-- END JAVASCRIPTS -->
</body>
</html>
