<style>
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 15vh;
        background-color: #0056b3;
        /* Azul fuerte */
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 2rem;
        box-sizing: border-box;
        z-index: 1000;
    }

    .navbar-brand,
    .navbar-menu,
    .navbar-end {
        display: flex;
        align-items: center;
    }

    .navbar-logo img {
        height: 80%;
        /* Ajusta según el tamaño del logo */
        max-height: 60px;
    }

    .navbar-menu {
        flex-grow: 1;
        justify-content: center;
        gap: 2rem;
    }

    .nav-item {
        color: white;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.1rem;
        transition: color 0.3s;
    }

    .nav-item:hover {
        color: #ffd700;
        /* Amarillo en hover */
    }

    .profile-icon {
        height: 40px;
        width: 40px;
        border-radius: 50%;
    }

    .navbar-spacer {
        height: 15vh;
        /* Para evitar que el contenido se oculte debajo de la navbar */
    }
</style>

<nav class="navbar">
    <div class="navbar-brand">
        <a href="/" class="navbar-logo">
            <img src="{{ asset('assets/LogoArchiveSphere.png') }}" alt="Logo">
        </a>
    </div>

    <div class="navbar-menu">
        <a href="/documents" class="nav-item">Documentos</a>
        <a href="/books" class="nav-item">Libros</a>
        <a href="/videos" class="nav-item">Videos</a>
        <a href="/library" class="nav-item">Guardados</a>
    </div>

    <div class="navbar-end">
        <a href="/login">
            <img src="{{ asset('assets/profileicon.png') }}" alt="Perfil" class="profile-icon">
        </a>
    </div>
</nav>

<div class="navbar-spacer"></div>
