<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Военный комиссариат</title>
    @vite('resources/css/app.css')
</head>

<body class="page">
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__brand">
                    <h1 class="header__title">Военный комиссариат</h1>
                </div>
                <nav class="header__nav nav">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#" class="nav__link">Главная</a></li>
                        <li class="nav__item"><a href="#" class="nav__link">Услуги</a></li>
                        <li class="nav__item"><a href="#" class="nav__link">Новости</a></li>
                        <li class="nav__item"><a href="#" class="nav__link">Контакты</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="container">
        <section class="contactways">
                <h2 class="contactways__title">Взаимодействие с комиссариатом</h2>
                <p class="contactways__text">
                    Для получения консультаций, подачи документов или записи на приём вы можете воспользоваться следующими способами:
                </p>
                <div class="contactways__cards">
                    <div class="contactways__card">
                        <div class="contactways__card-title">Личное посещение</div>
                        <div class="contactways__card-desc">Приём граждан осуществляется по адресу комиссариата в рабочие часы.</div>
                    </div>
                    <div class="contactways__card">
                        <div class="contactways__card-title">Телефонная консультация</div>
                        <div class="contactways__card-desc">Позвоните по указанному номеру для получения информации и консультаций.</div>
                    </div>
                    <div class="contactways__card">
                        <div class="contactways__card-title">Электронная почта</div>
                        <div class="contactways__card-desc">Отправьте обращение или документы на официальный email комиссариата.</div>
                    </div>
                </div>
            </section>
            <section class="services">
                <h2 class="services__title">Основные услуги</h2>
                <p class="services__text">
                    Военный комиссариат предоставляет широкий спектр государственных услуг для граждан:
                </p>
                <div class="services__cards">
                    <div class="services__card">
                        <div class="services__card-title">Постановка на воинский учёт</div>
                    </div>
                    <div class="services__card">
                        <div class="services__card-title">Оформление и выдача военных билетов</div>
                    </div>
                    <div class="services__card">
                        <div class="services__card-title">Выдача справок и архивных документов</div>
                    </div>
                    <div class="services__card">
                        <div class="services__card-title">Консультации по вопросам призыва и отсрочек</div>
                    </div>
                    <div class="services__card">
                        <div class="services__card-title">Организация медицинских комиссий</div>
                    </div>
                </div>
            </section>
            <section class="intro">
                <h2 class="intro__title">О военном комиссариате</h2>
                <p class="intro__text">
                    Военный комиссариат — это государственное учреждение, осуществляющее организацию воинского учёта, призыв граждан на военную службу, оформление документов, а также предоставление консультаций по вопросам, связанным с воинской обязанностью и службой.
                </p>
                <ul class="intro__list">
                    <li class="intro__item">Проведение призыва на военную службу</li>
                    <li class="intro__item">Ведение воинского учёта граждан</li>
                    <li class="intro__item">Оформление справок и документов</li>
                    <li class="intro__item">Консультации по вопросам воинской обязанности</li>
                </ul>
            </section>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__container">
            <div class="footer__inner">
                <div class="footer__info">
                    <div class="footer__title">Военный комиссариат</div>
                    <div class="footer__desc">Официальный сайт для ознакомления граждан с деятельностью и услугами военного комиссариата.</div>
                </div>
                <div class="footer__contacts">
                    <div class="footer__contacts-title">Контактная информация</div>
                    <ul class="footer__contacts-list">
                        <li class="footer__contacts-item">Телефон: <a href="tel:+78001234567" class="footer__contacts-link">8 (800) 123-45-67</a></li>
                        <li class="footer__contacts-item">Email: <a href="mailto:info@voenkomat.ru" class="footer__contacts-link">info@voenkomat.ru</a></li>
                        <li class="footer__contacts-item">Адрес: г. Москва, ул. Примерная, д. 1</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>