@extends('app')

@section('content')
    @include('components.navbar')
    @include('components.LeftNavbar')

    <div class="content-wrapper">
        <div class="dashboard-header">
            <h1>Bienvenido, {{ Auth::user()->name }}</h1>
        </div>

        <div class="dashboard-content">
            @if(request()->routeIs('user.profile'))
                <div class="profile-section">
                    <h2>Gestión de Perfil</h2>
                    <div class="profile-card">
                        <div class="profile-info">
                            <div class="profile-avatar">
                                <img src="{{ asset('assets/profileicon.png') }}" alt="Avatar" class="avatar">
                            </div>
                            <div class="profile-details">
                                <h3>{{ Auth::user()->name }}</h3>
                                <p>{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <form action="{{ route('user.profile.update') }}" method="POST" class="profile-form">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="form-input">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" class="form-input">
                            </div>
                            <button type="submit" class="btn-primary">Actualizar Perfil</button>
                        </form>
                    </div>
                </div>
            @elseif(request()->routeIs('user.files'))
                <div class="files-section">
                    <h2>Mis Archivos</h2>
                    <div class="files-grid">
                        @foreach($files as $file)
                            <div class="file-card">
                                <div class="file-preview">
                                    @if($file->img_url)
                                        <img src="{{ $file->img_url }}" alt="{{ $file->name }}">
                                    @else
                                        <div class="file-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </div>
                                    @endif
                                </div>
                                <div class="file-info">
                                    <h3>{{ $file->name }}</h3>
                                    <p>{{ Str::limit($file->description, 100) }}</p>
                                </div>
                                <div class="file-actions">
                                    <a href="{{ route('file.show', $file->id) }}" class="btn-view">Ver</a>
                                    <button class="btn-delete" onclick="deleteFile({{ $file->id }})">Eliminar</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @elseif(request()->routeIs('user.upload'))
                <div class="upload-section">
                    <h2>Subir Archivo</h2>
                    <form action="{{ route('user.upload.store') }}" method="POST" enctype="multipart/form-data" class="upload-form">
                        @csrf
                        <div class="form-group">
                            <label for="file">Archivo</label>
                            <input type="file" id="file" name="file" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" id="name" name="name" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea id="description" name="description" class="form-input" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category">Categoría</label>
                            <select id="category" name="category" class="form-input">
                                <option value="document">Documento</option>
                                <option value="book">Libro</option>
                                <option value="video">Video</option>
                            </select>
                        </div>
                        <button type="submit" class="btn-primary">Subir Archivo</button>
                    </form>
                </div>
            @endif
        </div>
    </div>

    <style>
        .dashboard-header {
            margin-bottom: 2rem;
        }

        .dashboard-header h1 {
            color: #0056b3;
            font-size: 2rem;
        }

        .profile-card {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .profile-info {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }

        .profile-avatar {
            margin-right: 2rem;
        }

        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }

        .profile-details h3 {
            margin: 0;
            color: #333;
        }

        .profile-details p {
            margin: 0.5rem 0 0;
            color: #666;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
            font-weight: bold;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }

        .btn-primary {
            background-color: #0056b3;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #004494;
        }

        .files-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .file-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .file-preview {
            height: 150px;
            background: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .file-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .file-icon {
            width: 48px;
            height: 48px;
            color: #666;
        }

        .file-info {
            padding: 1rem;
        }

        .file-info h3 {
            margin: 0;
            font-size: 1.1rem;
            color: #333;
        }

        .file-info p {
            margin: 0.5rem 0 0;
            color: #666;
            font-size: 0.9rem;
        }

        .file-actions {
            padding: 1rem;
            display: flex;
            gap: 0.5rem;
            border-top: 1px solid #eee;
        }

        .btn-view, .btn-delete {
            padding: 0.5rem 1rem;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.9rem;
            cursor: pointer;
        }

        .btn-view {
            background-color: #0056b3;
            color: white;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
            border: none;
        }

        .upload-form {
            max-width: 600px;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>

    <script>
        function deleteFile(fileId) {
            if (confirm('¿Estás seguro de que quieres eliminar este archivo?')) {
                fetch(`/files/${fileId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        toastify().success('Archivo eliminado correctamente');
                        setTimeout(() => {
                            window.location.reload();
                        }, 1000);
                    } else {
                        toastify().error('Error al eliminar el archivo');
                    }
                })
                .catch(error => {
                    toastify().error('Error al eliminar el archivo');
                });
            }
        }
    </script>
@endsection
