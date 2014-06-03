<!-- BEGIN CONTENT -->
<div class="page-container row-fluid">
	<!-- BEGIN SIDEBAR -->
	<!-- BEGIN MENU -->
	<div class="page-sidebar" id="main-menu"> 
		  <div class="page-sidebar-wrapper" id="main-menu-wrapper">
		<!-- BEGIN MINI-PROFILE -->
		<div class="user-info-wrapper">	
			<div class="profile-wrapper">
				<img src="<?php echo $rootsite; ?>assets/img/profiles/<?php echo $donnees_login['prenom']; ?>.jpg" alt="" data-src="<?php echo $rootsite; ?>assets/img/profiles/<?php echo $donnees_login['prenom']; ?>.jpg" data-src-retina="<?php echo $rootsite; ?>assets/img/profiles/<?php echo $donnees_login['prenom']; ?>2x.jpg" width="69" height="69" />
			</div>
			<div class="user-info">
				<div class="greeting">Bievenue</div>
				<div class="username"><?php echo $donnees_login['prenom']; ?> <span class="semi-bold"><?php echo $donnees_login['nom']; ?></span></div>
				<div class="status">Status du service<a href="#">
					<?php
						if($donnee_server['status'] == 1){echo "<div class='status-icon green'></div>Online";}
						if($donnee_server['status'] == 0){echo "<div class='status-icon red'></div>Offline";}
					?>
				</a></div>
			</div>
		</div>
		<!-- END MINI-PROFILE -->
		<!-- BEGIN SIDEBAR MENU -->
		<ul>	
			<!-- BEGIN SELECTED LINK -->
			<li class="">
				<a href="<?php echo $rootsite; ?>">
					<i class="icon-custom-home"></i>
					<span class="title">Accueil</span>
					<span class="selected"></span>
				</a>
			</li>
			<!-- END SELECTED LINK -->
			<!-- BEGIN BADGE LINK -->
			<li class="">
				<a href="javascript:;">
					<i class="fa fa-folder-open"></i>
					<span class="title">Donnée</span>
					<span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="javascript:;"><span class="title">Client</span><span class="arrow "></span></a>
						<ul class="sub-menu">
							<li><a href="<?php echo $rootsite; ?>core/donnee/client/">Liste des Clients</a></li>
							<li><a href="<?php echo $rootsite; ?>core/donnee/client/nouv.client.php">Nouveau Client</a></li>
							<li><a href="<?php echo $rootsite; ?>core/donnee/client/">Modifier un client</a></li>
							<li><a href="<?php echo $rootsite; ?>core/donnee/client/">Supprimer un client</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:;"><span class="title">Article</span><span class="arrow "></span></a>
						<ul class="sub-menu">
							<li><a href="<?php echo $rootsite; ?>core/donnee/article/">Liste des Articles</a></li>
							<li><a href="<?php echo $rootsite; ?>core/donnee/article/nouv.article.php">Nouvelle Article</a></li>
							<li><a href="<?php echo $rootsite; ?>core/donnee/article/">Modifier un Article</a></li>
							<li><a href="<?php echo $rootsite; ?>core/donnee/article/">Supprimer un Article</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="">
				<a href="javascript:;">
					<i class="fa fa-suitcase"></i>
					<span class="title">Achat</span>
					<span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li><a href="<?php echo $rootsite; ?>core/achat/">Tableau de Bord des Achats</a></li>
					<li>
						<a href="javascript:;"><span class="title">Devis Fournisseur</span><span class="arrow "></span></a>
						<ul class="sub-menu">
							<li><a href="<?php echo $rootsite; ?>core/achat/devis/index.devis.php">Liste des Devis Fournisseur</a></li>
							<li><a href="<?php echo $rootsite; ?>core/achat/devis/nouv.devis.php">Nouveau Devis</a></li>
							<li><a href="<?php echo $rootsite; ?>core/achat/devis/">Modifier un Devis</a></li>
							<li><a href="<?php echo $rootsite; ?>core/achat/devis/">Supprimer un Devis</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:;"><span class="title">Commande Fournisseur</span><span class="arrow "></span></a>
						<ul class="sub-menu">
							<li><a href="<?php echo $rootsite; ?>core/achat/commande/index.commande.php">Liste des Commandes</a></li>
							<li><a href="<?php echo $rootsite; ?>core/achat/commande/nouv.commande.php">Nouvelle Commande</a></li>
							<li><a href="<?php echo $rootsite; ?>core/achat/commande/">Modifier une Commande</a></li>
							<li><a href="<?php echo $rootsite; ?>core/achat/commande/">Supprimer une Commande</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:;"><span class="title">Bon de Livraison Fournisseur</span><span class="arrow "></span></a>
						<ul class="sub-menu">
							<li><a href="<?php echo $rootsite; ?>core/achat/reception/index.reception.php">Liste des Receptions</a></li>
							<li><a href="<?php echo $rootsite; ?>core/achat/reception/nouv.reception.php">Nouvelle Reception</a></li>
							<li><a href="<?php echo $rootsite; ?>core/achat/reception/">Modifier une Reception</a></li>
							<li><a href="<?php echo $rootsite; ?>core/achat/reception/">Supprimer une Reception</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:;"><span class="title">Facture Fournisseur</span><span class="arrow "></span></a>
						<ul class="sub-menu">
							<li><a href="<?php echo $rootsite; ?>core/achat/facture/index.facture.php">Liste des Factures</a></li>
							<li><a href="<?php echo $rootsite; ?>core/achat/facture/nouv.facture.php">Nouvelle Facture</a></li>
							<li><a href="<?php echo $rootsite; ?>core/achat/facture/">Modifier une Facture</a></li>
							<li><a href="<?php echo $rootsite; ?>core/achat/facture/">Supprimer une Facture</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="">
				<a href="javascript:;">
					<i class="fa fa-shopping-cart"></i>
					<span class="title">Ventes</span>
					<span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li><a href="<?php echo $rootsite; ?>core/vente/">Tableau de Bord des Ventes</a></li>
					<li>
						<a href="javascript:;"><span class="title">Devis Client</span><span class="arrow "></span></a>
						<ul class="sub-menu">
							<li><a href="<?php echo $rootsite; ?>core/vente/devis/">Liste des Devis client</a></li>
							<li><a href="<?php echo $rootsite; ?>core/vente/devis/nouv.devis.php">Nouveau Devis</a></li>
							<li><a href="<?php echo $rootsite; ?>core/vente/devis/">Modifier un Devis</a></li>
							<li><a href="<?php echo $rootsite; ?>core/vente/devis/">Supprimer un Devis</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:;"><span class="title">Commande client</span><span class="arrow "></span></a>
						<ul class="sub-menu">
							<li><a href="<?php echo $rootsite; ?>core/vente/commande/">Liste des Commandes</a></li>
							<li><a href="<?php echo $rootsite; ?>core/vente/commande/nouv.commande.php">Nouvelle Commande</a></li>
							<li><a href="<?php echo $rootsite; ?>core/vente/commande/">Modifier une Commande</a></li>
							<li><a href="<?php echo $rootsite; ?>core/vente/commande/">Supprimer une Commande</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:;"><span class="title">Bon de Livraison client</span><span class="arrow "></span></a>
						<ul class="sub-menu">
							<li><a href="<?php echo $rootsite; ?>core/vente/livraison/">Liste des livraison</a></li>
							<li><a href="<?php echo $rootsite; ?>core/vente/livraison/nouv.livraison.php">Nouvelle livraison</a></li>
							<li><a href="<?php echo $rootsite; ?>core/vente/livraison/">Modifier une livraison</a></li>
							<li><a href="<?php echo $rootsite; ?>core/vente/livraison/">Supprimer une livraison</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:;"><span class="title">Facture client</span><span class="arrow "></span></a>
						<ul class="sub-menu">
							<li><a href="<?php echo $rootsite; ?>core/vente/facture/">Liste des Factures</a></li>
							<li><a href="<?php echo $rootsite; ?>core/vente/facture/nouv.facture.php">Nouvelle Facture</a></li>
							<li><a href="<?php echo $rootsite; ?>core/vente/facture/">Modifier une Facture</a></li>
							<li><a href="<?php echo $rootsite; ?>core/vente/facture/">Supprimer une Facture</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="">
				<a href="javascript:;">
					<i class="fa fa-eur"></i>
					<span class="title">Tresorerie</span>
					<span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li><a href="<?php echo $rootsite; ?>core/tresorerie/caisse/">Gestion des Caisses</a></li>
					<li><a href="<?php echo $rootsite; ?>core/tresorerie/tpe/">Gestion des Terminaux de Paiement</a></li>
					<li><a href="<?php echo $rootsite; ?>core/tresorerie/traite/">Gestion des Traites et Prélevement</a></li>
					<li><a href="<?php echo $rootsite; ?>core/tresorerie/cpt/">Gestion des Comptes Bancaires</a></li>
					<hr />
					<li><a href="<?php echo $rootsite; ?>core/tresorerie/sit_client/">Situation Client</a></li>
					<li><a href="<?php echo $rootsite; ?>core/tresorerie/sit_fournisseur/">Situation Fournisseur</a></li>
					<hr />
					<li><a href="<?php echo $rootsite; ?>core/tresorerie/jo_achat/">Journal des Achats</a></li>
					<li><a href="<?php echo $rootsite; ?>core/tresorerie/jo_vente/">Journal des Ventes</a></li>
					<li><a href="<?php echo $rootsite; ?>core/tresorerie/jo_tresorerie/">Journaux de Trésorerie</a></li>
				</ul>
			</li>
			<li class="">
				<a href="javascript:;">
					<i class="fa fa-eur"></i>
					<span class="title">Outils</span>
					<span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li><a href="<?php echo $rootsite; ?>core/outils/newsletter/">Gestion Newsletter</li></a>
					<li><a href="<?php echo $rootsite; ?>core/outils/support/">Support Ticket</a></li>
					<li><a href="">Interface SAV</a></li>
					<li><a href="">Gestion des Agenda</a></li>
				</ul>
			</li>
			
		<div class="clearfix"></div>
		<!-- END SIDEBAR WIDGETS --> 
	</div>
	</div>
	<!-- BEGIN SCROLL UP HOVER -->
	<a href="#" class="scrollup">Scroll</a>
	<!-- END SCROLL UP HOVER -->
	<!-- END MENU -->
	<!-- BEGIN SIDEBAR FOOTER WIDGET -->
	<div class="footer-widget">		
		<span>Version: 1.0.0</span>
	</div>
	<!-- END SIDEBAR FOOTER WIDGET -->
	<!-- END SIDEBAR --> 
	<!-- BEGIN PAGE CONTAINER-->