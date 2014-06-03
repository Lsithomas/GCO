<?php include ('../../inc/header.php'); ?>
  
<?php include ('../../inc/pagecontainer.php'); ?>
<?php
// Calcule 


$sql_vos_vente_total = mysql_query("SELECT SUM(ptttc_fact_cli) as somme FROM fact_cli WHERE iduser =" .$donnees_login['iduser']);
$donnee_vos_vente_total = mysql_fetch_row($sql_vos_vente_total);

$sql_vos_vente_aujourdhui = mysql_query("SELECT SUM(ptttc_fact_cli) as total FROM fact_cli WHERE (`iduser` = '".$donnees_login['iduser']."' AND `date_facture` = '".$date."')");
$donnee_vos_vente_aujourdui = mysql_fetch_row($sql_vos_vente_aujourdhui);

$sql_vos_vente_mois = mysql_query("SELECT SUM(ptttc_fact_cli) FROM fact_cli WHERE date_facture BETWEEN '$date_mois_deb' AND '$date_mois_fin' AND iduser = ".$donnees_login['iduser']);
$donnee_vos_vente_mois = mysql_fetch_row($sql_vos_vente_mois);

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
			<div class="col-md-12">
				<div class=" tiles white col-md-12 no-padding">
					<div class="tiles green cover-pic-wrapper">						
						<div class="overlayer bottom-right">
							<div class="overlayer-wrapper">
									<div class="padding-10 hidden-xs">									
										
									</div>
								</div>
						</div>
					<img src="<?php echo $rootsite; ?>assets/img/cover_pic.png" alt="">
					</div>
					<div class="tiles white">
			
						<div class="row">
							<div class="col-md-3 col-sm-3" >
								<div class="user-profile-pic">	
									<img width="69" height="69" data-src-retina="<?php echo $rootsite; ?>assets/img/profiles/<?php echo $donnees_login['prenom']; ?>2x.jpg" data-src="<?php echo $rootsite; ?>assets/img/profiles/<?php echo $donnees_login['prenom']; ?>.jpg" src="<?php echo $rootsite; ?>assets/img/profiles/<?php echo $donnees_login['prenom']; ?><?php echo $donnees_login['prenom']; ?>.jpg" alt="">
								</div>
							</div>

							<div class="col-md-5 user-description-box  col-sm-5">
								<h4 class="semi-bold no-margin"><?php echo $donnees_login['prenom']; ?> <?php echo $donnees_login['nom']; ?></h4>
								<h6 class="no-margin"><?php echo $donnees_login['place']; ?> pour LSI INFORMATIQUE</h6>
								<br>
								<p><i class="fa fa-briefcase"></i>LSI INFORMATIQUE</p>
								<p><i class="fa fa-globe"></i>www.lsiinformatique.fr</p>
								<p><i class="fa fa-envelope"></i>Send Message: mmaxime@lsiinformatique.fr</p>
							</div>
					</div>
          <div class="col-md-12 col-vlg-12 m-b-20 ">
      <div class="tiles white added-margin">
        <div class="row ">
        <div class="p-t-35 p-l-45">
        <div class="col-md-5 col-sm-5 no-padding">
          <h5 class="no-margin">Vos Ventes totals</h5>
          <h4><span data-animation-duration="700" data-value="<?php echo $donnee_vos_vente_total[0]; ?>" class="item-count animate-number semi-bold">0</span> EUR</h4>
        </div>
        <div class="col-md-3 col-sm-3 no-padding">
          <p class="semi-bold">Aujourd'hui le <?php echo $date; ?></p>
          <h4><span data-animation-duration="700" data-value="<?php echo $donnee_vos_vente_aujourdui[0]; ?>" class="item-count animate-number semi-bold">0</span> EUR</h4>
        </div>
        <div class="col-md-3 col-sm-3 no-padding">
          <p class="semi-bold">Entre le <?php echo $date_mois_deb; ?> et le <?php echo $date_mois_fin; ?>
          </p>
          <h4><span data-animation-duration="700" data-value="<?php echo $donnee_vos_vente_mois[0]; ?>" class="item-count animate-number semi-bold">0</span> EUR</h4>
        </div>
        <div class="clearfix"></div>
        </div>
        </div>
        <h5 class="semi-bold m-t-30 m-l-30">Dernière Ventes</h5>
        <table class="table no-more-tables m-t-20 m-l-20 m-b-30">
        <thead style="display:none">
          <tr>
          <th style="width:9%">N° Facture</th>
          <th style="width:22%">Client</th>
          <th style="width:6%">Montant</th>
          <th style="width:1%"> </th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $sql_derniere_facture = mysql_query("SELECT * FROM fact_cli, client WHERE fact_cli.idclient = client.idclient AND fact_cli.iduser = client.iduser");
            while($donnee_derniere_facture = mysql_fetch_array($sql_derniere_facture))
            {
          ?>
          <tr>
          <td class="v-align-middle bold text-success"><?php echo $donnee_derniere_facture['idfactcli']; ?></td>
          <td class="v-align-middle"><span class="muted"><?php echo $donnee_derniere_facture['nom']; ?> <?php echo $donnee_derniere_facture['prenom']; ?></span> </td>
          <td><span class="muted bold text-success"><?php echo $donnee_derniere_facture['ptttc_fact_cli']; ?> €</span> </td>
          <td class="v-align-middle"></td>
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
<!-- END CONTAINER --> 
</div>
<!-- END CONTAINER --> 


<!-- BEGIN CORE JS FRAMEWORK--> 
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<!-- END CORE JS FRAMEWORK --> 

<!-- BEGIN PAGE LEVEL JS --> 	
<script src="<?php echo $rootsite; ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="<?php echo $rootsite; ?>assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script> 	
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
<!-- END PAGE LEVEL PLUGINS --> 	

<!-- BEGIN CORE TEMPLATE JS --> 
<script src="<?php echo $rootsite; ?>assets/js/core.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>assets/js/chat.js" type="text/javascript"></script> 
<script src="<?php echo $rootsite; ?>assets/js/demo.js" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS --> 
</body>
</html>