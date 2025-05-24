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

    .navbar-brand {
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

    .menu-toggle {
        display: none; /* Oculto por defecto en pantallas grandes */
        align-items: center;
        justify-content: center;
        background-color: transparent;
        color: white;
        border: none;
        font-size: 1.5rem;
        cursor: pointer;
        padding: 0.5rem;
    }

    /* Estilos responsivos */
    @media (max-width: 768px) {
        .navbar {
            height: auto;
            min-height: 60px;
            padding: 0.5rem 1rem;
        }

        .navbar-brand {
            flex: 0;
        }

        .navbar-logo img {
            max-height: 40px;
        }

        .menu-toggle {
            display: flex;
            order: 2;
        }

        .navbar-end {
            order: 1;
            margin-right: 1rem;
        }

        .navbar-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background-color: #0056b3;
            flex-direction: column;
            padding: 1rem;
            gap: 1rem;
            margin-top: 0;
        }

        .navbar-menu.active {
            display: flex;
        }

        .nav-item {
            font-size: 1rem;
            text-align: left;
            padding: 0.5rem 0;
        }

        .profile-icon {
            height: 35px;
            width: 35px;
        }
    }
</style>

<nav class="navbar">
    <div class="navbar-brand">
        <a href="/" class="navbar-logo">
            <img src="{{ asset('assets//LogoArchiveSphereWhite.png') }}" alt="Logo">
        </a>
        <button class="menu-toggle" onclick="toggleMenu()">☰</button>
    </div>

    <div class="navbar-menu">
        <a href="/documents" class="nav-item">
            Documentos
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" style="display: inline-block; margin-left: 5px; vertical-align: middle; width: 16px; height: 16px;">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 13.5H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
            </svg>
        </a>
        <a href="/books" class="nav-item">
            Libros
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" style="display: inline-block; margin-left: 5px; vertical-align: middle; width: 16px; height: 16px;">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
            </svg>
        </a>
        <a href="/videos" class="nav-item">
            Videos
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" style="display: inline-block; margin-left: 5px; vertical-align: middle; width: 16px; height: 16px;">
                <path stroke-linecap="round" stroke-linejoin="round" d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z" />
            </svg>
        </a>
        <a href="/library" class="nav-item">
            Guardados
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" style="display: inline-block; margin-left: 5px; vertical-align: middle; width: 16px; height: 16px;">
                <path stroke-linecap="round" stroke-linejoin="round" d="m3 3 1.664 1.664M21 21l-1.5-1.5m-5.485-1.242L12 17.25 4.5 21V8.742m.164-4.078a2.15 2.15 0 0 1 1.743-1.342 48.507 48.507 0 0 1 11.186 0c1.1.128 1.907 1.077 1.907 2.185V19.5M4.664 4.664 19.5 19.5" />
            </svg>
        </a>
    </div>

    <div class="navbar-end">
        @if(Auth::check())
            <a href="{{ Auth::user()->role->name === 'admin' ? route('admin.dashboard') : route('user.dashboard') }}" class="profile-link">
                <img src="{{ asset('assets/profileicon.png') }}" alt="Perfil" class="profile-icon">
            </a>
        @else
            <a href="/login">
                <img src="{{ asset('assets/profileicon.png') }}" alt="Perfil" class="profile-icon">
            </a>
        @endif
    </div>
</nav>

<div class="navbar-spacer"></div>

<script>
    function toggleMenu() {
        const menu = document.querySelector('.navbar-menu');
        menu.classList.toggle('active');
    }

    // Verificar el estado de la sesión al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        fetch('/check-session', {
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.isLoggedIn) {
                const profileLink = document.querySelector('.profile-link');
                if (profileLink) {
                    profileLink.href = data.role === 'admin' ? '/admin/dashboard' : '/user/dashboard';
                }
            }
        })
        .catch(error => console.error('Error checking session:', error));
    });
</script>
