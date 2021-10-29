<div class="grade">
	<p>Понравилась статья?</p>
	
	<div class="socialMedia">
        <?php if(function_exists('thumbs_rating_getlink')) {
            $post_ID = get_the_ID();
            echo thumbs_rating_getlink($post_ID);
        } ?>
	</div>
</div>