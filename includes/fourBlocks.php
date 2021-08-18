<?php
$expertPage = is_tax('expert');

if($expertPage) {
    $expertCount = count($wp_query -> posts);
    if($expertCount < 13) {
        $queryExpert = new WP_Query( [
            'posts_per_page' => 13 - $expertCount,
            'offset' => 0,
            'ignore_sticky_posts'=>true,
            'tax_query' => [
                [
                    'taxonomy' => 'sections',
                    'field' => 'id',
                    'terms' => [ '2005' ]
                ],
            ]
        ] );
    }
}


if(have_posts()) {
    if(is_search()) {
        $few = true;
    }
    $count = 0;
    $arhive = true;
    $INeedSections =true;

    while(have_posts()){
        the_post();
        ?>

        <?php if($count === 0) {
            if(!is_tax('issue') && !$expertPage) {
                $countFirst = true;
            }
            ?>
            <div class="horizontalBar horizontalBar1">
            <?php if ($expertPage) {
                $term = get_queried_object();
                ?>

                <div>
                    <div>

                        <span class="horizontalBarFirst expertImg">
                            <img src="<?php echo get_field('photoexpert', 'expert_' . $term->term_id);?>">
                        </span>

                        <div class="horizontalBar__Right expertText">
                            <span>
                                <?php echo $term -> name; ?>
                            </span>
                            <span>
                                <?php echo $term -> description; ?>
                            </span>
                        </div>
                    </div>
                </div>

        <?php }
            } ?>

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

    if($queryExpert) { ?>
        <a href="<?php echo home_url(); ?>/sections/novosti" class="h2Title">Новости</a>
        <?php $specCount = 0;
        $over = false;

        while($queryExpert->have_posts()){
	        $queryExpert->the_post();
            if($expertCount < 5) {
                if($specCount < (4 - $expertCount)) {
                    require locate_template('includes/horizontalBarDiv.php');
                }

                if($specCount === (4 - $expertCount)) {
                    $over = true;
                    $specCount = 3;?>

                        </div>
                    <div class="horizontalBar horizontalBar2">

            <?php }
            }

            if($expertCount >= 5 && $expertCount < 7 && !$over) {
                if($specCount < (7 - $expertCount)) {
                    require locate_template('includes/horizontalBarDiv.php');
                }

                if($specCount === (7 - $expertCount)) {
                    $over = true;
                    $specCount = 5;?>

                    </div>
                    <div class="horizontalBar horizontalBar3">

                <?php }
            }

            if($expertCount >= 7 && $expertCount < 9 && !$over) {
                if($specCount < (9 - $expertCount)) {
                    require locate_template('includes/horizontalBarDiv.php');
                }

                if($specCount === (9 - $expertCount)) {
                    $over = true;
                    $specCount = 8;?>

                        </div>
                    <div class="horizontalBar horizontalBar4">

                <?php }
            }

            if($expertCount >= 9 && $expertCount < 13 && !$over) {
                if($specCount < (13 - $expertCount)) {
                    require locate_template('includes/horizontalBarDiv.php');
                }

                if($specCount === (13 - $expertCount)) {
                    $over = true;
                    $specCount = 13 - $expertCount;
                }
            }

            if($over) {

                if($specCount < 5) {
                    require locate_template('includes/horizontalBarDiv.php');
                }
                if($specCount === 4) { ?>
                        </div>
                    <div class="horizontalBar horizontalBar3">
                <?php }
                if($specCount >= 5 && $specCount < 7) {
                    require locate_template('includes/horizontalBarDiv.php');
                }
                if($specCount === 7) { ?>
                        </div>
                    <div class="horizontalBar horizontalBar4">
                <?php }
                if($specCount >= 7 && $specCount < 11) {
                    require locate_template('includes/horizontalBarDiv.php');
                }

            }

            $specCount++;
        }
    }

    $INeedSections =false;
    ?>

    </div>
    <?php

} else { ?>
    <div class="horizontalBar horizontalBar1">
        <div>
            <div>
                <a href="<?php echo home_url(); ?>" class="horizontalBarFirst imgBlock">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/empty.jpg"/>
                </a>
                <div class="horizontalBar__Right">
                    <a href="<?php echo home_url(); ?>">Записей в данной категории не найдено, нажав сюда вы можете вернуться на главную страницу</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
