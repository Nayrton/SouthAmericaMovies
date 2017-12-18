<?php
require 'conect.php';

$reg_nome =$_POST['reg_uname'];
$reg_email =$_POST['reg_email'];
$reg_cpf = $_POST['reg_cpf'];
$reg_end = $_POST['reg_end'];
$reg_senha =$_POST['reg_psw'];
$reg_senha_rep =$_POST['reg_psw_rep'];

if($reg_senha == $reg_senha_rep){
  mysqli_query($conect, "INSERT INTO locadora.cliente(nome,email,cpf,endereco,senha) VALUES('$reg_nome','$reg_email','$reg_cpf','$reg_end','$reg_senha')");
  header("Location: index.php");
}
else{
    header("Location: index.php?erro=3");
}