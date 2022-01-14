<?php
    $pg = "sobreMi";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi">
    <?php
        include_once "header.php";
    ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-12 my-4">
                    <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
                    <p class="pb-sm-5">Lorem ipsum dolor sit amet consectetur adipiscing elit, dapibus commodo proin torquent condimentum class, ultricies mattis volutpat laoreet mi a.</p>
                    <a href="contacto.php" class="btn btn-rojo">Enviar mensaje</a>

                </div>
                <div class="col-sm-3 offset-sm-2 col-12 mt-4">
                    <img src="images/agustin1.png" alt="Juan Agustin Affricani" title="Juan Agustin Affricani"
                        class="rounded-circle img-fluid perfil">
                </div>
            </div>
        </div>
        <section id="tecnologias" class="color-gradiente pb-5 mx-0">
            <div class="container">
                <div class="row py-sm-0 py-3">
                    <div class="col-12">
                        <h2 class="my-sm-5 text-white">Stack tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h5>Javascript</h5>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1209/javascript.jpeg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h5>PHP</h5>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/991/hwUcGZ41_400x400.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h5>HTML5</h5>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/2538/kEpgHiC9.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h5>React.js</h5>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1020/OYIaJ1KK.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h5>jQuery</h5>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1021/lxEKmMnB_400x400.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h5>Bootstrap</h5>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1101/C9QJ7V3X.png">
                        </div>
                    </div>
                </div>
                <div class="row mt-sm-4 mt-0">
                    <div class="col-sm-2 col-6">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h5>Laravel</h5>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://depcsuite.com/wp-content/uploads/2019/08/220px-Laravel.svg_.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h5>MySQL</h5>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1615/mariadb-logo-400x400.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h5>CSS</h5>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/6727/css.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h5>Git</h5>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1046/git.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h5>Apache</h5>
                            <img class="img-fluid d-block mx-auto" width="100"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Apache_Software_Foundation_Logo_%282016%29.svg/1280px-Apache_Software_Foundation_Logo_%282016%29.svg.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h6>Mercadopago</h6>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/12698/gUjuxmmd_400x400.jpg">
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-briefcase"></i> Experiencia laboral</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/coop.png" class="img-fluid baw" title="Coop TL">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Administrativo</h3>
                            <h4>Cooperativa Eléctrica T. Lauquen</h4>
                            <h5>2016 - presente</h5>
                            <p>Administrativo en Cooperativa Eléctrica de T. Lauquen, Provincia de Bs As, 
                                cumpliendo labor en sector Facturación de la Empresa, llevando a cabo la
                                facturacion mensual, la carga/baja de datos de la tomada de estados
                                de medidores en los equipos memocolectores, resolución de reclamos, envio de 
                                informacion a OCEBA.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/metaok.png" class="img-fluid baw" title="meta ok">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Desarrollador Junior Javasacript</h3>
                            <h4>Empresa MetaOK</h4>
                            <h5>2015 - 2016</h5>
                            <p>Diseño y desarrollo de paginas web con tecnologias como HTML, Javasacript, Angular.js, Node.js y PHP.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 p-5 my-auto d-none d-sm-block">
                            <img src="images/psi.png" class="img-fluid baw" title="colegio psi">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Administrador de Pagina web</h3>
                            <h4>Colegio de Psicólogos T. Lauquen</h4>
                            <h5>2013 - 2015</h5>
                            <p>Navegar en las áreas de administración de la interfaz de usuario web,
                                personalizar el sitio y la configuración de contenido, mantenimiento de pagina web,
                                creacion y actualizacion de contenido.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Formación acádémica</h2>
                </div>
            </div>
                <div class="row shadow bg-white rounded p-1">
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="images/frtl.jpg" class="img-fluid baw" title="UTN - FRTL">
                            </div>
                            <div class="col-12- col-sm-10 p-3">
                                <h3>Analista Universitario de Sistemas</h3>
                                <h4>UTN - Facultad Regional Trenque Lauquen (FRTL)</h4>
                                <h5>2012 – 2017</h5>
                                <a href="http://web.frtl.utn.edu.ar/">
                                    <p>http://web.frtl.utn.edu.ar/</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="images/dige.jpg" class="img-fluid baw" title="Colegio Dige">
                            </div>
                            <div class="col-12- col-sm-10 p-3">
                                <h3>Bachiller en Ciencias Naturales</h3>
                                <h4>Colegio Miguel Di Geronimo</h4>
                                <h5>1998 – 2011</h5>
                                <a href="https://dige.edu.ar/">
                                    <p>https://dige.edu.ar/</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section id="curso" class="container mb-5">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Cursos de desarrollo profesional</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/sin-logo.png" class="img-fluid baw" title="">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/sin-logo.png" class="img-fluid baw" title="">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/sin-logo.png" class="img-fluid baw" title="">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/sin-logo.png" class="img-fluid baw" title="">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section id="extra">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 shadow me-sm-1 bg-white extra-idioma">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Intermedio (Inlgés Técnico)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 shadow ms-sm-1 bg-white extra-hobbie">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Fútbol</li>
                                    <li>Running</li>
                                    <li>Asados</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
        include_once "footer.php";
    ?>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>