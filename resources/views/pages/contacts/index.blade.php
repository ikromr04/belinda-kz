@extends('layouts.master')

@section('title', 'Контакты')

@section('content')
  <main class="contacts-page">
    <div class="contacts-vitrin">
      <section class="contacts-card">
        <div style="width: 70%">
          <div class="content" data-content="contacts-block">{!! $data['contacts-block'] !!}</div>
        </div>

        <ul class="socials">
          <li><a href="#" class="socials-link"><img src="{{ asset('files/instagram.svg') }}" alt="Инстаграм"></a></li>
          <li><a href="#" class="socials-link"><img src="{{ asset('files/facebook.svg') }}" alt="Фейсбук"></a></li>
        </ul>
      </section>

      <form class="form sample-wrapper sample-wrapper--dark">
        @csrf
        <fieldset class="form__group">
          <legend class="form__title sample-wrapper__title sample-wrapper__title--big">Свяжитесь с нами через онлайн форму</legend>
          <p class="form__item">
            <input class="form__input" id="name" type="text" name="name" placeholder="Имя" required data-pristine-required-message="Объязательное поле">
          </p>
          <p class="form__item">
            <input class="form__input" type="email" name="email" id="email" placeholder="E-mail" required data-pristine-required-message="Объязательное поле" data-pristine-email-message="E-mail не является допустимым">
          </p>
          <p class="form__item">
            <input class="form__input" type="tel" id="phone" name="phone" placeholder="Телефон" required data-pristine-required-message="Объязательное поле">
          </p>
          <p class="form__item">
            <textarea class="form__textarea" name="message" id="message" placeholder="Введите ваше сообщение здесь..." required data-pristine-required-message="Объязательное поле"></textarea>
          </p>
        </fieldset>
        <div class="form__footer">
          <p class="form__aware">Нажимая кнопку отправить, вы соглашаетесь на обработку ваших персональных данных.</p>
          <button class="form__submit-btn red-link" style="margin-left: 32px" type="submit">Отправить</button>
        </div>
      </form>
    </div>

    <div class="contacts-page map-wrapper" style="height: 600px">
      <iframe width="100%" height="100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2823.3269045678803!2d76.97477582869361!3d43.25023393987127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1661757271835!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <section class="global-presence">
      <h2 class="global-presence__title sample-title" data-text="contacts-global-presence">{{ $data['contacts-global-presence'] }}</h2>

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
    </section>
  </main>
@endsection

@section('scripts')
  <script src="{{ asset('js/contacts.js') }}" type="module"></script>
@endsection
