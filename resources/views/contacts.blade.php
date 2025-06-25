@vite(['resources/css/contacts.css'])

@extends('index')

@section('content')
<div class="container">
    <h1 class="page-title">Контакты военного комиссариата</h1>
    
    <section class="contact-info">
        <div class="contact-info__main">
            <div class="contact-info__item">
                <h3 class="contact-info__title">Адрес</h3>
                <p class="contact-info__text">Социалистическая ул., 39, Нефтекамск</p>
                <p class="contact-info__text">Индекс: 123456</p>
            </div>
            
            <div class="contact-info__item">
                <h3 class="contact-info__title">Часы работы</h3>
                <p class="contact-info__text">Понедельник - Пятница: 9:00 - 18:00</p>
                <p class="contact-info__text">Суббота: 9:00 - 14:00</p>
                <p class="contact-info__text">Воскресенье: выходной</p>
            </div>
            
            <div class="contact-info__item">
                <h3 class="contact-info__title">Телефоны</h3>
                <p class="contact-info__text">Приёмная: +7 (34783) 4-32-54</p>
                <p class="contact-info__text">Отдел призыва: +7 (34783) 4-32-54</p>
                <p class="contact-info__text">Отдел учёта: +7 (34783) 4-32-54</p>
            </div>
            
            <div class="contact-info__item">
                <h3 class="contact-info__title">Email</h3>
                <p class="contact-info__text">Общие вопросы: info@voenkomat.ru</p>
                <p class="contact-info__text">Призыв: priziv@voenkomat.ru</p>
                <p class="contact-info__text">Учёт: uchet@voenkomat.ru</p>
            </div>
        </div>
    </section>

    <section class="departments">
        <h2 class="section-title">Отделы комиссариата</h2>
        <div class="departments__grid">
            <div class="department-card">
                <h3 class="department-card__title">Отдел призыва</h3>
                <p class="department-card__desc">Организация призыва граждан на военную службу</p>
                <p class="department-card__phone">Тел: +7 (34783) 4-32-54</p>
                <p class="department-card__room">Кабинет: 101</p>
            </div>
            
            <div class="department-card">
                <h3 class="department-card__title">Отдел воинского учёта</h3>
                <p class="department-card__desc">Ведение воинского учёта граждан</p>
                <p class="department-card__phone">Тел: +7 (34783) 4-32-54</p>
                <p class="department-card__room">Кабинет: 102</p>
            </div>
            
            <div class="department-card">
                <h3 class="department-card__title">Медицинская комиссия</h3>
                <p class="department-card__desc">Проведение медицинских освидетельствований</p>
                <p class="department-card__phone">Тел: +7 (34783) 4-32-54</p>
                <p class="department-card__room">Кабинет: 201-205</p>
            </div>
            
            <div class="department-card">
                <h3 class="department-card__title">Отдел кадров</h3>
                <p class="department-card__desc">Работа с военнослужащими и гражданским персоналом</p>
                <p class="department-card__phone">Тел: +7 (34783) 4-32-54</p>
                <p class="department-card__room">Кабинет: 103</p>
            </div>
        </div>
    </section>

    <section class="emergency-contacts">
        <h2 class="section-title">Экстренные контакты</h2>
        <div class="emergency-contacts__grid">
            <div class="emergency-contact">
                <h3 class="emergency-contact__title">Дежурный комиссариат</h3>
                <p class="emergency-contact__phone">+7 (34783) 4-32-54</p>
                <p class="emergency-contact__desc">Круглосуточно</p>
            </div>
            
            <div class="emergency-contact">
                <h3 class="emergency-contact__title">Горячая линия</h3>
                <p class="emergency-contact__phone">+7 (34783) 4-32-54</p>
                <p class="emergency-contact__desc">Бесплатно по России</p>
            </div>
        </div>
    </section>
</div>
@endsection
