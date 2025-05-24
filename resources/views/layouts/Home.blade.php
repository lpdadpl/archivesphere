<!-- filepath: /resources/views/home.blade.php -->
@extends('app')

@include('components.Header')

@section('content')

    <style>
        /* Estilos para el contenedor de las tarjetas */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 16px; /* Espaciado entre tarjetas */
            justify-content: flex-start;
            padding: 16px;
        }

        /* Estilos para las tarjetas */
        .card {
            width: 150px; /* Ancho de la tarjeta */
            height: 250px; /* Alto de la tarjeta */
            border: 1px solid #ddd; /* Borde gris claro */
            border-radius: 8px; /* Bordes redondeados */
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1); /* Sombra ligera */
            overflow: hidden;
            background-color: #fff; /* Fondo blanco */
            transition: transform 0.2s ease-in-out; /* Animación al pasar el cursor */
        }

        .card:hover {
            transform: scale(1.05); /* Efecto de zoom al pasar el cursor */
        }

        /* Imagen dentro de la tarjeta */
        .card-image {
            width: 100%;
            height: 100px; /* Altura fija para la imagen */
            object-fit: cover; /* Ajustar la imagen al contenedor */
        }

        /* Contenido de la tarjeta */
        .card-content {
            padding: 8px;
            text-align: center;
        }

        .card-title {
            font-size: 14px;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }

        .card-description {
            font-size: 12px;
            color: #666;
            margin-bottom: 12px;
        }

        /* Botón "Ver más" */
        .btn-primary {
            display: inline-block;
            background-color: #007bff; /* Azul */
            color: #fff;
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-size: 12px;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Azul más oscuro al pasar el cursor */
        }
    </style>

    <div class="home-content">
        <div class="card-container">
            @foreach ($files as $file)
                @include('components.Card', [
                    'id' => $file->id, // Pasar el ID del archivo
                    'image' => $file->img_url,
                    'title' => $file->name,
                    'description' => $file->description,
                    'url' => route('file.show', ['id' => $file->id]) // Generar la URL
                ])
            @endforeach
        </div>
    </div>

    @include('components.Footer')
@endsection
