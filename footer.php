	<?php get_template_part('includes/listedUp'); ?>
	
	<footer >
		<?php get_template_part('includes/modalSubscription'); ?>
		<div class="container footer">
			<div class="footer__one">
				<a href="<?php echo home_url(); ?>">
					<svg class="logo" role="img" >
						<use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-logo"/>
					</svg>
				</a>
				<?php wp_nav_menu( [ 'items_wrap' => '%3$s', 'theme_location' => 'footerLeft', 'container' => '' ] ); ?>
			</div>
			<div class="footer__two">
				<?php wp_nav_menu( [ 'items_wrap' => '%3$s', 'theme_location' => 'footerTwo', 'container' => '' ] ); ?>
			</div>
			<div class="footer__three">
				<?php wp_nav_menu( [ 'items_wrap' => '%3$s', 'theme_location' => 'footerThree', 'container' => '' ] ); ?>
				<a onclick="openModal()" class="openModal button buttonGreen">Подписаться</a>
			</div>
			<div class="footer__four">
							<span>
									660068, Краснояск <br>
									Мичурина, 3в, оф.405
							</span>
				<a href="tel:+73912190119">+7 391 219 01 19</a>
				<a href="mailto:forest@pgmedia.ru">forest@pgmedia.ru</a>
                <?php get_template_part('includes/socialMedia'); ?>
				<div class="">
					<svg class="" role="img" >
						<use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-MIR"/>
					</svg>
				</div>
			</div>
			<div class="footer__five">
							<span>
									Возрастное ограничение 16+ <br>
									© 2012-<?php echo date('Y');?> PromoGroup Media <br>
									Копирование материалов запрещено.
							</span>
			</div>
			<div class="footer__six">
							<span>
									Продолжая использовать наш сайт, вы даете согласие на обработку файлов Cookies и других пользовательских данных, в соответствии с <a href="<?php echo home_url(); ?>/privacy/">Политикой конфиденциальности</a>.
							</span>
			</div>
            <div class="footer__seven">
							<span>
                                Сетевое издание <a href="<?php echo home_url(); ?>">forestcomplex.ru</a> зарегистрировано в Федеральной службе по надзору в сфере связи, информационных технологий и массовых коммуникаций (Роскомнадзор). Свидетельство ЭЛ № ФС 77 - 76719 от 02.09.2019							</span>
            </div>
		</div>

		<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/app.min.js?version=1.2.4"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/loadOnPages.min.js?version=2"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/swiper.min.js"></script>
		<script>svg4everybody();</script>
	</footer>
	<?php get_template_part('includes/counters'); ?>
	<?php wp_footer(); ?>
	</body>
</html>