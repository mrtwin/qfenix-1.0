<?php include 'head.php' ?>

<title>Бриф на разработку сайтов. | Fenix</title>
<meta name="description" content="Заполните бриф на разработку сайта и получите подарок."/>

<?php include 'header.php' ?>
	
<!--=== main ===-->
	
	<main class="main">
		
	<!-- main-content -->
	<div class="main_content">
		<div style="margin-top: 15vh"></div> <!-- отступ от меню -->
		<h1>Бриф на разаботку сайта</h1>
			
	<form id="brif">
		<div style="text-align: center; color: red;">Заполните поля которые для Вас актуальны.</div><br>
		<!-- <div id="note"></div> -->
		<div id="fields">
			<input type="hidden" name="formType" value="brif">
	  		
	  		<p><div class="field_head">
	  				Это новый сайт или редизайн существующего?</div> 
	  			<label>Если редизайн, укажите существующий сайт и что бы вы хотели изменить.</label>
	  			 
	  			<textarea name="projectType" id="projectType" cols="1" rows="5" placeholder=""></textarea></p>
	  		
	  		<p>
	  			<div class="field_head">Для решения каких задач разрабатывается сайт?</div>

	  			<label><input type="checkbox" class="checkbox" name="checkbox_target1" value="увеличение посещаемости">увеличение посещаемости</label><Br>
   				<label><input type="checkbox" class="checkbox" name="checkbox_target2" value="продвижение конкретного продукта или услуги">продвижение конкретного продукта или услуги</label><Br>
   				<label><input type="checkbox" class="checkbox" name="checkbox_target3" value="улучшение имиджа">улучшение имиджа</label><Br> 
   				<label><input type="checkbox" class="checkbox" name="checkbox_target4" value="продажи через интернет, прием платежей">продажи через интернет, прием платежей</label><Br> 
  				<label><input type="checkbox" class="checkbox" name="checkbox_target5" value="публикация сведений о товарах и услугах">публикация сведений о товарах и услугах</label>
  			</p>

<!-- about product -->	  		

			<!-- <p>
				<div class="field_head">На какую аудиторию рассчитаны ваши товары и услуги.</div>
				<label>Это физические лица или компании? Каковы их главные географические, возрастные, социальные, поведенческие признаки?</label>
				<textarea name="productClient" id="productClient" cols="1" rows="5" placeholder=""></textarea>
			</p> -->

			<!-- <p>
				<div class="field_head">Какие конкретно товары или услуги будут предсталены на данном сайте.</div>
				<label>Сможете ли вы предоставить их подробное описание, стоимость, особенности, изображение?
				Если товаров/услуг много, то Ваше предложение (предпочтение) по тому, как лучше 
				оформить их на сайте. В виде слайдера, или все списком друг под другом, или же список 
				товаров отправляется на почту клиента при нажатии кнопки «скачать прайс».
				Если речь идет об услуге, наподобие тренинга, то продумать (обсудить) вариант пакетов, и 
				что туда входит
				</label>
				<textarea name="productKind" id="productKind" cols="1" rows="8" placeholder=""></textarea>
			</p> -->
			<!-- <p>
				<div class="field_head">Основные преимущества
				Особенности товара/услуги и компании, которые следует знать клиенту.
				</div>
				<textarea name="productAdvantages" id="productAdvantages" cols="1" rows="5" placeholder=""></textarea>
			</p> -->

