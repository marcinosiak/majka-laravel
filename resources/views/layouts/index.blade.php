@extends('layouts.default')

@section('content')

  {{-- @foreach ($posts as $post)
      <p>{{$post->title}}</p>
  @endforeach --}}
<!-- https://devdojo.com/blog/tutorials/working-with-voyager-on-the-front-end -->


  {{-- http://slippry.com/settings/#elements --}}
  <ul id="slippry-slide">
    <li>
      <a href="#slide1"><img src="http://healthy-pregnancy.cmsmasters.net/wp-content/uploads/2017/04/slide1-1.jpg"></a>
    </li>
    <li>
      <a href="#slide2"><img src="http://healthy-pregnancy.cmsmasters.net/wp-content/uploads/2017/04/slide2-1.jpg"></a>
    </li>
  </ul>


@endsection

@section('script')
  <script src="/js/slippry.min.js"></script>

  <script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery('#slippry-slide').slippry({
      pager: false,
      controls: false,
    })
  });



  </script>
@endsection
