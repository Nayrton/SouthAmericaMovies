<?php
    session_start();     

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Carros 3</title>
        <link href="../css/stile.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">        
    </head>
    <body>        
        <main>
            <div class="login" id="log">                
                <form class="logindisplay">                        
                    <div class="container">
                        <label><b>Email</b></label>
                        <input type="email" placeholder="Enter Email" id="email" required>

                        <label><b>Senha</b></label>
                        <input type="password" placeholder="Enter Password" id="psw" required>

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
                <form class="logindisplay">
                    <div class="container">
                        <label><b>Usuário</b></label>
                        <input type="text" placeholder="Digitar Username" id="reg_uname" required>
                        <label><b>Email</b></label>
                        <input type="email" placeholder="Digitar Email" id="reg_email" required>

                        <label><b>Senha</b></label>
                        <input type="password" placeholder="Digitar Password" id="reg_psw" required>
                        <input type="password" placeholder="Repetir Password" id="reg_psw_rep" required>

                        <button class="button" type="submit" id="reg_btn">Registrar</button>
                    </div>
                </form> 
            </div>
            <header class="fixo">
                <a href="http://localhost/SouthAmericaMovies/index.php"><img src="../imgs/SAM.png" width="100" height="100" alt="SAM"></a> 
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
                            <input class="imgsearch" type="image" alt="submit" src="../imgs/search.png">
                        </form>
                    </li>                    
                    <li class="radios">
                        <form id="loginbtn">
                            <input class="testelog radios" type="button"  value="login" onclick="document.getElementById('log').style.display = 'block'">                            
                        </form>
                        <form id="sairbtn" action="logout.php" style="display: none;">
                            <input class="testelog radios" type="submit"  value="Sair" >
                        </form>
                    </li>
                </ul>                          
            </header>
            <div class="filmesinfo">
                <div class="banerfilme">
                    <img src="../imgs/cars3.png" alt=""/>


                    <div class="filmenameinfo">                        
                    </div>
                </div>
                <div class="imgfilmeinfo">
                    <img src="../imgs/img1(3).jpeg" alt=""/>
                    <img style="border: none; margin-bottom: 90px; margin-left: 10px; width: 70px; height: 70px;"
                         src="../imgs/livre.png" width="85" height="85" alt="14anos"/>
                </div>
                <div class="filmesdados">
                    <iframe width="520" height="310" src="https://www.youtube.com/embed/BuvJZGLclAU">teste</iframe>
                    <h1>Carros 3</h1>
                    <h2>Generos</h2>
                    <p>Animação, Aventura</p>
                    <h2>Direção</h2>
                    <p>Brian Fee</p>
                    <h2>Elenco</h2>
                    <p>Owen Wilson, Larry the Cable Guy, Bonnie Hunt, Cheech Marin, Michael Wallis, Cristela Alonzo, Armie Hammer</p>
                    <h2>Siniopse</h2>
                    <p> Veterano das pistas, o campeoníssimo Relâmpago McQueen se vê em apuros após o surgimento de um novato bastante veloz, Jackson Storm, que utiliza de alta tecnologia nos treinamentos. Obrigado a chegar ao limite para batê-lo, McQueen acaba sofrendo um sério acidente durante uma corrida, que o obriga a abandonar o campeonato daquele ano. Prestes a iniciar a próxima temporada, ele se vê em dúvidas sobre se consegue ser rápido o suficiente para bater Storm e, por causa disto, busca ajuda com seu novo patrocinador.</p>
                    <h2>Data de Lançamento</h2>
                    <p>13 de julho de 2017</p>
                    <h2>Duração</h2>
                    <p>1h 42min</p>
                    <div>
                        <form class="locarbtn" action="#" method="post">
                            <input class="radios" type="submit" value="Locar" name="locarbtn"/>
                        </form>
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
    </body>
</html>