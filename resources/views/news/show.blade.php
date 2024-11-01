@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <img src="{{ $news->imagePath() }}" class="w-full" alt="">

    <br>
    <h1 class="text-2xl text-bold">{{ $news->name }}</h1>
    <h4 class="text-lg text-bold">{{ $news->name }}</h4>

    <div class="divider"></div>

    <p>{{ $news->description }}</p>

    <div>
        <p class="text-right">{{ $news->created_at?->format('H:i, d.m.Y') }}</p>
    </div>
</div>
@stop
