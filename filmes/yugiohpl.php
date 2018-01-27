<?php
    session_start();     

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Yu-Gi-Oh! The Movie: Pyramid of Light</title>
        <link href="../css/stile.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">        
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

                        <button class="button" type="submit" id="log_btn" >Login</button>                            
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
                    <img src="../imgs/banner_88.jpg" alt=""/>


                    <div class="filmenameinfo">                        
                    </div>
                </div>
                <div class="imgfilmeinfo">
                    <img src="../imgs/img1(28).jpeg" alt=""/>
                    <img style="border: none; margin-bottom: 90px; margin-left: 10px; width: 70px; height: 70px;"
                         src="../imgs/12anos.png" width="85" height="85" alt="14anos"/>
                </div>
                <div class="filmesdados">
                    <iframe width="520" height="310" src="https://www.youtube.com/embed/nLsHpu2MSQ4">teste</iframe>
                    <h1>Yu-Gi-Oh! The Movie: Pyramid of Light</h1>
                    <h2>Generos</h2>
                    <p>Animação, Ação</p>
                    <h2>Direção</h2>
                    <p>Hatsuki Tsuji</p>
                    <h2>Elenco</h2>
                    <p>Shunsuke Kazama, Kenjiro Tsuda, Koji Ishii, Hiroki Takahashi, Hidehiro Kikuchi, Maki Saito, Junko Takeuchi, Jiro J. Takasugi, Tadashi Miyazawa</p>
                    <h2>Siniopse</h2>
                    <p> Na cronologia da série de anime, o filme se passa entre as sagas "Cidade das Batalhas" e "Lacre de Orichalcos".Quando o garoto Yugi Muto conseguiu montar o quebra-cabeça do Enigma do Milênio, ele libertou um antigo Faraó, mas uma coisa que ele nunca soube é que, juntamente com o faraó, ele libertou Anúbis, o Deus Egípcio da Morte.Três anos depois, Seto Kaiba está procurando um meio de derrotar as cartas de Deuses Egípcios de Yugi. Então ele vai a ilha de Maximillion Pegasus, o criador do jogo de cartas Monstros de Duelo. Uma estranha criatura coloca uma carta a mais no baralho de Pegasus. Kaiba derrota Pegasus em um duelo. Como Pegasus apostou uma carta que derrotaria os Deuses Egípcios, Kaiba a pega, mas acaba pegando, também, a carta que a suposta criatura colocou. Depois, Kaiba desafia Yugi para um duelo e acaba derrotando seus Deuses Egípcios, mas aprisiona os dois numa pirâmide azul gigante, a Pirâmide de Luz. Minutos antes disso, um museu que continha uma múmia e uma nova relíquia do milênio descoberta, foi roubado. Contudo o avô de Yugi, Solomon Muto, lembra de uma profecia, que Anúbis tentou acabar com o mundo 5.000 anos atrás, e algum dia voltaria e tentaria novamente.Anúbis ressurge nas areias do Egito e deseja se vingar daquele que o havia derrotado anteriormente: o Faraó, alter-ego de Yugi.</p>
                    <h2>Data de Lançamento</h2>
                    <p>13 de agosto de 2004</p>
                    <h2>Duração</h2>
                    <p>1h 30min</p>
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
