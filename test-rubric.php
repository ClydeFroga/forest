<?php
/*
Template name: Шаблон-рубрика
*/
 ?>
<!DOCTYPE html>
<html lang="<?php bloginfo('language');?>">
<head>
    <meta name='robots' content='noindex,nofollow'>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="google-site-verification" content="7YpB8UChl-ZAQvGbw8UG2rLnY_PPvdoC12uEe_ZnlZg" />
    <meta name="yandex-verification" content="de8682d57b3e8f58" />
    <meta name="yandex-verification" content="8c7981629f2218a5" />
    <meta name="yandex-verification" content="8d57f4e028d767cd" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://yastatic.net/pcode/adfox/loader.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style/swiper.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css?version=1.7.15">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style/fonts.css">
    <?php get_template_part('includes/vkPixel'); ?>
    <?php wp_head();?>
</head>
<style>
    footer, header, .rubric > *:not(.foxyOne, .foxyTwo, .foxyThree, .foxyFour, .foxyFive, .foxyFullOne, .foxyFullTwo, .foxyLong , .article-loaded, .mainPageWrapper-part3) {
        filter: grayscale(100%);
    }
    .article-loaded > *:not(.article-loaded, .foxyLong) {
        filter: grayscale(100%);
    }
    .mainPageWrapper-part3 > *:not(.foxy) {
        filter: grayscale(100%);
    }
</style>
<body>

<?php dynamic_sidebar('protobaner'); ?>

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

<div class="container">
    <div class="rubric">
        <?php get_template_part('includes/breadcrumbs');
        ?>

        <div class="filter">

            <span class="h2Title">фильтр по рубрикам и разделам</span>


            <div class="filter__hide">
                <div class="filter__all">
                    <?php

                        $terms = get_terms( array(
                            'taxonomy'      => array( 'category' ),
                            'orderby'       => 'id',
                            'order'         => 'ASC',
                            'exclude'       => array(2058),
                        ) );



                    foreach( $terms as $term ){?>
                        <span id="<?php print_r($term -> slug); ?>" data="<?php print_r($term -> name); ?>">
                            <?php print_r($term -> name); ?>
                        </span>
                    <?php }

                    ?>
                </div>

                <span class="filter__display button buttonGreen">Применить</span>
            </div>

            <script>
                var filterAjaxUrl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';

                let isCategory = true;
                var theme = 'market';


            </script>

            <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/filter.min.js?version=3"></script>
        </div>

        <?php
        global $post;
        $queryTest = new WP_Query( [
            'posts_per_page' => 13,
            'offset' => 0,
            'tax_query' => [
                [
                    'taxonomy' => 'sections',
                    'field' => 'id',
                    'terms' => [ '2007' ] // информ
                ],
            ]
        ] );

        if($queryTest -> have_posts()) {
            $count = 0;
            $arhive = true;
            $INeedSections =true;
            while($queryTest -> have_posts()){
                $queryTest -> the_post();
                ?>

                <?php if($count === 0) {
                    if(!is_tax('issue')) {
                        $countFirst = true;
                    }
                    ?>
                    <div class="horizontalBar horizontalBar1">
                <?php } ?>

                <?php
                if($count < 5) {
                    require locate_template('includes/horizontalBarDiv.php');
                    $countFirst = false;
                }
                ?>

                <?php
                if($count === 4) { ?>
                    </div>
                    <div class="horizontalBar horizontalBar2">
                <?php }
                ?>

                <?php
                if($count >= 5 && $count < 7) {
                    require locate_template('includes/horizontalBarDiv.php');
                }
                ?>

                <?php
                if($count === 6) { ?>
                    </div>
                    <div class="horizontalBar horizontalBar3">
                <?php }
                ?>

                <?php
                if($count >= 7 && $count < 9) {
                    require locate_template('includes/horizontalBarDiv.php');
                }
                ?>

                <?php
                if($count === 8) { ?>
                    </div>
                    <div class="horizontalBar horizontalBar4">
                <?php }
                ?>

                <?php
                if($count >= 9 && $count < 13) {
                    require locate_template('includes/horizontalBarDiv.php');
                }
                ?>

                <?php
                if($count === 12) { ?>

                    <?php break; }
                ?>

                <?php $count++;
            }
            $INeedSections =false;
            ?>
            </div>
            <?php

        } else { ?>
            <div class="horizontalBar horizontalBar1">
                <div>
                    <div>
                        <a href="<?php the_permalink(); ?>" class="horizontalBarFirst imgBlock">
                            <?php the_post_thumbnail('thumbnail'); ?>
                            <?php if(has_tag(2124)) {
                                ?> <div class="newsOfHour"><p>Горячая тема</p></div> <?php } ?>
                        </a>
                        <div class="horizontalBar__Right">
                            <a href="<?php echo home_url(); ?>">Записей в данной категории не найдено, нажав сюда вы можете вернуться на главную страницу</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>


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
            <?php
            $testBanners = [
                'one' => true
            ];
            require locate_template('includes/testBanners.php');
            ?>
        </div>

        <div class=" foxyTwo">
            <?php
            $testBanners = [
                'two' => true
            ];
            require locate_template('includes/testBanners.php');
            ?>
        </div>

        <div class="foxyThree">
            <?php
            $testBanners = [
                'three' => true
            ];
            require locate_template('includes/testBanners.php');
            ?>
        </div>

        <div class="foxyFour">
            <?php
            $testBanners = [
                'four' => true
            ];
            require locate_template('includes/testBanners.php');
            ?>
        </div>

        <div class="foxyFive">
            <?php
            $testBanners = [
                'five' => true
            ];
            require locate_template('includes/testBanners.php');
            ?>
        </div>

        <div class="foxyFullOne">
            <?php
            $testBanners = [
                'b1' => true
            ];
            require locate_template('includes/testBanners.php');
            ?>
        </div>

        <div class="foxyFullTwo">
            <?php
            $testBanners = [
                'b2' => true
            ];
            require locate_template('includes/testBanners.php');
            ?>
        </div>

        <?php
        $testBanners = [
            'c' => true
        ];
        require locate_template('includes/testBanners.php');
        ?>

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

        <?php

        if ( $queryTest->max_num_pages > 1 ) { ?>

            <script>
                let offset = 13;
                var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                var true_posts = '<?php echo serialize($queryTest->query_vars); ?>';
                var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                var max_pages = '<?php echo $queryTest->max_num_pages; ?>';
            </script>

            <?php	$loadMoreID = 'rubricLoad';
            require locate_template('includes/loadmore.php');
        } ?>


    </div>
</div>


<?php get_footer(); ?>
