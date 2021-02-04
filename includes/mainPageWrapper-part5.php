<div class="mainPageWrapper-part5">
	
	<?php get_template_part('includes/mainPageWrapper-part5__left'); ?>
	
	<?php if(is_404()) { ?>
		<?php get_template_part('includes/foxyC'); ?>
	<?php } ?>
	
	<?php if(!is_404()) { ?>
		<?php get_template_part('includes/foxyE'); ?>
	<?php } ?>
	
	<?php
		$readersChoiseLimit = 3;
		$readersChoiseName = 'Выбор читателей';
		require locate_template('includes/readersChoise.php');
	?>
	
	<div class="mainPageWrapper-part5__mobile">
		<a href="<?php echo home_url(); ?>/arhiv">Архив</a>
	</div>
</div>