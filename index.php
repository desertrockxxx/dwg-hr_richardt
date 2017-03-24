<?php
require_once "lib/functions.php";

$results = leseDaten();
if(isset($_GET['search'])){			
	$results = getSearchResult($_GET['search'], $results); 
} 


?>
<!DOCTYPE html>
<head>
	<title>Wir testen Bootstrap</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/oldschool.js"></script>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
			<nav class="navbar navbar-default">
    <!-- Titel und Schalter werden für eine bessere mobile Ansicht zusammengefasst -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Navigation ein-/ausblenden</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Bootstrap Test</a>
    </div>
    <!-- Alle Navigationslinks, Formulare und anderer Inhalt werden hier zusammengefasst und können dann ein- und ausgeblendet werden -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home <span class="sr-only">(aktuell)</span></a></li>
				<li><a href="#">Kontakt</a></li> 
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<form class="hide search-form" method="GET" action="index.php">
					<div class="form-group">
						<input type="text" name="search" class="search-field form-control" >
					</div>
				</form>
				<li class="search-list"><a onclick="checkField();" href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>
			</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
		</div>
		</div>
	</header>

	<section class="container">
		<div class="row">
			
			<?php foreach($results as $einzelbeitrag){ ?>
				<div class="box-height col-md-4 col-sm-6 col-xs-12">
					<div class="img">
						<img src="<?php echo $einzelbeitrag['bild']; ?>" class="img-responsive">
					</div>
					<div class="meta">
					<?php echo date("d.m.Y", strtotime($einzelbeitrag['erstellt'])); ?>
					</div>
					<h1>
						<?php echo $einzelbeitrag['titel']; ?>
					</h1>
					<p>
						<?php echo $einzelbeitrag['inhalt']; ?>
					</p>
				</div>
			<?php } ?>
		</div>
	</section>
	<footer>
	</footer>
	
</body>