<!-- filepath: /resources/views/file.blade.php -->
@extends('layouts.app')

@section('content')
    @include('components.navbar')

    <div class="content-container">
        <div class="main-content">
            <h1 class="page-title">{{ $file->title }}</h1>

            <div class="info-section">
                <div class="uploader-profile">
                    <h3>Publicado por: {{ $file->uploader }}</h3>
                </div>

                <div class="description-section">
                    <h4>Descripción</h4>
                    <div class="description-box">
                        <p class="file-description">{{ $file->description }}</p>
                    </div>
                </div>

                <div class="stats">
                    <p class="file-likes">Likes: {{ $file->likes }}</p>
                    <p class="file-downloads">Descargas: {{ $file->downloads }}</p>
                </div>

                <div class="download-like-buttons">
                    <a href="{{ route('file.download', ['id' => $file->id]) }}" class="btn-download">Descargar</a>
                    <button class="btn-like">❤️ Like</button>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
