<x-layout>
    <x-slot:title>
        {{ $seo['meta_title'] }}
    </x-slot>
    <x-slot:description>
        {{ $seo['meta_desc'] }}
    </x-slot>
    <main>
        <section class="hero">
            <div class="hero__body container">
                <h1 class="hero__title element-animation">Доска объялений нового поколения</h1>
                <div class="hero__search element-animation">
                    <form class="hero__search-form">
                        <input type="text" placeholder="Поиск" class="hero__search-input">
                        <svg class="hero__search-icon">
                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#search"></use>
                        </svg>
                        <button type="submit" class="hero__search-button" aria-label="Искать">
                            <span>Искать</span>
                        </button>
                    </form>
                </div>
                <div class="hero__talk talk-1">
                    <p class="element-animation">Нашел склад и поставщика!</p>
                </div>
                <div class="hero__talk talk-2">
                    <p class="element-animation">Продвинул карточку и увеличил продажи x 10!</p>
                </div>
                <div class="hero__talk talk-3">
                    <p class="element-animation">Круто!</p>
                    <p class="element-animation">много заказов для блогера!</p>
                </div>
                <div class="birds-1">
                    <picture>
                        <source srcset="{{ asset('dist') }}/img/hero/birds-1.webp" type="image/webp">
                        <img src="{{ asset('dist') }}/img/hero/birds-1.png" alt="">
                    </picture>
                </div>
                <div class="birds-2">
                    <picture>
                        <source srcset="{{ asset('dist') }}/img/hero/birds-2.webp" type="image/webp">
                        <img src="{{ asset('dist') }}/img/hero/birds-2.png" alt="">
                    </picture>
                </div>

                <div class="money money-1">
                    <img src="{{ asset('dist') }}/img/hero/money-1.svg" alt="">
                </div>
                <div class="money money-2">
                    <img src="{{ asset('dist') }}/img/hero/money-3.svg" alt="">
                </div>
                <div class="money money-3">
                    <img src="{{ asset('dist') }}/img/hero/money-2.svg" alt="">
                </div>
                <div class="money money-4">
                    <img src="{{ asset('dist') }}/img/hero/money-4.svg" alt="">
                </div>
                <div class="money money-5">
                    <img src="{{ asset('dist') }}/img/hero/money-1.svg" alt="">
                </div>
                <div class="money money-6">
                    <img src="{{ asset('dist') }}/img/hero/money-3.svg" alt="">
                </div>
                <div class="money money-7">
                    <img src="{{ asset('dist') }}/img/hero/money-5.svg" alt="">
                </div>
                <div class="money money-8">
                    <img src="{{ asset('dist') }}/img/hero/money-4.svg" alt="">
                </div>
                <div class="money money-9">
                    <img src="{{ asset('dist') }}/img/hero/money-3.svg" alt="">
                </div>
            </div>
            <div class="cloud cloud-1">
                <img src="{{ asset('dist') }}/img/hero/cloud.svg" alt="">
            </div>
            <div class="cloud cloud-2">
                <img src="{{ asset('dist') }}/img/hero/cloud.svg" alt="">
            </div>
            <div class="cloud cloud-3">
                <img src="{{ asset('dist') }}/img/hero/cloud.svg" alt="">
            </div>
            <div class="cloud cloud-4">
                <img src="{{ asset('dist') }}/img/hero/cloud.svg" alt="">
            </div>
            <div class="cloud cloud-5">
                <img src="{{ asset('dist') }}/img/hero/cloud.svg" alt="">
            </div>
            <div class="cloud cloud-6">
                <img src="{{ asset('dist') }}/img/hero/cloud.svg" alt="">
            </div>
            <div class="cloud cloud-7">
                <img src="{{ asset('dist') }}/img/hero/cloud.svg" alt="">
            </div>
            <div class="cloud cloud-8">
                <img src="{{ asset('dist') }}/img/hero/cloud.svg" alt="">
            </div>
            <div class="cloud cloud-9">
                <img src="{{ asset('dist') }}/img/hero/cloud.svg" alt="">
            </div>
            <div class="list-1">
                <img src="{{ asset('dist') }}/img/hero/sheet2.svg" alt="">
            </div>
            <div class="list-2">
                <img src="{{ asset('dist') }}/img/hero/sheet.svg" alt="">
            </div>
        </section>
        <section class="cat-block cat-block-1">
            <div class="cat-block__body container">
                <div class="cat-block__info">
                    <h2 class="cat-block__title element-animation">
                        Купить готовую<br> карточку <span class="wb">WB</span>/<span class="ozon">Ozon</span>
                    </h2>
                    <picture>
                        <source srcset="{{ asset('dist') }}/img/home/wb1.webp" type="image/webp">
                        <img src="{{ asset('dist') }}/img/home/wb1.png" alt="">
                    </picture>
                </div>
                <div class="cat-block__content element-animation">
                    <div class="cat-block__slider swiper">
                        <div class="cat-block__slider-wrapper swiper-wrapper">
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img1.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img1.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img2.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img2.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img3.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img3.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img4.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img4.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img1.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img1.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img2.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img2.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img3.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img3.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img4.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img4.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                        </div>
                        <div class="cat-block-slider-prev slider-button-prev swiper-button-prev">
                            <svg>
                                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                            </svg>
                        </div>
                        <div class="cat-block-slider-next slider-button-next swiper-button-next">
                            <svg>
                                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <a href="catalog.html" class="show-more-link">
                    Смотреть все
                    <svg>
                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                    </svg>
                </a>
                <button class="show-more-link show-more-products">
                    Показать еще
                    <svg>
                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#refresh"></use>
                    </svg>
                </button>
            </div>
            <div class="cloud cloud-1">
                <img src="{{ asset('dist') }}/img/hero/cloud-2.svg" alt="">
            </div>
            <div class="cloud cloud-2">
                <img src="{{ asset('dist') }}/img/hero/cloud-2.svg" alt="">
            </div>
            <div class="cloud cloud-3">
                <img src="{{ asset('dist') }}/img/hero/cloud-2.svg" alt="">
            </div>
            <div class="cloud cloud-4">
                <img src="{{ asset('dist') }}/img/hero/cloud-2.svg" alt="">
            </div>
            <div class="cloud cloud-5">
                <img src="{{ asset('dist') }}/img/hero/cloud-2.svg" alt="">
            </div>
            <div class="cloud cloud-6">
                <img src="{{ asset('dist') }}/img/hero/cloud-2.svg" alt="">
            </div>
            <div class="cloud cloud-7">
                <img src="{{ asset('dist') }}/img/hero/cloud-2.svg" alt="">
            </div>
            <div class="cloud cloud-8">
                <img src="{{ asset('dist') }}/img/hero/cloud-2.svg" alt="">
            </div>
            <div class="ellipse-1"></div>
            <div class="ellipse-2"></div>
        </section>
        <section class="cat-block">
            <div class="cat-block__body container">
                <div class="cat-block__info">
                    <h2 class="cat-block__title element-animation">
                        Продвигаться <br> на <span class="wb">WB</span>
                    </h2>
                    <picture>
                        <source srcset="{{ asset('dist') }}/img/home/wb2.webp" type="image/webp">
                        <img src="{{ asset('dist') }}/img/home/wb2.png" alt="">
                    </picture>
                </div>
                <div class="cat-block__content element-animation">
                    <div class="cat-block__slider swiper">
                        <div class="cat-block__slider-wrapper swiper-wrapper">
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img1.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img1.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img2.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img2.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img3.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img3.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img4.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img4.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img1.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img1.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img2.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img2.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img3.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img3.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img4.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img4.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                        </div>
                        <div class="cat-block-slider-prev slider-button-prev swiper-button-prev">
                            <svg>
                                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                            </svg>
                        </div>
                        <div class="cat-block-slider-next slider-button-next swiper-button-next">
                            <svg>
                                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <a href="catalog.html" class="show-more-link">
                    Смотреть все
                    <svg>
                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                    </svg>
                </a>
                <button class="show-more-link show-more-products">
                    Показать еще
                    <svg>
                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#refresh"></use>
                    </svg>
                </button>
            </div>
        </section>
        <section class="infoblock">
            <div class="infoblock__body container">
                <div class="infoblock__text">
                    <h3 class="infoblock__title">Безопасные сделки</h3>
                    <h4 class="infoblock__subtitle">Это просто и безопасно</h4>
                    <div class="infoblock__link">
                        <a href="">Подробнее
                            <svg>
                                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="infoblock__image">
                    <picture>
                        <source srcset="{{ asset('dist') }}/img/home/infoblock-image-1.webp" type="image/webp">
                        <img
                            src="{{ asset('dist') }}/img/home/infoblock-image-1.png" alt="">
                    </picture>
                </div>
            </div>
        </section>
        <section class="cat-block">
            <div class="cat-block__body container">
                <div class="cat-block__info">
                    <h2 class="cat-block__title element-animation">
                        Найди <br> <span class="wb">исполнителя</span>
                    </h2>
                    <picture>
                        <source srcset="{{ asset('dist') }}/img/home/wb3.webp" type="image/webp">
                        <img src="{{ asset('dist') }}/img/home/wb3.png" alt="">
                    </picture>
                </div>
                <div class="cat-block__content element-animation">
                    <div class="cat-block__slider swiper">
                        <div class="cat-block__slider-wrapper swiper-wrapper">
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img1.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img1.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img2.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img2.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img3.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img3.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img4.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img4.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img1.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img1.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img2.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img2.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img3.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img3.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img4.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img4.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                        </div>
                        <div class="cat-block-slider-prev slider-button-prev swiper-button-prev">
                            <svg>
                                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                            </svg>
                        </div>
                        <div class="cat-block-slider-next slider-button-next swiper-button-next">
                            <svg>
                                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <a href="catalog.html" class="show-more-link">
                    Смотреть все
                    <svg>
                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                    </svg>
                </a>
                <button class="show-more-link show-more-products">
                    Показать еще
                    <svg>
                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#refresh"></use>
                    </svg>
                </button>
            </div>
        </section>
        <section class="cat-block">
            <div class="cat-block__body container">
                <div class="cat-block__info">
                    <h2 class="cat-block__title element-animation">
                        Услуги <br> <span class="wb">логистики</span>
                    </h2>
                    <picture>
                        <source srcset="{{ asset('dist') }}/img/home/wb4.webp" type="image/webp">
                        <img src="{{ asset('dist') }}/img/home/wb4.png" alt="">
                    </picture>
                </div>
                <div class="cat-block__content element-animation">
                    <div class="cat-block__slider swiper">
                        <div class="cat-block__slider-wrapper swiper-wrapper">
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img1.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img1.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img2.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img2.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img3.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img3.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img4.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img4.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img1.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img1.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img2.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img2.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img3.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img3.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img4.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img4.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                        </div>
                        <div class="cat-block-slider-prev slider-button-prev swiper-button-prev">
                            <svg>
                                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                            </svg>
                        </div>
                        <div class="cat-block-slider-next slider-button-next swiper-button-next">
                            <svg>
                                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <a href="catalog.html" class="show-more-link">
                    Смотреть все
                    <svg>
                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                    </svg>
                </a>
                <button class="show-more-link show-more-products">
                    Показать еще
                    <svg>
                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#refresh"></use>
                    </svg>
                </button>
            </div>
        </section>
        <section class="infoblock">
            <div class="infoblock__body container">
                <div class="infoblock__text">
                    <h3 class="infoblock__title">Турбо</h3>
                    <h4 class="infoblock__subtitle">Ваше предложение увидит максимум посетителей</h4>
                    <div class="infoblock__link">
                        <a href="">Подробнее
                            <svg>
                                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="infoblock__image infoblock__image-2">
                    <picture>
                        <source srcset="{{ asset('dist') }}/img/home/infoblock-image-2.webp" type="image/webp">
                        <img
                            src="{{ asset('dist') }}/img/home/infoblock-image-2.png" alt="">
                    </picture>
                </div>
            </div>
        </section>
        <section class="cat-block">
            <div class="cat-block__body container">
                <div class="cat-block__info">
                    <h2 class="cat-block__title element-animation">
                        Фулфилмены / <br> склады
                    </h2>
                    <picture>
                        <source srcset="{{ asset('dist') }}/img/home/wb5.webp" type="image/webp">
                        <img src="{{ asset('dist') }}/img/home/wb5.png" alt="">
                    </picture>
                </div>
                <div class="cat-block__content element-animation">
                    <div class="cat-block__slider swiper">
                        <div class="cat-block__slider-wrapper swiper-wrapper">
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img1.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img1.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img2.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img2.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img3.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img3.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img4.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img4.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img1.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img1.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img2.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img2.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img3.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img3.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img4.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img4.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                        </div>
                        <div class="cat-block-slider-prev slider-button-prev swiper-button-prev">
                            <svg>
                                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                            </svg>
                        </div>
                        <div class="cat-block-slider-next slider-button-next swiper-button-next">
                            <svg>
                                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <a href="catalog.html" class="show-more-link">
                    Смотреть все
                    <svg>
                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                    </svg>
                </a>
                <button class="show-more-link show-more-products">
                    Показать еще
                    <svg>
                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#refresh"></use>
                    </svg>
                </button>
            </div>
        </section>
        <section class="cat-block">
            <div class="cat-block__body container">
                <div class="cat-block__info">
                    <h2 class="cat-block__title element-animation">
                        Опт <br> и производители
                    </h2>
                    <picture>
                        <source srcset="{{ asset('dist') }}/img/home/wb6.webp" type="image/webp">
                        <img src="{{ asset('dist') }}/img/home/wb6.png" alt="">
                    </picture>
                </div>
                <div class="cat-block__content element-animation">
                    <div class="cat-block__slider swiper">
                        <div class="cat-block__slider-wrapper swiper-wrapper">
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img1.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img1.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img2.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img2.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img3.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img3.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img4.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img4.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img1.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img1.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img2.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img2.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img3.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img3.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                            <a href="product-card.html" class="cat-block__slide product swiper-slide">
                                <div class="product__image">
                                    <picture>
                                        <source srcset="{{ asset('dist') }}/img/products/img4.png" type="image/webp">
                                        <img
                                            src="{{ asset('dist') }}/img/products/img4.png" alt="">
                                    </picture>
                                    <div class="product__images-button">
                                        <svg>
                                            <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#photo"></use>
                                        </svg>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="product__name">Продаю карточку товара</div>
                                <div class="product__price">150,000 ₽</div>
                                <div class="product__date">
                                    <svg>
                                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#calendar"></use>
                                    </svg>
                                    01 июля 2024
                                </div>
                            </a>
                        </div>
                        <div class="cat-block-slider-prev slider-button-prev swiper-button-prev">
                            <svg>
                                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                            </svg>
                        </div>
                        <div class="cat-block-slider-next slider-button-next swiper-button-next">
                            <svg>
                                <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                <a href="catalog.html" class="show-more-link">
                    Смотреть все
                    <svg>
                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#arrow-right"></use>
                    </svg>
                </a>
                <button class="show-more-link show-more-products">
                    Показать еще
                    <svg>
                        <use xlink:href="{{ asset('dist') }}/img/icons/icons.svg#refresh"></use>
                    </svg>
                </button>
            </div>
        </section>
    </main>
</x-layout>
