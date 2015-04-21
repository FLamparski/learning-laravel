@extends('app')

@section('title')
Contact
@stop

@section('content')
<div class="container">
  <h1>Contact Us</h1>
  <hr>
  @if (count($contacts))
  @foreach ($contacts as $contact)
  <h3>{{$contact['name']}}</h3>
  <p>
    <strong>Email:</strong> <a href="mailto:{{$contact['email']}}">{{$contact['email']}}</a>
  </p>
  @endforeach
  @else
  <p>
    <em>No contacts found :(</em>
  </p>
  @endif
</div>
@stop
