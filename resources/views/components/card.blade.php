{{-- filepath: /usr/proyectos/ArchiveSphereLaravel/archivesphere/resources/views/components/card.blade.php --}}
<div class="card border rounded-lg shadow-md overflow-hidden bg-white">
    <img src="{{-- {{ $image }} --}}" alt="{{-- {{ $title }} --}}" class="card-image w-full h-48 object-cover">
    <div class="card-content p-4">
        <h3 class="card-title text-lg font-semibold text-gray-800">{{-- {{ $title }} --}}</h3>
        <p class="card-description text-sm text-gray-600 mt-2">{{-- {{ $description }} --}}</p>
        <div class="mt-4">
            {{-- <x-download-button :url="$url">
                Descargar
            </x-download-button> --}}
        </div>
    </div>
</div>
