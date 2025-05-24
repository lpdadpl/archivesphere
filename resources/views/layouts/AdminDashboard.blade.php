<!-- filepath: /usr/proyectos/ArchiveSphereLaravel/archivesphere/resources/views/layouts/admin_dashboard.blade.php -->
@extends('app')

@section('content')
    @include('components.navbar')

    <div class="admin-dashboard" style="padding: 2rem; margin-top: 2rem;">
        <h1 style="color: #0056b3; text-align: center; margin-bottom: 2rem;">Bienvenido al Panel de Administración</h1>

        <div class="admin-content" style="max-width: 1200px; margin: 0 auto;">
            <!-- Aquí irá el contenido del panel de administración -->
        </div>
    </div>

    @include('components.footer')
@endsection
