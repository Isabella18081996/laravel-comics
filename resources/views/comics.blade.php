@extends('layouts.main')

@section('content')
  <main>  
    <ul>
        @foreach ($cards as $card )
        <li>
            <img src="{{$card['thumb']}}" alt="{{$card['series']}}">
            <h4><a href="">{{$card['series']}}</a></h4>
        </li>
        @endforeach
    </ul>

    <button>LOAD MORE</button>
  </main>
  <section class="container shop-main">
    <ul>
      <li><a href="#">
        <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="digital-comics">
        <h4>DIGITAL COMICS</h4>
        </a>
      </li>

      <li><a href="#">
        <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="merchandise">
        <h4>DC MERCHANDISE</h4>
        </a>
      </li>

            <li><a href="#">
        <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="subscription">
        <h4>SUBSCRIPTION</h4>
        </a>
      </li>

            <li><a href="#">
        <img class="special-img-shop"  src="{{asset('img/buy-comics-shop-locator.png')}}" alt="comic shop locator">
        <h4>COMIC SHOP LOCATOR</h4>
        </a>
      </li>

      <li><a href="#">
        <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="power visa">
        <h4>DC POWER VISA</h4>
        </a>
      </li>

    </ul>

  </section>
@endsection
