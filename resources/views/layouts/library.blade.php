<!-- filepath: /resources/views/library.blade.php -->
@extends('layouts.app')

@section('content')
    @include('components.navbar')

    <div class="library-content">
        @foreach ($groupedFiles as $type => $files)
            <div class="file-group">
                <h2 class="group-title">{{ $type }}</h2>
                <div class="file-row">
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
        @endforeach
        </div>

        @include('components.footer')
@endsection
