<?php
    session_start();     

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Yu-Gi-Oh!: The Dark Side of Dimensions</title>
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
                    <img src="../imgs/dark_side.png" alt=""/>


                    <div class="filmenameinfo">                        
                    </div>
                </div>
                <div class="imgfilmeinfo">
                    <img src="../imgs/img1(30).jpeg" alt=""/>
                    <img style="border: none; margin-bottom: 90px; margin-left: 10px; width: 70px; height: 70px;"
                         src="../imgs/10anos.png" width="85" height="85" alt="14anos"/>
                </div>
                <div class="filmesdados">
                    <iframe width="520" height="310" src="https://www.youtube.com/embed/FcSTYf1L0jY">teste</iframe>
                    <h1>Yu-Gi-Oh!: The Dark Side of Dimensions</h1>
                    <h2>Generos</h2>
                    <p>Animação, Ação, fantasia</p>
                    <h2>Direção</h2>
                    <p>Satoshi Kuwabara</p>
                    <h2>Elenco</h2>
                    <p>Yuya Miyashita, Shunsuke Kazama, Kenn</p>
                    <h2>Siniopse</h2>
                    <p> Seis meses após os acontecimentos de Yu-Gi-Oh! Duel Monster, Muto Yugi e seus amigos estão no último ano do ensino médio, conversando sobre o que vão fazer no futuro. Enquanto isso, Kaiba Seto deu a ordem para escavarem as ruínas da Câmara do Milênio a fim de recuperar o Enigma do Milênio desmontado. A relíquia já havia abrigado a alma de seu rival, Atem, que ele espera reviver para acertar as contas. A escavação foi interrompida por um homem que enfrenta Kaiba num jogo de Monstros de Duelo e rouba duas partes do Enigma recuperado. Qual é sua intenção? As apostas nunca estiveram tão altas. A rivalidade nunca tão feroz. Os riscos nunca tão grandes.</p>
                    <h2>Data de Lançamento</h2>
                    <p>23 de abril de 2016</p>
                    <h2>Duração</h2>
                    <p>1h 10min</p>
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
