<!DOCTYPE html>
<head>
	<title>Dynamische Webentwicklung</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="js/main.js"></script> -->
	<script type="text/javascript" src="js/oldschool.js"></script>
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
			<div class="col-md-6 col-sm-8 col-xs-12">
				Ich bin ein Element mit viel Text
			</div>
			<div class="col-md-6 col-sm-4 col-xs-12">
				<img src="https://placehold.it/800x800" class="img-responsive">
			</div>
		</div>
	</section>

	<footer>

	</footer>
</body>