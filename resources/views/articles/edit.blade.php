@extends('app')

@section('title')
Editing "{{$article->title}}"
@stop

@section('content')
<div class="container">
  <h2><span class="text-muted">Editing</span> {{$article->title}}</h2>
  <hr/>
  {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
  @include('articles._form', ['submitText' => 'Save Article'])
  {!! Form::close() !!}
  @include('errors.form-errors')
</div>
@stop
