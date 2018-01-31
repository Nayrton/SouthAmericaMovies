<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ação</title>
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
                    <li class="radios hide" style="background:none;">
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
                    <a href="filmes/logan.php">
                        <img src="imgs/img1(23).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/KPND6SgkN7Q" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>

                <div class="filmesgeneros radios"  style="background: url('imgs/xxx.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/xxxreativado.php">
                        <img src="imgs/img1(29).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #000 solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/Kd2w8MeZBNA" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/assassinscreed.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/assasinscreed.php">
                        <img src="imgs/img1(17).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/jTgzJ79KDsg" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/Gshell.png') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/gshell.php">
                        <img src="imgs/img2(13).jpg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/tRkb1X9ovI4" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/resident.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/resident.php">
                        <img src="imgs/img1(26).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/A-SORf2ipjw" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/vf8.png') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/vf8.php">
                        <img src="imgs/img1(27).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/KvSlvtPnZTo" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/guarda-galaxia.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/gdg.php">
                        <img src="imgs/img1(22).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/4-i8nTNSQFI" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/Alien.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/alien.php">
                        <img src="imgs/img1(1).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/5incfB5jHWU" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/pc.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/pc.php">
                        <img src="imgs/img1(6).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/H8d1pD49JOk" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/mm.png') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/mm.php">
                        <img src="imgs/img1(8).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/bldAkEUANWA" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/spider.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/spiderman.php">
                        <img src="imgs/img1(5).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/2x-2iYxgMFU" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/planeta-dos-macacos.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/planeta_macaco.php">
                        <img src="imgs/img1(9).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/QzgWDG4QviU" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/traflk.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/tranformerlk.php">
                        <img src="imgs/img1(7).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/qKlJFIx_NYI" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/thor.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/thor.php">
                        <img src="imgs/img1(11).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/UvNnqWLruXA" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/Justice.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/justice.php">
                        <img src="imgs/img1(4).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/H0Z7ewOXCKw" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/star-wars-os-ultimos-jedi-banner.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/starwarslj.php">
                        <img src="imgs/img1(12).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/4JB3tHn2S5A" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

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
                <div class="filmesgeneros radios"  style="background: url('imgs/anjo.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/anjosdanoite.php">
                        <img src="imgs/img1(14).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/VQiUz_d7Z0M" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/batmanvsupermanbanner.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/batvssuper.php">
                        <img src="imgs/img1(16).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/RtFFXs3nN40" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/warcraft.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/warcraft.php">
                        <img src="imgs/img1(15).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/Dqvz8w-latE" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

                </div>
                <div class="filmesgeneros radios"  style="background: url('imgs/capitaoamericaguerracivil.jpg') no-repeat;background-size: 100% 100%;border: 2px #eee solid">
                    <a href="filmes/guerracivil.php">
                        <img src="imgs/img1(18).jpeg" alt="logan" style="margin-left: 25px;width:170px;height: 240px;border: 2px #eee solid; margin-top: 6px;"/>
                    </a>
                    <iframe width="400" height="220" src="https://www.youtube.com/embed/FRLYZn5PGuA" style="float: right; margin-right: 30px;margin-top:15px; ">Logan</iframe>   

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
