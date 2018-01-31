<?php
require 'conect.php';
session_start();
$session = mysqli_query($conect, "SELECT * FROM locadora.cliente WHERE email = '$_SESSION[Email]'");
$info = mysqli_fetch_assoc($session);
$teste = $info['id_cliente'];
$teste2 = $_GET['n'];
$data = mysqli_query($conect,"SELECT CURRENT_DATE");
$data2 = mysqli_query($conect,"SELECT date_add(CURRENT_DATE(), interval 7 day)");
$result = mysqli_fetch_assoc($data);
$result2 = mysqli_fetch_assoc($data2);
$dataatual = $result["CURRENT_DATE"];
$datadev = $result2["date_add(CURRENT_DATE(), interval 7 day)"];
$verificarlocacao = mysqli_query($conect, "SELECT * FROM locadora.locar WHERE id_cliente = '$teste'");
$nunrow = mysqli_num_rows($verificarlocacao);

if($teste == NULL){
    header("location: errologin.php");
}else{
    if($nunrow >= 3){       
        header("Location: locmaximo.php");    
    }else{
        mysqli_query($conect,"INSERT INTO locadora.locar(id_cliente,id_filme,data_locacao,data_devolucao) VALUES('$teste','$teste2','$dataatual','$datadev')");
        header("Location: locsucesso.php");
  
    }
};





