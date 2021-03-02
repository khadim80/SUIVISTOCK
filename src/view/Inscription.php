<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../../public/template/deskapp/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../../public/template/deskapp/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../../public/template/deskapp/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="public/template/deskapp/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="public/template/deskapp/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="public/template/deskapp/src/plugins/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" type="text/css" href="public/template/deskapp/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="index">
					<img src="public/template/deskapp/vendors/images/deskapp-logo.svg" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="index">Se connecter</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="public/template/deskapp/vendors/images/register-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
								<p><?php
									if (isset($_GET['erreurmdp'])){
										echo '<center><p style="color:red" align="center">Les mots de passe ne sont pas identiques !<p></center>';									
									}
								?></p>
								<div class="login-title">
									<h2 class="text-center text-primary">Inscription</h2>							
								</div>
								<!-- <section> -->
								<form class="tab-wizard2 wizard-circle wizard" action="UserController" method="POST">
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Nom*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="nom" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Prenom*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="prenom" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Addresse Email*</label>
											<div class="col-sm-8">
												<input type="email" class="form-control" name="email"required>
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Mot de pase*</label>
											<div class="col-sm-8">
												<input type="password" class="form-control" name="mdp" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Confirm Password*</label>
											<div class="col-sm-8">
												<input type="password" class="form-control" name="mdp1" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Etat*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="etat" required>
											</div>
										</div>
									</div>
								<!-- </section> -->
									<div class="input-group mb-0">
										<input class="btn btn-primary btn-lg btn-block" type="submit" value="Valider" name="btnInscrire">
									</div>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html Start -->
	
	<!-- <button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static" name="btnInscrire">Launch modal</button> -->
	<!-- <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered max-width-400" role="document">
			<div class="modal-content">
				<div class="modal-body text-center font-18">
					<h3 class="mb-20">Form Submitted!</h3>
					<div class="mb-30 text-center"><img src="public/template/deskapp/vendors/images/success.png"></div>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				</div>
				<div class="modal-footer justify-content-center">
					<a href="login.html" class="btn btn-primary">Done</a>
				</div>
			</div>
		</div>
	</div> -->
	<!-- success Popup html End -->
	<!-- js -->
<!--script src="public/template/deskapp/vendors/scripts/core.js"></script-->
	<script src="public/template/deskapp/vendors/scripts/script.min.js"></script>
	<script src="public/template/deskapp/vendors/scripts/process.js"></script>
	<script src="public/template/deskapp/vendors/scripts/layout-settings.js"></script>
	<script src="public/template/deskapp/src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="public/template/deskapp/vendors/scripts/steps-setting.js"></script>
</body>

</html>