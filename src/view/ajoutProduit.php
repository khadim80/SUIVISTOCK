<?php 
require_once'../../header.php';
require_once"../../header2.php";
require_once"../../menu.php";
?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Ajout Produit</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="accueil">Accueil</a></li>
									<li class="breadcrumb-item active" aria-current="page">Ajout Produit</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Ajout d'un produit</h4>
						</div>
						<div class="pull-right">
							<a href="#basic-form1" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<form action="ProduitController" method="POST">
						<div class="form-group">
							<label >Reference</label>
							<input class="form-control" type="text" placeholder="Reference" name="ref"  required>
						</div>
						<div class="form-group">
							<label>Nom</label>
							<input class="form-control" placeholder="Nom" type="text" name="nom"  required>
						</div>
						<div class="form-group">
							<label>Stock</label>
							<input class="form-control" placeholder="Quantite stock" type="number" min="0" name="stock"  required>
						</div>
						<div class="input-group mb-0">
							<input class="btn btn-primary btn-lg scroll-click" type="submit" value="Ajouter" name="btnAjout">
						</div>
						
					</form>
				</div>
			</div>
			<?php require_once'../../footer.php';?>
		</div>
	</div>
	<!-- js -->
	<script src="public/template/deskapp/vendors/scripts/core.js"></script>
	<script src="public/template/deskapp/vendors/scripts/script.min.js"></script>
	<script src="public/template/deskapp/vendors/scripts/process.js"></script>
	<script src="public/template/deskapp/vendors/scripts/layout-settings.js"></script>
</body>
</html>