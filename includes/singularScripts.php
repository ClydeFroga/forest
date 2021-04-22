<?php if(strlen($content) > 3000 || has_term(2005, 'sections')) { ?>

	<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/foxySticky.min.js?version=3"></script>
	<?php if(has_term(2005, 'sections')) { ?>
		<script>
			foxySticky('.foxyFullOne');
		</script>
	<?php } else if(strlen($content) > 3000 ) { ?>
		<script>
			foxySticky('.foxyLong');
		</script>
	<?php }?>
<?php } ?>
