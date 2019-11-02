@extends('layouts.app')

@section('content')
<h1>Список статей</h1>
    @foreach($articles as $article)
        <div>
            <a href="{{route('articles.show', ['id' => $article->id])}}">{{$article->name}}</a>
        </div>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
    {{$articles->links()}}
@endsection