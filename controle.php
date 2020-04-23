<?php
include"conexao.php";

$professor = $_POST['professor'];
$prof = explode(" - ", $professor);
$sala = "Sala".$_POST['sala'];
$classe = $_POST['sala'];
$aula = $_POST['aula'];
$dia = $_POST['dia'];
$id = $_POST['id'];




$teste = "SHOW COLUMNS FROM horarios";
$querida = mysqli_query($conexao, $teste);
$queridinha = array();
while($row = mysqli_fetch_array($querida)){
	$queridinha[] = $row;
   
}

$choque = 0;

$pesquisa = "SELECT * FROM horarios WHERE Aula = '$aula' AND '$dia' = Dia";
$queri = mysqli_query($conexao, $pesquisa);
while ($result = mysqli_fetch_assoc($queri)) {
	foreach ($queridinha as $pois) {
	 $a = $pois['Field'];
	 $aa = $result[$a];
	 if ($aa != null AND $a != "Dia" AND $a != "Aula" AND $a != "id") {
	 	$x = explode(" - ", $result[$a]);

 		if ($x[1] == $prof[1] AND $a != $sala) {
		$choque++;
	}
	 }
	 

}
	
}

if ($choque == 0) {
	$sql = "UPDATE horarios SET $sala = '$professor' WHERE Aula='$aula' AND Dia = '$dia' ";
    $query = mysqli_query($conexao, $sql);
    echo "1";
}else{
	echo $id.", ".$aula.", ".$classe;
}



?>