<body>
	<header>
	<div>
		<nav>
			<div class="nav-wrapper blue darken-3">
				<a href="<?php echo site_url('homeadmin/index') ?>" class="brand-logo center"><img src="<?php echo base_url("assets/image/Untitled-1.png") ?>" class="img-nav responsive-img"></a>
				<a href="#" class="button-collapse" data-activates="mobile-demo"><i class="mdi-navigation-menu"></i></a>
				<ul class="left hide-on-med-and-down">
					<li><a href="<?php echo site_url('homeadmin/buat_artikel') ?>">Buat Artikel</a></li>
					<li><a href="<?php echo site_url('homeadmin/pertanyaan') ?>">Pertanyaan</a></li>
					<li><a href="<?php echo site_url('homeadmin/tambah_donatur') ?>">Tambah Donatur</a></li>
				</ul>
				<ul class="right hide-on-med-and-down">
					<li>
						<a href="<?php echo site_url('homeadmin/logout') ?>"><i class="mdi-navigation-close"></i>
						</a>
					</li>
					<li><a href="#"><?php //// nama is here ?></a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a>New Message</a></li>
					
				</ul>
			</div>
		</nav>
	</div>
	</header>