
	<!DOCTYPE html>
	<html lang="pt-BR">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminLTE 3 | Log in</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url("public/admin/plugins/fontawesome-free/css/all.min.css"); ?>">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url("public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css"); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url("public/admin/dist/css/adminlte.min.css"); ?>">
	</head>
	<body class="hold-transition login-page">
	<div class="login-box">
	<div class="login-logo">
		<a><b>Bem-vindo ao loggin</b></a>
	</div>
	<!-- /.login-logo -->
	<div class="card">
		<div class="card-body login-card-body">
			<p class="login-box-msg">Vamos lá?</p>

			<form action="<?= base_url('login'); ?>" method="post">
				<div class="input-group mb-3">
					<input type="email" class="form-control" name="email-admin" placeholder="Email" value="<?= set_value('email-admin') ?>">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<?php echo form_error('email-admin')?>
				<div class="input-group mb-3">
					<input type="password" class="form-control" name="senha-admin" placeholder="Password" >
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<?php echo form_error('senha-admin')?>
				<p class="text-danger mb-2"><?= isset($senha) ? $senha : ''?></p>
				<div class="row">
				

				<!-- RETIRADO POR FALTA DE NECESSIDADE NO MOMENTO, MOTIVO: O USUARIO ENTRA EM CONTATO COM ADMINISTRADOR PARA VERIFICAR SENHA -->
					<!-- <div class="col-8">
						<p class="mb-1">
							<a href="forgot-password.html">Esqueci minha senha</a>
						</p>
						<p class="mb-0">
							<a href="admin/register" class="text-center">Ainda não tenho registro!</a>
						</p>
					</div> -->
					<!-- /.col -->
					<div class="col-4">
						<button type="submit" class="btn btn-primary btn-block">Entrar</button>
					</div>
					<!-- /.col -->
				</div>
			</form>
		</div>
		<!-- /.login-card-body -->
	</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?= base_url("public/admin/plugins/jquery/jquery.min.js"); ?>"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url("public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"); ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url("public/admin/dist/js/adminlte.min.js"); ?>"></script>
	</body>
	</html>
