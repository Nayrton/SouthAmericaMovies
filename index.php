<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>South América Movies</title>
        <link href="css/stile.css" rel="stylesheet"/>
        <script src="script.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>        
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    </head>
    <body>        
        <main>
            <div class="login" id="log">                
                    <form class="logindisplay" action="#">                        
                        <div class="container">
                            <label><b>Usuário</b></label>
                            <input type="text" placeholder="Enter Username" name="uname" required>

                            <label><b>Senha</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <button class="button" type="submit">Login</button>                            
                        </div>

                        <div class="container" style="background-color:#555">
                            <button type="button" onclick="document.getElementById('log').style.display = 'none'" class="cancelbtn">Cancel</button>
                            <span style="float: right; padding-top: 16px;">Forgot <a href="#" style="color: #999">password?</a></span>
                        </div>
                    </form>                              
            </div>
            <header class="fixo">
                <a href="index.php"><img src="imgs/SAM.png" width="100" height="100" alt="SAM"></a> 
                <ul>
                    <li class="radios"><a href="index.php" >Inicio</a></li>
                    <li class="radios"><a href="testecarroseu.php">Lista</a></li>
                    <li class="radios"><a href="melhores-sites.php">Teste git</a></li>
                    <li class="radios" style="background:none;">
                        <form class="formsearch" name="search" method="GET">
                            <input class="seachimput" type="search" name="search"  placeholder=" Pesquise Aqui!">
                            <input class="imgsearch" type="image" alt="submit" src="imgs/search.png">
                        </form>
                    </li>                    
                    <li class="radios">
                        <form>
                            <input class="testelog radios" type="button"  value="login" onclick="document.getElementById('log').style.display ='block'">
                        </form>
                    </li>
                </ul>                          
            </header>
            <div class="principal">
                <div class="baners">
                    <a href="filmes/thegamerule.php"><img src="imgs/testebaner.jpg" alt="testebaner"/></a>
                    <a href="filmes/thegamerule.php"><img src="imgs/testebaner.jpg" alt="testebaner"/></a>
                    <a href="filmes/thegamerule.php"><img src="imgs/testebaner.jpg" alt="testebaner"/></a>
                    <a href="filmes/thegamerule.php"><img src="imgs/testebaner.jpg" alt="testebaner"/></a>
                    <a href="filmes/thegamerule.php"><img src="imgs/testebaner.jpg" alt="testebaner"/></a>
                    <a href="filmes/thegamerule.php"><img src="imgs/testebaner.jpg" alt="testebaner"/></a>
                </div>
                <div class="contentfilmes ">
                    <a class="contentfilmestitulo" href="#">Recomendado</a>
                    <div class="teste" data-slick='{"slidesToShow": 6, "slidesToScroll": 4}'>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>                
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>   
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>

                    </div>
                </div>
                <div class="contentfilmes ">
                    <a class="contentfilmestitulo" href="#">teste1</a>
                    <div class="teste" data-slick='{"slidesToShow": 6, "slidesToScroll": 4}'>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>                
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>   
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>

                    </div>
                </div>
                <div class="contentfilmes ">
                    <a class="contentfilmestitulo" href="#">teste2</a>
                    <div class="teste" data-slick='{"slidesToShow": 6, "slidesToScroll": 4}'>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>                
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>   
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>

                    </div>
                </div>
                <div class="contentfilmes ">
                    <a class="contentfilmestitulo" href="#">teste3</a>
                    <div class="teste" data-slick='{"slidesToShow": 6, "slidesToScroll": 4}'>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>                
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>   
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>

                    </div>
                </div>
                <div class="contentfilmes ">
                    <a class="contentfilmestitulo" href="#">teste4</a>
                    <div class="teste" data-slick='{"slidesToShow": 6, "slidesToScroll": 4}'>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>                
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>   
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>

                    </div>
                </div>
                <div class="contentfilmes ">
                    <a class="contentfilmestitulo" href="#">teste5</a>
                    <div class="teste" data-slick='{"slidesToShow": 6, "slidesToScroll": 4}'>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>                
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>   
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/testeslider.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>
                        <div><img src="imgs/0045402_200.jpg" alt=""/></div>

                    </div>
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
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
        <script src="script.js" type="text/javascript"></script>
    </body>
</html>
