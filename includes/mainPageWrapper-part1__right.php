<div class="mainPageWrapper-part1__right">
	<a href="<?php echo home_url(); ?>/sections/novosti" class="h2Title">Новости</a>
	
	<div>
		<div id="scroll">
   
			<?php
				while ( $query->have_posts() ) {
				$query->the_post();
			?>
   
			<div class="mainPageWrapper-part1__rightBlc">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
    
				<?php
					$categoryReqOne = true;
          require locate_template('includes/dateAndViews.php');
					$categoryReqOne = false;
					
          ?>

			</div>
      
      <?php } ?>
      
		</div>
		
		<div class="mainPageWrapper-part1__rightArrowDown" onclick="extend()"></div>
	</div>

</div>