<?php
    session_start();     

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Guardiões da Galáxia 2</title>
        <link href="../css/stile.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">        
    </head>
    <body>        
        <main>
            <div class="login" id="log">                
                <form class="logindisplay" method="post" action="../login.php" >                        
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
                <form class="logindisplay" method="post" action="../register.php">
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
                            <li><a href="../acao.php" >Ação</a></li>
                            <li><a href="../terror.php" >Terror</a></li>
                            <li><a href="../animacao.php" >Animação</a></li>
                            <li><a href="../ficcaocientifica.php" >Ficção Cientifica</a></li>
                        </ul>
                    </li>                    
                    <li class="radios hide" style="background:none;">
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
                    <img src="../imgs/guarda-galaxia.jpg" alt=""/>


                    <div class="filmenameinfo">                        
                    </div>
                </div>
                <div class="imgfilmeinfo">
                    <img src="../imgs/img1(22).jpeg" alt=""/>
                    <img style="border: none ;margin-bottom: 90px; margin-left: 10px; width: 70px; height: 70px;"
                         src="../imgs/14anos.png" width="85" height="85" alt="14anos"/>
                </div>
                <div class="filmesdados">
                    <iframe width="520" height="310" src="https://www.youtube.com/embed/4-i8nTNSQFI">teste</iframe>
                    <h1>Guardiões da Galáxia 2</h1>
                    <h2>Generos</h2>
                    <p>Ação, Ficção científica, Comédia</p>
                    <h2>Direção</h2>
                    <p>James Gunn (II)</p>
                    <h2>Elenco</h2>
                    <p>Chris Pratt, Zoe Saldana, Dave Bautista, Vin Diesel, Bradley Cooper, Michael Rooker, Karen Gillan, Pom Klementieff, Elizabeth Debicki, Chris Sullivan, Sean Gunn, Sylvester Stallone, Kurt Russell</p>
                    <h2>Siniopse</h2>
                    <p> Agora já conhecidos como os Guardiões da Galáxia, os guerreiros viajam ao longo do cosmos e lutam para manter sua nova família unida. Enquanto isso tentam desvendar os mistérios da verdadeira paternidade de Peter Quill (Chris Pratt).</p>
                    <h2>Data de Lançamento</h2>
                    <p>27 de abril de 2017</p>
                    <h2>Duração</h2>
                    <p>2h 16min</p>
                    <div>
                        <form class="locarbtn" action="../locar.php" method="get">
                            <input type="hidden" value='7' name="n"/>
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
