</label>
<?php
   /*$sqlprof = "SELECT prof.pro_nome, dis.dic_nome FROM tb_professores prof JOIN tb_professores_has_tb_diciplina prod ON prof.pro_id = prod.tb_professores_pro_id JOIN tb_diciplina dis ON dis.dic_id = prod.tb_diciplina_dic_id";*/
   
   $sqlprof = "SELECT tur.tur_nome,tur.tur_serie, tur.tur_sala, prof.pro_nome, dic.dic_nome FROM tb_turmas tur JOIN tb_professores_diciplina_has_tb_turmas tur_dic_prof ON tur.tur_id = tur_dic_prof.tb_turmas_tur_id  JOIN tb_diciplina dic ON dic.dic_id = tur_dic_prof.tb_diciplina_dic_id JOIN tb_professores prof ON prof.pro_id = tur_dic_prof.tb_professores_pro_id";
   /*"SELECT tur.tur_nome,tur.tur_serie, tur.tur_sala, prof.pro_nome, dic.dic_nome FROM tb_turmas tur JOIN tb_professores_diciplina_has_tb_turmas tur_dic_prof ON tur.tur_id = tur_dic_prof.tb_turmas_tur_id JOIN tb_professores prof ON prof.pro_id = tur_dic_prof.tb_professores_pro_id JOIN tb_diciplina dic ON dic.dic_id = tur_dic_prof.tb_diciplina_dic_id";*/
   
   $queryprof = mysqli_query($conexao, $sqlprof);
   $resultset = array();
   while ($row = mysqli_fetch_array($queryprof)) {
    $resultset[] = $row;
   
   }
         $sqlproftec = "SELECT * FROM tb_turmas JOIN tb_professor_base_tecnica_has_tb_turmas pro_bt_tur ON pro_bt_tur.tb_turmas_tur_id = tb_turmas.tur_id JOIN tb_professor_base_tecnica pro_bt On pro_bt.pro_bt_id = pro_bt_tur.tb_professor_base_tecnica_pro_bt_id JOIN tb_diciplina_base_tecnica_has_tb_professor_base_tecnica dic_prof_bt ON dic_prof_bt.tb_professor_base_tecnica_pro_bt_id = pro_bt.pro_bt_id JOIN tb_diciplina_base_tecnica dic_bt ON dic_bt.dic_bt_id = dic_prof_bt.tb_diciplina_base_tecnica_dic_bt_id JOIN tb_diciplina_base_tecnica_has_tb_curso dic_cur ON dic_cur.tb_diciplina_base_tecnica_dic_bt_id = dic_bt.dic_bt_id JOIN tb_curso ON tb_curso.curso_id = dic_cur.tb_curso_curso_id AND tb_curso.curso_id = tb_turmas.tb_curso_curso_id WHERE tb_turmas.tur_serie = dic_cur.tb_dic_serie";
   
   $queryprofbaseteca = mysqli_query($conexao, $sqlproftec);
   $resultando = array();
   while ($rou = mysqli_fetch_array($queryprofbaseteca)) {
    $resultando[] = $rou;
   }
   
   $sqlhorario = "SELECT * FROM horarios";
   $queryhorario = mysqli_query($conexao, $sqlhorario);
   $horario = array();
   while ($rouw = mysqli_fetch_array($queryhorario)) {
    $horario[] = $rouw;
   }
   
   
   ?>
<table border="1" class="table table-striped">
   <tr>
      <?php $sql = "SELECT * FROM tb_turmas order by tur_id desc ";
         $query = mysqli_query($conexao, $sql);
         $resltado = $query;
         while ($result = mysqli_fetch_assoc($resltado)){
            if ($Forma == 1) {

               echo "<th scope='col'>SALA ".$result['tur_sala']."</th>";
            }else{echo "<th scope='col'>".$result['tur_serie'] ."° ". $result['tur_nome']."</th>";}
            
         }
         
         ?>
   </tr>
   <?php 
      $sala =1;
      $aula  = 1;
      $id = 1;
      
      $semestre = 2;
      
         while ($sala <= 13) {
            if ($sala == 1) {
               echo "<tr>";
            }
         echo "<td><select scope='col' id=".$id." name='".$aula."' class='form-control ".$sala."'' onclick='myFunction(".$id.",". $aula.",".$sala.")'>";
      
              foreach ($resultset as $result){
               if ($result['tur_sala'] == $sala) {
                  echo "<option>".$result['dic_nome']." - ".$result['pro_nome']."</option>";
               }
            
         }
              foreach ($resultando as $resultido){
               if ($resultido['tur_sala'] == $sala AND $resultido['tb_curso_curso_id'] == $resultido['curso_id'] AND $resultido['tb_dic_serie'] == $resultido['tur_serie'] AND $resultido['tb_dic_semestre'] == $semest) {
                  echo "<option style='color:blue;' value='".utf8_encode($resultido['dic_bt_nome'])." - ".utf8_encode($resultido['pro_bt_nome'])."'>".utf8_encode($resultido['dic_bt_nome'])." - ".utf8_encode($resultido['pro_bt_nome'])."</option>";
               }
            
         }  foreach ($horario as $hor) {
            if ($hor['Sala'.$sala.''] == $result['dic_nome']." - ".$result['pro_nome'] AND $hor['Aula'] == $aula) {
               echo " oi";
               
               }
         }
      
         echo "</select></td>";
      $sala++;
         $id++;
         
         if ($sala == 13) {
            $sala = 1;
            $aula++;
      
      
         }
      
          if ($ds == 2) {
               if ($aula == 11) {
                  break;
               
            }
            }elseif ($aula == 10) {
               break;
            }  
      
      
      }
      
      
            ?>
</table>
</div>
