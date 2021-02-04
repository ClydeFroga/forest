<div class="sharingAndErrors">
	<div>
        <?php if($sharing) { ?>

		<div class="sharing">
            <span class="sharing__me">
                Присылайте свои новости на <a href="mailto:news_forest@pgmedia.ru">news_forest@pgmedia.ru</a>
            </span>
			<span>Поделиться статьей</span>
			<div class="socialMedia">
				<a href="https://wa.me/?text=<?php the_title(); the_permalink();?>" target="_blank">
					<svg class="" role="img" >
						<use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-wapp"/>
					</svg>
				</a>
				<a href="http://vk.com/share.php?url=<?php the_permalink(); ?>&title=<?php the_title();?>&image=<?php $thumb_id = get_post_thumbnail_id(); $thumb_cover_url = wp_get_attachment_image_src($thumb_id, 'og-image', true); echo $thumb_cover_url[0];?>&noparse=true" target="_blank">
					<svg class="" role="img" >
						<use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-vk"/>
					</svg>
				</a>
				<a href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" target="_blank">
					<svg class="" role="img" >
						<use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-twitter"/>
					</svg>
				</a>
				<a id="fb" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&display=popup"  target="_blank">
					<svg class="" role="img" >
						<use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-fb"/>
					</svg>
				</a>
			</div>
		</div>

        <?php } ?>

        <?php if($errors) { ?>

            <div class="findErrors">
                <div class="socialMedia">
                    <a href="#">
                        <svg class="" role="img" >
                            <use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-help"/>
                        </svg>
                    </a>
                </div>
                <p>Нашли ошибку?</p>
                <p>
                    Выделите ее мышкой и нажмите Ctrl + Enter
                </p>
            </div>

        <?php } ?>

	</div>

</div>