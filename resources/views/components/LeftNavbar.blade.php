<style>
    .left-navbar {
        position: fixed;
        left: 0;
        top: 0;
        bottom: 0;
        width: 250px;
        background-color: #0056b3;
        color: white;
        padding: 2rem 1rem;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .nav-header {
        padding: 1rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        margin-bottom: 2rem;
    }

    .nav-header h2 {
        color: white;
        font-size: 1.5rem;
        margin: 0;
    }

    .nav-menu {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .nav-item {
        margin-bottom: 0.5rem;
    }

    .nav-link {
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem;
        color: white;
        text-decoration: none;
        border-radius: 0.5rem;
        transition: background-color 0.3s;
    }

    .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .nav-link.active {
        background-color: rgba(255, 255, 255, 0.2);
    }

    .nav-icon {
        margin-right: 0.75rem;
        width: 20px;
        height: 20px;
    }

    .content-wrapper {
        margin-left: 250px;
        padding: 2rem;
    }
</style>

<div class="left-navbar">
    <div class="nav-header">
        <h2>Panel de Usuario</h2>
    </div>

    <ul class="nav-menu">
        <li class="nav-item">
            <a href="{{ route('user.profile') }}" class="nav-link {{ request()->routeIs('user.profile') ? 'active' : '' }}">
                <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                Gestión de Perfil
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.files') }}" class="nav-link {{ request()->routeIs('user.files') ? 'active' : '' }}">
                <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Mis Archivos
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('user.upload') }}" class="nav-link {{ request()->routeIs('user.upload') ? 'active' : '' }}">
                <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                </svg>
                Subir Archivo
            </a>
        </li>
    </ul>
</div>
