@extends('layouts.default')

@section('content')

  {{-- @foreach ($posts as $post)
      <p>{{$post->title}}</p>
  @endforeach --}}
<!-- https://devdojo.com/blog/tutorials/working-with-voyager-on-the-front-end -->


  {{-- http://slippry.com/settings/#elements --}}
  <ul id="slippry-slide">
    <li>
      <a href="#slide0"><img src="http://healthy-pregnancy.cmsmasters.net/wp-content/uploads/2015/12/pregnant-woman.jpg"></a>
    </li>
    <li>
      <a href="#slide1"><img src="http://healthy-pregnancy.cmsmasters.net/wp-content/uploads/2017/04/slide1-1.jpg"></a>
    </li>
    <li>
      <a href="#slide2"><img src="http://healthy-pregnancy.cmsmasters.net/wp-content/uploads/2017/04/slide2-1.jpg"></a>
    </li>
  </ul>

  <div class="row majka-box majka-box-bg justify-content-md-center py-5">

      <div class="col col-lg-3 text-center pt-lg-5 majka-box-item">
        <p class="majka-box-big-title">Witam w Szkole Rodzenia Majka. Zapraszam do zapoznania się z ofertą.</p>
      </div>

      <div class="col-lg-3 px-5 majka-box-item">
        <h6>Wypożycz TENS</h6>
        <img alt="logo" src="{{ asset('images/tens.png') }}">
        <p>Istnieje możliwość wypożyczenia TENS-u na czas porodu.</p>
        <a href="#">Zobacz więcej</a>
      </div>

      <div class="col col-lg-3 majka-box-item">
        <h6>Profil na FB</h6>
        <img alt="logo" src="{{ asset('images/fb.png') }}">
        <p>Zapraszam na profil na Facebooku</p>
        <a href="#">Facebook</a>
      </div>
  </div>

  <div class="row majka-l-box">

    <div class="row justify-content-center">
      <div class="col-lg-3 m-5">
        <a href="{!!url('dlaczego-warto')!!}">
          <h4>Dalczego warto?</h4>
          <img class="img-fluid" src="http://healthy-pregnancy.cmsmasters.net/wp-content/uploads/2015/01/2.jpg">
        </a>
      </div>

      <div class="col-lg-3 m-5">
        <a href="{!!url('oferta')!!}">
          <h4>Oferta</h4>
          <img class="img-fluid" src="http://healthy-pregnancy.cmsmasters.net/wp-content/uploads/2015/01/6-1.jpg">
        </a>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-3 m-5">
        <h4>Usługi położnicze</h4>
        <img class="img-fluid" src="http://healthy-pregnancy.cmsmasters.net/wp-content/uploads/2015/01/9.jpg">
      </div>

      <div class="col-lg-3 m-5">
        <h4>Warsztaty</h4>
        <img class="img-fluid" src="http://healthy-pregnancy.cmsmasters.net/wp-content/uploads/2015/01/1.jpg">
      </div>
    </div>
  </div>

  <div class="row majka-g-box">
    <div class="col-lg-12 p-5">
      <blockquote class="blockquote text-center">
        <h3 class="">Zobacz galerię zdjęć i opinię naszych klientów.</h3>
      </blockquote>
    </div>
  </div>

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
