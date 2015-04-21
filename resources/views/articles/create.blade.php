@extends('app')

@section('title')
New article
@stop

@section('content')
<div class="container">
  <h2>Create <span class="text-muted">an article</span></h2>
  <hr/>
  {!! Form::open(['action' => 'ArticlesController@store']) !!}
  @include('articles._form', ['submitText' => 'Add Article'])
  {!! Form::close() !!}
  @include('errors.form-errors')
</div>
@stop
