<x-layout>
    <x-slot:title>
        {{ $seo['meta_title'] }}
    </x-slot>
    <x-slot:description>
        {{ $seo['meta_desc'] }}
    </x-slot>
    <main>
        <x-catalog-search></x-catalog-search>
        <section class="catalog">
            <div class="catalog__body container">
                <div class="breadcrumbs">
                    <a href="/">Главная</a>
                    @foreach( $breadcrumbs as $item )
                        /
                        @if( !$loop->last )
                            <a href="{{ $item->category_board_alias }}">{{ $item->category_board_name }}</a>
                        @else
                            <span>{{ $item->category_board_name }}</span>
                        @endif
                    @endforeach
                </div>

                <h1 class="catalog__title title element-animation">{{ $seo['h1'] }}</h1>
                <div class="catalog__settings">
                    <div class="catalog__sort">
                        <div class="s-dropdown">
                            <p class="dropdown__button">По умолчанию</p>
                            <ul class="dropdown__list">
                                <li class="dropdown__list-item" data-value="default">По умолчанию</li>
                                <li class="dropdown__list-item" data-value="news">По новизне</li>
                                <li class="dropdown__list-item" data-value="price.asc">Сначала дешевле</li>
                                <li class="dropdown__list-item" data-value="price.desc">Сначала дороже</li>
                            </ul>
                            <input type="text" name="category" class="dropdown__input-hidden" value="default">
                        </div>
                    </div>
                    <button class="catalog__notifications" aria-label="Уведомления">
                        <svg>
                            <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#bell"></use>
                        </svg>
                    </button>
                    <div class="catalog__view">
                        <button class="catalog__view-grid active" aria-label="Сеточное отображение">
                            <svg>
                                <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#menu2"></use>
                            </svg>
                        </button>
                        <button class="catalog__view-mozaik" aria-label="Отображение по рядам">
                            <svg>
                                <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#rows"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="catalog__content">
                    <div class="catalog__filters">
                        <div class="header__filter-body movied-filters">
                            <div class="header__filter-title">
                                <svg>
                                    <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#arrow-right"></use>
                                </svg>
                                Фильтры
                            </div>
                            <form class="header__filter-settings">
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
                                                От: <input type="text" id="input-min"><span>₽</span>
                                            </div>
                                            <div class="range__item">
                                                До: <input type="text" id="input-max"><span>₽</span>
                                            </div>
                                        </div>
                                        <div id="price-range"></div>
                                    </div>
                                </div>
                                <div class="header__filter-time">
                                    <div class="header__filter-time-title">
                                        Срок размещения
                                        <svg>
                                            <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#chevron-down"></use>
                                        </svg>
                                    </div>
                                    <div class="header__filter-date-items">
                                        <p class="custom-radio">
                                            <input type="radio" name="date" id="hours24" class="custom-radio-input">
                                            <label for="hours24" class="custom-radio-label">За 24 часа</label>
                                        </p>
                                        <p class="custom-radio">
                                            <input type="radio" name="date" id="day7" class="custom-radio-input">
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
                                        <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#close"></use>
                                    </svg>
                                    Сбросить фильтр
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="catalog__products">
                        <a href="#" class="product">
                            <div class="product__image">
                                <picture>
                                    <source srcset="{{ asset('dist') }}/img/products/img1.webp" type="image/webp"><img src="{{ asset('dist') }}/img/products/img1.png"
                                                                                                   alt="">
                                </picture>
                                <div class="product__images-button">
                                    <svg>
                                        <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#photo"></use>
                                    </svg>
                                    <span>3</span>
                                </div>
                            </div>
                            <div class="product__info">
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__description">
                                    <div class="product__description-title">Описание</div>
                                    Продаю карточку — Набор свечей для торта 'Фонтан' - непременный атрибут праздника. Такие
                                    свечи обязательно поднимут
                                    настроение. Время работы до 40 сек. Высота свечи: 12.5 см. Материал: бумага, пластик,
                                    горючая смесь. Предназначено
                                    для использования на открытом воздухе. <br><br>
                                    В упаковке 4 штуки.
                                </div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </div>
                        </a>
                        <a href="#" class="product">
                            <div class="product__image">
                                <picture>
                                    <source srcset="{{ asset('dist') }}/img/products/img2.webp" type="image/webp"><img src="{{ asset('dist') }}/img/products/img2.png"
                                                                                                   alt="">
                                </picture>
                                <div class="product__images-button">
                                    <svg>
                                        <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#photo"></use>
                                    </svg>
                                    <span>3</span>
                                </div>
                            </div>
                            <div class="product__info">
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__description">
                                    <div class="product__description-title">Описание</div>
                                    Продаю карточку — Набор свечей для торта 'Фонтан' - непременный атрибут праздника. Такие
                                    свечи обязательно поднимут
                                    настроение. Время работы до 40 сек. Высота свечи: 12.5 см. Материал: бумага, пластик,
                                    горючая смесь. Предназначено
                                    для использования на открытом воздухе. <br><br>
                                    В упаковке 4 штуки.
                                </div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </div>
                        </a>
                        <a href="#" class="product">
                            <div class="product__image">
                                <picture>
                                    <source srcset="{{ asset('dist') }}/img/products/img3.webp" type="image/webp"><img src="{{ asset('dist') }}/img/products/img3.png"
                                                                                                   alt="">
                                </picture>
                                <div class="product__images-button">
                                    <svg>
                                        <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#photo"></use>
                                    </svg>
                                    <span>3</span>
                                </div>
                            </div>
                            <div class="product__info">
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__description">
                                    <div class="product__description-title">Описание</div>
                                    Продаю карточку — Набор свечей для торта 'Фонтан' - непременный атрибут праздника. Такие
                                    свечи обязательно поднимут
                                    настроение. Время работы до 40 сек. Высота свечи: 12.5 см. Материал: бумага, пластик,
                                    горючая смесь. Предназначено
                                    для использования на открытом воздухе. <br><br>
                                    В упаковке 4 штуки.
                                </div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </div>
                        </a>
                        <a href="#" class="product">
                            <div class="product__image">
                                <picture>
                                    <source srcset="{{ asset('dist') }}/img/products/img4.webp" type="image/webp"><img src="{{ asset('dist') }}/img/products/img4.png"
                                                                                                   alt="">
                                </picture>
                                <div class="product__images-button">
                                    <svg>
                                        <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#photo"></use>
                                    </svg>
                                    <span>3</span>
                                </div>
                            </div>
                            <div class="product__info">
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__description">
                                    <div class="product__description-title">Описание</div>
                                    Продаю карточку — Набор свечей для торта 'Фонтан' - непременный атрибут праздника. Такие
                                    свечи обязательно поднимут
                                    настроение. Время работы до 40 сек. Высота свечи: 12.5 см. Материал: бумага, пластик,
                                    горючая смесь. Предназначено
                                    для использования на открытом воздухе. <br><br>
                                    В упаковке 4 штуки.
                                </div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </div>
                        </a>
                        <a href="#" class="product">
                            <div class="product__image">
                                <picture>
                                    <source srcset="{{ asset('dist') }}/img/products/img1.webp" type="image/webp">
                                    <img src="{{ asset('dist') }}/img/products/img1.png" alt="">
                                </picture>
                                <div class="product__images-button">
                                    <svg>
                                        <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#photo"></use>
                                    </svg>
                                    <span>3</span>
                                </div>
                            </div>
                            <div class="product__info">
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__description">
                                    <div class="product__description-title">Описание</div>
                                    Продаю карточку — Набор свечей для торта 'Фонтан' - непременный атрибут праздника. Такие
                                    свечи обязательно поднимут
                                    настроение. Время работы до 40 сек. Высота свечи: 12.5 см. Материал: бумага, пластик,
                                    горючая смесь. Предназначено
                                    для использования на открытом воздухе. <br><br>
                                    В упаковке 4 штуки.
                                </div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </div>
                        </a>
                        <a href="#" class="product">
                            <div class="product__image">
                                <picture>
                                    <source srcset="{{ asset('dist') }}/img/products/img2.webp" type="image/webp">
                                    <img src="{{ asset('dist') }}/img/products/img2.png" alt="">
                                </picture>
                                <div class="product__images-button">
                                    <svg>
                                        <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#photo"></use>
                                    </svg>
                                    <span>3</span>
                                </div>
                            </div>
                            <div class="product__info">
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__description">
                                    <div class="product__description-title">Описание</div>
                                    Продаю карточку — Набор свечей для торта 'Фонтан' - непременный атрибут праздника. Такие
                                    свечи обязательно поднимут
                                    настроение. Время работы до 40 сек. Высота свечи: 12.5 см. Материал: бумага, пластик,
                                    горючая смесь. Предназначено
                                    для использования на открытом воздухе. <br><br>
                                    В упаковке 4 штуки.
                                </div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </div>
                        </a>
                        <a href="#" class="product">
                            <div class="product__image">
                                <picture>
                                    <source srcset="{{ asset('dist') }}/img/products/img3.webp" type="image/webp"><img src="{{ asset('dist') }}/img/products/img3.png" alt="">
                                </picture>
                                <div class="product__images-button">
                                    <svg>
                                        <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#photo"></use>
                                    </svg>
                                    <span>3</span>
                                </div>
                            </div>
                            <div class="product__info">
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__description">
                                    <div class="product__description-title">Описание</div>
                                    Продаю карточку — Набор свечей для торта 'Фонтан' - непременный атрибут праздника. Такие
                                    свечи обязательно поднимут
                                    настроение. Время работы до 40 сек. Высота свечи: 12.5 см. Материал: бумага, пластик,
                                    горючая смесь. Предназначено
                                    для использования на открытом воздухе. <br><br>
                                    В упаковке 4 штуки.
                                </div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </div>
                        </a>
                        <a href="#" class="product">
                            <div class="product__image">
                                <picture>
                                    <source srcset="{{ asset('dist') }}/img/products/img4.webp" type="image/webp"><img src="{{ asset('dist') }}/img/products/img4.png"
                                                                                                   alt="">
                                </picture>
                                <div class="product__images-button">
                                    <svg>
                                        <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#photo"></use>
                                    </svg>
                                    <span>3</span>
                                </div>
                            </div>
                            <div class="product__info">
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__description">
                                    <div class="product__description-title">Описание</div>
                                    Продаю карточку — Набор свечей для торта 'Фонтан' - непременный атрибут праздника. Такие
                                    свечи обязательно поднимут
                                    настроение. Время работы до 40 сек. Высота свечи: 12.5 см. Материал: бумага, пластик,
                                    горючая смесь. Предназначено
                                    для использования на открытом воздухе. <br><br>
                                    В упаковке 4 штуки.
                                </div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist/img/icons/icons.svg') }}#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="ellipse-3"></div>
            <div class="ellipse-4"></div>
        </section>
    </main>
</x-layout>