<!-- about company -->
			<!-- <p>
				<div class="field_head">Название вашей компании.</div>
				<label>Полное юридическое наименование(напр.: ООО "РосМонтажТрест"). А так же название используемое для клиентов(напр.: Монтажный трест №5)
				</label>
				<textarea name="companyName" id="companyName" cols="1" rows="2" placeholder=""></textarea>
			</p> -->
			<p>
				<div class="field_head">Род деятельности.</div>
				<label>Важно кратко и понятно описать деятельность. Например (Продажа пластиковых окон в Тюмени)
				</label>
				<textarea name="companyType" id="companyType" cols="1" rows="2" placeholder=""></textarea>
			</p>
			<p>
	  			<div class="field_head">У вас есть логотип?</div>

	  			<label><input type="radio" class="checkbox" name="radio_logo1" value="логотип уже есть">логотип уже есть</label><Br>
   				<label><input type="radio" class="checkbox" name="radio_logo2" value="разработайте для меня логотип">разработайте для меня логотип</label><Br>
   				<label><input type="radio" class="checkbox" name="radio_logo3" value="логотип не нужен">логотип не нужен</label>
  			</p>
  			<!-- <p>
				<div class="field_head">Несколько цифр о компании, которые могут повлиять на продажи.</div>
				<label>Например кол-во счастливых клиентов, Ваш опыт работы в данной сфере, иные цифры 
				которые ставят Вас в выгодном положении перед клиентом и выделяют Вас среди 
				конкурентов.
				</label>
				<textarea name="companyDigits" id="companyDigits" cols="1" rows="3" placeholder=""></textarea>
			</p> -->
			<!-- <p>
				<div class="field_head">Основные трудности клиентов.</div>
				<label>Боли клиентов, с которыми они обычно сталкиваются обращаясь в компании подобного 
				рода за товаром или услугой, и как эти трудности вы помогаете им преодолеть.
				</label>
				<textarea name="companyHelp" id="companyHelp" cols="1" rows="8" placeholder=""></textarea>
			</p> -->
			<!-- <p>
				<div class="field_head">Фотографии.</div>
				<label>Какие фото вы сможете предоставить? Фото товаров, услуг, помещения, офиса, склада, производства или ещё каких-либо деталий или людей (руководителей, мастеров), которые опять же помогут вашим 
				клиентам понять, что и как вы им предлагаете и вызвать доверие к вашей компании.
				</label>
				<textarea name="companyPhoto" id="companyPhoto" cols="1" rows="8" placeholder=""></textarea>
			</p> -->
			<!-- <p>
				<div class="field_head">УТП.</div>
				<label>Есть ли четко сформированое УТП (уникально торговое предложение), которое составлено по правилам маркетинга, выделяющее Вас на фоне конкурентов?
				</label>
				<textarea name="companyUtp" id="companyUtp" cols="1" rows="8" placeholder=""></textarea>
			</p> -->
			<p>
				<div class="field_head">Формы захвата.</div>
				<label>На что будет происходить «захват» клиента?
				Сразу на платный продукт, на бесплатный продукт, на консультацию, выезд специалиста 
				или ещё что то?
				</label>
				<textarea name="companyCatch" id="companyCatch" cols="1" rows="8" placeholder=""></textarea>
			</p>

