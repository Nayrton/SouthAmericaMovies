<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Terror</title>
        <link href="css/stile.css" rel="stylesheet" type="text/css"/>
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
                <h1 class="filmesgenerosh1"> Terror</h1>                

                <div class="filmesgeneros radios"  style="background: url('imgs/resident.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/resident.php">
                        <img src="imgs/img1(26).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/A-SORf2ipjw" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/Alien.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/alien.php">
                        <img src="imgs/img1(1).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/5incfB5jHWU" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/mumia.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/mumia.php">
                        <img src="imgs/img1(10).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/gHHxaXgrRC0" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/anjo.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/anjosdanoite.php">
                        <img src="imgs/img1(14).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/VQiUz_d7Z0M" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                
                <div class="footer">
                    <p>
                        SouthAmericaMovies © 2017. All rights reserved. Designed by <em>Nayrton Bertoldo.</em>
                    </p>
                </div>
            </div>

        </main>
        <?php
        
        ?>
    </body>
</html>
