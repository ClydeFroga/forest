<div class="dateAndViews">
	<?php if($tagsReq) { ?>
		<div>
	<?php } ?>
		<span class="date">
				<?php echo get_the_date(); ?>
		</span>
	
<!--		<div  class="views">-->
<!--			--><?php //echo do_shortcode('[post-views]') ?>
<!--		</div>-->
	
	<?php if($tagsReq) { ?>
		</div>
	<?php } ?>
	
  <?php if($main) { ?>
	
		<span class="mainPageWrapper-part1__centerCategory categoryBlock">
		  <?php
				$specialTag = get_the_terms(get_the_ID(), 'sections')[0];
				echo $specialTag -> name ?>
    </span>

 <?php } ?>
	
	<?php if($categoryReqOne) {
    $cat = get_the_category()[0]; ?>
    
    <a href="<?php echo get_category_link($cat -> term_id); ?>">
			<?php echo $cat -> name; ?>
    </a>
	
	<?php } ?>
	
	<?php if($tagsReq) {
		require locate_template('includes/tags.php');
 } ?>
	
	
</div>