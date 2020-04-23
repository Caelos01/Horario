<!doctype html>
<html lang="en">

<head>
	<!-- Meta tags requeridas -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/icon.png" type="image/png">
	<title>Horário</title>
	<!-- Bootstrap e CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<!-- Estilo css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">


	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<!--================ Começo header =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/icon.png" alt="icone" class="logo"></a>
					<button class="navbar-toggler btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item"><a class="nav-link" href="#">Início</a></li>
							<li class="nav-item"><a class="nav-link ancora" href="#sobre">Sobre</a></li>
							<li class="nav-item"><a class="nav-link ancora" href="#contato">Contato</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle ancora" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false" href="#equipe">Nossa equipe</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="#equipe">Carlos Antônio</a></li>
									<li class="nav-item"><a class="nav-link" href="#equipe">Vinícius Uchoa</a></li>
									<li class="nav-item"><a class="nav-link" href="#equipe">Lara Hevelly</a></li>
								</ul>
							</li>
							<li class="nav-item active"><a class="nav-link" href="tabela.php">Entrar</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>	
	</header>

	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="banner_content">
							<h1>Cadastro de Professores</h1>
							<form method="POST" action="cadastrar.php">
							<label>NOME DO PROFESSOR</label>
								<input type="name" name="nomepro" placeholder="Nome e sobrenome"><br>
								<label>Diretor de turma:</label>
								<input type="checkbox" value="1" name="dt"><br>
								<input type="submit"  name="professor">
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<footer class="footer_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<a href="#">
								<img src="img/redes.png" alt="redes" style="max-width: 150px;">
							</a>
							<h4>Siga nossas redes sociais</h4>
						</div>
						<div class="footer_social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Carlos Alencar, Vinícius Uchoa & Lara Hevelly
				</p>
			</div>
		</div>

	</footer>
			  
	<!--================ Fim footer =================-->

	<!-- Scripts -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!-- Menu Effects -->
	<script>
		var $doc = $('html, body');
		$('.ancora').click(function() {
		    $doc.animate({
		        scrollTop: $( $.attr(this, 'href') ).offset().top
		    }, 500);
		    return false;
		});
		
		$(document).ready(function(){
		   $(window).on('scroll', function(){
		      if(scrollY > 100){
		         $('.header_area').addClass('scrolled');
		      } else{
		         $('.header_area').removeClass('scrolled');
		      }
		   });
		});
	</script>
</body>

</html>