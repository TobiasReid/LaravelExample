@extends('layouts.app')

@section('content')

    <h1 class="title"> Create a new Article</h1>

    <form method="POST" action="/articles">

        @csrf


        <div class="field">
            <label class="label" for="title">Article Title</label>
            <div class="control">
                <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" value="{{ old('title') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">Article Description</label>
            <div class="control">
                <input type="text" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" value="{{ old('description') }}" >
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">Article Content</label>
            <div class="control">
                <input type="text" class="textarea {{ $errors->has('content') ? 'is-danger' : '' }}" name="content" value="{{ old('content') }}" >
            </div>
        </div>

        <div>
            <button type="submit" class="button is-primary">Create Article</button>
        </div>

        <a href="../articles" class="button">Cancel</a>

        @include ('errors')

    </form>

@endsection