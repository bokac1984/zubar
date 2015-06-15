<!DOCTYPE html>
<html>
	<head>
		<title>Laboratorija - Kecman Stomatologija</title>
		
		<!-- metas -->
		<meta charset="utf-8">        
		<meta name="author" content="Djordje Hrnjez">
		<meta name="keywords" content="kecman stomatologija">
		<meta name="description" content="Stomatoloska ordinacija Kecman">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<!--/ metas -->
        
        <!-- links -->
        <link rel="shortcut icon" href="favicon.ico" />
        <!--/ links -->
		
		<!-- styles -->
		<link rel="stylesheet" type="text/css" href="css/layerslider.css">
		<link rel="stylesheet" type="text/css" href="css/fullwidth/skin.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link rel="stylesheet" type="text/css" href="css/color-cyan.css">		
		<!--/ styles -->
		
		<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
	</head>
	
	<body>
		<div class="page">

			<!-- page header -->
			<header class="page-header main-page sticky">
				<div class="sticky-wrapp">
					<div class="sticky-container">
						<!-- logo -->
						<section id="logo" class="logo">
							<div>
								<a href="index.php"><img src="img/cyan/logo.png" alt="Kecman" width="190" height="50"></a>
							</div>
						</section>
						<!--/ logo -->
						
						<!-- main nav -->
						<?php 
							$typeActive = 4;
							include("includes/main-nav.php"); 
						?>
						<!--/ main nav -->
						
						<!-- mobile nav -->
						<?php include("includes/mobile-nav.php"); ?>
						<!--/ mobile nav -->
					</div>
				</div>
			</header>
			<!--/ page header -->
			
			<!-- quick search -->
			<?php include("includes/quick-order.php"); ?>
			<!--/ quick search -->

			<!-- page title -->
			<section class="page-title">
				<div class="grid-row clearfix">
					<h1>Zubna Laboratorija</h1>					
					<nav class="bread-crumbs">
						<a href="index.php">Početna</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="#">Laboratorija</a>
					</nav>
				</div>
			</section>
			<!--/ page title -->

			<main class="page-content">
				<div class="grid-row">
					<div class="grid-col grid-col-9">

						<!-- list -->
						<div><a class="widget-title" name="section1">IPS E.Max Press</a></div>						
						<p>IPS E.Max Press je bezmetalni sistem koji krunicama obezbjeđuje transparenciju najsličniju prirodnom zubu. Koristi se za izradu krunica u estetskoj regiji, inleja, onleja, faseta, tročlanih prednjih i bočnih mostova do regije drugog premolara, suprastruktura na implantatima, te minimalno invazivnih, adhezivnih restauracija u bočnom segmentu. Prednost ovog sistema su minimalna invazivnost, gingivalno zdravlje, relativno laka procedura i niski troškovi izrade. Fasetirana keramika za Press i cirkon dioksid korove, E.Max Ceram, obezbjeđuje finalni estetski izgled nadoknadama.</p>
                        <br>                     						
						<!--/ list -->						
						<!-- list -->
						<div><a class="widget-title" name="section2">Cirkonijum Dioksidna Keramika</a></div>					
						<p>Osnovu od cirkondioksidne keramike koristimo kada su indikovane nadoknade veće čvrstoće uz zahtjev za vrhunski estetski efekat. Čvrstoća na savijanje cirkonijum dioksid krunice u kombinaciji sa E.Max keramikom iznosi čak 1200 Mpa, a vrhunske estetske karakteristike ostaju imperativ kao i kod potpuno keramičkih krunica. U bočnoj regiji se može izraditi krunica isključivo od cirkon dioksidne keramike (monolitna), a u prednjoj regiji se kapica (core) boji fasetnom keramikom (E.Max). Materijal je biokompatibilan, nema alergijskih reakcija, stoga se preporučuje kod pacijenata alergičnih na legure metala. Za fasetiranje ovih krunica u našoj laboratoriji koristimo E.max Ceram keramiku.</p><br>
						<!--/ list -->
                        <!-- list -->
						<div><a class="widget-title" name="section3">Metalkeramički Sistem</a></div>					
						<p>Predstavlja klasično rješenje za slučajeve nedostatka jednog ili više zuba. Na metalnu leguru (Co-Cr, Ti ili Au) se nanosi keramika čime se postiže estetski dobar izgled krunica. Fasetiranje metalnih konstrukcija izvodimo IPS In.Line keramikom. Rezultat rada ovom keramikom je izuzetna preciznost u dobijanju boje zahvaljujući dobrim optičkim svojstvima i jednostavnosti izrade. Sistem sadrži dodatne materijale za dobijanje posebnih efekata (opalescencije, translucencije), te karakterizaciju boje. Pokazuje optimalna svojstva pri sinterovanju. IPS keramički materijali (In.Line, E.Max) daju nadoknadama jednaku toplu boju, kao i iste vrijednosti zasićenosti i sjajnosti.</p><br>
						<!--/ list -->                        
					</div>
					<div class="grid-col grid-col-3">

						<!-- categories -->
						<section class="widget widget-sevices">
							<div class="widget-title">Usluge</div>
							<ul>
								<li><i class="fa fa-bookmark"></i><a href="#section1">IPS E.Max Press</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#section2">Cirkonijum Dioksidna Keramika</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#section3">Metalkeramički Sistem</a></li>
							</ul>
						</section>
						<!--/ categories -->

						<!-- ask us -->
                        <?php include("includes/widget-ask-us.php"); ?>
                        <!--/ ask us -->
					</div>
				</div>
			</main>

			<!-- page footer -->
			<?php include("includes/footer.php"); ?>
			<!--/ page footer -->
			
			<!-- copyrights -->
			<?php include("includes/copyrights.php"); ?>
			<!--/ copyrights -->

		</div>
		
		<!-- scripts -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/jquery.migrate.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox-media.js"></script>
		<script type="text/javascript" src="js/jquery.flot.js"></script>
		<script type="text/javascript" src="js/jquery.flot.pie.js"></script>
		<script type="text/javascript" src="js/jquery.flot.categories.js"></script>
		<script type="text/javascript" src="js/greensock.js"></script>
		<script type="text/javascript" src="js/layerslider.transitions.js"></script>
		<script type="text/javascript" src="js/layerslider.kreaturamedia.jquery.js"></script>

	<!-- Superscrollorama -->		
		<script type="text/javascript" src="js/jquery.superscrollorama.js"></script>
		<script type="text/javascript" src="js/TweenMax.min.js"></script>
		<script type="text/javascript" src="js/TimelineMax.min.js"></script>
	<!--/ Superscrollorama -->
	
		<script type="text/javascript" src="js/jquery.ui.core.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.tabs.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-tabs-rotate.js"></script>
		<script type="text/javascript" src="js/jquery.ui.accordion.min.js"></script>
		<script type="text/javascript" src="js/jquery.tweet.js"></script>
	<!-- EASYPIECHART -->
		<script type="text/javascript" src="js/jquery.easypiechart.js"></script>
	<!--/ EASYPIECHART -->
		<script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
		<!--/ scripts -->
		
	</body>
</html>