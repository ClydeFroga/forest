<?php if(have_posts()) {
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
