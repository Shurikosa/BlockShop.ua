<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BlockShop.ua</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
{{--    <link rel="stylesheet" href="resources/css/style.css">--}}
    @vite(['resources/css/style.css', 'resources/js/category_toggle.js'])
</head>
<body>
    <div class="header">
        <div class="wrap-container">
            <div class="logo">
                <a href="#">
                    <img src="{{Vite::asset('resources/graphics/icons/BlockShopLogo.png')}}" alt="">
                </a>
            </div>
            <div class="logo-menu">
                <ul>
                    <li><a href="#">Доставка і оплата</a></li>
                    <li><a href="#">Контакти</a></li>
                    <li><a href="#">Про нас</a></li>
                    <li><a href="#">Ще там щось</a></li>
                </ul>
            </div>
            <div class="company-info-container">
                <div class="phones-column">
                    <div class="phone-vodafon">
                        <img  src="{{Vite::asset('resources/graphics/icons/vodafone.png')}}" alt="">
                        <a class="phone-number-link" data-mobile_provider="vodafone" href="tel:+380993456789">099 345 67 89</a>
                    </div>
                    <div class="phone-kiyvstar">
                        <img src="{{Vite::asset('resources/graphics/icons/kiyvstar.png')}}" alt="">
                        <a class="phone-number-link" data-mobile_provider="kiyvstar" href="tel:+380973456789">097 345 67 89</a>
                    </div>
                    <div class="phone-lifecell">
                        <img src="{{Vite::asset('resources/graphics/icons/lifecell.png')}}" alt="">
                        <a class="phone-number-link" data-mobile_provider="lifecell" href="tel:+380633456789">063 345 67 89</a>
                    </div>
                </div>
                <div class="call-me">
                    <a href="#"><u>Зателевонуйте мені</u></a>
                    <div class="time-working">
                        Пн-пт: 09:00 - 18:00
                    </div>
                </div>
                <div class="cart-info">
                    <div class="cart-icon">
                        <img src="{{Vite::asset('resources/graphics/icons/cart.png')}}" alt=""> Кошик порожній
                    </div>
                </div>
                <div class="block-input-search">
                    <form action="#" class="search-form">
                        <label for="search"></label>
                        <input class="input-field" id="search" type="text" placeholder="Пошук">
                        <button type="submit" class="search-button">
                            <img src="{{Vite::asset('resources/graphics/icons/search.png')}}" alt="Search">
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="main">
        <div class="wrap-container">
            <div class="left-side">
                <div class="catalog">
                    <ul class="categories">
                        <li>
                            <a href="#" class="category-toggle">Товари для дому</a>

                                <ul class="subcategory">
                                    <li><a href="#" class="category-toggle">Посуд</a></li>
                                    <li><a href="#" class="category-toggle">Текстиль</a>
                                        <ul class="subcategory">
                                            <li><a href="#">Ковдри</a></li>
                                            <li><a href="#">Рушники</a></li>
                                            <li><a href="#">Штори</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="category-toggle">Освітлення</a></li>
                                </ul>

                        </li>
                        <li>
                            <a href="#" class="category-toggle">Електроніка</a>
                                <ul class="subcategory">
                                    <li><a href="#" class="category-toggle">Телевізори</a></li>
                                    <li><a href="#" class="category-toggle">Ноутбуки</a>
                                        <ul class="subcategory">
                                            <li><a href="#" class="category-toggle">Геймерські</a></li>
                                            <li><a href="#" class="category-toggle">Ультрабуки</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="category-toggle">Смартфони</a></li>
                                    <li><a href="#" class="category-toggle">Аудіотехніка</a></li>
                                </ul>
                        </li>
                        <li>
                            <a href="#" class="category-toggle">Одяг та взуття</a>
                                <ul class="subcategory">
                                    <li><a href="#" class="category-toggle">Чоловічий одяг</a></li>
                                    <li><a href="#" class="category-toggle">Жіночий одяг</a></li>
                                    <li><a href="#" class="category-toggle">Дитячий одяг</a></li>
                                    <li><a href="#" class="category-toggle">Взуття</a>
                                        <ul class="subcategory">
                                            <li><a href="#" class="category-toggle">Чоловіче</a></li>
                                            <li><a href="#" class="category-toggle">Жіноче</a></li>
                                        </ul>
                                    </li>
                                </ul>
                        </li>
                        <li>
                            <a href="#" class="category-toggle">Товари для дітей</a>
                                <ul class="subcategory">
                                    <li><a href="#" class="category-toggle">Іграшки</a></li>
                                    <li><a href="#" class="category-toggle">Дитячі меблі</a></li>
                                    <li><a href="#" class="category-toggle">Одяг та взуття</a></li>
                                </ul>
                        </li>
                        <li>
                            <a href="#" class="category-toggle">Спорт та туризм</a>
                                <ul class="subcategory">
                                    <li><a href="#" class="category-toggle">Велосипеди</a></li>
                                    <li><a href="#" class="category-toggle">Наметове спорядження</a></li>
                                    <li><a href="#" class="category-toggle">Спортивний інвентар</a></li>
                                </ul>
                        </li>
                        <li>
                            <a href="#" class="category-toggle">Краса та здоров'я</a>
                                <ul class="subcategory">
                                    <li><a href="#" class="category-toggle">Косметика</a></li>
                                    <li><a href="#" class="category-toggle">Парфумерія</a></li>
                                    <li><a href="#" class="category-toggle">Медичні прилади</a></li>
                                </ul>
                        </li>
                        <li>
                            <a href="#" class="category-toggle">Автотовари</a>
                                <ul class="subcategory">
                                    <li><a href="#" class="category-toggle">Шини та диски</a></li>
                                    <li><a href="#" class="category-toggle">Автохімія</a></li>
                                    <li><a href="#" class="category-toggle">Інструменти</a></li>
                                </ul>
                        </li>
                        <li>
                            <a href="#" class="category-toggle">Канцелярія та книги</a>
                                <ul class="subcategory">
                                    <li><a href="#" class="category-toggle">Письмове приладдя</a></li>
                                    <li><a href="#" class="category-toggle">Зошити та блокноти</a></li>
                                    <li><a href="#" class="category-toggle">Художні книги</a></li>
                                    <li><a href="#" class="category-toggle">Підручники</a></li>
                                </ul>
                        </li>
                        <li>
                            <a href="#" class="category-toggle">Їжа та напої</a>
                                <ul class="subcategory">
                                    <li><a href="#" class="category-toggle">Напої</a></li>
                                    <li><a href="#" class="category-toggle">Снеки</a></li>
                                    <li><a href="#" class="category-toggle">Продукти для випічки</a></li>
                                </ul>
                        </li>
                        <li>
                            <a href="#" class="category-toggle">Інструменти та будівництво</a>
                                <ul class="subcategory">
                                    <li><a href="#" class="category-toggle">Електроінструменти</a></li>
                                    <li><a href="#" class="category-toggle">Ручні інструменти</a></li>
                                    <li><a href="#" class="category-toggle">Будівельні матеріали</a></li>
                                </ul>
                        </li>
                    </ul>
                    <div class="show-more-container">
                        <a href="#" class="show-more">Показати все
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-container">
                <div class="advertisement">
                    <img src="{{Vite::asset('resources/graphics/icons/crew%20&%20neue.gif')}}" alt="">
                </div>
                <div class="cards-container">
                    <div class="card">
                        <div class="card-top">
                            <a href="#" class="card-img">
                                <img src="{{Vite::asset('resources/graphics/images/image_test_1.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="card-bottom">
                            <div class="card-prices">
                                <div class="card-discount">-10%</div>
                                <div class="card-price">Ціна:
                                    <del>
                                        <span>
                                        <b class="old_price">14000</b>
                                        грн
                                        </span>
                                    </del>
                                    <span>
                                        <b class="new_price">12600 грн</b>
                                    </span>
                                </div>
                            </div>
                            <a href="" class="card-title">Тактичний шолом кевларовий. Різні кольори</a>
                            <button class="to-cart-button">до кошика</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-top">
                            <a href="#" class="card-img">
                                <img src="{{Vite::asset('resources/graphics/images/image_test_2.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="card-bottom">
                            <div class="card-prices">
                                <div class="card-price">
                                    <div class="price">Ціна: 22999 грн</div>
                                </div>
                            </div>
                            <a href="" class="card-title">Пневматчний пістолет. Комбінована версія</a>
                            <button class="to-cart-button">до кошика</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-top">
                            <a href="#" class="card-img">
                                <img src="{{Vite::asset('resources/graphics/images/image_test_3.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="card-bottom">
                            <div class="card-prices">
                                <div class="card-discount">-15%</div>
                                <div class="card-price">Ціна:
                                    <del>
                                        <span>
                                        <b class="old_price">2699</b>
                                        грн
                                        </span>
                                    </del>
                                    <span>
                                        <b class="new_price">2294 грн</b>
                                    </span>
                                </div>
                            </div>
                            <a href="" class="card-title">Настільний світильник.
                                <b style="color: indianred; font-size: 14px">товар закінчується</b>
                            </a>

                            <button class="to-cart-button">до кошика</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-top">
                            <a href="#" class="card-img">
                                <img src="{{Vite::asset('resources/graphics/images/image_test_4.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="card-bottom">
                            <div class="card-prices">
                                <div class="card-price">
                                    <div class="price">Ціна: 799 грн</div>
                                </div>
                            </div>
                            <a href="" class="card-title">Чашка металева. "Game of thrones"</a>
                            <button class="to-cart-button">до кошика</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-top">
                            <a href="#" class="card-img">
                                <img src="{{Vite::asset('resources/graphics/images/image_test_5.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="card-bottom">
                            <div class="card-prices">
                                <div class="card-discount">-10%</div>
                                <div class="card-price">Ціна:
                                    <del>
                                        <span>
                                        <b class="old_price">599</b>
                                        грн
                                        </span>
                                    </del>
                                    <span>
                                        <b class="new_price">540 грн</b>
                                    </span>
                                </div>
                            </div>
                            <a href="" class="card-title">Якийсь цікавий USB прилад
                                <b style="color: indianred; font-size: 14px">товар закінчується</b>
                            </a>
                            <button class="to-cart-button">до кошика</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-top">
                            <a href="#" class="card-img">
                                <img src="{{Vite::asset('resources/graphics/images/image_test_6.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="card-bottom">
                            <div class="card-prices">
                                <div class="card-price">
                                    <div class="price">Ціна: 3799 грн</div>
                                </div>
                            </div>
                            <a href="" class="card-title">Набір для бармена. Сувенрний набір 23в1</a>
                            <button class="to-cart-button">до кошика</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-top">
                            <a href="#" class="card-img">
                                <img src="{{Vite::asset('resources/graphics/images/magnit.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="card-bottom">
                            <div class="card-prices">
                                <div class="card-price">
                                    <div class="price">Ціна: 799 грн</div>
                                </div>
                            </div>
                            <a href="" class="card-title">Магнітний конструктор з кульками і паличками (63 шт)
                            </a>
                            <button class="to-cart-button">до кошика</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-top">
                            <a href="#" class="card-img">
                                <img src="{{Vite::asset('resources/graphics/images/Led.webp')}}" alt="">
                            </a>
                        </div>
                        <div class="card-bottom">
                            <div class="card-prices">
                                <div class="card-price">
                                    <div class="price">Ціна: 399 грн</div>
                                </div>
                            </div>
                            <a href="" class="card-title">Окуляри LED з підсвічуванням
                                <b style="color: indianred; font-size: 14px">товар закінчується</b>
                            </a>
                            <button class="to-cart-button">до кошика</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="footer">
        <div class="wrap-container">
            <div class="clear-fix">
                <div class="info-column">
                    <div class="logo-work-time">
                        <b>BlockShop.ua</b>
                        <p>Пн-Пт: 9:00 - 18:00 </p>
                        <p>Сб-Нд: - вихідний</p>
                    </div>
                </div>
                <div class="info-column">
                    <div class="contacts-info">
                        <b>Наші Контакти:</b>
                        <p>+380993456789</p>
                        <p>+380973456789</p>
                        <p>+380633456789</p>
                    </div>
                </div>
                <div class="info-column">
                    <div class="info-links">
                        <b>Інформація:</b>
                        <ul>
                            <li><a href="#">Доставка і оплата</a></li>
                            <li><a href="#">Гарантії</a></li>
                            <li><a href="#">Про нас</a></li>
                            <li><a href="#">Контакти</a></li>
                            <li><a href="#">Вакансії</a></li>
                            <li><a href="#">Партнерство</a></li>
                            <li><a href="#">Публічна оферта</a></li>
                            <li><a href="#">Політика конфіденційності</a></li>
                        </ul>
                    </div>
                </div>
                <div class="info-column">
                    <div class="describe-field">
                        <u>ПІДПИШІТЬСЯ ЗАРАЗ</u>
                        <p>Отримайте актуальні новини та акції</p>
                        <div class="block-input-search">
                            <form action="" class="search-form-footer">
                                <label>
                                    <input type="text" class="input-name-field" placeholder="Введіть ваше ім'я">
                                </label>
                                <label>
                                    <input type="text" class="input-email-field" placeholder="Введіть ваш email">
                                </label>
                                <button type="submit" class="search-button-footer">Підписатися</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
