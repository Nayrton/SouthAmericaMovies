<?php
/*conexão com o bamco de dados*/
$conect = mysqli_connect("127.0.0.1","root", "") or die(mysqli_error($conect));
mysqli_select_db($conect, "locadora") or die(mysqli_error($conect));



