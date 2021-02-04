<?php get_header(); ?>

<div class="container">
  <div class="rubric <?php if(is_tax('issue')) echo 'issue'?>">
		<?php get_template_part('includes/breadcrumbs');

		if(is_category() || is_tax('sections')) {
           require locate_template('includes/filter.php');
        }



		?>
	
    <?php if(is_tax('issue')) {
        get_template_part('includes/horizontalBarIssue');
        ?>
	<?php } ?>


      <?php require locate_template('includes/fourBlocks.php'); ?>
		
    <div class="horizontalBar horizontalBarGreen">
        <?php

        $args = array(
            'numberposts' => 10,
            'fields' => 'ids',
            'post_type' => 'any',
            'tag' => 'hot'
        );

        $random_posts_ids = get_posts($args);
        if(count($random_posts_ids) > 0) {
            $rnd_posts = array_rand(array_flip($random_posts_ids), 1);
            $post = get_post($rnd_posts);

            if($post) {
                setup_postdata($post);
                require locate_template('includes/horizontalBarDiv.php');
            }
        }

        $few = false;
        wp_reset_postdata();
        ?>
    </div>

    <div class=" foxyOne">
			<?php get_template_part('includes/foxyA'); ?>
    </div>
    <div class=" foxyTwo">
			<?php get_template_part('includes/foxyB'); ?>
    </div>
    <div class=" foxyThree">
			<?php get_template_part('includes/foxyC'); ?>
    </div>
    <div class=" foxyFour">
			<?php get_template_part('includes/foxyE'); ?>
    </div>
    <div class=" foxyFive">
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
        global $post;
        $title = 'Информ';
        $AnotherNewsId= 2005;
        $AnotherNewsCat = 'sections';
        $query = new WP_Query( [
            'posts_per_page' => 5,
            'offset' => 0,
            'tax_query' => [
                [
                    'taxonomy' => 'sections',
                    'field' => 'id',
                    'terms' => [ '2005' ] // информ
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
        $movingClass = 'movingPicturesBigOne';
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

        wp_reset_postdata();
    ?>

    <?php if(!is_tax('issue')) { ?>
	
			<?php
			global $post;
			$movingClass = 'movingPicturesOne';
			$TopLeft = true;
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
			$TopLeft = false;
			wp_reset_postdata();
			?>
   
   <?php } ?>

    <?php
        if(is_search()) {
            get_template_part('includes/pagination');
        }	else {
        if ( $wp_query->max_num_pages > 1 ) { ?>

            <script>
                let offset = 13;
                var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
            </script>

        <?php	$loadMoreID = 'rubricLoad';
            require locate_template('includes/loadmore.php');
            }
        }?>

			
  </div>
</div>


<?php get_footer(); ?>