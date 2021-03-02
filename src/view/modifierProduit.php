<?php 
require_once'../../header.php';
require_once"../../header2.php";
require_once"../../menu.php";
require_once"../model/Produitdb.php";
if (!(isset($_GET['edit'])))
{
   header('Location:accueil');
}
?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Modification d'un Produit</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="accueil">Accueil</a></li>
									<li class="breadcrumb-item active" aria-current="page">Modifier Produit</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
                <!-- Default Basic Forms Start -->
                <?php $produit=getProduitById($_GET['edit']);?>
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">edition du Produit <b> <? echo $produit['idProduit']?></b> </h4>
						</div>
						<div class="pull-right">
							<a href="#basic-form1" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<form action="ProduitController" method="POST">
						<div class="form-group" hidden>
							<label >ID</label>
							<input hidden class="form-control" type="text" value="<?= $produit['idProduit']?>" name="id" required>
						</div>
						<div class="form-group">
							<label >Reference</label>
							<input class="form-control" type="text" value="<?= $produit['ref']?>" name="ref1"  required>
						</div>
						<div class="form-group">
							<label>Nom</label>
							<input class="form-control" type="text" value="<?=$produit['nom']?>" name="nom1"  required>
						</div>
						<div class="form-group">
							<label>Stock</label>
							<input class="form-control" type="text" min="0" value="<?= $produit['qtStock']?>" name="stock1"  required>
						</div>
						<div class="input-group mb-0">
							<input class="btn btn-primary btn-lg scroll-click" type="submit" value="Modifier" name="btnModifier">
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