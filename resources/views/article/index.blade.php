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
    @endforeach
    {{$articles->links()}}
@endsection