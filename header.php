<div class="login" id="log">                
                    <form class="logindisplay" action="#">                        
                        <div class="container">
                            <label><b>Usuário</b></label>
                            <input type="text" placeholder="Enter Username" name="uname" required>

                            <label><b>Senha</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <button class="button" type="submit">Login</button>                            
                        </div>

                        <div class="container" style="background-color:#555">
                            <button type="button" onclick="document.getElementById('log').style.display = 'none'" class="cancelbtn">Cancel</button>
                            <button type="button" onclick="document.getElementById('log').style.display = 'none'" class="registbtn">Registrar</button>
                            <span style="float: right; padding-top: 16px;">Forgot <a href="#" style="color: #999">password?</a></span>
                        </div>
                    </form>                              
            </div>
            <header class="fixo">
                <a href="http://localhost/SouthAmericaMovies/index.php"><img src="../imgs/SAM.png" width="100" height="100" alt="SAM"></a> 
                <ul>
                    <li class="radios"><a href="../index.php" >Inicio</a></li>
                    <li class="radios"><a href="../testecarroseu.php">Lista</a></li>
                    <li class="radios"><a href="../melhores-sites.php">Teste git</a></li>
                    <li class="radios" style="background:none;">
                        <form class="formsearch" name="search" method="GET">
                            <input class="seachimput" type="search" name="search"  placeholder=" Pesquise Aqui!">
                            <input class="imgsearch" type="image" alt="submit" src="../imgs/search.png">
                        </form>
                    </li>                    
                    <li class="radios">
                        <form>
                            <input class="testelog radios" type="button"  value="login" onclick="document.getElementById('log').style.display ='block'">
                        </form>
                    </li>
                </ul>                          
            </header>
