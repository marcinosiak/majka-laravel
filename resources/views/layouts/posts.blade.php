@extends('layouts.default')

@section('content')
  <div class="row content justify-content-center">

    {{-- <div class="col-sm-12 text-center p-5">
      <h1>{!!$page->title!!}</h1>
    </div>

      <div class="col-xl-8 px-5 description">
        {!!$page->body!!}
      </div> --}}

      @foreach($posts as $post)

        <div class="col-xl-8 px-5 mt-5">
          <h2>{!!$post->title!!}</h2>
          <p>{{date('Y-m-d',strtotime($post->created_at))}}</p>
          {!!$post->body!!}
        </div>

  			{{-- <div class="col-md-3">
  				<a href="/aktualnosci/{{ $post->slug }}">
  					<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
  					<span>{{ $post->title }}</span>
  				</a>
  			</div> --}}
  		@endforeach


  </div>
@endsection
