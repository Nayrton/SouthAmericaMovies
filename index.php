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
                <form class="logindisplay" method="post" action="login.php" >                        
                    <div class="container">
                        <label><b>Email</b></label>
                        <input type="email" placeholder="Enter Email"  name="Email" required>

                        <label><b>Senha</b></label>
                        <input type="password" placeholder="Enter Password"  name="Psw" required>

                        <button class="button" type="submit" id="log_btn">Login</button>                            
                    </div>

                    <div class="container" style="background-color:#555">
                        <button type="button" onclick="document.getElementById('log').style.display = 'none'" class="cancelbtn">Cancelar</button>
                        <button type="button" onclick="document.getElementById('log').style.display = 'none';document.getElementById('reg').style.display = 'block'" class="registbtn">Registrar</button>
                        <span style="float: right; padding-top: 16px;">Esqueceu sua <a href="#" style="color: #999">Senha?</a></span>
                    </div>
                </form>                              
            </div>
            <div class="regist" id="reg">
                <form class="logindisplay" method="post" action="register.php">
                    <div class="container">
                        <label><b>Usuário</b></label>
                        <input type="text" placeholder="Digitar Username" name="reg_uname" required>
                        <label><b>Email</b></label>
                        <input type="email" placeholder="Digitar Email" name="reg_email" required>
                        <label><b>CPF</b></label>
                        <input type="text" placeholder="Digitar CPF" name="reg_cpf" required>
                        <label><b>Endereço</b></label>
                        <input type="text" placeholder="Digitar Endereço" name="reg_end" required>
                        <label><b>Senha</b></label>
                        <input type="password" placeholder="Digitar Password" name="reg_psw" required>
                        <input type="password" placeholder="Repetir Password" name="reg_psw_rep" required>

                        <button class="button" type="submit" id="reg_btn">Registrar</button>
                    </div>
                </form> 
            </div>
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
                        <form>
                            <input class="testelog radios" type="button"  value="login" onclick="document.getElementById('log').style.display = 'block'">
                        </form>
                    </li>
                </ul>                          
            </header>
            <div class="principal">
                <div class="baners">
                    <a href="filmes/thegamerule.php"><img src="imgs/Gshell.png" alt="testebaner"/></a>
                    <a href="filmes/thegamerule.php"><img src="imgs/logan.jpg" alt="testebaner"/></a>
                    <a href="filmes/thegamerule.php"><img src="imgs/xxx.jpg" alt="testebaner"/></a>
                    <a href="filmes/thegamerule.php"><img src="imgs/Justice.jpg" alt="testebaner"/></a>
                    <a href="filmes/thegamerule.php"><img src="imgs/thor.jpg" alt="testebaner"/></a>
                    <a href="filmes/thegamerule.php"><img src="imgs/cars3.png" alt="testebaner"/></a>
                </div>
                <div class="contentfilmes ">
                    <a class="contentfilmestitulo" href="#">Recomendado</a>
                    <div class="teste" data-slick='{"slidesToShow": 6, "slidesToScroll": 4}'>
                        <div><a href="filmes/thegamerule.php"><img src="imgs/img1(1).jpeg" alt=""/></a></div>
                        <div><img src="imgs/img1(19).jpeg" alt=""/></div>                
                        <div><img src="imgs/img1(23).jpeg" alt=""/></div>
                        <div><img src="imgs/img1(29).jpeg" alt=""/></div>
                        <div><img src="imgs/img1(6).jpeg" alt=""/></div>
                        <div><img src="imgs/img1(18).jpeg" alt=""/></div>   
                        <div><img src="imgs/img1(10).jpeg" alt=""/></div>
                        <div><img src="imgs/img1(7).jpeg" alt=""/></div>
                        <div><img src="imgs/img1(5).jpeg" alt=""/></div>
                        <div><img src="imgs/img1(15).jpeg" alt=""/></div>
                        <div><img src="imgs/img2(13).jpg" alt=""/></div>
                        <div><img src="imgs/img1(8).jpeg" alt=""/></div>
                        <div><img src="imgs/img1(12).jpeg" alt=""/></div>
                        <div><img src="imgs/img1(9).jpeg" alt=""/></div>

                    </div>
                </div>
                <div class="contentfilmes ">
                    <a class="contentfilmestitulo" href="#">Animação</a>
                    <div class="teste" data-slick='{"slidesToShow": 6, "slidesToScroll": 1}'>
                        <div><img src="imgs/img1(3).jpeg" alt=""/></div>
                        <div><img src="imgs/img1(2).jpeg" alt=""/></div>                
                        <div><img src="imgs/img1(20).jpeg" alt=""/></div>
                        <div><img src="imgs/img1(21).jpeg" alt=""/></div>
                        <div><img src="imgs/img1(24).jpeg" alt=""/></div>
                        <div><img src="imgs/img1(25).jpeg" alt=""/></div>   
                        <div><img src="imgs/img1(28).jpeg" alt=""/></div>
                        <div><img src="imgs/img1(30).jpeg" alt=""/></div>


                    </div>
                </div>
                <div class="contentfilmes ">
                    <a class="contentfilmestitulo" href="#">Ação</a>
                    <div class="teste" data-slick='{"slidesToShow": 6, "slidesToScroll": 4}'>
                        <div><img src="imgs/" alt=""/></div>
                        <div><img src="imgs/" alt=""/></div>                
                        <div><img src="imgs/" alt=""/></div>
                        <div><img src="imgs/" alt=""/></div>
                        <div><img src="imgs/" alt=""/></div>
                        <div><img src="imgs/" alt=""/></div>   
                        <div><img src="imgs/" alt=""/></div>
                        <div><img src="imgs/" alt=""/></div>
                        <div><img src="imgs/" alt=""/></div>
                        <div><img src="imgs/" alt=""/></div>
                        <div><img src="imgs/" alt=""/></div>
                        <div><img src="imgs/" alt=""/></div>
                        <div><img src="imgs/" alt=""/></div>
                        <div><img src="imgs/" alt=""/></div>

                    </div>
                </div>
                <div class="contentfilmes ">
                    <a class="contentfilmestitulo" href="#">Ficção Científica</a>
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
                    <a class="contentfilmestitulo" href="#">Terror</a>
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
