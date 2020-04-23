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




<?php 
include "conexao.php";


$professor = "SELECT * FROM tb_professores";
$diciplina = "SELECT * FROM tb_diciplina";
$turmas = "SELECT * FROM tb_turmas";

$prof = mysqli_query($conexao, $professor);
$dicip = mysqli_query($conexao, $diciplina);
$tur = mysqli_query($conexao, $turmas);

$pro = array();
while ($row = mysqli_fetch_array($prof)) {
$pro[] = $row;
}
$dic = array();
while ($row = mysqli_fetch_array($dicip)) {
$dic[] = $row;
}
$turmas = array();
while ($row = mysqli_fetch_array($tur)) {
$turmas[] = $row;
}


?>
		<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="banner_content">
							<form method="POST" action="cadastrar.php">
								<h2>Nome do Professor</h2>
								<input type="text" name="nomepro"><br>
								<label><h2>Professor Diretor de Turma:</h2></label>
								<input type="checkbox" name="dt" value="1"><br>
								<input type="submit" name="cadprofessor">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>




</body>

</html>