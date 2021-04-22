<div class="article-loaded">
	<script>
		urls.push('<?php echo get_the_permalink() ?>')
	</script>

	<div class="firstContent verticalBlock verticalBlockMain">
        <div class="verticalBlock__TextBlc">
            <h1 class="titleScroll">
                <?php the_title(); ?>
            </h1>
        </div>

		<div class="verticalBlock__ImgBlc">
			<div class="imgBlock imgBlockFull">
				<?php the_post_thumbnail('full'); ?>
			</div>
			<?php if(has_tag(2123)) {
				?> <span>Новость часа</span> <?php  } ?>
		</div>
		
		<?php
			$tagsReq = true;
			require locate_template('includes/dateAndViews.php');
			$tagsReq = false;
		?>
	
	</div>
	
	<div class="single__mainContent">
		<?php the_content(); ?>
	</div>

    <?php
    $errors = false;
    $sharing = true;
    require locate_template('includes/sharingAndErrors.php');
    $sharing = false;

    require locate_template( 'includes/adfoxC_banners.php');

//        $testBanners = [
//            'c' => true
//        ];
//        require locate_template('includes/testBanners.php');


	?>


</div>
