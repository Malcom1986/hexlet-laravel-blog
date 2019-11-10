@extends('layouts.app')

@section('content')
{{Form::model($article, ['url' => route('articles.update', $article), 'method' => 'PUT']) }}
    @include('article.form')
    {{Form::submit('Update')}}
{{Form::close()}}
