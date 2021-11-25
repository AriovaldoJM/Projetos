<!DOCTYPE html>
<html lang="pt-BR">
<?php $this->load->view('admin/template/head'); ?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

	<?php $this->load->view('admin/template/navbar') ; ?>
	<?php $this->load->view('admin/template/sidebar') ; ?>
	
	<div class="content-wrapper">
		<?php $this->load->view("admin/pages/$page"); ?> 
	</div>

	<?php $this->load->view('admin/template/footer') ; ?>
</div>

<?php $this->load->view('admin/template/scripts'); ?> 
</body>
</html>
