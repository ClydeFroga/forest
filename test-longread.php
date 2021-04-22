<?php
/*
Template name: Шаблон-лонгрид
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
<body>

<style>
    footer, header, .listedUp, .single > *:not(.foxyOne, .foxyTwo, .foxyThree, .foxyFour, .foxyFive, .foxyFullOne, .foxyFullTwo, .article-loaded, .mainPageWrapper-part3) {
        filter: grayscale(100%);
    }
    .article-loaded > *:not(.article-loaded, .foxyLong) {
        filter: grayscale(100%);
    }
    .mainPageWrapper-part3 > *:not(.foxy) {
        filter: grayscale(100%);
    }
</style>

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

    <div class="container single">
        <?php get_template_part('includes/breadcrumbs'); ?>


            <div class="firstContent verticalBlock verticalBlockMain ">
                <div class="verticalBlock__ImgBlc">
                    <div class="imgBlock imgBlockFull">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
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

        <div class=" foxyFour">
            <?php
            $testBanners = [
                'four' => true
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

        <div class="single__mainContent article-loaded">

            <?php
            $content = get_the_content();
            the_content();
            $ID = get_the_ID();
            $terms=get_the_terms( $ID, 'issue' );
            if( is_array( $terms ) ){
                foreach( $terms as $term ){
                    echo '<div class="writer"><span class="writer__text" >Статья опубликована в журнале <a href="'. get_term_link( $term->term_id, $term->taxonomy ) .'">'. $term->name .'</a></span>
      </div>';
                }
            };

            $testBanners = [
                'c' => true
            ];
            require locate_template('includes/testBanners.php');

            ?>
        </div>

        <?php
        global $post;
            $posts_per_page = 5;
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



            <?php get_template_part('includes/grade'); ?>
            <div class="disqus">
                <?php comments_template();?>
            </div>


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

        <div class="mainPageWrapper-part3">

            <?php
            $testBanners = [
                'five' => true
            ];
            require locate_template('includes/testBanners.php');

            ?>

            <div class="mainPageWrapper-part3__center">
                <?php  ?>
                <a href="<?php echo get_category_link(7); ?>" class="h2Title">Деревообработка</a>

                <?php
                global $post;
                $dateAndViews = true;

                $query = new WP_Query( [
                    'posts_per_page' => 3,
                    'offset' => 0,
                    'tax_query' => [
                        'relation' => 'AND',
                        [
                            'taxonomy' => 'category',
                            'field' => 'id',
                            'terms' => [ '7' ] //деревообработка
                        ],
                        [
                            'operator' => 'NOT IN',
                            'taxonomy' => 'sections',
                            'field' => 'id',
                            'terms' => [ '2005' ] //новости
                        ]
                    ]
                ] );

                if ( $query->have_posts() ) {
                    require locate_template('includes/horizontalBarType2.php');
                }


                $dateAndViews = false;
                wp_reset_postdata();
                ?>

            </div>

            <div class="mainPageWrapper-part3__line"></div>

            <div class="mainPageWrapper-part3__right">
                <a href="<?php echo get_category_link(6) ?>" class="h2Title">Лесозаготовка</a>

                <?php
                global $post;
                $dateAndViews = true;

                $query = new WP_Query( [
                    'posts_per_page' => 3,
                    'offset' => 0,
                    'tax_query' => [
                        'relation' => 'AND',
                        [
                            'taxonomy' => 'category',
                            'field' => 'id',
                            'terms' => [ '6' ] //лесозаготовка
                        ],
                        [
                            'operator' => 'NOT IN',
                            'taxonomy' => 'sections',
                            'field' => 'id',
                            'terms' => [ '2005' ] //новости
                        ]
                    ]
                ] );

                if ( $query->have_posts() ) {
                    require locate_template('includes/horizontalBarType2.php');
                }


                $dateAndViews = false;
                wp_reset_postdata();
                ?>

            </div>
        </div>

        <?php require locate_template('includes/singularScripts.php'); ?>

    </div>

<?php get_footer(); ?>