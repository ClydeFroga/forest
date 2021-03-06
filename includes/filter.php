<div class="filter">

    <span class="h2Title">фильтр по рубрикам и разделам</span>

    <div class="filter__hide">
        <div class="filter__all">
            <?php
            if(is_tax('sections')) {
                $terms = get_terms( array(
                    'taxonomy'      => array( 'category' ),
                    'orderby'       => 'id',
                    'order'         => 'ASC',
                    'exclude'       => array(2058),
                ) );
            }
            else {
                $terms = get_terms( array(
                    'taxonomy'      => array( 'sections' ),
                    'orderby'       => 'id',
                    'order'         => 'ASC',
                ) );
            }

            foreach( $terms as $term ){?>
            <span class="added" id="<?php print_r($term -> slug); ?>" data="<?php print_r($term -> name); ?>">
                <?php print_r($term -> name); ?>
            </span>
            <?php }

            ?>
        </div>

        <div class="filter__hiddenBlc">
            <span class="filter__display button buttonGreen">Применить</span>
            <span id="full" class="filter__cancel">снять выделение</span>
        </div>

    </div>

    <script>
        var filterAjaxUrl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
        <?php if (is_tax('sections')) { ?>
            let isCategory = true;
            var theme = '<?php echo get_term_by('name', single_term_title('', 0), 'sections') -> slug; ?>';
        <?php } else { ?>
            let isCategory = false;
            var theme = '<?php echo get_term_by('name', single_term_title('', 0), 'category') -> slug; ?>';
        <?php } ?>
    </script>

    <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/filter.min.js?version=5"></script>
</div>

