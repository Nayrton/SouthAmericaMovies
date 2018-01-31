<?php

require 'conect.php';

$email =$_POST['Email'];
$psw =$_POST['Psw'];


$query = mysqli_query($conect, "SELECT * FROM locadora.cliente WHERE email = '$email' AND senha = '$psw' ; ");
$row = mysqli_num_rows($query);


if($row > 0){
		session_start();
		    $_SESSION['Email'] = $email;
		    $_SESSION['Psw'] = $psw;
		    header("Location: client.php");
	}
	else{
		header("Location: index.php");
	}


