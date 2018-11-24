@extends('layouts.app')

@section('content')

    @can('update', $article)
        <a href="../articles/{{ $article->id }}/edit">Edit</a>
    @endcan

    <h1 class="title">{{ $article->title }}</h1>
    <div class="description">{{ $article->description }}</div>
    <div class="content">{{ $article->content }}</div>


    @if ($article->tags->count())
        <h2>Tags:</h2>
        @foreach($article->tags as $tag)
            <a> {{ $tag->title }}</a>
        @endforeach
    @endif

    @can('update', $article)
        {{-- add a new tab form --}}
        <form method="POST" action="/articles/{{ $article->id }}/tags" class="box">
            {{ csrf_field() }}
            <div class="field">
                <label class="label" for="title">New Tag</label>
                <div class="control">
                    <input type="text" class="input" name="title" placeholder="New Tag" required>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Add Tag</button>
                </div>
            </div>

            @include ('errors')
        </form>
    @endcan


@endsection