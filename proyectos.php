<?php $pg="proyectos"; ?>
<!DOCTYPE html>
<html lang="en">

<?php include_once("head.php"); ?>
<body>

    <header>
        <?php
            include_once("menu.php");
            ?>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <section id="proyectos">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-left  my-5">Mis Proyectos</h1>
                            <h4>Estos son algunos de los trabajos que hice durante mi carrera:</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 my-2 p-2">
                            <div class="bg-white proyecto">
                                <div class="text-center">
                                    <img src="img/abm.png" alt="" class="img-fluid">
                                </div>
                                <div class="p-3">

                                    <h2>ABM Clientes</h2>
                                    <p>Alta, Baja, modificación de un registro de clientes empleando:. Realizado en
                                        HTML,
                                        CSS, PHP, Bootstrap y Json.
                                    </p>
                                    <ul>
                                        <li><strong>USUARIO: </strong> <a href="#"> admin</a>
                                        </li>
                                        <li><strong>CLAVE: </strong>1234</li>
                                    </ul>
                                    <button class="btn btn-dark">VER ONLINE</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 my-2 p-2 ">
                            <div class="bg-white proyecto">
                                <div class="text-center">
                                    <img src="img/ventas.png" alt="" class="img-fluid">
                                </div>
                                <div class="p-3">
                                    <h2>Sistema de Gestión de ventas</h2>
                                    <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP,
                                        MVC,
                                        Bootstrap, Js, Ajax, jQuery y
                                        MySQL de base de datos.
                                    </p>
                                    <ul>
                                        <li><strong>USUARIO: </strong> <a href="#"> admin</a>
                                        </li>
                                        <li><strong>CLAVE: </strong>1234</li>
                                    </ul>
                                    <button class="btn btn-dark">VER PROYECTO</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 my-2 p-2">
                            <div class="bg-white proyecto">
                                <div class="text-center">
                                    <img src="img/proyecto.png" alt="" class="img-fluid">
                                </div>
                                <div class="p-3">
                                    <h2>Proyecto integrador</h2>
                                    <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML,
                                        CSS,
                                        con panel administrador, gestor
                                        de usuarios, módulo de permisos y funcionalidades a fines.
                                    </p>
                                    <ul>
                                        <li><strong>USUARIO: </strong> <a href="#"> admin</a>
                                        </li>
                                        <li><strong>CLAVE: </strong>1234</li>
                                    </ul>
                                    <button class="btn btn-dark">VER PROYECTO</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 my-2 p-2">
                            <div class="bg-white proyecto">
                                <div class="text-center">
                                    <img src="img/escritorio.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="p-3">
                                    <h2>Gestor de paquetes turísticos</h2>
                                    <p>Proyecto Full Stack desarrollado en Laravel
                                        con panel de administrador, gestor de
                                        usuarios, permisos y ABM de paquetes
                                        turísticos.
                                    </p>
                                    <ul>
                                        <li><strong>USUARIO: </strong> <a href="#"> admin</a>
                                        </li>
                                        <li><strong>CLAVE: </strong>1234</li>
                                    </ul>
                                    <button class="btn btn-dark">VER P</strong>ROYECTO</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
    <?php
    include_once("footer.php");
   ?>

    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>