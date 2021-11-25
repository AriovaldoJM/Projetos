<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="<?= base_url("") ; ?>public/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">AdminLTE 3</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
							with font-awesome or any other icon font library -->
				
				<li class="nav-item">
					<a href="<?php echo base_url('admin/home'); ?>" class="nav-link <?= ($page === 'home') ? 'active' : '' ?>">
						<i class="nav-icon fas fa-home"></i>
						<p>Home</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('admin/leads'); ?>" class="nav-link <?= ($page === 'leads') ? 'active' : '' ?>"> 
						<i class="nav-icon fas fa-envelope"></i>
						<p>Leads</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('admin/tabela'); ?>" class="nav-link <?= ($page === 'tabela') ? 'active' : '' ?>">
						<i class="nav-icon fas fa-table"></i>
						<p>Qual sua necessidade?</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>