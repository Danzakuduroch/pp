@extends('index')

@section('content')
<div class="contract-form__wrapper">
	<h2 class="contract-form__title">Оставить заявку на контракт</h2>
	<form class="contract-form" method="POST" action="#">
		@csrf
		<div class="contract-form__group">
			<label for="fio" class="contract-form__label">ФИО</label>
			<input type="text" id="fio" name="fio" class="contract-form__input" required>
		</div>
		<div class="contract-form__group">
			<label for="phone" class="contract-form__label">Телефон</label>
			<input type="tel" id="phone" name="phone" class="contract-form__input" required>
		</div>
		<div class="contract-form__group">
			<label for="email" class="contract-form__label">Email</label>
			<input type="email" id="email" name="email" class="contract-form__input">
		</div>
		<div class="contract-form__group">
			<label for="type" class="contract-form__label">Тип контракта</label>
			<select id="type" name="type" class="contract-form__input" required>
				<option value="">Выберите тип контракта</option>
				<option value="short">Краткосрочный</option>
				<option value="standard">Стандартный</option>
				<option value="long">Долгосрочный</option>
				<option value="specialist">Для специалистов</option>
			</select>
		</div>
		<div class="contract-form__group">
			<label for="comment" class="contract-form__label">Комментарий</label>
			<textarea id="comment" name="comment" class="contract-form__input" rows="3"></textarea>
		</div>
		<button type="submit" class="contract-form__submit">Отправить заявку</button>
	</form>
</div>
@endsection