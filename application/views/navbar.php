
<!--	<p><?php //echo $user;?></p>
			<div class="span12">
				
				 <ul class="nav nav-tabs">
					<li><a href="<?php //echo base_url().'Inicio' ?>">Inicio</a></li>
					<li><a href="<?php //echo base_url().'Usuario' ?>">Usuario</a></li>
					<li><a href="<?php  //echo base_url().'Roles' ?>">Roles</a></li>
					<li><a href="<?php  //echo base_url()?>login/logout">Cerrar Sesión</a></li>
				</ul>
			</div>
		</di
-->

<header class="site-header">
				<div class="top-header">
					<div class="container">
						
						
						<nav class="member-navigation pull-right">
							<a href="#"><i class="fa fa-user"></i><?php echo $user;?></a>
							
						</nav> <!-- .member-navigation -->
					</div> <!-- .container -->
				</div> <!-- .top-header -->

				<div class="bottom-header">
					<div class="container">
						<a href="<?php echo base_url().'Inicio' ?>" class="branding pull-left">
							<img src="<?php echo base_url().'img/logo-icon.png' ?>" alt="Site title" class="logo-icon">
							<h1 class="site-title">Project <span>SUAB</span></h1> 
							<h2 class="site-description"></h2>
						</a> <!-- #branding -->
						
						<nav class="main-navigation pull-right">
							<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="menu-item"><a href="<?php echo base_url().'Inicio' ?>">Inicio</a></li>
								<li class="menu-item"><a href="<?php echo base_url().'Usuario' ?>">Usuario</a></li>
								<li class="menu-item"><a href="<?php  echo base_url().'Roles' ?>">Roles</a></li>
								<li class="menu-item"><a href="<?php  echo base_url().'Upload' ?>">Subir Archivos</a></li>
								<li class="menu-item"><a href="<?php  echo base_url()?>login/logout">Cerrar Sesión</a></li>
							</ul>
						</nav> <!-- .main-navigation -->
					</div> <!-- .container -->
				</div> <!-- .bottom-header -->
			</header> <!-- .site-header -->
			<main class="content">

				<div class="fullwidth-block feature-section">
					<div class="container">
						<div class="row">