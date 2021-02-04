<?php if(strlen($content) > 3000 || has_term(2005, 'sections')) { ?>
	<script src="https://cdn.jsdelivr.net/lodash/4.13.1/lodash.min.js"></script>

	<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/foxySticky.min.js?version=1"></script>
	<?php if(has_term(2005, 'sections')) { ?>
		<script>
			foxyStickyWithNews();
		</script>
	<?php } else if(strlen($content) > 3000) { ?>
		<script>
			foxyStickyWithoutNews();
		</script>
	<?php }?>
<?php } ?>
