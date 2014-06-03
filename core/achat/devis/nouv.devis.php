<?php 
include ('../../../inc/header.php');
include ('../../../inc/pagecontainer.php');
$date = date("d-m-Y");
$date_30 = date('d-m-Y', strtotime("+30 days"));
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
        <li><a href="#">Achat</a> </li>
        <li><a href="index.php">Devis</a></li>
        <li><a href="nouv.devis.php" class="active"><span class="semi-bold">Nouveau Devis</span></a></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>ACHAT - <span class="semi-bold">Nouveau Devis</span></h3>
      </div>    
      <div class="row">
        <div class="col-md-12">
          <div class="grid simple transparent">
            <div class="grid-title">
              <h4>Nouveau <span class="semi-bold">Devis</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body ">
              <div class="row">
                <form id="commentForm" action="valid.nouv.devis.php" method="post">
                  <div id="rootwizard" class="col-md-12">
                    <div class="form-wizard-steps">
                      <ul class="wizard-steps">
                        <li class="" data-target="#step1"> <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Générale</span> </a> </li>
                        <li data-target="#step2" class=""> <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Article</span> </a> </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="tab-content transparent">
                      <div class="tab-pane" id="tab1"> <br>
                        <h4 class="semi-bold">Etape 1 - <span class="light">Générale</span></h4>
                        <br>
                        <div class="row form-row">
                          <div class="col-md-12">
                            <label>Fournisseur</label>
                              <select name="idfournisseur" class="form-control no-boarder " placeholder="Civilité">
                                <?php
                                $sql_fournisseur = mysql_query("SELECT * FROM fournisseur");
                                while($donnee_fournisseur = mysql_fetch_array($sql_fournisseur))
                                {
                                ?>
                                <option value="<?php echo $donnee_fournisseur['idfournisseur']; ?>"><?php echo $donnee_fournisseur['raison_social']; ?></option>
                                <?php } ?>
                              </select>
                            </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-md-6">
                            <div class="input-append success date col-md-10 col-lg-6 no-padding">
                              <label>Date du devis</label>
                              <input type="text" class="form-control" name="date_devis_four" Value="<?php echo $date; ?>">
                              <span class="add-on"><span class="arrow"></span><i class="fa fa-th"></i></span> </div>
                            <br>
                            <br>
                            <div class="clearfix"></div>
                          </div>
                          <div class="col-md-6">
                            <div class="input-append success date col-md-10 col-lg-6 no-padding">
                              <label>Date d'échéance du devis</label>
                              <input type="text" class="form-control" name="date_echeance_devis_four" Value="<?php echo $date_30; ?>">
                              <span class="add-on"><span class="arrow"></span><i class="fa fa-th"></i></span> </div>
                            <br>
                            <br>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                        </div>
                      <div class="tab-pane" id="tab2"> <br>
                        <h4 class="semi-bold">Etape 2 - <span class="light">ARTICLE</span></h4>
                        <br>
                    <div class="row form-row">
                      <table class="table table-bordered no-more-tables">
                        <thead>
                          <tr>
                            <th class="text-center" style="width:12%">Article</th>
                            <th class="text-center" style="width:22%">Quantité</th>
                            <th class="text-center" style="width:22%">Prix Prix total HT</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">
                              <select name="idarticle1" class="form-control no-boarder " placeholder="Civilité">
                                <option value="">Selectionner un article</option>
                                <?php
                                $sql_article = mysql_query("SELECT * FROM article");
                                while($donnee_article = mysql_fetch_array($sql_article))
                                {
                                ?>
                                <option value="<?php echo $donnee_article['desc_court']; ?>"><?php echo $donnee_article['desc_court']; ?> <b><?php echo $donnee_article['prix_vente_ht']; ?></b></option>
                                <?php } ?>
                              </select>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="Qte" class="form-control no-boarder " name="qte1" id="txtFirstName">
                              </div>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="PTHT" class="form-control no-boarder " name="prix_vente_ht1" id="txtFirstName">
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-center">
                              <select name="idarticle2" class="form-control no-boarder " placeholder="Civilité">
                                
                                <option value="">Selectionner un article</option>
                                <?php
                                $sql_article = mysql_query("SELECT * FROM article");
                                while($donnee_article = mysql_fetch_array($sql_article))
                                {
                                ?>
                                <option value="<?php echo $donnee_article['desc_court']; ?>"><?php echo $donnee_article['desc_court']; ?> <b><?php echo $donnee_article['prix_vente_ht']; ?></b></option>
                                <?php } ?>
                              </select>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="Qte" class="form-control no-boarder " name="qte2" id="txtFirstName">
                              </div>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="PTHT" class="form-control no-boarder " name="prix_vente_ht2" id="txtFirstName">
                                
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-center">
                              <select name="idarticle3" class="form-control no-boarder " placeholder="Civilité">
                                
                                <option value="">Selectionner un article</option>
                                <?php
                                $sql_article = mysql_query("SELECT * FROM article");
                                while($donnee_article = mysql_fetch_array($sql_article))
                                {
                                ?>
                                <option value="<?php echo $donnee_article['desc_court']; ?>"><?php echo $donnee_article['desc_court']; ?> <b><?php echo $donnee_article['prix_vente_ht']; ?></b></option>
                                <?php } ?>
                              </select>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="Qte" class="form-control no-boarder " name="qte3" id="txtFirstName">
                              </div>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="PTHT" class="form-control no-boarder " name="prix_vente_ht3" id="txtFirstName">
                                
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-center">
                              <select name="idarticle4" class="form-control no-boarder " placeholder="Civilité">
                                <option value="">Selectionner un article</option>
                                <?php
                                $sql_article = mysql_query("SELECT * FROM article");
                                while($donnee_article = mysql_fetch_array($sql_article))
                                {
                                ?>
                                <option value="<?php echo $donnee_article['desc_court']; ?>"><?php echo $donnee_article['desc_court']; ?> <b><?php echo $donnee_article['prix_vente_ht']; ?></b></option>
                                <?php } ?>
                              </select>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="Qte" class="form-control no-boarder " name="qte4" id="txtFirstName">
                              </div>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="PTHT" class="form-control no-boarder " name="prix_vente_ht4" id="txtFirstName">
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-center">
                              <select name="idarticle5" class="form-control no-boarder " placeholder="Civilité">
                                <option value="">Selectionner un article</option>
                                <?php
                                $sql_article = mysql_query("SELECT * FROM article");
                                while($donnee_article = mysql_fetch_array($sql_article))
                                {
                                ?>
                                <option value="<?php echo $donnee_article['desc_court']; ?>"><?php echo $donnee_article['desc_court']; ?> <b><?php echo $donnee_article['prix_vente_ht']; ?></b></option>
                                <?php } ?>
                              </select>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="Qte" class="form-control no-boarder " name="qte5" id="txtFirstName">
                              </div>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="PTHT" class="form-control no-boarder " name="prix_vente_ht5" id="txtFirstName">
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-center">
                              <select name="idarticle6" class="form-control no-boarder " placeholder="Civilité">
                                <option value="">Selectionner un article</option>
                                <?php
                                $sql_article = mysql_query("SELECT * FROM article");
                                while($donnee_article = mysql_fetch_array($sql_article))
                                {
                                ?>
                                <option value="<?php echo $donnee_article['desc_court']; ?>"><?php echo $donnee_article['desc_court']; ?> <b><?php echo $donnee_article['prix_vente_ht']; ?></b></option>
                                <?php } ?>
                              </select>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="Qte" class="form-control no-boarder " name="qte6" id="txtFirstName">
                              </div>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="PTHT" class="form-control no-boarder " name="prix_vente_ht6" id="txtFirstName">
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-center">
                              <select name="idarticle7" class="form-control no-boarder " placeholder="Civilité">
                                <option value="">Selectionner un article</option>
                                <?php
                                $sql_article = mysql_query("SELECT * FROM article");
                                while($donnee_article = mysql_fetch_array($sql_article))
                                {
                                ?>
                                <option value="<?php echo $donnee_article['desc_court']; ?>"><?php echo $donnee_article['desc_court']; ?> <b><?php echo $donnee_article['prix_vente_ht']; ?></b></option>
                                <?php } ?>
                              </select>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="Qte" class="form-control no-boarder " name="qte7" id="txtFirstName">
                              </div>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="PTHT" class="form-control no-boarder " name="prix_vente_ht7" id="txtFirstName">
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-center">
                              <select name="idarticle8" class="form-control no-boarder " placeholder="Civilité">
                                <option value="">Selectionner un article</option>
                                <?php
                                $sql_article = mysql_query("SELECT * FROM article");
                                while($donnee_article = mysql_fetch_array($sql_article))
                                {
                                ?>
                                <option value="<?php echo $donnee_article['desc_court']; ?>"><?php echo $donnee_article['desc_court']; ?> <b><?php echo $donnee_article['prix_vente_ht']; ?></b></option>
                                <?php } ?>
                              </select>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="Qte" class="form-control no-boarder " name="qte8" id="txtFirstName">
                              </div>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="PTHT" class="form-control no-boarder " name="prix_vente_ht8" id="txtFirstName">
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-center">
                              <select name="idarticle9" class="form-control no-boarder " placeholder="Civilité">
                                <option value="">Selectionner un article</option>
                                <?php
                                $sql_article = mysql_query("SELECT * FROM article");
                                while($donnee_article = mysql_fetch_array($sql_article))
                                {
                                ?>
                                <option value="<?php echo $donnee_article['desc_court']; ?>"><?php echo $donnee_article['desc_court']; ?> <b><?php echo $donnee_article['prix_vente_ht']; ?></b></option>
                                <?php } ?>
                              </select>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="Qte" class="form-control no-boarder " name="qte9" id="txtFirstName">
                              </div>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="PTHT" class="form-control no-boarder " name="prix_vente_ht9" id="txtFirstName">
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-center">
                              <select name="idarticle10" class="form-control no-boarder " placeholder="Civilité">
                                <option value="">Selectionner un article</option>
                                <?php
                                $sql_article = mysql_query("SELECT * FROM article");
                                while($donnee_article = mysql_fetch_array($sql_article))
                                {
                                ?>
                                <option value="<?php echo $donnee_article['desc_court']; ?>"><?php echo $donnee_article['desc_court']; ?> <b><?php echo $donnee_article['prix_vente_ht']; ?></b></option>
                                <?php } ?>
                              </select>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="Qte" class="form-control no-boarder " name="qte10" id="txtFirstName">
                              </div>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="PTHT" class="form-control no-boarder " name="prix_vente_ht10" id="txtFirstName">
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-center">
                              <select name="idarticle11" class="form-control no-boarder " placeholder="Civilité">
                                <option value="">Selectionner un article</option>
                                <?php
                                $sql_article = mysql_query("SELECT * FROM article");
                                while($donnee_article = mysql_fetch_array($sql_article))
                                {
                                ?>
                                <option value="<?php echo $donnee_article['desc_court']; ?>"><?php echo $donnee_article['desc_court']; ?> <b><?php echo $donnee_article['prix_vente_ht']; ?></b></option>
                                <?php } ?>
                              </select>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="Qte" class="form-control no-boarder " name="qte11" id="txtFirstName">
                              </div>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="PTHT" class="form-control no-boarder " name="prix_vente_ht11" id="txtFirstName">
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td class="text-center">
                              <select name="idarticle12" class="form-control no-boarder " placeholder="Civilité">
                                <option value="">Selectionner un article</option>
                                <?php
                                $sql_article = mysql_query("SELECT * FROM article");
                                while($donnee_article = mysql_fetch_array($sql_article))
                                {
                                ?>
                                <option value="<?php echo $donnee_article['desc_court']; ?>"><?php echo $donnee_article['desc_court']; ?> <b><?php echo $donnee_article['prix_vente_ht']; ?></b></option>
                                <?php } ?>
                              </select>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="Qte" class="form-control no-boarder " name="qte12" id="txtFirstName">
                              </div>
                            </td>
                            <td class="text-right">
                              <div class="col-md-12">
                                <input type="text" placeholder="PTHT" class="form-control no-boarder " name="prix_vente_ht12" id="txtFirstName">
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>Remise</td>
                            <td><input type="text" placeholder="remise" class="form-control no-boarder " name="remise" id="txtFirstName"></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>Frais de Port</td>
                            <td><input type="text" placeholder="Frais de Port" class="form-control no-boarder " name="port" id="txtFirstName"></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td>Eco Participation</td>
                            <td><input type="text" placeholder="Eco-Participation" class="form-control no-boarder " name="eco-part" id="txtFirstName"></td>
                          </tr>
                        

                          
                        </tbody>
                      </table>
                      <center>
                        <button class="btn btn-primary btn-cons" type="submit">Valider</button>
                        <button class="btn btn-danger btn-cons" type="reset">Reset</button>
                      </center>
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