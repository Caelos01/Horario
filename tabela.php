<!DOCTYPE html>
<html>
<?php include 'conexao.php'; ?>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/icon.png" type="image/png">
	<title>Horário</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

<!--============================ Começo menu lateral ===============================-->

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <center><h3><img src="img/icon.png" alt="icone" class="logo"></h3></center>
        </div>

        <center><ul class="list-unstyled components">
        	<li>
        		<a href="#gerSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Gerar</a>
        		<ul class="collapse list-unstyled" id="gerSubmenu">
					<li>
						<form method="GET" action="#" style="width: 100%; background-color: white">
							<select required id="Dia" name="D" style="width: 100%; color: #34bb34">
							<option value="0">Dia da Semana</option>
							<option value="1" >Segunda</option>
							<option value="2">Terça</option>
							<option value="3">Quarta</option>
							<option value="4">Quinta</option>
							<option value="5">Sexta</option>
							</select>
							<select id="Semestre" required name="ST"s style="width: 100%; color: #34bb34">
								<option>SEMESTRE</option>
								<option value="1">1° SEMESTRE</option>
								<option value="2">2° SEMESTRE</option>
							</select>
							<select id="forma" required name="FV" style="width: 100%; color: #34bb34">
								<option>Forma de Visualização</option>
								<option value="1">SALAS</option>
								<option value="2">TURMAS</option>
							</select>
						<input type="submit" value="Gerar" class="btn" name="infor" style="width: 100%; color: #34bb34">
						</form>

					</li>
				</ul>	
        	</li>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Turmas</a>
                <center><ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#" class="ancora">1º ano</a>
                    </li>
                    <li>
                        <a href="#4" class="ancora">2º ano</a>
                    </li>
                    <li>
                        <a href="#12" class="ancora">3º ano</a>
                    </li>
                </ul></center>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Cadastro</a>
                <center><ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="inserirprof.php">Professores</a>
                    </li>
                    <li>
                        <a href="#">Disciplinas</a>
                    </li>
                    <li>
                        <a href="#">Turmas</a>
                    </li>
                </ul></center>
            </li>
            <li>
                <a href="/horario">Início</a>
            </li>
            <li>
                <a href="gerador.php">Limpar Horario</a>
            </li>
        </ul><center>

    </nav>
</div>

<!--============================ Fim menu lateral ===============================-->

<!--============================ Recado ============================-->

<div class="recado2">
  <div class="recado">
	<center><h3>Esta é a nossa zona de horário, clique em "gerar" para propor um modelo de horário, em "turmas" para navegar na página e "cadastro" para inserir professores, disciplinas e turmas</h3></center>
  </div>
</div>

<!--=========================== Fim recado ============================-->

<!--=========================== Tabela ============================-->

<div class="tabela">
<?php
if (isset($_GET['infor'])) {
	$ds = $_GET['D'];
	$semest = $_GET['ST'];
	$Forma = $_GET['FV'];
	include "incluir.php";
	echo "<script> var dir = document.getElementById('Dia') 
	var semest = document.getElementById('Semestre')
	var Forma = document.getElementById('forma')
			dir.selectedIndex = ".$ds."
			semest.selectedIndex = ".$semest."
			Forma.selectedIndex = ".$Forma."

	</script>";
}
?>
</div>

<!--========================== Fim tabela ==============================-->



		<?php /*	$sql = "SELECT * FROM horarios";
				$query = mysqli_query($conexao, $sql);
				while($resul = mysqli_fetch_array($query)){
							echo "<tr><td>".$resul['Aula']."</td>";
					echo "<td>".$resul['Dia']."</td></tr>";
				}*/?>


	




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
		<script>

		function myFunction(id, aula, sala) {

			var aula = aula;
			var sala = sala;

		  var x = document.getElementById(id).value;
		  var z = document.getElementById(id)
		  var d = document.getElementById("Dia").value;
		  var dados = new FormData();
		  z.style.background = "white";
			dados.append('professor',  x);
			dados.append('aula', aula);
			dados.append('sala', sala);
			dados.append('dia', d);

			$.ajax({
		 	url: 'controle.php',
		 	method: 'post',
		 	data: dados,
		 	processData: false,
			 contentType: false
			}).done(function(resposta){
				if (resposta == 1) {
					z.style.background = "red";}
		 	
			});
		}
</script>

<!-- Menu Effects -->
<script>	      
	var $doc = $('html, body');
	$('.ancora').click(function() {
	    $doc.animate({
	        scrollLeft: $( $.attr(this, 'href') ).offset().left
	    }, 500);
	    return false;
	});
</script>


</body>
</html>