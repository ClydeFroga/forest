<?php get_header(); ?>

<div class="container page404">
	<?php get_template_part('includes/breadcrumbs'); ?>

  <div class="header404">
    <div>
      <div class="header404__error">
        <div class="header404__errorLeft">
          <p>
            Упс! Такой страницы не существует.
          </p>
          <p>
            Найдите интересующий материал с помощью поиска или выберите из нашей подборки
          </p>
        </div>
        <div class="header404__errorRight">
					<form role="search" action="<?php echo home_url( '/' ); ?>" class="form-inline">
						<label>
							<input value="<?php echo get_search_query() ?>" name="s" id="s" class="form-control" type="text" placeholder="Поиск...">
							<button class="button buttonGreen" type="submit">Искать</button>
						</label>
					</form>
        </div>
      </div>
	
			<?php get_template_part('includes/socialBlock'); ?>
    </div>
	
		<?php get_template_part('includes/foxyA'); ?>
  </div>
	
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
	
	<?php get_template_part('includes/mainPageWrapper-part1'); ?>
	
	<div class="foxyFullOne">
		<?php get_template_part('includes/foxyFullOne'); ?>
	</div>
	
	<?php get_template_part('includes/mainPageWrapper-part5'); ?>
	
	<?php get_template_part('includes/mainPageWrapper-part3'); ?>
	
	<?php
		global $post;
		$movingClass = 'movingPicturesBigTwo';
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
	
	<?php get_template_part('includes/mainPageWrapper-part4'); ?>

</div>

	<div class="page404">
		<?php get_template_part('includes/bigSubForm'); ?>
	</div>



<?php get_footer(); ?>