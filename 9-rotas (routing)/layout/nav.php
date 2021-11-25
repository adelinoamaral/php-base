<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- alinha com o conteúdo do site-->
        <a class="navbar-brand h1 mb-0" href="index.php">Curso</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsite" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsite">
            <ul class="navbar-nav mr-auto">
                <!-- mr-auto para alinhar à esquerda -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=perfil">Perfil</a>
                </li>
                <li class="nav-item">
                    <!-- outra forma de link -->
                    <a class="nav-link" href="?p=servicos">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?p=contactos">Contactos</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- ml-auto para alinhar à direita -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navDrop">Social</a>
                    <div class="dropdown-menu">
                        <a href="" class="dropdown-item">Facebook</a>
                        <a href="" class="dropdown-item">Twitter</a>
                        <a href="" class="dropdown-item">Instagram</a>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</nav>