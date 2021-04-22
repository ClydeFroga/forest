<?php
/*
Template name: Страница экспертов
*/
get_header(); ?>

<div class="container">
  <div class="rubric expert_page">
		<?php get_template_part('includes/breadcrumbs'); ?>

      <?php
      $terms = get_terms( array(
          'taxonomy'      => array( 'expert'),
          'orderby'       => 'slug',
          'order'         => 'ASC',
          'hide_empty'    => false,
          'number'    => 46,
      ) );

      if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
          $count = 0;

          foreach ($terms as $term)  {
              $img_url = get_field('photoexpert', 'expert_' . $term->term_id);
              $link = get_term_link( $term->term_id, $term->taxonomy );
              ?>
                  <?php if($count === 0) { ?>
                      <div class="expert-block expert-block1">
                  <?php } ?>

                  <?php
                  if($count < 18) {
                      require locate_template('includes/expertBlock.php');
                  }
                  ?>

                  <?php
                  if($count === 17) { ?>
                      </div>
                      <div class="expert-block expert-block2">
                  <?php }
                  ?>

                  <?php
                  if($count >= 18 && $count < 24) {
                      require locate_template('includes/expertBlock.php');
                  }
                  ?>

                  <?php
                  if($count === 23) { ?>
                      </div>
                      <div class="expert-block expert-block3">
                  <?php }
                  ?>

                  <?php
                  if($count >= 24 && $count < 36) {
                      require locate_template('includes/expertBlock.php');
                  }
                  ?>

                  <?php
                  if($count === 35) { ?>
                      </div>
                      <div class="expert-block expert-block4">
                  <?php }
                  ?>

                  <?php
                  if($count >= 36 && $count < 47) {
                      require locate_template('includes/expertBlock.php');
                  }
                  ?>

                  <?php
                  if($count === 46) { ?>

                      <?php break; }
                  ?>

                  <?php $count++; ?>

              <?php } ?>
          </div>
      <?php } ?>

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

    <script>
        let offset = 46;
        var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
    </script>

<?php	$loadMoreID = 'expertLoad';
    require locate_template('includes/loadmore.php');
     ?>


  </div>
</div>


<?php get_footer(); ?>
