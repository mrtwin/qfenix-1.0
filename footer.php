	<div class="footer">
		<div class="footer_section">
			<div class="section_header">Контакты</div>
			<div class="text">
				<!-- <a href="tel:+79871090503" class="dot tel_media">+7(987) 109-05-03</a><br><br> -->
				info@qfenix.ru; <br>qfenixstd@yandex.ru<br><br>
			</div>
		</div>
		<div class="footer_section">
			<div class="mobile_hidden section_header">Обратная связь</div>
			<div class="text">
				<a href="#sendMsg" class="popup dot">Задать вопрос</a>  <br><br>
				<a href="#getSite" class="popup dot">Заказать сайт</a>
			</div>
		</div>
	</div>
	<div class="copyright">
			Студия "Феникс" | Copyright 2018.
		</div>
<div class="hidden">
	<form id="sendMsg">
		<H3>Форма обратной связи</H3>
		<div id="note"></div>
		<div id="fields">
			<input type="hidden" name="formType" value="sendMsg">
	  		
	  		<p><label for="clientName">Ваше имя*</label><input type="text" name="clientName" id="clientName" placeholder="Имя" required> </p>
	  		
	  		<p><label for="clientEmail">Электронная почта*</label><input type="email" name="clientEmail" id="clientEmail" placeholder="E-mail" required> </p>
		    
		    <p><textarea name="message" cols="1" rows="10" id="desc" placeholder="Текст сообщения" style="width:98%" required></textarea></p>
		    
		    <p>Нажимая кнопку "отправить", вы соглашаетесь с <a href="soglasie.php" target="_blank">правилами обработки данных</a></p>
		    <p><button type="submit" id="submit" class="go">Отправить сообщение</button></p>
		</div>
	</form>

	<form id="getSite">
		<H3>Предварительная заявка на разработку сайта</H3>
		<div>Заполните свои контактные данные и примерное описание желаемого сайта. Наш сотрудник свяжется с Вами для обсуждения деталей.</div>
		<div id="note"></div>
		<div id="fields">
			<input type="hidden" name="formType" value="getSite">
	  		
	  		<p><label for="clientName">Ваше имя*</label><input type="text" name="clientName" id="clientName" placeholder="Имя" required> </p>
	  		
	  		<!-- <p><label for="clientEmail">Электронная почта</label><input type="email" name="clientEmail" id="clientEmail" placeholder="E-mail" > </p> -->
	  		
			<p><label for="siteType">Номер телефона (10 символов)*</label><input type="tel" name="clientPhone" id="clientPhone" pattern="[0-9_-]{10}" title="Введите 10 цифр номера телефона" placeholder="" required> </p>

	  		<p <span class="hidden"></span>><label for="siteType">Вид сайта</label>
	  			<!-- <input type="text" name="siteType" id="siteType" placeholder="Интернет-магазин"> --> 
				<select name="siteType" id="siteType">
					<option value="Я не знаю" selected>Я не знаю</option>
					<option value="Одностраничный">Одностраничный</option>
					<option value="Сайт-визитка">Сайт-визитка</option>
					<option value="Корпоративный">Корпоративный</option>
					<option value="Лендинг">Лендинг</option>
					<option value="Сайт-каталог">Сайт-каталог</option>
					<option value="Интернет-магазин">Интернет-магазин</option>
					<option value="Другой">Другой</option>
				</select>
	  		</p>
		    
		    <p><label for="desc">Пожелания к сайту</label><textarea name="message" cols="1" rows="10" id="desc" placeholder="Опишите примерные требования. Что Вы ожидаете от сайта." style="width:98%" ></textarea></p>
		    
		    <p>Нажимая кнопку "отправить", вы соглашаетесь с <a href="soglasie.php" target="_blank">правилами обработки данных</a></p>
		    <p><button type="submit" id="submit" class="go">Отправить заказ</button></p>
		</div>
	</form>
</div>
<script src="scripts/jquery-3.3.1.min.js"></script>
<script src="magnific-popup/jquery.magnific-popup.js"></script>
<script src="scripts/script.js"></script>
</body>
</html>