<!-- about site -->
			<p>
	  			<div class="field_head">Какие разделы должны быть на вашем сайте?</div>

	  			<label><input type="checkbox" class="checkbox" name="checkbox_site_page1" value="система приема платежей">система приема платежей</label><Br>
   				<label><input type="checkbox" class="checkbox" name="checkbox_site_page3" value="раздел со скачиваемыми файлами или документами">раздел со скачиваемыми файлами или документами</label><Br> 
   				<label><input type="checkbox" class="checkbox" name="checkbox_site_page4" value="контактная информация, форма обратной связи, карта">контактная информация, форма обратной связи, карта</label><Br> 
  				<label><input type="checkbox" class="checkbox" name="checkbox_site_page5" value="регистрация и авторизация для клиентов">регистрация и авторизация для клиентов</label><Br>
  				<label><input type="checkbox" class="checkbox" name="checkbox_site_page6" value="личный кабинет для клиентов/партнёров/сотрудников">личный кабинет для клиентов/партнёров/сотрудников</label><Br> 
  				<label><input type="checkbox" class="checkbox" name="checkbox_site_page7" value="новости">новости</label><Br> 
  				<label><input type="checkbox" class="checkbox" name="checkbox_site_page8" value="каталог продуктов">каталог продуктов</label><Br> 
  				<label><input type="checkbox" class="checkbox" name="checkbox_site_page9" value="фотогалерея">фотогалерея (готовых работ, помещения магазина, процесса производства...)</label><Br> 
  				<label><input type="checkbox" class="checkbox" name="checkbox_site_page10" value="калькулятор услуг">калькулятор услуг (расчет стоимости услуги)</label>
  			</p>
  			<p>
				<div class="field_head">Нужна ли страница "О компании"?</div>
				<label>Если нужна страница «О компании» (о команде, или конкретном человеке), то нужно будет подготовить текст описывающий деятельность, историю и прочую информацию, которую важно указать для клиента. 
				</label><Br>
				<label><input type="radio" class="checkbox" name="radio_about_company1" value="нужна страница О Компании">страница нужна</label><Br> 
  				<label><input type="radio" class="checkbox" name="radio_about_company2" value="страница О Компании не нужна">страница не нужна</label>
			</p>
			<p>
				<div class="field_head">Редактирование контента</div>
				<label>Как часто планируете менять информацию на сайте?
				</label><Br>
				<label><input type="radio" class="checkbox" name="radio_change_content1" value="Замена контента. не более 1 раза в месяц">не более 1 раза в месяц</label><Br> 
  				<label><input type="radio" class="checkbox" name="radio_change_content2" value="Замена контента. более 1 раза в месяц">более 1 раза в месяц</label><Br>
				<label><input type="radio" class="checkbox" name="radio_change_content3" value="менять контент не буду">менять контент не буду</label><Br>
				<label><input type="radio" class="checkbox" name="radio_change_content4" value="Замена контента. затрудняюсь ответить">затрудняюсь ответить (обговорим позже)</label>
			</p>
			<p>
				<div class="field_head">Управление сайтом</div>
				<label>Кто будет менять информацию на сайте?
				</label><Br>
				<label><input type="radio" class="checkbox" name="radio_site_maneger1" value="Управление сайтом. я или мои сотрудники">я или мои сотрудники</label><Br> 
  				<label><input type="radio" class="checkbox" name="radio_site_maneger2" value="Управление сайтом. доверю исполнителю<">доверю исполнителю</label><Br>
				<label><input type="radio" class="checkbox" name="radio_site_maneger3" value="Управление сайтом. менять контент не нужно">менять контент не нужно</label><Br>
				<label><input type="radio" class="checkbox" name="radio_site_maneger4" value="Управление сайтом. затрудняюсь ответить">затрудняюсь ответить (обговорим позже)</label>
			</p>
  			<!-- <p>
				<div class="field_head">Цвета.</div>
				<label>Есть ли какая-то цветовая гамма которая должна обязательно присутствовать на сайте? Если есть то не более 2-3 цветов.
				</label>
				<textarea name="siteColor" id="siteColor" cols="1" rows="2" placeholder=""></textarea>
			</p>
			<p>
				<div class="field_head">Примеры сайтов.</div>
				<label>Примеры сайтов в вашей области или смежной, которые вам нравятся и которые можно взять как ориентир.
				</label>
				<textarea name="siteLike" id="siteLike" cols="1" rows="3" placeholder=""></textarea>
			</p> -->
			<p>
				<div class="field_head">Схема работы.</div>
				<label>Если в этом есть необходимость, готовы ли вы предоставить описание этапов взаимодействия клиента с вами.
				</label><Br>
				<label><input type="radio" class="checkbox" name="radio_scheme1" value="Схему клиент-продавец предоставлю">предоставлю</label><Br> 
  				<label><input type="radio" class="checkbox" name="radio_scheme2" value="Схема клиент-продавец не нужна">не нужно</label>
			</p>
	  		<p>
				<div class="field_head">Видео.</div>
				<label>Есть ли какие-то видеоролики о компании, о товаре, или любые другие, которые Вы хотели бы разместить на сайте?
				</label>
				<textarea name="siteVideo" id="siteVideo" cols="1" rows="3" placeholder=""></textarea>
			</p>
	  		<p>
				<div class="field_head">Отзывы.</div>
				<label>Есть ли отзывы клиентов? Результаты взаимодействия с вашим продуктом/услугой (до/после). В каком виде оформлены отзывы: благодарственные письма, переписка в соц.сети, видео- аудио-отзывы? Есть ли фото людей, давших отзыв?
				</label>
				<textarea name="siteComments" id="siteComments" cols="1" rows="5" placeholder=""></textarea>
			</p>
	  		<!-- <p>
				<div class="field_head">Контакты.</div>
				<label>Адрес, телефон, почта, странички соц сетей или прочая контактная информация, по которой клиент сможет вас найти и которую целесообразно разместить на сайте.
				</label>
				<textarea name="siteOrgContacts" id="siteOrgContacts" cols="1" rows="10" placeholder=""></textarea>
			</p>
		    <p>
				<div class="field_head">Домен.</div>
				<label>Желаемое доменное имя сайта (адрес сайта типа moisait.ru или мой-сайт.рф).
				</label>
				<textarea name="siteName" id="siteName" cols="1" rows="2" placeholder=""></textarea>
			</p>
		    <p>
				<div class="field_head">Какие у вас есть материалы по этому проекту?</div>
				<label>Какие материалы понадобятся нам для работы над этим проектом? Какие материалы уже есть у вас, а какие вы подготовите в ближайшее время? К таким материалам могут относиться тексты и фотографии для разделов, фотографии и описание готовых работ, отзывы клиентов, нормативные документы…
				</label>
				<textarea name="materials" id="materials" cols="1" rows="8" placeholder=""></textarea>
			</p> -->
		    <p>
				<div class="field_head">Бюджет проекта.</div>
				<label>Мы делаем сайты под разные бюджеты. Определите максимальную и минимальную рамку для своего проекта чтобы мы подготовили оптимальное решение.
				</label>
				<textarea name="budget" id="budget" cols="1" rows="2" placeholder=""></textarea>
			</p>
			<p>
				<div class="field_head">Сроки реализации и прочие условия.</div>
				<label>Если проект нужно реализовать в какие-либо конкретные сроки, укажите их. Также, если есть какие-то иные условия разработки укажите и их.
				</label>
				<textarea name="time" id="time" cols="1" rows="3" placeholder=""></textarea>
			</p>

