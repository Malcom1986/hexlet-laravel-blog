@extends('layouts.app')

@section('content')
<div>{{session('success')}}</div>
<a href="{{route('articles.create')}}">Create new article</a>
<h1>Список статей</h1>
    @foreach($articles as $article)
        <div>
            <a href="{{route('articles.show', ['id' => $article->id])}}">{{$article->name}}</a>
        </div>
        <div>{{Str::limit($article->body, 200)}}</div>
        <div>
            <a href="{{route('articles.edit', ['id' => $article->id])}}">Edit</a>
        </div>
        <br>
    @endforeach
    {{$articles->links()}}
@endsection