<?php
$cat_name = single_term_title('', 0);
$cat_id = get_cat_ID($cat_name);
$cat_link = get_category_link($cat_id);
?>

<div class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">
	<div>
		<span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<a href="<?php echo home_url(); ?>" itemprop="item">
				<span itemprop="name">Главная</span>
				<meta itemprop="position" content="0">
			</a>
		</span>
		<span>/</span>
		
		<?php if (is_search()) { ?>
		<span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<span  itemprop="item">
					<span itemprop="name">
						Результат поиска по запросу "<?php echo get_search_query();?>"
					</span>
					<meta itemprop="position" content="1">
				</span>
			</span>
		
		<?php	} ?>
		
		<?php if(is_singular()) {
			$categoryPost = get_the_terms($post->ID, 'category');
				if($categoryPost[0]) {
			?>
			<meta property="article:section" content="<?php echo $categoryPost[0]-> name; ?>">
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="<?php echo get_category_link($categoryPost[0] -> term_id); ?>"  itemprop="item">
                    <span itemprop="name">
                        <?php echo $categoryPost[0] -> name; ?>
                    </span>
                    <meta itemprop="position" content="1">
                </a>
            </span>

		<span>/</span>

		<?php } ?>

		<span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<a href="<?php the_permalink(); ?>" itemprop="item">
				<span itemprop="name">
					<?php the_title(); ?>
				</span>
				<meta itemprop="position" content="2">
			</a>
		</span>
		<?php } ?>
		
		<?php if(is_archive()) { ?>
		<span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<span  itemprop="item">
				<span itemprop="name">
				<?php echo $cat_name; ?>
				</span>
				<meta itemprop="position" content="1">
			</span>
		</span>
		<?php } ?>
		
		<?php if(is_404()) { ?>
			<span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<span itemprop="item">
					<span itemprop="name">
						404
					</span>
					<meta itemprop="position" content="1">
				</span>
			</span>
		<?php } ?>
	</div>
</div>

