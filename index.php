<?php
  require_once 'config/connect.php';
  if ($connect) {
    $paids = mysqli_query($connect, "SELECT * FROM `paid`");
    $paids = mysqli_fetch_all($paids);
  }
?>

<!DOCTYPE html>
<html lang="ru" class="page">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="preload"
      href="fonts/FuturaMediumC.woff"
      type="font/woff"
      as="font"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./libs/swiper/swiper-bundle.min.css" />
    <script src="./libs/swiper/swiper-bundle.min.js" defer></script>
    <script src="app.js" defer></script>
    <title>Форма оплаты Hubus help</title>
  </head>
  <body class="page__body">
    <header class="header">
      <div class="container container--header">
        <img src="./img/logo.png" alt="Логотип организации" />
        <h2>Hubus <span>Help!</span> <span>Pay</span></h2>
        <div>
          <a href="tel:88005555500">8 800 55555 00</a>
          <a href="https://hubus.pro/" target="_blank">Hubus & Co.</a>
        </div>
      </div>
    </header>
    <main class="main">
      <div class="container container--main">
        <section class="swiper slider">
          <p>
            <span class="slider__total-sum">159 024 103 ₽</span><br />
            Маркетплейс благотворительности
          </p>

          <ul class="swiper-wrapper">
            <li class="swiper-slide">
              <div>
                <button class="prev"></button>
                <div style="background-image: url(./img/fonds/region.png)"></div>
                <button class="next"></button>
              </div>
              <div>
                <span>43 000 ₽</span>
                <p>ЭТП РЕГИОН</p>
              </div>

              <a class="btn" href="https://etp-region.ru/" target="_blank">Кому мы помогли?</a>
            </li>
            <li class="swiper-slide">
              <div>
                <button class="prev"></button>
                <div style="background-image: url(./img/fonds/atmosphere.png)"></div>
                <button class="next"></button>
              </div>
              <div>
                <span>43 000 ₽</span>
                <p>ЦА "АТМОСФЕРА"</p>
              </div>

              <a class="btn" href="https://sdo-region.ru/" target="_blank">Кому мы помогли?</a>
            </li>
            <li class="swiper-slide">
              <div>
                <button class="prev"></button>
                <div style="background-image: url(./img/fonds/guild.png)"></div>
                <button class="next"></button>
              </div>
              <div>
                <span>43 000 ₽</span>
                <p>Гильдия</p>
              </div>

              <a class="btn" href="http://xn----etbdpbq5ax0gnu.xn--p1ai/" target="_blank"
                >Кому мы помогли?</a
              >
            </li>
            <li class="swiper-slide">
              <div>
                <button class="prev"></button>
                <div style="background-image: url(./img/fonds/raduga.png)"></div>
                <button class="next"></button>
              </div>
              <div>
                <span>43 000 ₽</span>
                <p>Радуга</p>
              </div>

              <a class="btn" href="https://raduga-ufa.ru/" target="_blank">Кому мы помогли?</a>
            </li>
            <li class="swiper-slide">
              <div>
                <button class="prev"></button>
                <div style="background-image: url(./img/fonds/evolution.png)"></div>
                <button class="next"></button>
              </div>
              <div>
                <span>43 000 ₽</span>
                <p>Студия "Развитие"</p>
              </div>

              <a class="btn" href="https://vk.com/razvitis" target="_blank">Кому мы помогли?</a>
            </li>
            <li class="swiper-slide">
              <div>
                <button class="prev"></button>
                <div style="background-image: url(./img/fonds/klumba.png)"></div>
                <button class="next"></button>
              </div>
              <div>
                <span>43 000 ₽</span>
                <p>Детский центр «Клумба»</p>
              </div>

              <a class="btn" href="https://klumbaclub.ru/" target="_blank">Кому мы помогли?</a>
            </li>
            <li class="swiper-slide">
              <div>
                <button class="prev"></button>
                <div style="background-image: url(./img/fonds/empireBalloons.png)"></div>
                <button class="next"></button>
              </div>
              <div>
                <span>43 000 ₽</span>
                <p>Империя шаров</p>
              </div>

              <a class="btn" href="http://shar-cool.ru/" target="_blank">Кому мы помогли?</a>
            </li>
            <li class="swiper-slide">
              <div>
                <button class="prev"></button>
                <div style="background-image: url(./img/fonds/artSquare.png)"></div>
                <button class="next"></button>
              </div>
              <div>
                <span>43 000 ₽</span>
                <p>Арт Квадрат</p>
              </div>

              <a class="btn" href="https://www.art-kvadrat.com/" target="_blank"
                >Кому мы помогли?</a
              >
            </li>
            <li class="swiper-slide">
              <div>
                <button class="prev"></button>
                <div style="background-image: url(./img/fonds/zooHugs.png)"></div>
                <button class="next"></button>
              </div>
              <div>
                <span>43 000 ₽</span>
                <p>Зоопарк «Обнимашки»</p>
              </div>

              <a class="btn" href="https://vk.com/obnimashki_zoo" target="_blank"
                >Кому мы помогли?</a
              >
            </li>
            <li class="swiper-slide">
              <div>
                <button class="prev"></button>
                <div style="background-image: url(./img/fonds/positiveCorp.jpg)"></div>
                <button class="next"></button>
              </div>
              <div>
                <span>43 000 ₽</span>
                <p>
                  Агентство праздников <br />
                  «Корпорация Позитива»
                </p>
              </div>

              <a class="btn" href="https://vk.com/pozitivufa" target="_blank">Кому мы помогли?</a>
            </li>
            <li class="swiper-slide">
              <div>
                <button class="prev"></button>
                <div style="background-image: url(./img/fonds/dodo.png)"></div>
                <button class="next"></button>
              </div>
              <div>
                <span>43 000 ₽</span>
                <p>Додо Пицца</p>
              </div>

              <a class="btn" href="https://dodopizza.ru/ufa" target="_blank">Кому мы помогли?</a>
            </li>
            <li class="swiper-slide">
              <div>
                <button class="prev"></button>
                <div style="background-image: url(./img/fonds/smartToys.png)"></div>
                <button class="next"></button>
              </div>
              <div>
                <span>43 000 ₽</span>
                <p>Умные игрушки Уфа</p>
              </div>

              <a class="btn" href="https://vk.com/public212012702" target="_blank"
                >Кому мы помогли?</a
              >
            </li>
            <li class="swiper-slide">
              <div>
                <button class="prev"></button>
                <div style="background-image: url(./img/fonds/youngTalant.png)"></div>
                <button class="next"></button>
              </div>
              <div>
                <span>43 000 ₽</span>
                <p>Юные таланты</p>
              </div>

              <a class="btn" href="http://www.utbrb.ru/" target="_blank">Кому мы помогли?</a>
            </li>
            <li class="swiper-slide">
              <div>
                <button class="prev"></button>
                <div style="background-image: url(./img/fonds/edvis.png)"></div>
                <button class="next"></button>
              </div>
              <div>
                <span>43 000 ₽</span>
                <p>Эдвис</p>
              </div>

              <a class="btn" href="https://edvisrb.ru/" target="_blank">Кому мы помогли?</a>
            </li>
            <li class="swiper-slide">
              <div>
                <button class="prev"></button>
                <div style="background-image: url(./img/fonds/semenova.png)"></div>
                <button class="next"></button>
              </div>
              <div>
                <span>43 000 ₽</span>
                <p>
                  Графический дизайнер <br />
                  Семёнова Анастасия
                </p>
              </div>

              <a class="btn" href="https://vk.com/winona_design" target="_blank"
                >Кому мы помогли?</a
              >
            </li>
            <li class="swiper-slide">
              <div>
                <button class="prev"></button>
                <div style="background-image: url(./img/fonds/amegaPrint.png)"></div>
                <button class="next"></button>
              </div>
              <div>
                <span>43 000 ₽</span>
                <p>
                  Сеть печатных центов <br />
                  «АмегаПРИНТ»
                </p>
              </div>

              <a class="btn" href="https://amegaprint.ru/" target="_blank">Кому мы помогли?</a>
            </li>
          </ul>
        </section>
        <section class="payment">
          <div class="payment-form__content">
            <p>Ваша благодарность и общая помощь</p>
            <form class="payment-form" action="vendor/create.php" method="post">
              <div>
                <input type="text" name="name" id="name" />
                <label for="name">Имя</label>
              </div>

              <ul class="payment-form__selection">
                <li>
                  <input
                    class="payment-form--input visually-hidden"
                    type="checkbox"
                    name="amount-min"
                    id="amount-min"
                    value="7"
                    checked
                  />
                  <label class="payment-form--label" for="amount-min"> 7 ₽ </label>
                </li>
                <li>
                  <input
                    class="payment-form--input visually-hidden"
                    type="radio"
                    name="average-amount"
                    id="average-min-amount"
                    value="49"
                  />
                  <label class="payment-form--label mr--10" for="average-min-amount"> 49 ₽ </label>
                  <input
                    class="payment-form--input visually-hidden"
                    type="radio"
                    name="average-amount"
                    id="average-max-amount"
                    value="159"
                  />
                  <label class="payment-form--label ml--10" for="average-max-amount"> 159 ₽ </label>
                </li>
                <li>
                  <input
                    class="payment-form--input visually-hidden"
                    type="checkbox"
                    name="amount-max"
                    id="amount-max"
                    value="599"
                  />
                  <label class="payment-form--label" for="amount-max"> 599 ₽ </label>
                </li>
              </ul>

              <button class="btn" type="submit">Отправить <span>Благодарность!</span></button>
            </form>
            <p><span>Все данные под надёжной защитой</span> 🔐</p>
          </div>

          <div>
            <img src="./img/pci-logo.png" alt="Логотип стандарта защиты оплаты - PCI DSS" />
            <img src="./img/mastercard-logo.png" alt="Логотип MasterCard" />
            <img src="./img/visa-logo.png" alt="Логотип Visa" />
          </div>
        </section>

        <?php 
          if ($connect) {
            ?>
            <section class="paid">
              <span class="paid__date">20 <span>октября</span> 2022</span>
    
              <ul class="paid__list">
                <?php
                  foreach($paids as $paid) {
                    ?>
                    <li class="paid__item"><span>+<?= $paid[2] ?> ₽ </span><?= $paid[1] ?></li>
                    <?php
                  }
                ?>
              </ul>
            </section>
            <?php 
          }
        ?>
      </div>
    </main>
    <footer class="footer">
      <div class="container container--footer">
        <p>Первый в Мире <span>сервис открытой Благотворительности 💳</span></p>
        <p>2022 Все права <span>Hubus & Co</span></p>
      </div>
    </footer>
  </body>
</html>
