<footer class="footer">
  <dl class="footer-navigation">
    <div class="footer-navigation-item">
      <dt>Сайты компании</dt>

      <dd>
        <a href="https://cerebral.kz/">Церебрал®</a>
      </dd>
      <dd>
        <a href="https://ru.lambrotin.com/">Ламбротин®</a>
      </dd>
      <dd>
        <a href="https://ru.lindavit.com/">Линдавит®</a>
      </dd>
      <dd>
        <a href="https://ru.acemagnil.com/">Ацемагнил®</a>
      </dd>
    </div>

    <div class="footer-navigation-item">
      <dt>Меню</dt>

      <dd>
        <a href="{{ route('home.index') }}">Главная страница</a>
      </dd>
      <dd>
        <a href="{{ route('about.index') }}">О нас</a>
      </dd>
      <dd>
        <a href="{{ route('products.index') }}">Продукты</a>
      </dd>
      <dd>
        <a href="{{ route('carrier.index') }}">Карьера</a>
      </dd>
      {{-- <dd><a href="{{ route('newslifestyle.index') }}">Новости и образ жизни</a></dd> --}}
      <dd>
        <a href="{{ route('contacts.index') }}">Контакты</a>
      </dd>
    </div>

    <div class="footer-navigation-item">
      <dt>Популярные продукты</dt>

      @foreach ($app['popular-products'] as $product)
        <dd>
          <a href="{{ route('products.show', $product->id) }}">{{ $product->title }}</a>
        </dd>
      @endforeach
    </div>

    <div class="footer-navigation-item">
      <dt>Популярные категории</dt>

      @foreach ($app['popular-categories'] as $category)
        <dd>
          <a href="{{ route('products.index') }}">{{ $category->title }}</a>
        </dd>
      @endforeach
    </div>
    <div class="footer-navigation-item">
      <dt>Новости и образ жизни</dt>
      @foreach ($app['newslifestyles'] as $newslifestyle)
        <dd><a href="{{ route('newslifestyle.show', $newslifestyle->slug) }}">{{ $newslifestyle->title }}</a></dd>
      @endforeach
    </div>
  </dl>

  <section class="contacts-card">
    <div class="content" data-content="contacts-block">{!! $data['contacts-block'] !!}</div>

    <ul class="socials" style="margin-top: 24px">
      <li>
        <a href="#" class="socials-link">
          <img src="{{ asset('files/instagram.svg') }}" alt="Инстаграм">
        </a>
      </li>

      <li>
        <a href="#" class="socials-link">
          <img src="{{ asset('files/facebook.svg') }}" alt="Фейсбук">
        </a>
      </li>
    </ul>
  </section>

  <div class="copyright-wrapper">
    <div class="logo-wrapper">
      <a href="{{ route('home.index') }}">
        <img class="main-logo" src="{{ asset('img/main-logo.svg') }}" alt="Логотип компании Belinda">
      </a>
    </div>

    <p class="copyright">&copy; {{ date('Y') }} Belinda. Все права защищены</p>
  </div>
</footer>
