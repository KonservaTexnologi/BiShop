<?php
get_header();
?>

<style>

@font-face {
  font-family: "Nova";
  src: url(" <?php echo get_template_directory_uri() ?>/fonts/Proxima Nova bold.otf");
  font-weight: bold;
  font-style: normal;
}
@font-face {
  font-family: "ExtraNova";
  src: url("<?php echo get_template_directory_uri() ?>/fonts/Proxima Nova Extrabold.otf");
  font-weight: bold;
  font-style: normal;
}

  .info::after{
    content: "";
    background-image: url("<?php echo get_template_directory_uri() ?>/img/info/Слой 7.png");
  position: absolute;
  width: 1038px;
  height: 832px;
  top: 70px;
  right: 0%;
  background-repeat: no-repeat;
  background-size: cover;
  }

  .buyTwo::after {
  content: url("<?php echo get_template_directory_uri() ?>/img/Прямоугольник 10 копия 2.png");
}
</style>

<article>
<div class="info">
            <div class="container">
              <div class="info_body">
                <div class="info_topText">
                  Защитная <br />
                  Плёнка
                </div>
                <div class="info_botText">
                  Сохранит Ваш стол в <br />
                  первозданном виде!
                </div>
                <div class="info_boText2">
                  Узнайте стоимость полотна <br />
                  всего за 10 секунд и закажите<br />
                  надежную защиту Вашей<br />
                  мебели от повреждений!
                </div>

                <div class="info_order">
                  <button class="info_order_btn">Заказать</button>
                  <a href="#" class="info_order_txt">Узнать стоимость</a>
                </div>
              </div>
            </div>
          </div>
          <div class="advantages">
            <div class="container">
              <div class="advantages_body">
                <div class="advantages_topText">
                  <span>Преимущества</span><br />
                  мягкого стекла
                </div>
                <div class="advantages_items">
                  <div class="advantages_item">
                  <img src="<?php echo get_template_directory_uri() ?>/img/adv/1.png" alt="" class="adv_item_img" />
                    <div class="adv_item_text">
                      Вы сможете использовать <br />
                      мягкое стекло <span>как угодно</span> и <br />
                      <span>где угодно</span> !
                    </div>
                  </div>
                  
                  <div class="advantages_item">
                    <img src="<?php echo get_template_directory_uri() ?>/img/adv/2.png" alt="" class="adv_item_img" />
                    <div class="adv_item_text">
                      Жидкое стекло на стол – <span>100%</span> <br />
                      защита поверхности!
                    </div>
                  </div>
                  <div class="advantages_item">
                    <img src="<?php echo get_template_directory_uri() ?>/img/adv/3.png" alt="" class="adv_item_img" />
                    <div class="adv_item_text">
                      Силиконовая скатерть – это <br />
                      <span>стиль</span> и
                      <span>элегантность!</span>
                    </div>
                  </div>
                </div>
                <div class="advantages_btn">
                  <button class="info_order_btn">Заказать</button>
                </div>
              </div>
            </div>
          </div>
          <div class="rew">
            <div class="container">
              <div class="rew_body">
                <div class="rew_topText">
                  <span>Отзывы</span> наших<br />
                  клиентов
                </div>
                <div class="rew_slider">
                  <div class="rew_slider_items">
                    <img src="<?php echo get_template_directory_uri() ?>/img/rew/1.png" alt="" class="rew_slider_img" />
                    <div class="rew_slider_txt">
                      «Заказал силиконовую скатерть внучке на письменный стол в
                      этой компании. Пришло все вовремя, ожидания от товара
                      полностью оправдались»
                    </div>
                  </div>
                  
                  <div class="rew_slider_items">
                    <img src="<?php echo get_template_directory_uri() ?>/img/rew/2.png" alt="" class="rew_slider_img" />
                    <div class="rew_slider_txt">
                      «Заказ пришел быстро за 3 дня. Скатерть получила в хорошей
                      картонной упаковке. Она отлично вписалась в мой интерьер.
                      Спасибо продавцу я всем осталась довольна»
                    </div>
                  </div>
                  <div class="rew_slider_items">
                    <img src="<?php echo get_template_directory_uri() ?>/img/rew/3.png" alt="" class="rew_slider_img" />
                    <div class="rew_slider_txt">
                      «Получила скатерть за 5 дней. Вчера расстелила на стол,
                      проверила, все оказалось в норме как и обещал продавец.
                      Внешний вид стола вместе с этой скатертью конечно
                      порадовал. Всем советую!»
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="gallery">
            <div class="container">
              <div class="gallerry_body">
                <div class="gallery_topText">Галерея</div>
                <div class="gallery_slider">
                  <div class="galley_slider_items">
                    <img src="<?php echo get_template_directory_uri() ?>/img/gal/1.png" alt="" />
                  </div>
                  <div class="galley_slider_items">
                    <img src="<?php echo get_template_directory_uri() ?>/img/gal/2.png" alt="" />
                  </div>
                  <div class="galley_slider_items">
                    <img src="<?php echo get_template_directory_uri() ?>/img/gal/3.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="calc">
            <div class="container">
              <div class="calc_body">
                <div class="calc_topText">
                  Узнайте точную цену <br />
                  <span>защитной плёнки</span>
                </div>
                <div class="calc_form">
                  <form action="#">
                    <p class="select_height_text">Выберите толщину</p>
                    <div class="select_height">
                      <input
                        type="radio"
                        name="calc_radio"
                        id="r1"
                        class="radio_calc"
                        checked
                        value="1400"
                      />
                      <label for="r1" class="label_radio_calc">1 мм</label>
                      <input
                        type="radio"
                        name="calc_radio"
                        id="r2"
                        class="radio_calc"
                        value="2100"
                      /><label for="r2" class="label_radio_calc">2 мм</label>
                      <input
                        type="radio"
                        name="calc_radio"
                        id="r3"
                        class="radio_calc"
                        value="2500"
                      /><label for="r3" class="label_radio_calc">2.5 мм</label>
                    </div>
                    <p class="select_length">Длина в см</p>
                    <input
                      type="text"
                      name="select_length"
                      id="l1"
                      class="select_length_input"
                      placeholder="Введите число"
                    />
                    <p class="select_length">Ширина в см</p>
                    <input
                      type="text"
                      name="select_length"
                      id="w1"
                      class="select_length_input"
                      placeholder="Введите число"
                    />
                    <div class="buy">
                      <p class="buyTwo">Купить 2-ю скатерть со скидкой!</p>
                      <input type="checkbox" name="buycheck" id="bc" />
                    </div>
                  </form>
                </div>
                <form class="calc_form2">
                  <p class="calc_number">Номер телефона</p>
                  <input
                    type="text"
                    name="select_width"
                    id="l1"
                    class="input_calc_number"
                    placeholder="Ваш Номер"
                  />
                  <p class="delivery_text">Способ доставки</p>
                  <div class="delivery">
                    <input
                      type="radio"
                      name="del_radio"
                      id="d1"
                      class="radio_del"
                      checked
                      value="300"
                    />
                    <label for="d1" class="label_radio_del" onclick="calc()"
                      >Курьер</label
                    >
                    <input
                      type="radio"
                      name="del_radio"
                      id="d2"
                      class="radio_del"
                      value="150"
                    /><label for="d2" class="label_radio_del" onclick="calc()"
                      >Boxberry доставка</label
                    >
                  </div>
                  <p class="del_info">
                    Курьерская доставка по Москве - 300 руб <br />
                    (на следующий день)
                  </p>
                  <p class="cost">Стоимость: <span id="cost">________</span></p>
                  <button class="get_order">Оформить заказ</button> <br />
                  <div class="dagree">
                    <input type="checkbox" name="agree" id="agree" />
                    <label for="agree" class="agree"
                      >Согласен на обработку персональных данных</label
                    >
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="easy_del">
            <div class="container">
              <div class="easy_del_body">
                <div class="easy_del_text">Удобная доставка</div>
                <div class="easy_del_type">
                  <div class="del_cour">
                    <img src="<?php echo get_template_directory_uri() ?>/img/del/cour.png" alt="" class="del_cour_img" />
                    <p class="del_cour_text">
                      Курьерская доставка по <br />
                      Москве - 300 руб. <br />
                      (на следующий день)
                    </p>
                  </div>
                  <div class="del_box">
                    <img
                      src="<?php echo get_template_directory_uri() ?>/img/del/boxberry.png"
                      alt=""
                      class="del_cour_img"
                    />
                    <p class="del_cour_text">
                      Доставка в пункты выдачи <br />
                      Boxberry - 150 руб. <br />
                      (1-2 дня после заказа по Москве) <br />
                      (2-3 дня по Московской области) <br />
                      (3-5 дней по России) <br />
                    </p>
                  </div>
                </div>
                <div class="insta">
                  <p class="insta_text">
                    Больше отзывывов в нашем <br />
                    <span>инстаграм</span> аккаунте
                  </p>
                  <div class="insta_img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/del/L1.png" alt="" />
                  </div>
                  <div class="insta_a">
                    <a class="insta_a" href="#"> @инстаграм </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
      
        
	
<?php

get_footer();
