<div class="tags">
	<?php
    $arrTags = get_the_tags();
		if($few) {
		    if($arrTags) {
                $posttags = array_slice($arrTags, 0, 3);
            }
		} else if(is_tag() || is_tax()) {
			$posttags = get_the_terms(get_the_ID(), 'category');
		} else {
			$posttags = $arrTags;
		}
		
		 if ($ItsNewsPage) {
			$categories = get_the_terms(get_the_ID(), 'category');
			if($categories) {
				foreach ($categories as $cat) { ?>
					<a href="<?php echo get_category_link($cat -> term_id); ?>"><?php echo $cat -> name; ?></a>
				<?php	}
			}
		}else if($INeedSections && is_category() && !$loadNew) {
			 $categories = get_the_terms(get_the_ID(), 'sections');
			 if($categories) {
				 foreach ($categories as $cat) { ?>
					 <a href="<?php echo get_category_link($cat -> term_id); ?>"><?php echo $cat -> name; ?></a>
				 <?php	}
			 }
		 } else if($INeedCategories) {
			$categories = get_the_terms(get_the_ID(), 'category');
			if($categories) {
				foreach ($categories as $cat) { ?>
					<a href="<?php echo get_category_link($cat -> term_id); ?>"><?php echo $cat -> name; ?></a>
				<?php	}
			}
		} else if( $posttags) {
			foreach( $posttags as $tag ) { ?>
				<?php if(is_tag() || is_tax()) { ?>
				<a href="<?php echo get_category_link($tag -> term_id); ?>"><?php echo $tag -> name; ?></a>
				<?php } else { ?>
				    <a href="<?php echo home_url();?>/tag/<?php echo $tag -> slug;?>"><?php echo $tag -> name;?></a>
				<?php } ?>
				<?php
			}
		}
		 
		 ?>
	
	
</div>
