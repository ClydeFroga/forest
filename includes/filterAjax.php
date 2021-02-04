 <?php       if($isCat === 'true' ) {
            $loadNew =true;
            $args = array(
                'tax_query' => [
                    'relation' => 'AND',
                    [
                        'taxonomy' => 'category',
                        'field'    => 'slug',
                        'terms'    => $slug,
                        'operator' => $operator
                    ],
                    [
                        'taxonomy' => 'sections',
                        'field'    => 'slug',
                        'terms'    => $theme,
                    ]
                ],

                'post_status' => 'publish',
                'posts_per_page' => 13
            );
        } else {
            $args = array(
                'tax_query' => [
                    'relation' => 'AND',
                    [
                        'taxonomy' => 'category',
                        'field'    => 'slug',
                        'terms'    => $theme,
                    ],
                    [
                        'taxonomy' => 'sections',
                        'field'    => 'slug',
                        'terms'    => $slug,
                        'operator' => $operator
                    ]
                ],

                'post_status' => 'publish',
                'posts_per_page' => 13
            );
            $loadNew = false;
        }

        query_posts( $args );


 require locate_template('includes/fourBlocks.php'); ?>

 <script>
     var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
     var true_posts = '<?php echo serialize($args); ?>';
 </script>
