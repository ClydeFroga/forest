<!DOCTYPE html>
<html lang="<?php bloginfo('language');?>">
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="google-site-verification" content="7YpB8UChl-ZAQvGbw8UG2rLnY_PPvdoC12uEe_ZnlZg" />
	<meta name="yandex-verification" content="de8682d57b3e8f58" />
	<meta name="yandex-verification" content="8c7981629f2218a5" />
	<meta name="yandex-verification" content="8d57f4e028d767cd" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://yastatic.net/pcode/adfox/loader.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/style/swiper.css" media="none" onload="if(media!='all')media='all'">
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css?version=2.1.0">
	<link rel="stylesheet" href="<?php bloginfo('template_url')?>/style/fonts.css?version=3">
	<?php get_template_part('includes/counters'); ?>
    <?php get_template_part('includes/vkPixel'); ?>
    <?php get_template_part('includes/fbPixel'); ?>
    <?php wp_head();?>
	<?php if(is_singular() && has_category(2058)) echo "<meta name='robots' content='noindex,nofollow'>";?>
  <?php if(is_post_type_archive('event')) { ?>
    <meta property="og:title" content="Отраслевые выставки и мероприятия ЛПК | Лесной комплекс"/>
    <meta property="og:description" content="Отраслевые выставки лесной индустрии в России. Календарь мероприятий ЛПК Сибири. Актуальные даты Woodex, Лесдревмаш, Технодрев, Эксподрев, Российский лес."/>
    <meta property="og:url" content="https://forestcomplex.ru/events/"/>
	<?php } ?>
  <script charset="UTF-8" src="//web.webpushs.com/js/push/65dfc2df3beed581bcf8ab1f412b9273_1.js" async></script>
    <?php if(is_page(35282)) get_template_part('includes/ggladsense'); ?>
</head>
<body>

<?php
if(has_category(2058)){
    dynamic_sidebar('protobaner');
} else {
    dynamic_sidebar('topbanner');
}
 ?>

<header>
	<div class="container header">
		<nav class="navbar navbar-expand-lg">
			<a class="navbar-brand" href="<?php echo home_url(); ?>">
				<svg class="logo" role="img" >
					<use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-logo"/>
				</svg>
			</a>
			
			<button onclick="header.openDropdown('.navbar-collapse')" class="navbar-toggler" type="button" >
				<svg class="navbar-toggler-icon" role="img" >
					<use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-toggler"/>
				</svg>
			</button>
			
			<button onclick="header.openDropdown('.navbar-collapse')" class="navbar-toggler close" type="button">
				<svg class="navbar-toggler-icon" role="img" >
					<use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-xCircle"/>
				</svg>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php wp_nav_menu( [
					'container' => '',
					'items_wrap' => '<ul class="navbar-nav">%3$s</ul>',
					'theme_location'  => 'topWhite'
				] ); ?>

                <?php get_template_part('includes/socialMedia'); ?>
				
				<form role="search" action="<?php echo home_url( '/' ); ?>" class="form-inline">
					<label>
						<input value="<?php echo get_search_query() ?>" name="s" id="s" class="form-control" type="text" placeholder="Поиск...">
					</label>
				</form>
				
				<div class="hiddenMenu">
					<?php wp_nav_menu( [
						'container' => '',
						'items_wrap' => '<ul>%3$s</ul>',
						'theme_location'  => 'topGreen'
					] ); ?>
				
				</div>
				
				<div class="hiddenContacts">
					<a href="tel:+73912190119">+7 391 219 01 19</a>
					<a href="mailto:forest@pgmedia.ru">forest@pgmedia.ru</a>
				</div>
			</div>
		</nav>
	</div>
	
	<div class="menu ">
		<div class="container">
			<?php wp_nav_menu( [
				'container' => '',
				'items_wrap' => '<ul class="menu__row">%3$s</ul>',
				'theme_location'  => 'topGreen'
			] ); ?>
		</div>
	
	</div>
</header>
