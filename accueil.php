<?php

	require_once"header.php";
	require_once"header1.php";	
	require_once"menu.php";

?>	
	


	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="public/template/deskapp/vendors/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Bienvenue <div class="weight-600 font-30 text-blue"><?php echo $_SESSION['user']['prenom']." ".$_SESSION['user']['nom'];?></div>
						</h4>
						<p class="font-18 max-width-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non quaerat mollitia animi error corporis.</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xl-2"></div>
				<div class="col-xl-8 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Diagramme</h2>
						<?php
								require_once'src/model/Produitdb.php';
								$noms=array();
								$stocks=array();
								$produits=listProduit();
								foreach ($produits as $p)
								{
								$noms[]=$p['nom'];
								$stocks[]=(int)$p['qtStock'];
								}
								
								json_encode($noms);
								json_encode($stocks);
						?>
						<canvas id="myChart"></canvas>
					</div>
				</div>
				<!--div class="col-xl-4 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Lead Target</h2>
						<div id="chart6"></div>
					</div>
				</div-->
			</div>
			<div class="card-box mb-30">
				<h2 class="h4 pd-20">Liste des produits</h2>
				<table class="data-table table nowrap">
					<thead>
						<tr>
							<th>ID</th>
							<th>Reference</th>
							<th>Nom</th>
							<th>Quantite</th>
							<th class="datatable-nosort">Action</th>
						</tr>
					</thead>
					<tbody>
						<!--lister depuis la base-->
								<?php
							include_once'src/model/Produitdb.php';
							$produits=listProduit();
								foreach ($produits as $p)
								{
									?>
									<tr>
										<td><?= $p['id'] ?></td>
										<td><?= $p['ref'] ?></td>
										<td><?= $p['nom'] ?></td>
										<td><?= $p['qtStock'] ?></td>
										<td>
											<div class="dropdown">
												<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
													<i class="dw dw-more"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
													<a class="dropdownitem" href="modifierProduit?edit=<?php echo $p['idProduit']?>"><i class="dw dw-edit2"></i> Modifier</a>
													<a class="dropdown-item" href="ProduitController?delete=<?php echo $p['idProduit']?>"><i class="dw dw-delete-3"></i> Supprimer</a>
												</div>
											</div>
										</td>
									</tr>
							<?php }?>
					</tbody>
				</table>
			</div>
			<?php require_once'footer.php';?>
		</div>
	</div>
	
	<!-- js -->
	<script src="public/template/deskapp/vendors/scripts/core.js"></script>
	<script src="public/template/deskapp/vendors/scripts/script.min.js"></script>
	<script src="public/template/deskapp/vendors/scripts/process.js"></script>
	<script src="public/template/deskapp/vendors/scripts/layout-settings.js"></script>
	<script src="public/template/deskapp/src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="public/template/deskapp/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="public/template/deskapp/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="public/template/deskapp/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="public/template/deskapp/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="public/template/deskapp/vendors/scripts/dashboard.js"></script>
</body>
</html>

<script>
ctx = document.getElementById('myChart').getContext("2d");

myChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    //labels: [1, 2, 3],
    labels: <?php echo json_encode($noms);?>,
    datasets: [{
      label: "Emails",
      pointRadius: 0,
      pointHoverRadius: 0,
      backgroundColor: [
        '#e3e3e3',
        '#4acccd',
        '#fcc468',
        '#ef8157'
      ],
      borderWidth: 0,
      //data: [342, 480, 530, 120]
      data: <?php echo json_encode($stocks);?>,
    }]
  },

  options: {


    legend: {
	  display: true,
	  position: 'right' 
    },

    pieceLabel: {
      render: 'percentage',
      fontColor: ['white'],
      precision: 2
    },

    tooltips: {
      enabled: true
    },

    scales: {
      yAxes: [{

        ticks: {
          display: false
        },
        gridLines: {
          drawBorder: false,
          zeroLineColor: "transparent",
          color: 'rgba(255,255,255,0.05)'//A MODIFIER
        }

      }],

      xAxes: [{
        barPercentage: 1.6,
        gridLines: {
          drawBorder: false,
          color: 'rgba(255,255,255,0.1)',
          zeroLineColor: "transparent"
        },
        ticks: {
          display: false,
        }
      }]
    },
  }
});
</script>