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

      <form class="form sample-wrapper sample-wrapper--dark" id="apply-form">
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

    <section class="ae-section">
      <p>Чтобы сообщить о жалобе на продукт/нежелательном явлении, используйте приведенную ниже контактную информацию.</p>
      <dl>
        <dt>Контактный номер:</dt>
        <dd>
          <a href="tel:+77771750099">+77771750099</a>
          <strong>(по вопросам безопасности лекарств)</strong>
        </dd>
        <dt>Контактный E-mail:</dt>
        <dd>
          <a href="mailto:drugsafety@evolet.co.uk">drugsafety@evolet.co.uk</a>
          <strong>(по вопросам безопасности лекарств)</strong>
        </dd>
      </dl>
      <form class="form sample-wrapper sample-wrapper--dark" id="ae-form" action="{{ route('ae') }}" method="post">
        @csrf
        <fieldset class="form__group">
          <legend class="form__title sample-wrapper__title sample-wrapper__title--big">Форма для отправки жалобы:</legend>
          <p class="form__item">
            <input class="form__input" id="inititals" type="text" name="inititals" placeholder="Инициалы пациента" required data-pristine-required-message="Объязательное поле">
          </p>
          <p class="form__item">
            <input class="form__input" id="age" type="number" name="age" placeholder="Возраст (лет) (необязательный)">
          </p>
          <p class="form__item">
            <input class="form__input" id="weight" type="number" name="weight" placeholder="Вес (кг) (необязательный)">
          </p>
          <p class="form__item">
            <input class="form__input" id="hight" type="number" name="hight" placeholder="Рост (см) (необязательный)">
          </p>
          <p class="form__item">
            <input class="form__input" id="event" type="text" name="event" placeholder="Нежелательная реакция" required data-pristine-required-message="Объязательное поле">
          </p>
          <p class="form__item">
            <input class="form__input" id="suspect" type="text" name="suspect" placeholder="Лекарственные средства, вызвавшие нежелательную реакцию" required data-pristine-required-message="Объязательное поле">
          </p>
          <p class="form__item">
            <input class="form__input" id="name" type="text" name="name" placeholder="Имя сообщающего лица" required data-pristine-required-message="Объязательное поле">
          </p>
          <p class="form__item">  
            <input class="form__input" type="email" name="email" id="email" placeholder="Электронная почта сообщающего лица" required data-pristine-required-message="Объязательное поле" data-pristine-email-message="E-mail не является допустимым">
          </p>
          <p class="form__item">
            <input class="form__input" type="tel" id="phone" name="phone" placeholder="Номер мобильного телефона сообщающего лица " required data-pristine-required-message="Объязательное поле">
          </p>
        </fieldset>
        <div class="form__footer">
          <button class="form__submit-btn red-link" type="submit">Отправить</button>
        </div>
      </form>

      <p>Нажмите, чтобы загрузить <a class="ae-link" href="/ae-form-ru.docx">форму сообщения о нежелательных явлениях</a> для детального отчета.</p>
      <p>После отправки формы онлайн вы получите подтверждение на свой адрес электронной почты. С вами свяжутся лично только в том случае, если потребуется какая-либо дополнительная информация. Если вам нужна помощь в заполнении формы, вы можете позвонить нашему менеджеру для онлайн-поддержки.</p>

      <h3>Конфиденциальность:</h3>
      <p>Вся информация и личные данные, которыми вы делитесь с нами, будут защищены и сохранены в тайне. Предоставленная вами информация может быть передана органам здравоохранения.</p>
      <p>Сообщение здесь не означает признания того, что продукт компании вызвал реакцию или способствовал ей.</p>
    </section>

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
