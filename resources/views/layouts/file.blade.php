@extends('layouts.app')

@section('content')
    @include('components.navbar')

    <div class="content-container" style="min-height: calc(100vh - 100px); padding: 16px; display: flex; flex-direction: column;">
        <div class="main-content" style="max-width: 800px; margin: 0 auto; flex: 1;">
            <h1 class="page-title" style="font-size: 24px; font-weight: bold; margin-bottom: 16px;">{{ $file->name }}</h1>

            {{-- Contenedor de la imagen --}}
            @if (!empty($file->img_url))
                <div class="file-image" style="margin-bottom: 16px; text-align: center;">
                    <img src="{{ $file->img_url }}" alt="{{ $file->name }}" style="max-width: 80%; height: auto; max-height: 300px; border-radius: 8px; box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);">
                </div>
            @else
                <div class="file-image-placeholder" style="margin-bottom: 16px; text-align: center; background-color: #f0f0f0; padding: 50px; border-radius: 8px; color: #aaa;">
                    <span>Sin imagen disponible</span>
                </div>
            @endif

            <div class="info-section" style="margin-bottom: 16px;">
                <div class="uploader-profile" style="margin-bottom: 16px;">
                    <h3 style="font-size: 18px; font-weight: bold;">Publicado por: {{ $file->user->name }}</h3>
                </div>

                <div class="description-section" style="margin-bottom: 16px;">
                    <h4 style="font-size: 16px; font-weight: bold;">Descripción</h4>
                    <div class="description-box" style="padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
                        <p class="file-description" style="font-size: 14px; color: #666;">{{ $file->description }}</p>
                    </div>
                </div>

                <div class="stats" style="margin-bottom: 16px;">
                    <p class="file-likes" style="font-size: 14px; color: #333;">Likes: {{ $file->likes }}</p>
                    <p class="file-downloads" style="font-size: 14px; color: #333;">Descargas: {{ $file->downloads }}</p>
                </div>

                <div class="download-like-buttons" style="display: flex; gap: 16px;">
                    <a href="{{ $file->file_url }}" class="btn-download" style="background-color: #007bff; color: #fff; padding: 8px 16px; border-radius: 4px; text-decoration: none;">Descargar</a>
                    <button class="btn-like" style="background-color: #ff4d4d; color: #fff; padding: 8px 16px; border-radius: 4px; border: none; cursor: pointer;">❤️ Like</button>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
