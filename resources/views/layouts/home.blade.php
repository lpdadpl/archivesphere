<!-- filepath: /resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
    @include('components.navbar')

    <div class="home-content">
        <div class="card-container">
            @foreach ($files as $file)
                @include('components.card', [
                    'title' => $file['title'],
                    'description' => $file['description'],
                    'image' => $file['image'],
                    'url' => route('file.show', ['id' => $file['id']])
                ])
            @endforeach
            </div>
        </div>

        @include('components.footer')
@endsection
