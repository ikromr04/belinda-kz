@extends('layouts.master')

@section('title', 'О нас')

@section('content')
  <main class="about-page">
    <div class="about-page__left-column">
      <section class="about-page__about-belinda sample-wrapper sample-wrapper--dark" style="z-index: 3">
        <div class="content" data-content="about-belinda">{!! $data['about-belinda'] !!}</div>
      </section>

      <a
        class="about-page__products pretty-link all-products-link"
        style="z-index: 2"
        @if (!session('editMode')) href="{{ route('products.index') }}" @endif>
        <div class="about-page__products-inner pretty-link__inner">
          <div class="content" data-content="about-products">{!! $data['about-products'] !!}</div>
        </div>
      </a>

      <section class="advantages">
        <h2 class="advantages__title sample-title" data-text="about-advantages-title">{{ $data['about-advantages-title'] }}</h2>

        <ul class="advantages-list">
          <li class="advantage-item" data-text="about-advantage-1">{{ $data['about-advantage-1'] }}</li>
          <li class="advantage-item" data-text="about-advantage-2">{{ $data['about-advantage-2'] }}</li>
          <li class="advantage-item" data-text="about-advantage-3">{{ $data['about-advantage-3'] }}</li>
          <li class="advantage-item" data-text="about-advantage-4">{{ $data['about-advantage-4'] }}</li>
          <li class="advantage-item" data-text="about-advantage-5">{{ $data['about-advantage-5'] }}</li>
          <li class="advantage-item" data-text="about-advantage-6">{{ $data['about-advantage-6'] }}</li>
        </ul>
      </section>
    </div>

    <div class="about-page__right-column">
      <a
        class="about-page__news pretty-link"
        style="z-index: 4"
        @if (!session('editMode')) href="{{ route('newslifestyle.index') }}" @endif>
        <div class="about-page__news-inner pretty-link__inner">
          <div class="content" data-content="about-news">{!! $data['about-news'] !!}</div>
        </div>
      </a>

      <section class="principles sample-wrapper sample-wrapper--dark" style="z-index: 3">
        <div class="content" data-content="about-principles">{!! $data['about-principles'] !!}</div>
      </section>

      <section class="mission-vision">
        <h2 class="mission-vision__title sample-title" data-text="about-mission-vision-title">{!! $data['about-mission-vision-title'] !!}</h2>

        <ul class="mission-vision-list">
          <li class="mission-vision-item sample-wrapper" style="z-index: 2">
            <div class="content" data-content="about-mission-vision-1">{!! $data['about-mission-vision-1'] !!}</div>
          </li>

          <li class="mission-vision-item sample-wrapper" style="z-index: 1">
            <div class="content" data-content="about-mission-vision-2">{!! $data['about-mission-vision-2'] !!}</div>
          </li>

          <li class="mission-vision-item sample-wrapper">
            <div class="content" data-content="about-mission-vision-3">{!! $data['about-mission-vision-3'] !!}</div>
          </li>
        </ul>
      </section>
    </div>

    <section class="global-presence">
      <h2 class="global-presence__title sample-title" data-text="about-global-presence-title">{{ $data['about-global-presence-title'] }}</h2>

      <div class="global-presence__carousel">
        <div class="glide" data-type="carousel">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              @foreach ($data['sites'] as $site)
                <li class="glide__slide">
                  <a class="site-item sample-wrapper" href="{{ $site->url }}" target="_blank">
                    <div class="site-item__inner">
                      <h3 class="sample-wrapper__title">{{ $site->title }}</h3>
                      <cite class="site-item__url">{{ $site->site }}</cite>
                    </div>
                  </a>
                </li>
              @endforeach
            </ul>
          </div>
          <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"></button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"></button>
          </div>
        </div>
      </div>

      <div class="about-page__map map-wrapper">
        <iframe width="100%" height="100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2823.3269045678803!2d76.97477582869361!3d43.25023393987127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1661757271835!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
  </main>
@endsection
