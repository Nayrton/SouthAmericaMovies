<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Animação</title>
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
                <h1 class="filmesgenerosh1"> Animação</h1>

                <div class="filmesgeneros radios"  style="background: url('imgs/meumalvadofavorito3.png') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/malvadofavorito3.php">
                        <img src="imgs/img1(2).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/H4spA4JIVN4" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>

                <div class="filmesgeneros radios"  style="background: url('imgs/cars3.png') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/cars3.php">
                        <img src="imgs/img1(3).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #000 solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/BuvJZGLclAU" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/narutoln.png') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/narutoln.php">
                        <img src="imgs/img1(25).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/YEc3m3tGYcY" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/one_piece_film.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/onepiece.php">
                        <img src="imgs/img1(24).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/bHzosJJn7Vk" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/dragon-ball.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/dragonball1.php">
                        <img src="imgs/img1(21).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/Udj3NB9bDnU" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/dragon.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/dragomball2.php">
                        <img src="imgs/img1(20).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/hUyrKGLKssU" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/banner_88.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/yugiohpl.php">
                        <img src="imgs/img1(28).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/nLsHpu2MSQ4" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/dark_side.png') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/yugiohds.php">
                        <img src="imgs/img1(30).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/FcSTYf1L0jY" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

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
