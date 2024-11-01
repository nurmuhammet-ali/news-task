<div class="card bg-base-100 w-96 shadow-xl">
    <a href="{{ route('news.show', ['news' => $newsItem->id]) }}">
        <figure>
            <img src="{{ $newsItem->imagePath() }}" class="w-[384px] h-[226px] object-contain" alt="{{ $newsItem->name }}" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">
              {{ $newsItem->name }}!
            </h2>
            <p>{{ Str::limit($newsItem->description) }}</p>
            <div class="card-actions justify-end">
              <div class="badge badge-outline">{{ $newsItem->author }}</div>
              <div class="badge badge-outline">{{ $newsItem->created_at?->format('H:i, d.m.Y') }}</div>
            </div>
        </div>
    </a>
</div>
