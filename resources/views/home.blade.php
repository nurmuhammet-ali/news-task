@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="hero bg-base-200 mt-5">
          <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">These weeks hot news</h1>

                <p class="py-6">
                    Stay ahead of the curve with the latest stories that matter. Our news site brings you accurate, insightful, and engaging articles on global events, tech, health, and more – all curated by a team passionate about bringing clarity and depth to every story. Discover news you can trust, tailored for readers who seek both the big picture and the critical details. Join us to stay informed, inspired, and involved!
                </p>
            </div>
          </div>
        </div>

        <br>
        <div class="grid grid-cols-4 gap-4 relative">
            @forelse($news as $newsItem)
                @include('news.news-item', ['newsItem' => $newsItem])
            @empty
                <h2 class="text-2xl absolute">
                    No news yet, you can add via factory calling <strong>News::factory()->count(12)->create()</strong> or go to <a href="/admin" class="underline">dashboard</a>
                </h2>
            @endforelse
        </div>

        <br>
        <div class="container">
            {{ $news->links() }}
        </div>
    </div>

    <br><br>
@stop
