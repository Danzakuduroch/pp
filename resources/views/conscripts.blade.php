@vite(['resources/css/conscripts.css'])

@extends('index')

@section('content')
<div class="container">
    <h1 class="page-title">Информация для призывников</h1>
    
    <section class="draft-info">
        <h2 class="section-title">О призыве на военную службу</h2>
        <div class="draft-info__content">
            <div class="draft-info__text">
                <p>Призыв на военную службу проводится дважды в год: весной (с 1 апреля по 15 июля) и осенью (с 1 октября по 31 декабря).</p>
                <p>Призыву подлежат граждане мужского пола в возрасте от 18 до 27 лет, состоящие на воинском учёте и не пребывающие в запасе.</p>
            </div>
        </div>
    </section>

    <section class="draft-calendar">
        <h2 class="section-title">Календарь призывов 2024</h2>
        <div class="draft-calendar__grid">
            <div class="draft-period active">
                <h3 class="draft-period__title">Весенний призыв</h3>
                <div class="draft-period__dates">
                    <p><strong>Начало:</strong> 1 апреля 2024</p>
                    <p><strong>Окончание:</strong> 15 июля 2024</p>
                </div>
                <div class="draft-period__status active">Завершён</div>
            </div>
            
            <div class="draft-period">
                <h3 class="draft-period__title">Осенний призыв</h3>
                <div class="draft-period__dates">
                    <p><strong>Начало:</strong> 1 октября 2024</p>
                    <p><strong>Окончание:</strong> 31 декабря 2024</p>
                </div>
                <div class="draft-period__status">Активен</div>
            </div>
        </div>
    </section>

    <section class="required-documents">
        <h2 class="section-title">Необходимые документы</h2>
        <div class="documents__grid">
            <div class="document-card">
                <h3 class="document-card__title">Основные документы</h3>
                <ul class="document-card__list">
                    <li>Паспорт гражданина РФ</li>
                    <li>Приписное свидетельство</li>
                    <li>Справка о семейном положении</li>
                    <li>Справка с места работы/учебы</li>
                    <li>Фотографии 3x4 (6 штук)</li>
                </ul>
            </div>
            
            <div class="document-card">
                <h3 class="document-card__title">Медицинские документы</h3>
                <ul class="document-card__list">
                    <li>Медицинская карта</li>
                    <li>Результаты анализов</li>
                    <li>Справки от специалистов (при наличии заболеваний)</li>
                    <li>Рентгеновские снимки (при необходимости)</li>
                    <li>Выписки из стационаров</li>
                </ul>
            </div>
            
            <div class="document-card">
                <h3 class="document-card__title">Дополнительные документы</h3>
                <ul class="document-card__list">
                    <li>Диплом об образовании</li>
                    <li>Свидетельство о браке (если женат)</li>
                    <li>Свидетельства о рождении детей</li>
                    <li>Документы на отсрочку (если есть)</li>
                    <li>Справка о регистрации</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="medical-commission">
        <h2 class="section-title">Медицинская комиссия</h2>
        <div class="medical-commission__content">
            <div class="medical-commission__info">
                <h3 class="medical-commission__subtitle">Процедура прохождения</h3>
                <div class="medical-steps">
                    <div class="medical-step">
                        <div class="medical-step__number">1</div>
                        <div class="medical-step__content">
                            <h4>Регистрация</h4>
                            <p>Предоставление документов и заполнение анкеты</p>
                        </div>
                    </div>
                    
                    <div class="medical-step">
                        <div class="medical-step__number">2</div>
                        <div class="medical-step__content">
                            <h4>Антропометрия</h4>
                            <p>Измерение роста, веса, окружности грудной клетки</p>
                        </div>
                    </div>
                    
                    <div class="medical-step">
                        <div class="medical-step__number">3</div>
                        <div class="medical-step__content">
                            <h4>Осмотр специалистов</h4>
                            <p>Терапевт, хирург, невропатолог, психиатр, окулист, отоларинголог, стоматолог</p>
                        </div>
                    </div>
                    
                    <div class="medical-step">
                        <div class="medical-step__number">4</div>
                        <div class="medical-step__content">
                            <h4>Заключение</h4>
                            <p>Определение категории годности к военной службе</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="fitness-categories">
                <h3 class="fitness-categories__title">Категории годности</h3>
                <div class="fitness-categories__grid">
                    <div class="fitness-category">
                        <h4 class="fitness-category__title">А</h4>
                        <p class="fitness-category__desc">Годен к военной службе</p>
                    </div>
                    
                    <div class="fitness-category">
                        <h4 class="fitness-category__title">Б</h4>
                        <p class="fitness-category__desc">Годен к военной службе с незначительными ограничениями</p>
                    </div>
                    
                    <div class="fitness-category">
                        <h4 class="fitness-category__title">В</h4>
                        <p class="fitness-category__desc">Ограниченно годен к военной службе</p>
                    </div>
                    
                    <div class="fitness-category">
                        <h4 class="fitness-category__title">Г</h4>
                        <p class="fitness-category__desc">Временно не годен к военной службе</p>
                    </div>
                    
                    <div class="fitness-category">
                        <h4 class="fitness-category__title">Д</h4>
                        <p class="fitness-category__desc">Не годен к военной службе</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="deferrals">
        <h2 class="section-title">Отсрочки от призыва</h2>
        <div class="deferrals__grid">
            <div class="deferral-card">
                <h3 class="deferral-card__title">По состоянию здоровья</h3>
                <p class="deferral-card__desc">Временно не годен к военной службе (категория Г)</p>
                <p class="deferral-card__period">Срок: до 12 месяцев</p>
            </div>
            
            <div class="deferral-card">
                <h3 class="deferral-card__title">По семейным обстоятельствам</h3>
                <p class="deferral-card__desc">Воспитание ребёнка без матери, уход за больными родственниками</p>
                <p class="deferral-card__period">Срок: до достижения ребёнком 3 лет</p>
            </div>
            
            <div class="deferral-card">
                <h3 class="deferral-card__title">По учёбе</h3>
                <p class="deferral-card__desc">Очное обучение в образовательных учреждениях</p>
                <p class="deferral-card__period">Срок: на время обучения</p>
            </div>
            
            <div class="deferral-card">
                <h3 class="deferral-card__title">По работе</h3>
                <p class="deferral-card__desc">Работа в государственных органах, пожарной службе, таможне</p>
                <p class="deferral-card__period">Срок: на время работы</p>
            </div>
        </div>
    </section>

    <section class="rights-obligations">
        <h2 class="section-title">Права и обязанности призывника</h2>
        <div class="rights-obligations__content">
            <div class="rights">
                <h3 class="rights__title">Права призывника</h3>
                <ul class="rights__list">
                    <li>Получение полной информации о порядке призыва</li>
                    <li>Обжалование решений призывной комиссии</li>
                    <li>Получение медицинской помощи</li>
                    <li>Сохранение рабочего места на время призыва</li>
                    <li>Получение отсрочки при наличии оснований</li>
                </ul>
            </div>
            
            <div class="obligations">
                <h3 class="obligations__title">Обязанности призывника</h3>
                <ul class="obligations__list">
                    <li>Явиться по повестке в указанное время</li>
                    <li>Предоставить все необходимые документы</li>
                    <li>Пройти медицинское освидетельствование</li>
                    <li>Сообщать об изменении места жительства</li>
                    <li>Бережно относиться к выданным документам</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="important-contacts">
        <h2 class="section-title">Важные контакты для призывников</h2>
        <div class="important-contacts__grid">
            <div class="important-contact">
                <h3 class="important-contact__title">Отдел призыва</h3>
                <p class="important-contact__phone">+7 (495) 123-45-68</p>
                <p class="important-contact__desc">Вопросы по призыву и повесткам</p>
            </div>
            
            <div class="important-contact">
                <h3 class="important-contact__title">Медицинская комиссия</h3>
                <p class="important-contact__phone">+7 (495) 123-45-71</p>
                <p class="important-contact__desc">Запись на медкомиссию</p>
            </div>
            
            <div class="important-contact">
                <h3 class="important-contact__title">Юридическая консультация</h3>
                <p class="important-contact__phone">+7 (495) 123-45-73</p>
                <p class="important-contact__desc">Правовые вопросы призыва</p>
            </div>
        </div>
    </section>
</div>
@endsection 