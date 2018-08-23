@extends('layouts.default')

@section('content')
  <div class="row content justify-content-center">

    <div class="col-sm-12 text-center p-5">
      <h1>{!!$page->title!!}</h1>
    </div>

      <div class="col-xl-8 px-5 description">
        {!!$page->body!!}
      </div>


  </div>
@endsection
