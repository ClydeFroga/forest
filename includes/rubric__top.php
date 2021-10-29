<div class="rubric__top">

    <?php get_template_part('includes/breadcrumbs'); ?>

    <?php if (!is_search() && !is_tax('issue')) { ?>
<!--        <div class="rubric__topImg">-->
<!--            --><?php
//            echo '<img src="'. $image_url .'" alt="" />';
//            ?>
<!--        </div>-->
        <div class="rubric__topLine">
            <h1 class="rubricTitle h2Title">
                <?php echo single_term_title('', 0); ?>
            </h1>
        </div>
        <span class="rubric__topDescription rubricDesc">
            <?php echo term_description(); ?>
        </span>
    <?php } ?>
</div>