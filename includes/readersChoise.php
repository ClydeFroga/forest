<div class="readersChoise">
	<h2 class="h2Title"><?php echo $readersChoiseName; ?></h2>
	
	<div>

		<div class="horizontalBar">
			<?php
				if ( function_exists('wpp_get_mostpopular') ) {
					
					wpp_get_mostpopular(array(
						'limit' => $readersChoiseLimit,
						'range' => 'last7days',
						'stats_date' => 1,
						'stats_date_format' => 'j.m.Y',
						'wpp_start' => '',
						'wpp_end' => '',
						'post_html' => '
					<div>
						<a href="{url}">
							<span>
									{text_title}
							</span>
						</a>
						<div class="readersChoiseBotLine">
							<div class="dateAndViews">
								<span class="date">{date}</span>
							</div>
						</div>
					</div>
					'
					));
				}
			?>
		</div>
	</div>
</div>
<!--<span class="views">{views}</span>-->