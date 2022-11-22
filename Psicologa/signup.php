<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <header class="hero2">
        <div class="container">
            <nav class="nav">
                <p class="nav__items nav__items--cta">
                    <?php echo date("Y-m-d");?>
                   
                </p>
                <p class="nav__items nav__items--cta"> <a href="login.php">Inicio de Sesion</a></p>
                
            </nav>
            <section class="hero__container">
                <div class="hero__texts">
                    <h1 class="hero__title">Mi Psiconsultorio.</h1>
                    <section class="presentation container">
            <!-- p -->
            <div class="formas__grid" id="formas">
                <article class="formas__item">
                    <img src="images/mental-health-2019924_1920.jpg" class="presentation__picture" id="mental">
                    <h2 class="subtitle2" id="Inicio">Registro de Usuario
                    </h2>

                    <!--Aqui va el inicio para entrar-->


                    <form action="logon.php" method="POST">
                        <h2 class="formas__title">Registro</h2>
                      
                        <input class="formas" type="text" minlength="3" name="user" placeholder="Nombre Completo"><br>
                        <input class="formas" type="text" minlength="3" name="user" placeholder="Usuario"><br>
                        <input class="formas" type="password" minlength="8" name="password" placeholder="Contraseña"><br>
                        <input class="presentation__cta" type="submit" id="submit" value="Registrar">
                    </form>
                </article>
            </div>
           


        </section>
                </div>
            </section>
        </div>
       
    </header>

    

    </main>
    <footer class="footer">
        <div class="container footer__grid">
            <nav class="nav nav--footer">
                <a class="nav__items nav__items--footer" href=" ">Inicio</a>

            </nav>
            <section class="footer__contact">
                <h3 class="footer__title">
                    Instituto Tecnologico de Parral
                </h3>
                <div class="footer__icons">
                    <span class="footer__container-icons">

                        <a class=" fab fa-brands fa-facebook footer__icon" href="https://www.facebook.com/ITParraloficial "></a>
                         </span>
                    <span class="footer__container-icons">

                        <a class=" fa-solid fa-user-doctor footer__icon" href=#></a>
                             </span>
                </div>
            </section>

        </div>

    </footer>



    <!-- <a class="fa-solid fa-user-doctor " href=" "></a>
    <a class="fa-solid fa-pills " href=" "></a>
    <a class="fa-solid fa-book-medical " href=" "></a>
    <a class="fa-solid fa-id-card-clip " href=" "></a> -->



    <script src="https://kit.fontawesome.com/6045888e6c.js " crossorigin="anonymous "></script>

</body>

</html>