@extends('layouts.master')

@section('title', 'Главная')

@section('content')
  <main class="home-page">
    <div class="sample-wrapper sample-wrapper--dark">
      <div class="content" data-content="home-info">{!! $data['home-info'] !!}</div>
    </div>

    <div class="home-page__about sample-wrapper" style="z-index: 3">
      <div class="content" data-content="home-about">{!! $data['home-about'] !!}</div>
      @if (!session('editMode'))
        <a class="sample-wrapper__link" href="{{ route('about.index') }}"></a>
      @endif
    </div>

    <div class="home-page__product-wrapper" style="z-index: 1">
      <div class="home-page__product sample-wrapper sample-wrapper--link">
        <div class="content" data-content="home-product">{!! $data['home-product'] !!}</div>
        @if (!session('editMode'))
          <a class="sample-wrapper__link" href="{{ route('products.index') }}"></a>
        @endif
      </div>
    </div>

    <div class="home-page__carrier hover-wrapper" style="z-index: 2">
      <div style="margin-top: auto"></div>
      <div class="content" data-content="home-carrier">{!! $data['home-carrier'] !!}</div>
      @if (!session('editMode'))
        <a class="sample-wrapper__link" href="{{ route('carrier.index') }}"></a>
      @endif
    </div>

    <div class="home-page__news sample-wrapper sample-wrapper--link" style="z-index: 2">
      <div class="content" data-content="home-news">{!! $data['home-news'] !!}</div>
      @if (!session('editMode'))
        <a class="sample-wrapper__link" href="{{ route('newslifestyle.index') }}"></a>
      @endif
    </div>

    <div class="home-page__lifestyle hover-wrapper" style="z-index: 3">
      <div style="margin-top: auto"></div>
      <div class="content" data-content="home-lifestyle">{!! $data['home-lifestyle'] !!}</div>
      @if (!session('editMode'))
        <a class="sample-wrapper__link" href="{{ route('newslifestyle.index') }}"></a>
      @endif
    </div>

    <div class="home-page__attention sample-wrapper" style="z-index: 1">
      <div class="content" data-content="home-attention">{!! $data['home-attention'] !!}</div>
    </div>

    @if (count($data['products']) > 0)
      <div class="glide" data-type="carousel">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            @foreach ($data['products'] as $product)
              <li class="glide__slide">
                <x-product :product="$product" />
              </li>
            @endforeach
          </ul>
        </div>

        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<"></button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">"></button>
        </div>
      </div>
    @endif

    <div class="map-wrapper">
      <iframe width="100%" height="100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2823.3269045678803!2d76.97477582869361!3d43.25023393987127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1661757271835!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </main>
@endsection
