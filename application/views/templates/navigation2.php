<nav class="navbar navbar-dark bg-primary" style="background-color: #e3f2fd";>
	<!-- Navbar content -->
	<a class="navbar-brand" href="#">
	<img src="../../assets/img/logo.png" width="30" height="30" alt="">
	Crime Report </a>
	<div class="container justify-content-center" >
		<ul class="nav justify-content-center" style="background-color: #e3f2fd";>
			<li class="nav-item">
				<a class="nav-link active" href="<?php echo base_url() . 'index.php/reports/members'; ?>">HOME</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="http://localhost/crimereport/index.php/pages/about">ABOUT</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">YOUR PROFILE</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="<?php echo base_url() . 'index.php/reports/create'; ?>">REPORT CRIME</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url() . 'index.php/reports/logout'; ?>">LOG OUT</a>
			</li>
		</ul>
	</div>

</nav>
