@extends('layouts.app')

@section('content')
<div>{{session('success')}}</div>
<a href="{{ route('articles.create') }}">Create new article</a>
<h1>Список статей</h1>
    @foreach($articles as $article)
        <div>
            <a href="{{ route('articles.show', $article) }}">{{$article->name}}</a>
        </div>
        <div>{{Str::limit($article->body, 200)}}</div>
        <div>
            <a href="{{ route('articles.edit', $article) }}">Edit</a>
            <a href="{{ route('articles.destroy', $article) }}" data-confirm="Вы уверены?" data-method="delete">Delete</a>
        </div>
        <br>
    @endforeach
    {{$articles->links()}}
@endsection