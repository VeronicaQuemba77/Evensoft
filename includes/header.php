<div class="header">
                <div class="container">
                    <div class="header-top-grids">
                        <div class="agileits-logo">
                            <h1><a href="index.php">Event</a></h1>
                        </div>
                        <div class="top-nav">
                            <nav class="navbar navbar-default">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Navegacion</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                                    <nav>
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="index.php">Inicio</a></li>
                                            <li><a href="about.php">Acerca de Nosotros</a></li>
                                            <li><a href="services.php">Servicios</a></li>
                                            <?php if (strlen($_SESSION['obbsuid']!=0)) {?>
                                            <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi cuenta<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="hvr-bounce-to-bottom" href="profile.php">Perfil</a></li>
                                                    <li><a class="hvr-bounce-to-bottom" href="booking-history.php">Historial de servicios</a></li>   
                                                     <li><a class="hvr-bounce-to-bottom" href="change-password.php">Cambiar contraseña</a></li>
                                                    <li><a class="hvr-bounce-to-bottom" href="logout.php">Deslogueo</a></li>        
                                                </ul>
                                            </li> <?php } ?> 

                                            <li><a href="mail.php">Enviar Mensaje</a></li>

                                        </ul>
                                    </nav>
                                </div>
                                <!-- /.navbar-collapse -->
                            </nav>
                        </div>
                        <br>
                        <?php if (strlen($_SESSION['obbsuid']==0)) {?>
                        <div class="collapse navbar-collapse nav-wil">
                            <ul style="color: white;">
                                <li style="color: white;"><a href="login.php">Iniciar sesion</a></li>
                                            <li style="color: white;"> <a href="signup.php">Registrarse</a></li>
                                            <li><a href="admin/login.php">Administrador</a></li>
                               <?php } ?>
                            </ul>

                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>