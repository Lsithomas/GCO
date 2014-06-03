<?php 
include ('../../../inc/header.php');
include ('../../../inc/pagecontainer.php');
$idarticle = $_GET['idarticle'];
$sql_article = mysql_query("SELECT * FROM article WHERE idarticle =".$idarticle);
$donnee_article = mysql_fetch_array($sql_article);
?> 
<script type="text/javascript">
$("#date").mask("99/99/9999");
</script>
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
        <li><a href="index.php">Article</a></li>
        <li><a href="modif.article.php" class="active"><span class="semi-bold">Modifier Article</span></a></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>ARTICLE - <span class="semi-bold">Modifier Article</span></h3>
      </div>    
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple transparent">
            <div class="grid-title">
              <h4>Modifier <span class="semi-bold">Article</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body ">
              <div class="row">
                <form id="commentForm" action="valid.modif.article.php" method="post">
                  <div id="rootwizard" class="col-md-12">
                    <div class="form-wizard-steps">
                      <ul class="wizard-steps">
                        <li class="" data-target="#step1"> <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Information Générale</span> </a> </li>
                        <li data-target="#step2" class=""> <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Description</span> </a> </li>
                        <li data-target="#step3" class=""> <a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Tarif</span> </a> </li>
                        <li data-target="#step4" class=""> <a href="#tab4" data-toggle="tab"> <span class="step">4</span> <span class="title">Stock</span> </a> </li> 
                        <li data-target="#step5" class=""> <a href="#tab5" data-toggle="tab"> <span class="step">5</span> <span class="title">Images</span> </a> </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="tab-content transparent">
                      <div class="tab-pane" id="tab1"> <br>
                        <h4 class="semi-bold">Etape 1 - <span class="light">Information Générale</span></h4>
                        <br>
                        <div class="row form-row">
                          <div class="col-md-12">
                            <input type="text" placeholder="<?php echo $donnee_article['idarticle']; ?>" class="form-control no-boarder " name="idarticle" id="txtFirstName" hidden>
                          </div>
                          <div class="col-md-12">
                            <input type="text" placeholder="<?php echo $donnee_article['desc_court']; ?>" class="form-control no-boarder " name="desc_court" id="txtFirstName">
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-md-12">
                              <select name="idfamillearticle" class="form-control no-boarder ">
                                <?php
                                  $sql_famille_article = mysql_query("SELECT * FROM famille_article");
                                  while($donnee_famille_article = mysql_fetch_array($sql_famille_article))
                                  {
                                ?>
                                <option value="<?php echo $donnee_famille_article['idfamillearticle']; ?>"><?php echo $donnee_famille_article['designation']; ?></option>
                                <?php } ?>
                              </select>
                            </div>
                        </div>

                        <div class="row form-row">
                          <div class="col-md-6">
                              <select name="idfournisseur" class="form-control no-boarder ">
                                <?php
                                  $sql_fournisseur = mysql_query("SELECT * FROM fournisseur");
                                  while($donnee_fournisseur = mysql_fetch_array($sql_fournisseur))
                                  {
                                ?>
                                <option value="<?php echo $donnee_fournisseur['idfournisseur']; ?>"><?php echo $donnee_fournisseur['raison_social']; ?></option>
                                <?php } ?>
                              </select>
                            </div>
                            <div class="col-md-3">
                            <input type="text" placeholder="<?php echo $donnee_article['ref_fournisseur']; ?>" class="form-control no-boarder " name="ref_fournisseur" id="txtFirstName" >
                          </div>
                          <div class="col-md-3">
                            <input type="text" placeholder="<?php echo $donnee_article['ref_interne']; ?>" class="form-control no-boarder " name="ref_interne" id="txtFirstName" >
                          </div>
                        </div>

                        <div class="row form-row">
                          <div class="col-md-6">
                            <div class="input-append success date col-md-10 col-lg-6 no-padding">
                              <input type="text" class="form-control" name="date_debut" placeholder="<?php echo $donnee_article['date_debut']; ?>">
                              <span class="add-on"><span class="arrow"></span><i class="fa fa-th"></i></span> </div>
                            <br>
                            <br>
                            <div class="clearfix"></div>
                          </div>
                          <div class="col-md-6">
                            <div class="input-append success date col-md-10 col-lg-6 no-padding">
                              <input type="text" class="form-control" name="date_fin" placeholder="<?php echo $donnee_article['date_fin']; ?>">
                              <span class="add-on"><span class="arrow"></span><i class="fa fa-th"></i></span> </div>
                            <br>
                            <br>
                            <div class="clearfix"></div>
                          </div>
                        </div>

                        <div class="row form-row">
                          <div class="col-md-6">
                            <input type="text" placeholder="<?php echo $donnee_article['num_serie']; ?>" class="form-control no-boarder " name="num_serie" id="txtFirstName" >
                          </div>
                          <div class="col-md-6">
                            <input type="text" placeholder="<?php echo $donnee_article['code_barre']; ?>" class="form-control no-boarder " name="code_barre" id="txtFirstName" >
                          </div>
                        </div>

                      </div>
                      <div class="tab-pane" id="tab2"> <br>
                        <h4 class="semi-bold">Etape 2 - <span class="light">Description</span></h4>
                        <br>
                        <div class="row">
                          <div class="col-md-12">
                            <textarea row="12" col="12" name="desc_long" style="width: 1145px; height: 163px;"><?php echo $donnee_article['desc_long']; ?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab3"> <br>
                        <h4 class="semi-bold">Etape 3 - <span class="light">Tarif</span></h4>
                        <br>
                        <div class="row form-row">
                          <div class="col-md-3">
                            <label>Prix Achat HT</label>
                            <input type="text" placeholder="<?php echo $donnee_article['prix_achat_ht']; ?>" class="form-control no-boarder " name="prix_achat_ht" id="txtFirstName" >
                          </div>
                          <div class="col-md-3">
                            <label>Prix de Vente HT</label>
                            <input type="text" placeholder="<?php echo $donnee_article['prix_vente_ht']; ?>" class="form-control no-boarder " name="prix_vente_ht" id="txtFirstName" >
                          </div>
                          <div class="col-md-3">
                            <label>Prix de Vente TTC</label>
                            <input type="text" placeholder="<?php echo $donnee_article['prix_vente_ttc']; ?>" class="form-control no-boarder " name="prix_vente_ttc" id="txtFirstName" >
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab4"> <br>
                        <h4 class="semi-bold">Etape 4 - <span class="light">Stock</span></h4>
                        <br>
                        <div class="row form-row">
                          <div class="col-md-3">
                              <input type="text" placeholder="<?php echo $donnee_article['stock_minima']; ?>" class="form-control no-boarder " name="stock_minima" id="txtFirstName" >
                          </div>
                          <div class="col-md-3">
                              <input type="text" placeholder="<?php echo $donnee_article['stock_reel']; ?>" class="form-control no-boarder " name="stock_reel" id="txtFirstName" >
                          </div>
                          <div class="col-md-3">
                              <input type="text" placeholder="<?php echo $donnee_article['poids']; ?>" class="form-control no-boarder " name="poids" id="txtFirstName" >Kg
                          </div>
                          <div class="col-md-3">
                            <select name="duree_garantie" class="form-control no-boarder">
                              <option value="1">1 An</option>
                              <option value="2">2 Ans</option>
                              <option value="3">3 Ans</option>
                              <option value="5">5 Ans</option>
                              <option value="10">10 Ans</option>
                              <option value="99">A vie</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab5"> <br>
                        <h4 class="semi-bold">Etape 5 - <span class="light">Images</span></h4>
                        <br>
                        <div class="row form-row">
                          <div class="col-md-4">
                              <input type="text" placeholder="<?php echo $donnee_article['images']; ?>" class="form-control no-boarder " name="images" id="txtFirstName" >
                          </div>
                        </div>
                        <div class="row form-row">
                          <img src="<?php echo $donnee_article['images']; ?>" />
                        </div>
                      <div class="row form-row">
                        <button class="btn btn-primary btn-cons" type="submit">Valider</button>
                        <button class="btn btn-danger btn-cons" type="reset">Reset</button>
                      </div>
                      </div>
                      <ul class=" wizard wizard-actions">
                        <li class="previous first" style="display:none;"><a href="javascript:;" class="btn">&nbsp;&nbsp;First&nbsp;&nbsp;</a></li>
                        <li class="previous"><a href="javascript:;" class="btn">&nbsp;&nbsp;Previous&nbsp;&nbsp;</a></li>
                        <li class="next last" style="display:none;"><a href="javascript:;" class="btn btn-primary">&nbsp;&nbsp;Last&nbsp;&nbsp;</a></li>
                        <li class="next"><a href="javascript:;" class="btn btn-primary">&nbsp;&nbsp;Next&nbsp;&nbsp;</a></li>
                      </ul>
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
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-inputmask/jquery.inputmask.min.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="<?php echo $rootsite; ?>assets/js/form_validations.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/js/form_elements.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<script src="<?php echo $rootsite; ?>assets/js/core.js" type="text/javascript"></script>
<script src="<?php echo $rootsite; ?>assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->
<!-- END JAVASCRIPTS -->
</body>
</html>