<div class="calendarOfEvents">
	<a href="<?php echo home_url(); ?>/events" class="h2Title">Календарь выставок</a>
	
	<div>
		
		<?php echo do_shortcode('[events_list scope="future" limit=4]

		<a href="#_EVENTURL">
			<span class="calendarOfEvents__Text">
					#_EVENTNAME, #_LOCATIONTOWN
			</span>
			<span class="calendarOfEvents__Date">
					#_EVENTDATES
			</span>
		</a>
			[/events_list]')
		?>
		
	</div>
</div>
