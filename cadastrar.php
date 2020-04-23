<?php
include "conexao.php";
if (isset($_POST['cadprofessor'])) {
	$nomepro = $_POST['nomepro'];
	if (isset($_POST['dt'])) {
		$dt = $_POST['dt'];
	}else{
		$dt = 0;
	}
	
	$query = "INSERT INTO tb_professores(pro_nome, pro_dt) VALUES('$nomepro', '$dt')";
	$sql = mysqli_query($conexao, $query);
	header("Location: index.php");
}


?>