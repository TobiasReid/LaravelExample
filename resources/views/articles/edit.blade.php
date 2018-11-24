@extends('layouts.app')

@section('content')

    <h1 class="title">Edit Article</h1>

    <form method="post" action="/articles/{{ $article->id }}">
        {{ method_field('PATCH') }}

        {{ csrf_field() }}

        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{ $article->title }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea name="description" class="textarea" >{{ $article->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <label class="label" for="content">Content</label>
            <div class="control">
                <textarea name="content" class="textarea" >{{ $article->content }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Article</button>
            </div>
        </div>

    </form>


    <form method="post" action="/articles/{{ $article->id }}">

        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete Article</button>
            </div>
        </div>

    </form>


@endsection