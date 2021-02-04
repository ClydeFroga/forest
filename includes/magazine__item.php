<div class="magazine__item">
	<a href="<?php echo get_term_link((int)$mag->term_id);?>" class="magazine__anchor">
		<img src="<?php echo get_field('ssylka_na_oblozhku', $mag);?>" alt="<?php echo $mag->name; ?>" class="magazine__img">
		<p class="magazine__title"><?php echo $mag->name; ?></p>
	</a>
</div>
