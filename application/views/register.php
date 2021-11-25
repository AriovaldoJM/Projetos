<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminLTE 3 | Registration Page</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('public/admin/plugins/fontawesome-free/css/all.min.css'); ?>">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url('public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('public/admin/dist/css/adminlte.min.css'); ?>">
</head>

<body class="hold-transition register-page">
	<div class="register-box">
		<div class="register-logo">
			<a><b></b> </a>
		</div>
		<div class="card">
			<div class="card-body register-card-body">
				<p class="login-box-msg">Vamos lá?</p>
				
				<form action="<?= base_url('admin/register'); ?>" method="post">
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="nome-admin" placeholder="Nome completo">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-user"></span>
							</div>
						</div>
					</div>
					<?php echo form_error('nome-admin')?>
					<div class="input-group mb-3">
						<input type="email" class="form-control" name="email-admin" placeholder="Email">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					<?php echo form_error('email-admin')?>
					<div class="input-group mb-3">
						<input type="password" class="form-control" name="senha-admin" placeholder="Senha">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<?php echo form_error('senha-admin')?>
					<div class="input-group mb-3">
						<input type="password" class="form-control" name="confirma-senha-admin" placeholder="Repita a senha">
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-lock"></span>
							</div>
						</div>
					</div>
					<?php echo form_error('confirma-senha-admin')?>
					<div class="row">
						<div class="col-8">
							<div class="icheck-primary">
								<a href="../login" class="text-center">Já tenho cadastro!</a>
							</div>
						</div>
						<!-- /.col -->
						<div class="col-4">
							<button type="submit" class="btn btn-primary btn-block">Registrar</button>
						</div>
						<!-- /.col -->
						<div class="col-12">
						<?php
							if(validation_errors()){
								echo validation_errors();
							}
							?>
						</div>
					</div>
				</form>
			<!-- /.form-box -->
		</div><!-- /.card -->
	</div>
	<!-- /.register-box -->

	<!-- jQuery -->
	<script src="<?= base_url('public/admin/plugins/jquery/jquery.min.js'); ?>"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('public/admin/dist/js/adminlte.min.js'); ?>"></script>
</body>
</html>
