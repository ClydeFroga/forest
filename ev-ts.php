<?php get_header(); 
/*
Template name: Мероприятия
*/
?>
<meta property="og:title" content="Отраслевые выставки и мероприятия ЛПК  | Лесной комплекс" />
<meta property="og:description" content="Отраслевые выставки лесной индустрии в России. Календарь мероприятий ЛПК Сибири. Актуальные даты Woodex, Лесдревмаш, Технодрев, Эксподрев, Российский лес." />
<meta property="og:url" content="https://forestcomplex.ru/lpk-events/" />
<meta property="og:site_name" content="Лесной комплекс" />
<meta property="og:image" content="https://forestcomplex.ru/wp-content/uploads/2020/12/11212.jpg" />
<meta property="og:image:width" content="450" />
<meta property="fb:admins" content="665567820156826" />
<meta property="fb:app_id" content="782452678569038" />
<meta property="article:publisher" content="https://www.facebook.com/forestcomplex.ru" />
<meta property="og:image:secure_url" content="https://forestcomplex.ru/wp-content/uploads/2020/12/11212.jpg" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="Отраслевые выставки и мероприятия ЛПК" />
<meta name="twitter:description" content="Отраслевые выставки лесной индустрии в России. Календарь мероприятий ЛПК Сибири. Актуальные даты Woodex, Лесдревмаш, Технодрев, Эксподрев, Российский лес." />
<meta name="twitter:image" content="https://forestcomplex.ru/wp-content/uploads/2020/12/11212.jpg"/>

  <div class="container">
    <div class="events">
			<div class="breadcrumbs">
				<h2 class="h2Title">Мероприятия</h2>
				<div>
					<a href="<?php echo home_url(); ?>">Главная</a>
					<span>/</span>
					<a href="<?php echo home_url(); ?>/events/">Мероприятия</a>
				</div>
			</div>
			
			<div class="horizontalBar horizontalBar1">
				<?php echo do_shortcode('[events_list scope="future" limit=6 offset=0]
				<div>
					<div>
						<a href="#_EVENTURL" class="horizontalBarFirst imgBlock">
							<img src="#_EVENTIMAGEURL">
						</a>
						<div class="horizontalBar__Right">
							<a href="#_EVENTURL">
								#_EVENTNAME
							</a>
					
					       <a href="#_EVENTURL">
					            #_EVENTEXCERPT{20,...}
                            </a>
                            
							<div class="dateAndViews dateAndViewsEvents">
                                <span class="date">
                                  #_EVENTDATES
                                </span>
                                                <span class="location">
                                  #_LOCATIONTOWN
                                </span>
							</div>
					
							<div class="tags">
								#_EVENTTAGS
							</div>
						</div>
					</div>
				</div>
					[/events_list]')
				?>
			</div>
			<div class="horizontalBar horizontalBar2">
				<?php echo do_shortcode('[events_list scope="future" limit=6 offset=6]
				<div>
					<div>
						<a href="#_EVENTURL" class="horizontalBarFirst imgBlock">
							<img src="#_EVENTIMAGEURL">
						</a>
						<div class="horizontalBar__Right">
							<a href="#_EVENTURL">
								#_EVENTNAME
							</a>
							
                           <a href="#_EVENTURL">
					            #_EVENTEXCERPT{20,...}
                            </a>
					
							<div class="dateAndViews dateAndViewsEvents">
                                <span class="date">
                                  #_EVENTDATES
                                </span>
                                                <span class="location">
                                  #_LOCATIONTOWN
                                </span>
							</div>
					
							<div class="tags">
								#_EVENTTAGS
							</div>
						</div>
					</div>
				</div>
					[/events_list]')
				?>
			</div>
			
			<div class="foxyOne">
				<?php get_template_part('includes/foxyA'); ?>
			</div>
			<div class="foxyTwo">
				<?php get_template_part('includes/foxyB'); ?>
			</div>
			<div class="foxyThree">
				<?php get_template_part('includes/foxyC'); ?>
			</div>
			<div class="foxyFour">
				<?php get_template_part('includes/foxyE'); ?>
			</div>
			<div class="foxyFive">
				<?php get_template_part('includes/foxyF'); ?>
			</div>
	
			<div class="foxyFullOne">
				<?php get_template_part('includes/foxyFullOne'); ?>
			</div>
			<div class="foxyFullTwo">
				<?php get_template_part('includes/foxyFullTwo'); ?>
			</div>
	
			<?php get_template_part('includes/foxyD'); ?>
	
			<?php
				$readersChoiseName = 'Новости';
				$readersChoiseLimit = 6;
				require locate_template('includes/readersChoise.php');
			?>
	
			<?php
				global $post;
				$title = 'Информ';
				$AnotherNewsId = 2005;
				$AnotherNewsCat = 'sections';
				$query = new WP_Query( [
					'posts_per_page' => 3,
					'offset' => 0,
					'tax_query' => [
						[
							'taxonomy' => 'sections',
							'field' => 'id',
							'terms' => [ '2005' ]
						],
					]
				] );
				if ( $query->have_posts() ) {
					require locate_template('includes/anotherNews.php');
				}
		
				wp_reset_postdata();
			?>
	
			<?php get_template_part('includes/newMag'); ?>
	
			<?php
				global $post;
				$movingClass = 'movingPicturesOne';
				$TopLeft = true;
				$a = get_option( 'sticky_posts' );
				$sss = array_slice($a, 0, 6);
				
				$query = new WP_Query( array(
					'numberposts' => 6,
					'post__in'     => $sss,
				) );
				if ( $query->have_posts() ) {
					shuffle($query -> posts);
					require locate_template('includes/movingPictures.php');
				}
				$TopLeft = false;
				wp_reset_postdata();
			?>

            <h2 class="h2Title h2TitleBorder">
        Итоги выставок
      </h2>

			<?php
				global $wp_query;
				$vertNum = 1;
				
				$query = new WP_Query( [
					'posts_per_page' => 6,
					'offset' => 0,
					'tax_query' => [
						[
							'taxonomy' => 'post_tag',
							'field' => 'id',
							'terms' => [ '2119' ]
						],
					]
				] );
		
				if ( $query->have_posts() ) {
					$INeedCategories =true;
					while ($query->have_posts()) {
						$query->the_post();
						require locate_template('includes/verticalBlock.php');
						$vertNum++;
					}
					$INeedCategories =false;
				}
				
				wp_reset_postdata();

			?>

            <?php get_template_part('includes/quiz'); ?>
	
			<?php
				global $post;
				$title = 'Информ';
				$AnotherNewsId= 2003;
				$AnotherNewsCat = 'sections';
				$query = new WP_Query( [
					'posts_per_page' => 3,
					'offset' => 0,
					'tax_query' => [
						[
							'taxonomy' => 'sections',
							'field' => 'id',
							'terms' => [ '2003' ] // технологии
						],
					]
				] );
				if ( $query->have_posts() ) {
					require locate_template('includes/anotherNews.php');
				}
		
				wp_reset_postdata();
			?>
	
			<?php
				global $post;
				$movingClass = 'movingPicturesTwo';
				$TopLeft = true;
				$query = new WP_Query( [
					'posts_per_page' => 8,
					'offset' => 0,
					'tax_query' => [
						[
							'taxonomy' => 'sections',
							'field' => 'id',
							'terms' => [ '2012' ] // взгляд изнутри
						],
					]
				] );
				if ( $query->have_posts() ) {
					require locate_template('includes/movingPictures.php');
				}
				$TopLeft = false;
				wp_reset_postdata();
			?>
	
			<?php
				global $post;
				$movingClass = 'movingPicturesBigOne';
				$query = new WP_Query( [
					'posts_per_page' => 8,
					'offset' => 0,
					'tax_query' => [
						[
							'taxonomy' => 'category',
							'field' => 'id',
							'terms' => [ '7', '68' ] // деревообработка, взгляд изнутри
						],
					]
				] );
				if ( $query->have_posts() ) {
					require locate_template('includes/movingPictures.php');
				}
		
				wp_reset_postdata();
			?>

    </div>
  </div>

<?php get_footer(); ?>