<!-- client -->
			<p>
				<div class="field_head">Ваши контактные данные.</div>
				<label>Как с вами связаться для дальнейшего обсуждения проекта? Укажите, каким способом вам будет удобнее общаться.
				</label>
				<p><label for="clientName">Ваше имя*</label><input type="text" name="clientName" id="clientName" placeholder="" required></p>
	  		
	  			<p><label for="email">Электронная почта*</label><input type="email" name="clientEmail" id="clientEmail" required> </p>

	  			<p><label for="clientPhone">Номер телефона (10 символов)*</label><input type="tel" name="clientPhone" id="clientPhone" pattern="[0-9_-]{10}" title="Введите 10 цифр номера телефона" required> </p>
	  			<p><label for="clientHowContact">Удобный способ связи</label><input type="txt" name="clientHowContact" id="clientHowContact"> </p>
			</p>
			<p>
				<div class="field_head">Дополнения.</div>
				<label>Если у вас есть какие-либо дополнения либо замечания по данному брифу, укажите их.
				</label>
				<textarea name="clientDopInfo" id="clientDopInfo" cols="1" rows="4" placeholder=""></textarea>
			</p>
			
			<p>Нажимая кнопку "отправить", вы соглашаетесь с <a href="soglasie.php" target="_blank">правилами обработки данных</a></p>
		    <p><button type="submit" id="submit" class="go button">Отправить бриф</button></p>


		</div>
		
		<div id="note"></div>
	</form>

	</div> <!-- main-content -->
		
	</main>
	
<!--=== footer ===-->
<?php include 'footer.php' ?>