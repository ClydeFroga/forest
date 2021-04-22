<?php
/*
Template name: Шаблон-главная
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
    footer, header, .mainPageWrapper-part6, .bigSubForm, .listedUp , .mainPageWrapper-part1 > *:not(.foxy, .foxyLong) {
        filter: grayscale(100%);
    }
    .mainPageWrapper-part2 > div > *:not(.foxy, .foxyFull) {
        filter: grayscale(100%);
    }
    .mainPageWrapper-part3 > *:not(.foxy) {
        filter: grayscale(100%);
    }
    .mainPageWrapper-part4 > *:not(.foxyFull) {
        filter: grayscale(100%);
    }
    .mainPageWrapper-part5 > *:not(.foxy) {
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

    <div class="container">
        <div class=" mainPageWrapper-part1">

            <?php
            global $post;
            $query = new WP_Query( [
                'posts_per_page' => 6,
                'offset' => 0,
                'ignore_sticky_posts'=>true,
                'tax_query' => [
                    [
                        "operator" => 'NOT IN',
                        'taxonomy' => 'sections',
                        'field' => 'id',
                        'terms' => [ '2005' ]
                    ],
                ]
            ] );

            if ( $query->have_posts() ) {
                $mainNum = 0;
                ?>

                <?php while ($query->have_posts()) {
                    $query->the_post();
                    if($mainNum == 0) {
                        $main = true;
                        require locate_template('includes/mainPageWrapper-part1__mid.php');
                        $main = false;
                    } if($mainNum > 0 && $mainNum < 6) { ?>

                        <?php if($mainNum == 1) { ?>
                            <div class="horizontalBar">
                        <?php } ?>

                        <?php	require locate_template('includes/horizontalBarForMainPagePart1.php'); ?>

                        <?php if($mainNum == 5) { ?>
                            </div>
                        <?php } ?>


                    <?php }
                    $mainNum++;
                } ?>

            <?php }

            wp_reset_postdata();
            ?>

            <?php if(!is_404()) { ?>

                <?php
                $testBanners = [
                  'one' => true
                ];
                require locate_template('includes/testBanners.php'); ?>

                <?php
                global $post;
                $query = new WP_Query( [
                    'posts_per_page' => 8,
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
                    require locate_template('includes/mainPageWrapper-part1__right.php');
                }

                wp_reset_postdata();
                ?>

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
                $testBanners = [
                    'c' => true
                ];
                require locate_template('includes/testBanners.php');

                ?>

                <?php get_template_part('includes/rubricatorTitle'); ?>

                <?php get_template_part('includes/rubricator'); ?>

            <?php } ?>
        </div>

        <div class="mainPageWrapper-part2">
            <div>
                <?php get_template_part('includes/greenBlock'); ?>

                <?php
                $testBanners = [
                    'two' => true
                ];
                require locate_template('includes/testBanners.php');
                ?>

                <?php
                global $post;
                $title = 'Технологии';
                $AnotherNewsId= 2010;
                $AnotherNewsCat = 'sections';
                $query = new WP_Query( [
                    'posts_per_page' => 4,
                    'offset' => 0,
                    'tax_query' => [
                        [
                            'taxonomy' => 'sections',
                            'field' => 'id',
                            'terms' => [ '2010' ] // технологии
                        ],
                    ]
                ] );
                if ( $query->have_posts() ) {
                    require locate_template('includes/anotherNews.php');
                }

                wp_reset_postdata();
                ?>

                <?php get_template_part('includes/socialBlock'); ?>

                <?php
                $testBanners = [
                    'b1' => true
                ];
                require locate_template('includes/testBanners.php');
                ?>
            </div>
        </div>

        <div class="mainPageWrapper-part3">

            <?php
            $testBanners = [
                'three' => true
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

        <div class="mainPageWrapper-part4">

            <?php get_template_part('includes/calendarOfEvents'); ?>

            <?php
            global $post;
            $query = new WP_Query( [
                'posts_per_page' => 4,
                'offset' => 0,
                'tax_query' => [
                    [
                        'taxonomy' => 'sections',
                        'field' => 'id',
                        'terms' => [ '2010' ] // технологии
                    ],
                ]
            ] );
            if ( $query->have_posts() ) {
                require locate_template('includes/sliderMini.php');
            }

            wp_reset_postdata();
            ?>

            <?php
            $testBanners = [
                'b2' => true
            ];
            require locate_template('includes/testBanners.php');
            get_template_part('includes/quiz');
            ?>


        </div>

        <div class="mainPageWrapper-part5">

            <?php get_template_part('includes/mainPageWrapper-part5__left'); ?>

            <?php
            $testBanners = [
                'four' => true
            ];
            require locate_template('includes/testBanners.php');

            ?>


            <?php
            $readersChoiseLimit = 3;
            $readersChoiseName = 'Выбор читателей';
            require locate_template('includes/readersChoise.php');
            ?>

            <div class="mainPageWrapper-part5__mobile">
                <a href="<?php echo home_url(); ?>/arhiv">Архив</a>
            </div>
        </div>

        <div class="mainPageWrapper-part3 mainPageWrapper-part3Bottom">
            <?php
            $testBanners = [
                'five' => true
            ];
            require locate_template('includes/testBanners.php');
            ?>

            <div class="mainPageWrapper-part3__center">
                <a href="<?php echo get_category_link(1981) ?>" class="h2Title">Лесное хозяйство</a>

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
                            'terms' => [ '1981' ] // лесное хозяйство
                        ],
                        [
                            'operator' => 'NOT IN',
                            'taxonomy' => 'sections',
                            'field' => 'id',
                            'terms' => [ '2005' ] // новости
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
                <a href="<?php echo get_category_link(93); ?>" class="h2Title">Биоэнергетика</a>

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
                            'terms' => [ '93' ] // Биоэнергетика
                        ],
                        [
                            'operator' => 'NOT IN',
                            'taxonomy' => 'sections',
                            'field' => 'id',
                            'terms' => [ '2005' ] // новости
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
    </div>

<?php get_template_part('includes/mainPageWrapper-part6'); ?>

<?php get_template_part('includes/bigSubForm'); ?>

<?php //get_template_part('includes/partners-slider'); ?>

    <div class="container mainPageWrapper-part9">
        <?php get_template_part('includes/rubricatorTitle'); ?>

        <?php get_template_part('includes/rubricator'); ?>
    </div>

<?php get_footer(); ?>