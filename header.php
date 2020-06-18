<?php


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

        <header>
          <div class="header">
            <div class="container">
              <div class="header_body">
                <div class="logo">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo/BISHOP-IT. RU.png" alt="" class="adv_item_img" />
                </div>
                <ul class="navigation">
                  <li class="navigation_item">
                    <a href="#" class="navigation_text">Главная</a>
                  </li>
                  <li class="navigation_item">
                    <a href="#advantages" class="navigation_text">Преимущества</a>
                  </li>
                  <li class="navigation_item">
                    <a href="#gallery" class="navigation_text">Галерея</a>
                  </li>
                  <li class="navigation_item">
                    <a href="#calc" class="navigation_text">Заказать</a>
                  </li>
                  <li class="navigation_item">
                    <a href="#rew" class="navigation_text">Отзывы</a>
                  </li>
                  <li class="navigation_item">
                    <a href="#" class="navigation_text">8 000 000 00 00 </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </header>