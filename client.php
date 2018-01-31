<?php
require 'conect.php';
session_start();
$session = mysqli_query($conect, "SELECT * FROM locadora.cliente WHERE email = '$_SESSION[Email]'");
$info = mysqli_fetch_assoc($session);
$join = mysqli_query($conect,"SELECT filme.nome,locar.data_locacao,locar.data_devolucao FROM ((locar INNER JOIN filme ON locar.id_filme = filme.id_filme)INNER JOIN cliente ON locar.id_cliente = '{$info['id_cliente']}')");
$infofilmes = mysqli_fetch_all($join);


?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuario</title>
        <link href="css/stile.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <body>

        <main>           
            <header class="fixo">
                <a href="http://localhost/SouthAmericaMovies/index.php"><img src="imgs/SAM.png" width="100" height="100" alt="SAM"></a> 
                <ul>                    
                    <li class="radios"><a>Generos</a>
                        <ul class="submenu-1">
                            <li><a href="acao.php" >Ação</a></li>
                            <li><a href="terror.php" >Terror</a></li>
                            <li><a href="animacao.php" >Animação</a></li>
                            <li><a href="ficcaocientifica.php" >Ficção Cientifica</a></li>
                        </ul>
                    </li>                    
                    <li class="radios hide" style="background:none;">
                        <form class="formsearch" name="search" method="GET">
                            <input class="seachimput" type="search" name="search"  placeholder=" Pesquise Aqui!">
                            <input class="imgsearch" type="image" alt="submit" src="imgs/search.png">
                        </form>
                    </li>                    
                    <li class="radios">
                        <form action="logout.php">
                            <input class="testelog radios" type="submit"  value="Sair">
                        </form>
                    </li>
                </ul>                          
            </header>
            <div class="principal">
                <div class="expand">
                    <div class="userblock radios">
                        <img src="imgs/usuario.png" alt="user"/>
                        <h2><?= $info["nome"]; ?></h2>
                    </div>
                    <div class="locaçãoblock radios">
                        <h3>Informações:</h3>
                        <p>A tabela abaixo informa as locações realizadas, com um máximo de 3 locações, informa também as datas se locação e de devolução dos filmes.</p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Filme</th>
                                    <th>Data-de-locação</th>
                                    <th>Data-de-devolição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= @$infofilmes[0][0]?></td>
                                    <td><?= @$infofilmes[0][1]?></td>
                                    <td><?= @$infofilmes[0][2]?></td>
                                </tr>
                                <tr>
                                    <td><?= @$infofilmes[2][0]?></td>
                                    <td><?= @$infofilmes[2][1]?></td>
                                    <td><?= @$infofilmes[2][2]?></td>
                                </tr>
                                <tr>
                                    <td><?= @$infofilmes[4][0]?></td>
                                    <td><?= @$infofilmes[4][1]?></td>
                                    <td><?= @$infofilmes[4][2]?></td>
                                </tr>
                            </tbody>
                        </table>



                    </div>

                </div>
            </div>
            <div class="footer">
                <p>SouthAmericaMovies © 2017. All rights reserved. Designed by <em>Nayrton Bertoldo.</em></p>
            </div>

        </main>
        <?php
        ?>
    </body>
</html>
