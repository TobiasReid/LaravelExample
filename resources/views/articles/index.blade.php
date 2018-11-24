@extends('layouts.app')

@section('content')

    <a href="../articles/create" class="button">Create new</a>

    @foreach($articles as $article)
        <div class="box">
        <a class="title" href="../articles/{{ $article->id }}">
            {{ $article->title }}
        </a>
        <div href="/articles/{{ $article->id }}">
            <p class="is-size-4">Description:</p>
            {{ $article->description }}
        </div>

        @if ($article->tags->count())
            <p class="is-size-5">Tags:</p>
            @foreach($article->tags as $tag)
                <h2> {{ $tag->title }}</h2>
            @endforeach
        @endif
        </div>
    @endforeach
@endsection