<?php include 'head.php' ?>

<title>Разработка сайтов | Fenix</title>
<meta name="description" content="Создадим сайт для вашего бизнеса. От 7000 р. Сайт-визитка, корпоративный сайт, сайт-каталог, интернет-магазин."/>

<?php include 'header.php' ?>

<!--=== main ===-->
<section>
    <div style="padding-top: 15vh"></div> <!-- отступ от меню -->
    <H1>Собери свой сайт</H1>
</section>
<section id="presets" class="presets">
    <div class="wrap">
        <H4>Предустановки</H4>
        <div class="row">
            <div class="presets-content">
                <div class="content_item">
                    <label>Лендинг "Старт"</label>
                    <div><input type="radio" class="checkbox" name="radio_logo1" value="логотип уже есть"></div>
                </div>
                <div class="content_item">
                    <label>Лендинг "Стандарт"</label>
                    <div><input type="radio" class="checkbox" name="radio_logo1" value="логотип уже есть"></div>
                </div>
                <div class="content_item">
                    <label>Лендинг "Расширенный"</label>
                    <div><input type="radio" class="checkbox" name="radio_logo1" value="логотип уже есть"></div>
                </div>
                <div class="content_item">
                    <label>Лендинг "Бизнес"</label>
                    <div><input type="radio" class="checkbox" name="radio_logo1" value="логотип уже есть"></div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- functional -->

<section id="functional" class="functional">
    <div id="func_wrap" class="wrap">
        <H4>Ваш выбор</H4>
        <div class="row">
            <div class="func-block">
                <div class="func-block_head">
                    <p>Дизайн</p>
                </div>
                <div class="func_item">
                    <label>версия для ПК</label>
                    <input type="checkbox" class="checkbox" name="radio_logo1" value="логотип уже есть">
                </div>
                <div class="func_item">
                    <label>версия для планшета</label>
                    <input type="checkbox" class="checkbox" name="radio_logo1" value="логотип уже есть">
                </div>
                <div class="func_item">
                    <label>версия для смартфонов</label>
                    <input type="checkbox" class="checkbox" name="radio_logo1" value="логотип уже есть">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="func-block">
                <div class="func-block_head">
                    <p>Страницы</p>
                </div>
                <div class="func_item">
                    <label>Главная</label>
                    <input type="checkbox" class="checkbox" name="radio_logo1" value="логотип уже есть">
                </div>
                <div class="func_item">
                    <label>О компании</label>
                    <input type="checkbox" class="checkbox" name="radio_logo1" value="логотип уже есть">
                </div>
                <div class="func_item">
                    <label>Доставка и оплата</label>
                    <input type="checkbox" class="checkbox" name="radio_logo1" value="логотип уже есть">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="func-block">
                <div class="func-block_head">
                    <p>Состав главной страницы</p>
                </div>
                <div class="func_item">
                    <label>Шапка</label>
                    <input type="checkbox" class="checkbox" name="radio_logo1" value="логотип уже есть">
                </div>
                <div class="func_item">
                    <label>Банер</label>
                    <input type="checkbox" class="checkbox" name="radio_logo1" value="логотип уже есть">
                </div>
                <div class="func_item">
                    <label>Слайдер</label>
                    <input type="checkbox" class="checkbox" name="radio_logo1" value="логотип уже есть">
                </div>
            </div>
        </div>

        
    </div>
    <div id="total" class="total">
            <div class="func-block">
                <div class="func-block_head">
                    <p>Стоимость сайта</p>
                </div>
                <div class="func_item">
                    
                </div>
            </div>
    </div>
<style>
.sticky {
  position: fixed;
  z-index: 101;
}
.stop {
  position: relative;
  z-index: 101;
}
</style>

<script>
(function(){
var a = document.querySelector('#total'), b = null, P = 0;
window.addEventListener('scroll', Ascroll, false);
document.body.addEventListener('scroll', Ascroll, false);
function Ascroll() {
  if (b == null) {
    var Sa = getComputedStyle(a, ''), s = '';
    for (var i = 0; i < Sa.length; i++) {
      if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
        s += Sa[i] + ': ' +Sa.getPropertyValue(Sa[i]) + '; '
      }
    }
    b = document.createElement('div');
    b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
    a.insertBefore(b, a.firstChild);
    var l = a.childNodes.length;
    for (var i = 1; i < l; i++) {
      b.appendChild(a.childNodes[1]);
    }
    a.style.height = b.getBoundingClientRect().height + 'px';
    a.style.padding = '0';
    a.style.border = '0';
  }
  var Ra = a.getBoundingClientRect(),
      R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector('#func_wrap').getBoundingClientRect().bottom);  // селектор блока, при достижении нижнего края которого нужно открепить прилипающий элемент
  if ((Ra.top - P) <= 0) {
    if ((Ra.top - P) <= R) {
      b.className = 'stop';
      b.style.top = - R +'px';
    } else {
      b.className = 'sticky';
      b.style.top = P + 'px';
    }
  } else {
    b.className = '';
    b.style.top = '';
  }
  window.addEventListener('resize', function() {
    a.children[0].style.width = getComputedStyle(a, '').width
  }, false);
}
})()
</script>

</section>

    <!-- total -->

<!-- <section id="total" class="total">
    <div class="wrap">
        <div class="row">
            <div class="func-block">
                <div class="func-block_head">
                    <p>Стоимость сайта</p>
                </div>
                <div class="func_item">
                    
                </div>
            </div>
        </div>
    </div>
</section> -->

<!--=== footer ===-->
<?php include 'footer.php' ?>