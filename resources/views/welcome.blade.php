@extends('layouts.app')

@section('content')
<a href="{{route('page.about')}}">About</a>
<a href="{{route('articles.index')}}">Articles</a>
@endsection