@extends('layouts.default')

@section('content')
  <h1>{!!$page->title!!}</h1>

  <div class="">
    {!!$page->body!!}
  </div>
@endsection
