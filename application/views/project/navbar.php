
</head>
<body>
	<header>
	<div>
		<div class="modal s12" id="modalsign">
			<div class="modal-content">
							<div class="row">
								<div class="col s12">
									<div class="">
										<h4>Sign Up Form</h4>
									</div>
								</div>
							</div>
							<div class="row">
								<form class="col s12">
									<div class="row">
										<div class="input-field col s12">
											<input name="fullname" type="text" id="full_name" class="validate" >
											<label for="full_name" class="active">Full Name</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s12">
											<input name="username" type="text" id="user_name" class="validate" >
											<label for="user_name">User Name</label>
										</div>
									</div>

									<div class="row">
										<div class="input-field col s6">
											<input type="password" name="password1" id="password1" class="validate">
											<label for="password1">Password</label>
										</div>
										<div class="input-field col s6">
											<input type="password" name="password" id="passwd" class="validate">
											<label for="passwd">Confirm Password</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s4">
											<input type="text" name="alamat" id="alamat" >
											<label for="alamat">Alamat</label>
										</div>
										<div class="input-field col s4">
											<input type="text" name="kota" id="kota">
											<label for="kota">Kota</label>
										</div>
										<div class="input-field col s4">
											<input type="text" >
											<label for="no_telepon">NO Telp</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s12">
											<input type="email" id="email" class="validate">
											<label for="email">Email</label>
										</div>
									</div>
									<div class="row">
										<button class="waves-effect waves-light btn " type="submit" name="action">Submit</button>
									</div>
								</form>
							</div></div>
		</div>
		<div class="modal s12" id="modallog">
			<div class="modal-content">
							<div class="row">
								<div class="col s12">
									<div class="">
										<h4>Log In</h4>
									</div>
								</div>
							</div>
							<div class="row">
								<form class="col s12">
									<div class="row">
										<div class="input-field col s12">
											<input name="username" type="text" id="user_name" class="validate" >
											<label for="user_name">User Name</label>
										</div>
									</div>

									<div class="row">
										<div class="input-field col s12">
											<input type="password" name="password1" id="password1" class="validate">
											<label for="password1">Password</label>
										</div>
									</div>
									<div class="row">
										<button class="waves-effect waves-light btn " type="submit" name="action">Submit</button>
									</div>
								</form>
							</div></div>
		</div>
		<nav>
			<div class="nav-wrapper">
				<a href="<?php site_url('homepage/home') ?>" class="brand-logo left"><img src="<?php echo base_url("assets/image/Untitled-1.png") ?>" class="img-nav responsive-img"></a>
				<a href="#" class="button-collapse" data-activates="mobile-demo"><i class="mdi-navigation-menu"></i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="#modalsign"  class="modal-trigger">Sign UP</a></li>
					
				</ul>
				<div class="hide-on-med-and-down">
					<form action="#" class="right">
						<div class="row">
							<div class="input-field col s2 offset-s6">
								<i class="mdi-action-account-circle white-text prefix navb"></i>
								<input placeholder="username" type="text" id="user" class="validate">
							</div>
							<div class="input-field col s2">
								<i class="mdi-content-create white-text prefix navb"></i>
								<input placeholder="pass" type="password" id="pass" class="validate">
							</div>
							<div class="col s2">
								<button class="waves-effect waves-light btn-flat btn-small white-text" type="submit">Log In</button>
							</div>	
						</div>
					</form>
				</div>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="#modallog" class="modal-trigger">Log In</a></li>
					<li><a href="#modalsign" class="modal-trigger">Sign UP</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.modal-trigger').leanModal();
		});
	</script>
	</header>