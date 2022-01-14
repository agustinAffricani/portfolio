<header>
        <nav class="navbar navbar-expand-md mb-4">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class=" collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mt-2">
                        <li class="nav-item ps-3">
                            <a class="nav-link py-1 px-3 <?php echo ($pg == "inicio") ? "active" : "" ?>" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link py-1 px-3 <?php echo ($pg == "sobreMi") ? "active" : "" ?>" href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link py-1 px-3 <?php echo ($pg == "proyectos") ? "active" : "" ?>" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link py-1 px-3 <?php echo ($pg == "contacto") ? "active" : "" ?>" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-inline">
                        <button href="" class="btn btn-rojo mt-2 py-1">Descargar mi CV <i
                                class="fas fa-download"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </header>