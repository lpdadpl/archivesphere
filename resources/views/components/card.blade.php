<!-- filepath: /resources/views/components/card.blade.php -->
<div class="card" onclick="window.location.href='{{ $url ?? '#' }}'">
    <img src="{{ $image }}" alt="{{ $title }}" class="card-image">
    <div class="card-content">
        <h3 class="card-title">{{ $title }}</h3>
        <p class="card-description">{{ $description }}</p>
    </div>
</div>
