<div class="mainPageWrapper-part1__mid">
 
	<a href="<?php the_permalink(); ?>" class="mainPageWrapper-part1__center" style="background: no-repeat linear-gradient(0deg, #003526 13.95%, rgba(255, 255, 255, 0) 100%),url('<?php the_post_thumbnail_url() ?>') 50%, no-repeat;">
		<div>
			<p class="mainPageWrapper-part1__centerTopText">
				<?php the_title(); ?>
			</p>
			<p class="mainPageWrapper-part1__centerMiddleText">
				<?php echo kama_excerpt( array('maxchar'=>100, 'text'=> get_the_excerpt()) ); ?>
			</p>
			
			<?php require locate_template('includes/dateAndViews.php'); ?>
			
		</div>
	</a>
	
</div>
