<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Tienda Master</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="assets/css/styles.css"/>
    </head>
    <body>
        <div id="container">
            <!--CABECERA-->
            <header id="header">
                <div id="logo">
                    <img src="assets/img/camiseta.png" alt="camiseta Logo"/>
                    <a href="index.php">
                        <h1>Tienda de camisetas</h1>
                    </a>
                </div>
            </header>

            <!--MENU-->
            <nav id="menu">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Categoria 1</a></li>
                    <li><a href="#">Categoria 2</a></li>
                    <li><a href="#">Categoria 3</a></li>
                    <li><a href="#">Categoria 4</a></li>
                    <li><a href="#">Categoria 5</a></li>
                </ul>
            </nav>

            <div id="content">
                <!--BARRA LATERAL-->  
                <aside id="lateral">
                    <div id="login" class="block_aside">
                        <form action="#" method="post">
                            <label for="email">Email</label>
                            <input type="email" name="email">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password">
                            <input type="submit" value="Enviar"/>
                        </form>

                        <a href="#">Mis pedidos</a>
                        <a href="#">Gestionar pedidos</a>
                        <a href="#">Gestionar categorias</a>
                    </div>
                </aside>

                <!--CONTENIDO CENTRAL-->
                <div id="central">
                    <h1>Productos destacados</h1>
                    <div class="product">
                        <img src="assets/img/camiseta.png">
                        <h2>Camiseta azul ancha</h2>
                        <p>30 euros</p>
                        <a href="#" class="button">Comprar</a>
                    </div>

                    <div class="product">
                        <img src="assets/img/camiseta.png">
                        <h2>Camiseta azul ancha</h2>
                        <p>30 euros</p>
                        <a href="#" class="button">Comprar</a>
                    </div>

                    <div class="product">
                        <img src="assets/img/camiseta.png">
                        <h2>Camiseta azul ancha</h2>
                        <p>30 euros</p>
                        <a href="#" class="button">Comprar</a>
                    </div>
                </div>
            </div>

            <!--PIE DE PAGINA-->
            <footer id="footer">
                <p>Desarrollado por Edwin Calle &copy;<?=date('Y');?></p>
            </footer>
        </div>
    </body>
</html>