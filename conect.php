<?php
/*conexão com o bamco de dados*/
$conect = mysqli_connect("localhost","root", "") or die(mysqli_error($conect));
mysqli_select_db($conect, "locadora") or die(mysqli_error($conect));
$id_filme = 2;



