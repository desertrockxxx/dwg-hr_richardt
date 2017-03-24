<?php 
// Wird nur einmal eingebunden
// include macht einfach weiter, require gibt FATAL ERROR wenn nix gefunden
require_once "lib/functions.php";
?>

<!DOCTYPE html>
<head>
	<title>Dynamische Webentwicklung</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="js/oldschool.js"></script> -->
	<script type="text/javascript" src="js/main.js"></script>
</head>

<body>
	<header>
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-default">
					
		    <!-- TITEL und SCHALTER werden für bessere mobile Ansicht zusammengefasst -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Navigation ein-/ausblenden</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Bootstrap Test</a>
		    </div>
		    
		    <!-- NAVigationslinks, FORMulare und andere Inhalte können ein- und ausgeblendet werden -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
					<!-- NAV RIGHT -->		
					<ul class="nav navbar-nav navbar-left">
						<li class="active"><a href="#">Home <span class="sr-only">(aktuell)</span></a></li>
						<li><a href="#">Kontakt</a></li> 
					</ul>
					<!-- NAV RIGHT END -->		
					
					<!-- NAV LEFT -->		
					<ul class="nav navbar-nav navbar-right">
						<!-- class hide versteckt Form-->
						<li>
							<!-- FORM -->
							<form class="hide search-form" method="GET" action="index.html">
								<div class="form-group">
									<input type="text" name="search" class="search-field">
								</div>
							</form>
							<!-- FORM END -->
						</li>
						<li><a onClick="checkField();" href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>
						<!-- NAV LEFT END -->	

					</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</header>

	<section class="container">
		<div class="row">
			<!-- leseDaten() ist in diesem Fall ein Array -->
			<?php foreach(leseDaten() as $einzelBeitrag){ ?>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="img">
						<img src="<?php echo $einzelBeitrag['bild']; ?>" class="img-responsive">
					</div>
					<div class="meta">
						<?php echo date("d.m.Y", strtoTime($einzelBeitrag['erstellt'])); ?>
					</div>	
					<h1>
						<?php echo $einzelBeitrag['titel'];?>
					</h1>
					<p>
						<?php echo $einzelBeitrag['inhalt'];?>
					</p>
				</div>
			<?php } ?>
		</div>
	</section>
	
	<p>PRINT_R</p>
	<?php print_r(searchForWord("Bild2", leseDaten())); ?>
	
	<footer>
	</footer>
</body>