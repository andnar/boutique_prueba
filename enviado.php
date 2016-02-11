<!DOCTYPE html>
<html>
<head>
<title>.: BOUTIQUE :.</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Language" content="es"/>
<script type="text/javascript" src="validar.js"></script>
<link rel="stylesheet" type="text/css" href="css/boutique-main.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
        <div class="main-header">
            <div class="container-main-header">
                <div class="logo-main-header">
                    <img src="img/logo-main-header.jpg">
                </div>
                <div class="info-main-header">
                    <div class="icons-main-header">
                        <div id="lupa-main-header" class="icon-content-header"><img src="img/lupa-main-header.jpg"></div>
                        <div id="user-main-header" class="icon-content-header"><img src="img/user-main-header.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="register-form mobile">
                        <form id="formdos" action="enviado.php" method="post">
                            <input id="campo2" type="text" name="emaildos" placeholder="Campo de email">
                            <input id="boton2" type="button" value="Regístrate">
                        </form>
        </div>
        <nav>
            <ul>
                <li class="item-nav odd">Family</li>
                <li class="item-nav odd">Women</li>
                <li class="item-nav odd">Men</li>
                <li class="item-nav odd">Bigger</li>
                <li class="item-nav odd">Little</li>
            </ul>
        </nav>
    </header>
    <div class="content-register">
        <div class="sub-container-form-registro"> 
            <div class="form-registro-completo">
                    <div class="felicitaciones">
                        <div class="tit-felicitaciones">
                            Felicitaciones
                        </div>
                        <div class="user-mail">
                        <?php
                            $email = $_POST['email'];
                            echo $email."<br>";
                        ?>  
                        </div>
                    </div>         
                    <div class="tit-form-registro-completo">
                        Estas muy cerca de adquirir grandes promociones, termina tu registro
                    </div>
                    <div class="form-completo">
                            <form name="form" action="enviado.php" method="post">
                                    <div class="item-form-completo">
                                        <label>Nombre</label>
                                        <input id="campo1" type="text" name="nombre" placeholder="Ingresa tu nombre">   
                                    </div>
                                    <div class="item-form-completo">
                                        <label>Teléfono</label>
                                        <input id="campo1" type="text" name="phone" placeholder="Ingresa tu nombre">   
                                    </div>
                                    <div class="item-form-completo">
                                        <label>Ciudad</label>
                                        <input id="campo1" type="text" name="city" placeholder="Ingresa tu nombre">   
                                    </div>
                                    <input id="boton" type="button" value="Completa tu registro">
                            </form>
                    </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="content-footer">
            <div class="logo-footer">
                <img src="img/logo-main-footer.png">
            </div>
            <div class="menu-footer">
                <nav>
                    <ul>
                        <li class="item-nav-footer odd">Family</li>
                        <li class="item-nav-footer odd">Women</li>
                        <li class="item-nav-footer odd">Men</li>
                        <li class="item-nav-footer odd">Bigger</li>
                        <li class="item-nav-footer odd">Little</li>
                    </ul>
                </nav>
            </div>
            <div class="social-footer">
                <img src="img/facebook.png">
                <img src="img/instagram.png">
                <img src="img/twitter.png">
            </div>
            <div class="copyright-footer">
                <p>Copyrigth Boutique 2016.</p>
            </div>
        </div>
    </footer>
</body>
</html>