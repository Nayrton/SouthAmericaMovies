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
                    <li class="radios"><a href="#">Generos</a>
                        <ul class="submenu-1">
                            <li><a href="generos.php" >Ação</a></li>
                            <li><a href="#" >Terror</a></li>
                            <li><a href="#" >Animação</a></li>
                            <li><a href="#" >Ficção Cientifica</a></li>
                        </ul>
                    </li>                    
                    <li class="radios" style="background:none;">
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

                <div>
                    <h1></h1>
                </div>
            </div>
            <div class="footer">
                <p>
                    SouthAmericaMovies © 2017. All rights reserved. Designed by <em>Nayrton Bertoldo.</em>
                </p>
            </div>
        </main>
        <?php
        
        
        
        ?>
    </body>
</html>
