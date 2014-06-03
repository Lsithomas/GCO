
<?php include ('inc/header.php'); ?>
	
<?php include ('inc/pagecontainer.php'); ?>
<?php

// Chargement des calcule de vente et d'achat
$sql_total_vente = mysql_query("SELECT SUM(ptttc_fact_cli) as somme FROM fact_cli");
$donnee_total_vente = mysql_fetch_row($sql_total_vente);

$sql_total_achat = mysql_query("SELECT SUM(ptttc_fact_four) as somme FROM fact_four");
$donnee_total_achat = mysql_fetch_row($sql_total_achat);

?>
	<div class="page-content"> 
		<div class="content">  
			<!-- BEGIN PAGE TITLE -->
	<div class="row">	 
		<div class="col-md-6 col-vlg-6 col-sm-6">
			<div class="tiles green added-margin  m-b-20">
              <div class="tiles-body">
			  <div class="controller"> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
                <div class="tiles-title text-black">Ventes</div>
			        <div class="widget-stats">
                      <div class="wrapper transparent"> 
						<span class="item-title">Total des Ventes</span> <span data-animation-duration="700" data-value="<?php echo $donnee_total_vente[0]; ?>€" class="item-count animate-number semi-bold">2,415€</span>
					  </div>
                    </div>
			  </div>			
			</div>	
	

		</div>
		<div class="col-md-6 col-vlg-6 col-sm-6">
			<div class="tiles blue added-margin  m-b-20">
              <div class="tiles-body">
			  <div class="controller"> <a class="reload" href="javascript:;"></a> <a class="remove" href="javascript:;"></a> </div>
                <div class="tiles-title text-black">Achats </div>
			         <div class="widget-stats">
                      <div class="wrapper transparent"> 
						<span class="item-title">Total des Achats</span> <span data-animation-duration="700" data-value="<?php echo $donnee_total_achat[0]; ?>€" class="item-count animate-number semi-bold">15,489</span>
					  </div>
                    </div>
			  </div>			
			</div>	
		</div>		
	 </div>
<?php

$sql_vos_vente_total = mysql_query("SELECT SUM(ptttc_fact_cli) as somme FROM fact_cli WHERE iduser =" .$donnees_login['iduser']);
$donnee_vos_vente_total = mysql_fetch_row($sql_vos_vente_total);

$sql_vos_vente_aujourdhui = mysql_query("SELECT SUM(ptttc_fact_cli) as total FROM fact_cli WHERE (`iduser` = '".$donnees_login['iduser']."' AND `date_facture` = '".$date."')");
$donnee_vos_vente_aujourdui = mysql_fetch_row($sql_vos_vente_aujourdhui);

$sql_vos_vente_mois = mysql_query("SELECT SUM(ptttc_fact_cli) as date_mois FROM fact_cli WHERE date_facture BETWEEN '$date_mois_deb' AND '$date_mois_fin' AND iduser = ".$donnees_login['iduser']);
$donnee_vos_vente_mois = mysql_fetch_row($sql_vos_vente_mois);
?>
	 <div class="row">		
		<!-- BEGIN REALTIME SALES GRAPH -->
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
		<!-- END REALTIME SALES GRAPH -->
	  </div>
      </div>
    </div>

			<!-- END PAGE TITLE -->
			<!-- BEGIN PlACE PAGE CONTENT HERE -->
			
			<!-- END PLACE PAGE CONTENT HERE -->
		</div>
	</div>
	<!-- END PAGE CONTAINER -->
</div>
<!-- END CONTENT -->  
</body>
</html>