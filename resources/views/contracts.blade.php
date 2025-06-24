@extends('index')

@section('content')
<div class="container">
    <h1 class="">Контракты в Вооружённые силы РФ</h1>
    <p class="">Выберите подходящий контракт для службы в Вооружённых силах Российской Федерации. Ниже представлены основные виды контрактов и их особенности.</p>
    <div class="services__cards">
        <a href="{{ route('form.index') }}" class="services__card-btn">
            <div class="services__card">
                <div class="services__card-title">Краткосрочный контракт</div>
                <div class="services__card-desc">Срок: 1 год. Подходит для тех, кто хочет получить военный опыт и льготы, не связывая себя долгосрочными обязательствами.</div>
            </div>
        </a>
        <a href="{{ route('form.index') }}" class="services__card-btn">
            <div class="services__card">
                <div class="services__card-title">Стандартный контракт</div>
                <div class="services__card-desc">Срок: 2-3 года. Оптимальный выбор для желающих построить карьеру в армии и воспользоваться всеми социальными гарантиями.</div>
            </div>
        </a>
        <a href="{{ route('form.index') }}" class="services__card-btn">
            <div class="services__card">
                <div class="services__card-title">Долгосрочный контракт</div>
                <div class="services__card-desc">Срок: 5 лет и более. Для тех, кто планирует связать свою жизнь с военной службой и получить максимальные возможности для профессионального роста.</div>
            </div>
        </a>
        <a href="{{ route('form.index') }}" class="services__card-btn">
            <div class="services__card">
                <div class="services__card-title">Контракт для специалистов</div>
                <div class="services__card-desc">Для специалистов востребованных профессий (медики, инженеры, IT и др.). Особые условия и дополнительные выплаты.</div>
            </div>
        </a>
    </div>
</div>
@endsection