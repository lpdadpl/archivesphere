<div class="card" style="width: 300px; height: 500px; border: 1px solid #ddd; border-radius: 8px; box-shadow: 4px 4px 16px rgba(0, 0, 0, 0.1); overflow: hidden; background-color: #fff; transition: transform 0.2s ease-in-out; margin: 16px;">
    @if (!empty($image))
        <img src="{{ $image }}" alt="{{ $title }}" style="width: 100%; height: 200px; object-fit: cover;">
    @else
        <div style="width: 100%; height: 200px; background-color: #f0f0f0; display: flex; align-items: center; justify-content: center; color: #aaa;">
            <span>Sin imagen</span>
        </div>
    @endif
    <div class="card-content" style="padding: 16px; text-align: center;">
        <h3 class="card-title" style="font-size: 18px; font-weight: bold; color: #333; margin-bottom: 16px;">{{ $title }}</h3>
        <p class="card-description" style="font-size: 14px; color: #666; margin-bottom: 16px;">{{ $description }}</p>
        <a href="{{ $url }}" style="display: inline-block; background-color: #007bff; color: #fff; padding: 12px 24px; border: none; border-radius: 4px; text-decoration: none; font-size: 14px; cursor: pointer; transition: background-color 0.2s ease-in-out;">Ver más</a>
    </div>
</div>
