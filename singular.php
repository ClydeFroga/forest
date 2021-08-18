<?php get_header();

$ID = get_the_ID();
?>

<div class="container single <?php if (is_page()) echo 'page' ?>">
	<?php get_template_part('includes/breadcrumbs'); ?>

    <?php if (!is_page()) { ?>
        <div class="firstContent verticalBlock verticalBlockMain ">
            <div class="verticalBlock__ImgBlc">
                <div class="imgBlock imgBlockFull">
                    <?php the_post_thumbnail('full'); ?>

                </div>
                <figcaption class="sign">
		            <?php
		            echo the_post_thumbnail_caption();
		            ?>
                </figcaption>
                <?php if(has_tag(2123)) {
                    ?> <span>Новость часа</span> <?php  } ?>
            </div>

            <div class="verticalBlock__TextBlc">
                <h1 class="titleScroll">
                    <?php the_title(); ?>
                </h1>
            </div>

            <?php
            $tagsReq = true;
            require locate_template('includes/dateAndViews.php');
            $tagsReq = false;
            ?>

            <?php require locate_template('includes/expert.php'); ?>

        </div>

        <?php
        if (has_term(2005, 'sections')) {
            $errors = true;
            $sharing = false;
        } else {
            $errors = true;
            $sharing = true;
        }
        require locate_template('includes/sharingAndErrors.php');
        $errors = false;
        $sharing = false;
        ?>
    <?php } ?>

	<div class=" foxyOne">
		<?php get_template_part('includes/foxyA'); ?>
	</div>

	<div class=" foxyTwo">
		<?php get_template_part('includes/foxyB'); ?>
	</div>

	<div class="foxyThree">
		<?php get_template_part('includes/foxyC'); ?>
	</div>

	<div class=" foxyFour">
		<?php get_template_part('includes/foxyE'); ?>
	</div>

	<div class="foxyFullOne">
		<?php get_template_part('includes/foxyFullOne'); ?>
	</div>

	<div class="foxyFullTwo">
		<?php get_template_part('includes/foxyFullTwo'); ?>
	</div>
	
	<div class="single__mainContent article-loaded">
        <?php if (is_page()) { ?>
            <h1 style="margin-top: 0;"><?php the_title(); ?></h1>
        <?php } ?>

		<?php
			$content = get_the_content();
			the_content();
//			$ID = get_the_ID();
      $terms=get_the_terms( $ID, 'issue' );
      if( is_array( $terms ) ){
        foreach( $terms as $term ){
          echo '<div class="writer"><span class="writer__text" >Статья опубликована в журнале <a href="'. get_term_link( $term->term_id, $term->taxonomy ) .'">'. $term->name .'</a></span>
      </div>';
      }
    };
      if(has_term(2005, 'sections')) {
          $errors = false;
          $sharing = true;
          require locate_template('includes/sharingAndErrors.php');
          $sharing = false;
          get_template_part('includes/foxyDEdited');
      } else {
          get_template_part('includes/foxyD');
      }
        ?>
	</div>
	
	<?php
		global $post;
		if(strlen($content) < 3000 && !has_term(2005, 'sections') && !is_page()) {
			$posts_per_page = 4; ?>
			<script>
				if(document.documentElement.clientWidth > 1280) {
					document.querySelector('.single').classList.add('short');
				}
			</script>
		<?php } else {
			$posts_per_page = 5; ?>
		<?php }
		if(has_term(2005, 'sections')) {
			$title = 'Взгляд изнутри';
			$AnotherNewsId= 2012;
			$AnotherNewsCat = 'sections';
			$query = new WP_Query( [
				'posts_per_page' => $posts_per_page,
				'offset' => 0,
				'tax_query' => [
					[
						'taxonomy' => 'sections',
						'field' => 'id',
						'terms' => [ '2012' ]
					],
				]
			] );
		}
		else {
			$title = 'Новости';
			$AnotherNewsId= 2005;
			$AnotherNewsCat = 'sections';
			$query = new WP_Query( [
				'posts_per_page' => $posts_per_page,
				'offset' => 0,
				'tax_query' => [
					[
						'taxonomy' => 'sections',
						'field' => 'id',
						'terms' => [ '2005' ]
					],
				]
			] );
		}

		if ( $query->have_posts() ) {
			require locate_template('includes/anotherNews.php');
		}
		
		wp_reset_postdata();
	?>

    <div class="last">

    </div>

    <?php
    global $wp_query;
    $vertNum = 1;

    $r = rand(0, 6);
    $a = get_option( 'sticky_posts' );
    $sss = array_slice($a, $r, 1);

    $query = new WP_Query( array(
        'numberposts' => 1,
        'post__in'     => $sss,
    ) );


    if ( $query->have_posts() ) {
        $INeedCategories =true;
        $its_single =true;
        $maxChar = 125;
            $query->the_post();
            require locate_template('includes/verticalBlock.php');
        $its_single =true;
        $INeedCategories =false;
    }

    wp_reset_postdata();

    ?>

	<?php if (!is_page() && !has_term(2005, 'sections')) { ?>
		<?php get_template_part('includes/grade'); ?>

<!--		<div class="disqus">-->
<!--			--><?php //comments_template();?>
<!--		</div>-->
	<?php } ?>
	
	<?php get_template_part('includes/greenBlock'); ?>

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
	
	<?php
			$readersChoiseLimit = 5;
			$readersChoiseName = 'Выбор читателей';
			require locate_template('includes/readersChoise.php');

	?>

	<?php get_template_part('includes/mainPageWrapper-part3'); ?>
 
	<?php if(has_term(2005, 'sections')) {
		$currentId = get_the_ID();
		
		?>


		<script id="loadmore_single">
			let urls = ['<?php echo get_the_permalink() ?>'];
			let title = '<?php echo html_entity_decode(get_the_title()) ?>';
			var ajaxurl_single = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
			var offset = 0;
			var exclude = '<?php echo $currentId; ?>';
		</script>
		<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/loadMore.min.js?version=1.0.3"></script>
		<script>
            loadMoreOnNews();
        </script>
	<?php } ?>
	
	<?php require locate_template('includes/singularScripts.php'); ?>
	
</div>


<?php
if(has_term(2005, 'sections')) {
    dynamic_sidebar('bottomfixed');
}
?>

    <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/thumbs.min.js?version=1.0.0"></script>

<?php get_footer(); ?>