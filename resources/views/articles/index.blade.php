@extends('app')

@section('title')
Articles
@stop

@section('content')
<div class="container">
  <h2>Articles <a href="{{action('ArticlesController@create')}}" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-edit"></i></a></h2>

  @foreach($articles as $article)
  <article>
    <h3><a href="{{action('ArticlesController@show', $article->id)}}">{{$article->title}}</a></h3>
    <small>{{$article->published_at->diffForHumans()}}</small>
    <p>{{$article->body}}</p>
  </article>
  @endforeach
</div>
@stop
