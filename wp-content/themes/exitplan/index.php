<!DOCTYPE html>
<html lang="da">
<head>

	<title><?php echo get_bloginfo('name'); ?></title>

	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />

</head>
<body>

<nav class="navbar">

	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
			</button>
			<a href="<?php echo get_bloginfo('url'); ?>" class="brand">
				<img src="<?php echo get_template_directory_uri(); ?>/media/imgs/exitplan.png" alt="EXITplan" />
			</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse pull-right">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="#">Målgruppen</a>
				</li>
				<li>
					<a href="#">Info til sagsbehandler</a>
				</li>
				<li>
					<a href="#">Download</a>
				</li>
				<li>
					<a href="#">Historik</a>
				</li>
				<li>
					<a href="#">Kontakt</a>
				</li>
			</ul>
		</div>
	</div>

</nav>

<div class="container-fluid" id="splash">
	<div class="row">
		<div class="col-xs-12">

		</div>
	</div>
</div>

<div class="container-fluid" id="about">
	<div class="row">
		<div class="col-xs-12">

		</div>
	</div>
</div>

<div class="container-fluid" id="next">
	<div class="row">
		<div class="col-xs-12">

		</div>
	</div>
</div>

<footer class="container-fluid" id="footer">
	<div class="row">
		<div class="col-xs-12">

		</div>
	</div>
</footer>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="//localhost:35729/livereload.js"></script>
</body>
</html>
