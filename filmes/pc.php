<?php
    session_start();     

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Piratas do Caribe: A Vingança de Salazar</title>
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
                    <img src="../imgs/pc.jpg" alt=""/>


                    <div class="filmenameinfo">                        
                    </div>
                </div>
                <div class="imgfilmeinfo">
                    <img src="../imgs/img1(6).jpeg" alt=""/>
                    <img style="border: none; margin-bottom: 90px; margin-left: 10px; width: 70px; height: 70px;"
                         src="../imgs/12anos.png" width="85" height="85" alt="14anos"/>
                </div>
                <div class="filmesdados">
                    <iframe width="520" height="310" src="https://www.youtube.com/embed/H8d1pD49JOk">teste</iframe>
                    <h1>Piratas do Caribe: A Vingança de Salazar</h1>
                    <h2>Generos</h2>
                    <p>Ação, Aventura, Fantasia</p>
                    <h2>Direção</h2>
                    <p>Joachim Rønning, Espen Sandberg</p>
                    <h2>Elenco</h2>
                    <p>Johnny Depp, Javier Bardem, Geoffrey Rush, Brenton Thwaites, Kaya Scodelario, Orlando Bloom</p>
                    <h2>Siniopse</h2>
                    <p> O capitão Salazar (Javier Bardem) é a nova pedra no sapato do capitão Jack Sparrow (Johnny Depp). Ele lidera um exército de piratas fantasmas assassinos e está disposto a matar todos os piratas existentes na face da Terra. Para escapar, Sparrow precisa encontrar o Tridente de Poseidon, que dá ao seu dono o poder de controlar o mar.</p>
                    <h2>Data de Lançamento</h2>
                    <p>25 de maio de 2017</p>
                    <h2>Duração</h2>
                    <p>2h 09min</p>
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
