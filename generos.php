<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Generos</title>
        <link href="css/stile.css" rel="stylesheet" type="text/css"/>
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
                <h1 class="filmesgenerosh1"> Ação</h1>

                <div class="filmesgeneros radios"  style="background: url('imgs/logan.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/thegamerule.php">
                        <img src="imgs/img1(23).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/KPND6SgkN7Q" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>

                <div class="filmesgeneros radios"  style="background: url('imgs/xxx.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <img src="imgs/img1(29).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #000 solid; margin-top: 6px;"/>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/Kd2w8MeZBNA" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/logan.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <img src="imgs/img1(23).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/KPND6SgkN7Q" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/logan.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <img src="imgs/img1(23).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/KPND6SgkN7Q" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="footer">
                    <p>
                        SouthAmericaMovies © 2017. All rights reserved. Designed by <em>Nayrton Bertoldo.</em>
                    </p>
                </div>
            </div>

        </main>
        <?php
        // put your code here
        ?>
    </body>
</html>
