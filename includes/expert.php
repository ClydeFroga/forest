<?php
$experts = get_the_terms( $ID, 'expert' );
if($experts !== false) {
    $img_url = get_field('photoexpert', 'expert_' . $experts[0] -> term_id);
    $expert_name = $experts[0] -> name;
    $expert_description = $experts[0] -> description;
    ?>

    <div class="expert">
        <span class="expert__title">Спикер</span>
        <div class="expert__blc">
            <img src="<?php echo $img_url; ?>">

            <div>
                <span><?php echo $expert_name; ?></span>
                <span><?php echo $expert_description; ?></span>
            </div>
        </div>

    </div>

<?php } ?>
