@extends('app')

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
                    <a href="{{ $file->file_url }}" class="btn-download" style="background-color: #007bff; color: #fff; padding: 8px 16px; border-radius: 4px; text-decoration: none; display: flex; flex-direction: column; align-items: center;">
Descargar<br>
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" style="width: 1.5rem; height: 1.5rem;">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
</svg></a>
                    <button class="btn-like" style="background-color: #ff4d4d; color: #fff; padding: 8px 16px; border-radius: 4px; border: none; cursor: pointer; display: flex; flex-direction: column; align-items: center;">
Like<br>
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
</svg></button>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
