<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{ asset('/') }}"/>
    <title>{{ $title ?? '' }}</title>
    <meta name="description" content="{{ $description ?? '' }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('dist/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dist/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dist/favicon-16x16.png') }}">
    <link rel="icon" type="image/ico" href="{{ asset('dist/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#e5d8ed">
    <meta name="theme-color" content="#e5d8ed">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="{{ asset('dist/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
    @vite(['resources/css/app.css'])
    @stack('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
<div class="wrapper">
    <div class="preloader">
        <span class="preloader__spinner"></span>
    </div>
    <header class="header element-animation">
        <div class="header__body container">
            <div class="header__top">
                <div class="header__logo">
                    <a href="/" aria-label="RizzCards">
                        <img src="{{ asset('dist') }}/img/logo.svg" alt="">
                    </a>
                </div>
                <form action="" method="" class="header__search">
                    <input type="search" placeholder="Поиск">
                    <button type="submit" class="header__search-submit" aria-label="Искать">
                        <svg class="header__search-icon">
                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#search"></use>
                        </svg>
                    </button>
                </form>
                <div class="header__add-buttons">
                    <button class="header__filter" aria-label="Фильтр">
                        <svg>
                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#filter"></use>
                        </svg>
                    </button>
                    <button class="header__menu-icon" aria-label="Меню">
                        <svg>
                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#burger"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="header__bottom">
                <div class="header__catalog">
                    <button class="header__catalog-button button" aria-label="Каталог">
                        <svg>
                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#menu"></use>
                        </svg>
                        <span>Каталог</span>
                    </button>
                </div>
                <div class="header__navigations">
                    <nav class="header__menu menu">
                        <ul class="menu__list">
                            <li class="menu__list-item">
                                <a href="" class="menu__link">
                                    <span>Блогерам</span>
                                    <svg class="menu__link-arrow">
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#chevron-down"></use>
                                    </svg>
                                </a>
                                <ul class="menu__sublist">
                                    <li><a href="" class="menu__sublist-link">Ссылка 1</a></li>
                                    <li><a href="" class="menu__sublist-link">Ссылка 2</a></li>
                                </ul>
                            </li>
                            <li class="menu__list-item">
                                <a href="" class="menu__link">
                                    <span>Селлерам</span>
                                    <svg class="menu__link-arrow">
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#chevron-down"></use>
                                    </svg>
                                </a>
                                <ul class="menu__sublist">
                                    <li><a href="" class="menu__sublist-link">Рост продаж на WB</a></li>
                                    <li><a href="" class="menu__sublist-link">Рост продаж на Ozon</a></li>
                                </ul>
                            </li>
                            <li class="menu__list-item">
                                <a href="" class="menu__link">
                                    <span>Производителям</span>
                                    <svg class="menu__link-arrow">
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#chevron-down"></use>
                                    </svg>
                                </a>
                                <ul class="menu__sublist">
                                    <li><a href="" class="menu__sublist-link">Ссылка 1</a></li>
                                    <li><a href="" class="menu__sublist-link">Ссылка 2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="header__buttons">
                        <button class="header__login button">
                            <svg>
                                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#user"></use>
                            </svg>
                            <span>Войти</span>
                        </button>
                        <button class="header__add button">
                            <svg>
                                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#plus"></use>
                            </svg>
                            <span>Разместить бесплатно</span>
                        </button>
                    </div>
                </div>
                <div class="header__tags">
                    <div class="header__tags-slider swiper">
                        <div class="header__tags-slider-wrapper swiper-wrapper">
                            <div class="header__tag swiper-slide">
                                <svg class="header__tag-icon">
                                    <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#bloger"></use>
                                </svg>
                                <a href="">Блогерам</a>
                            </div>
                            <div class="header__tag swiper-slide">
                                <svg class="header__tag-icon">
                                    <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#seller"></use>
                                </svg>
                                <a href="">Селлерам</a>
                            </div>
                            <div class="header__tag swiper-slide">
                                <svg class="header__tag-icon">
                                    <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#manufact"></use>
                                </svg>
                                <a href="">Производителям</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__catalog-menu catalog-menu">
            <nav class="catalog-menu__nav">
                <div class="catalog-menu__categories">
                    @foreach( $categories[0] as $item )
                        <a href="{{ $item->category_board_alias }}" class="catalog-menu__category"
                           data-category="{{ $item->category_board_id }}">
                            @if( $iconId = config('store.categories.icons.' . $item->category_board_id) )
                                <svg>
                                    <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#{{ $iconId }}"></use>
                                </svg>
                            @endif
                            <span class="catalog-menu__category-text">{{ $item->category_board_name }}</span>
                            <span class="quantity">(4)</span>
                        </a>
                    @endforeach
                </div>
                <div class="catalog-menu__subcategories">
                    @foreach( $categories[0] as $item )
                        <div class="catalog-menu__subcategory" data-subcategory="{{ $item->category_board_id }}">
                            <a href="{{ $item->category_board_alias }}" class="catalog-menu__title">
                                <svg class="catalog-menu__back">
                                    <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                                </svg>
                                {{ $item->category_board_name }}
                            </a>
                            <ul class="catalog-menu__list">
                                @isset( $categories[$item->category_board_id] )
                                    @foreach( $categories[$item->category_board_id] as $value )
                                        <li>
                                            <a href="{{ $value->category_board_alias }}" class="catalog-menu__link">
                                                {{ $value->category_board_name }}
                                                <span class="quantity">(4)</span>
                                            </a>
                                        </li>
                                    @endforeach
                                @endisset
                            </ul>
                        </div>
                    @endforeach
                </div>
            </nav>
        </div>
    </header>
    {{ $slot }}
    <footer class="footer">
        <div class="footer__body container">
            <div class="footer-main">
                <div class="footer__logo">
                    <a href="/" aria-label="RizzCards перейти на главую страницу">
                        <img src="{{ asset('dist') }}/img/logo.svg" alt="">
                    </a>
                </div>
                <div class="footer__menu">
                    <div class="footer__menu-list">
                        <div class="footer__menu-col">
                            <div>
                                <p class="footer__menu-title">
                                    Блогерам
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#chevron-down"></use>
                                    </svg>
                                </p>
                                <div class="footer__menu-links">
                                    <a href="" class="footer__menu-link">Заказы на ракламу</a>
                                </div>
                            </div>
                            <div>
                                <p class="footer__menu-title">
                                    Селлеру
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#chevron-down"></use>
                                    </svg>
                                </p>
                                <div class="footer__menu-links">
                                    <a href="" class="footer__menu-link">Рост продаж на WB</a>
                                    <a href="" class="footer__menu-link">Рост продаж на Ozon</a>
                                </div>
                            </div>
                        </div>
                        <div class="footer__menu-col">
                            <div>
                                <p class="footer__menu-title">
                                    Производителю
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#chevron-down"></use>
                                    </svg>
                                </p>
                                <div class="footer__menu-links">
                                    <a href="" class="footer__menu-link">Рассказать о своем товаре</a>
                                    <a href="" class="footer__menu-link">Фулфилмент / склады</a>
                                    <a href="" class="footer__menu-link">Логистика</a>
                                    <a href="" class="footer__menu-link">Доставка из Китая</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__socials">
                    <a href="" class="footer__social" aria-label="Вконтакте">
                        <svg>
                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#vk"></use>
                        </svg>
                    </a>
                    <a href="" class="footer__social" aria-label="Youtube">
                        <svg>
                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#youtube"></use>
                        </svg>
                    </a>
                    <a href="" class="footer__social" aria-label="Telegram">
                        <svg>
                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#telegram"></use>
                        </svg>
                    </a>
                    <a href="" class="footer__social" aria-label="instagram">
                        <svg>
                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#instagram"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__under">
            <div class="footer__under-body container">
                <p>© 2024 RIZZ CARDS</p>
                <div class="footer__policy">
                    <a href="">Правила сервиса</a>
                    <a href="">Пользовательское соглашение</a>
                    <a href="">Служба поддержки</a>
                </div>
            </div>
        </div>
        <div class="footer-dev container">
            <div class="footer-dev__body">
                <a href="https://tutmee.ru/" target="_blank" class="footer-dev__link">
                  <span>
                     LTD Tutmee <br>
                     Web development Agency
                  </span>
                    <img src="{{ asset('dist') }}/img/logo-dev.svg" alt="Tutmee">
                </a>
            </div>
        </div>
    </footer>
    <div class="header__filter-body">
        <div class="header__filter-title">
            <svg>
                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
            </svg>
            Фильтры
        </div>
        <form class="header__filter-settings">
            <div class="header__filter-city">
                <input type="text" class="input-with-label" id="city">
                <label for="city" class="header__filter-label">Город или регион</label>
            </div>
            <div class="header__filter-category">
                <div class="s-dropdown">
                    <p class="dropdown__button">Категория</p>
                    <ul class="dropdown__list">
                        <li class="dropdown__list-item" data-value="category1">Категория 1</li>
                        <li class="dropdown__list-item" data-value="category2">Категория 2</li>
                        <li class="dropdown__list-item" data-value="category3">Категория 3</li>
                        <li class="dropdown__list-item" data-value="category4">Категория 4</li>
                        <li class="dropdown__list-item" data-value="category5">Категория 5</li>
                    </ul>
                    <input type="text" name="category" class="dropdown__input-hidden" value="">
                </div>
            </div>
            <div class="header__filter-status">
                <div class="checkbox">
                    <input type="checkbox" id="vip">
                    <label for="vip">Vip</label>
                </div>
            </div>
            <div class="header__filter-price">
                <div class="range">
                    <div class="range__items">
                        <div class="range__item">
                            От: <input type="text" id="input-min" aria-label="От"><span>₽</span>
                        </div>
                        <div class="range__item">
                            До: <input type="text" id="input-max" aria-label="До"><span>₽</span>
                        </div>
                    </div>
                    <div id="price-range"></div>
                </div>
            </div>
            <div class="header__filter-time">
                <div class="header__filter-time-title">
                    Срок размещения
                    <svg>
                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#chevron-down"></use>
                    </svg>
                </div>
                <div class="header__filter-date-items">
                    <p class="custom-radio">
                        <input type="radio" name="date" id="hours24" class="custom-radio-input">
                        <label for="hours24" class="custom-radio-label">За 24 часа</label>
                    </p>
                    <p class="custom-radio">
                        <input type="radio" name="date" id="day7" class="custom-radio-input" checked>
                        <label for="day7" class="custom-radio-label">За 7 дней</label>
                    </p>
                    <p class="custom-radio">
                        <input type="radio" name="date" id="alltime" class="custom-radio-input">
                        <label for="alltime" class="custom-radio-label">За все время</label>
                    </p>
                </div>
            </div>
            <button type="submit" class="header__filter-apply">Применить</button>
            <button type="reset" class="header__filter-reset">
                <svg>
                    <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#close"></use>
                </svg>
                Сбросить фильтр
            </button>
        </form>
    </div>
    <div class="mobile-menu">
        <a href="#" class="mobile-menu__item active" aria-label="Главная страница">
            <svg>
                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#mm-home"></use>
            </svg>
        </a>
        <a href="#" class="mobile-menu__item" aria-label="Избранное">
            <svg>
                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#mm-heart"></use>
            </svg>
        </a>
        <a href="#" class="mobile-menu__item" aria-label="Добавить объявление">
            <svg>
                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#mm-plus"></use>
            </svg>
        </a>
        <a href="#" class="mobile-menu__item" aria-label="Комментарии">
            <svg>
                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#mm-comment"></use>
            </svg>
        </a>
        <a href="#" class="mobile-menu__item" aria-label="Мой профиль">
            <svg>
                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#mm-user"></use>
            </svg>
        </a>
    </div>
</div>
<script src="{{ asset('dist/js/nouislider.min.js') }}"></script>
<script src="{{ asset('dist/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/app.js') }}"></script>
@vite(['resources/js/app.js'])
@stack('scripts')
</body>
</html>
