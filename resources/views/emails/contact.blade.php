@extends('layouts.default')
@section('title', 'Contact Reply')

@section('content')
 <div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="page-header">
        <h1>Thanks you for contacting us, {{ $name }}, your message has been received.</h1>
      </div>
        <p class="lead">{{ $comment }}</p>
    </div>
  </div>
    <footer>
        <p><a href="https://sabaytraining.com/">&copy; SabayTraining, Laravel</a></p>
    </footer>
 </div>
@stop
