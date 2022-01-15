<!DOCTYPE html>

<html>
	<head>

	<title>Название страницы</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	</head>
	<body>
	<div>
			<h1>Заголовок первого уровня</h1>
			<p>Абзац текста</p> 
			<em>Важный текст</em> 
			<br>Перенос строки 
			<strong>Очень важный текст</strong>
			<img src="/" alt="Всегда указывайте описание картинки" />
	</div>	
	<div>                                                                                       
	<h2>Структура страницы</h2>
		<div>Блочный элемент</div>
		<span>Строчный элемент</span>
		
	<h2>Маркированный список</h2>
		<ul>
			<li>Элемент 1</li>
			<li>Элемент 1</li>
			<li>Элемент 1</li>
		</ul>
	
	<h2>Таблица</h2>
		<table>
			<tr>
				<td>Первая ячейка первой строки</td>
				<td>Вторая ячейка первой строки</td>
			</tr>
			<tr>
				<td>Первая ячейка второй строки</td>
				<td>Вторая ячейка второй строки</td>
			</tr>
		</table>

	<h2>Форма</h2>
		<form action="URL_отправки_данных" method="POST">
			
			<label> Однострочное текстовое поле:<br>
				<input name="field-name-1" value="начальное значение">
			</label>
			<br>

			<label> Многострочное текстовое поле:<br>
				<textarea name="field-name-2">начальное значение</textarea>
			</label>
			<br>

			<label>Список (combobox):<br>
				<select name="field-name-3">
					<option value="Значение1">Метка1</option>
					<option value="Значение2">Метка2</option>
					<option value="Значение3">Метка3</option>
				</select>
			</label>
			<br>
			<label>Список (listbox с множественным выбором):<br>
				<select name="field-name-4[]" multiple="multiple">
					<option value="Значение1">Метка1</option>
					<option value="Значение2">Метка2</option>
					<option value="Значение3">Метка3</option>
				</select>
			</label>
			<br>

			<label>Радиокнопки:<br>
				<input type="radio" checked="checked" name="radio-group-1" value="Значение1">Подпись радиокнопки 1
			</label>
			<br>

			<label>Подпись радиокнопки 2: <br>
				<input type="radio" name="radio-group-1" value="Значение2">
			</label>
			<br>

			<label>Чекбокс:<br>
				<input type="checkbox" checked="checked" name="check-1">
			</label>
			<br>

			<label>Кнопка отправки формы,
			при нажатии заполненные в форму данные
			отправятся в формате urlencoded методом
			POST или GET по адресу URL_отправки_данных:</label>
			<br>
				<input type="submit" value="Отправить">
		</form>
	</div>
	</body>
</html>

