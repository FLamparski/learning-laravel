@extends('app')

@section('title')
Articles
@stop

@section('content')
<div class="container">
  <article>
    <h2>{{$article->title}} <a href="{{action('ArticlesController@edit', $article->id)}}" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-edit"></i></a></h2>
    <small>{{$article->published_at->format('Y-m-d')}}</small>
    <p>{{$article->body}}</p>
  </article>
</div>
@stop
