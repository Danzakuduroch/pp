@extends('index')

@section('content')
	<div class="container">
		<section class="intro">
			<div class="intro__img">
				<img src="/images/XXXL.webp" alt="">
			</div>
			<div class="intro__info">
				<h2 class="intro__title">О военном комиссариате</h2>
				<p class="intro__text">
					Военный комиссариат — это государственная организация, которая помогает гражданам решать вопросы, связанные с воинским учётом, призывом и военной службой. Мы работаем для вашего спокойствия и уверенности.
				</p>
				<ul class="intro__list">
					<li class="intro__item">Проведение призыва на военную службу</li>
					<li class="intro__item">Ведение воинского учёта граждан</li>
					<li class="intro__item">Оформление справок и документов</li>
					<li class="intro__item">Консультации по вопросам воинской обязанности</li>
				</ul>
			</div>
		</section>
		<section class="contactways">
			<h2 class="contactways__title">Как с нами связаться</h2>
			<p class="contactways__text">
				Мы всегда готовы помочь вам по любым вопросам, связанным с деятельностью военного комиссариата. Выберите удобный способ обращения:
			</p>
			<div class="contactways__cards">
				<div class="contactways__card">
					<div class="contactways__card-title">Личное посещение</div>
					<div class="contactways__card-desc">Ждём вас по адресу комиссариата в рабочие часы. Наши специалисты проконсультируют и помогут с оформлением документов.</div>
				</div>
				<div class="contactways__card">
					<div class="contactways__card-title">Позвоните нам</div>
					<div class="contactways__card-desc">Операторы ответят на ваши вопросы и подскажут, как действовать в вашей ситуации.</div>
				</div>
				<div class="contactways__card">
					<div class="contactways__card-title">Пишите на почту</div>
					<div class="contactways__card-desc">Вы можете отправить обращение или документы на наш email — мы обязательно ответим.</div>
				</div>
			</div>
		</section>
		<section class="services">
			<h2 class="services__title">Чем мы можем помочь</h2>
			<p class="services__text">
				Мы оказываем широкий спектр государственных услуг для граждан:
			</p>
			<div class="services__cards">
				<div class="services__card">
					<div class="services__card-title">Постановка на воинский учёт</div>
					<div class="services__card-desc">Поможем быстро и корректно оформить все необходимые документы для постановки на учёт.</div>
				</div>
				<div class="services__card">
					<div class="services__card-title">Военный билет</div>
					<div class="services__card-desc">Оформление и выдача военных билетов для всех категорий граждан.</div>
				</div>
				<div class="services__card">
					<div class="services__card-title">Справки и архивные документы</div>
					<div class="services__card-desc">Выдаём справки, выписки и архивные сведения по вашему запросу.</div>
				</div>
				<div class="services__card">
					<div class="services__card-title">Консультации по призыву</div>
					<div class="services__card-desc">Объясним нюансы призыва, отсрочек, прохождения медкомиссии и других процедур.</div>
				</div>
				<div class="services__card">
					<div class="services__card-title">Медицинские комиссии</div>
					<div class="services__card-desc">Организуем прохождение медицинских комиссий для определения категории годности.</div>
				</div>
			</div>
		</section>
	</div>
@endsection