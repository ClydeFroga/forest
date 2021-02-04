<div class="mainPageWrapper-part5__left">
	<div class="mainPageWrapper-part5__leftInside">
		<div class="mainPageWrapper-part5__leftInsideTop">
			<span>
					Журнал "Лесной комплекс"
			</span>
			<span class="part5__leftInsideTopBorder"></span>
			<span class="part5__leftInsideTopAnother">
				Другие номера
			</span>
			<a class="part5__leftInsideTopLast" href="<?php echo home_url(); ?>/arhiv">
				Архив
			</a>
		</div>
<?php

        $lastMagazine = get_terms(array(
            'taxonomy' => 'issue',
            'number' => '2',
            'order_by' => 'term_order',
            'order' => 'DESC',
        ));

        $term = $lastMagazine[1];
        $term1 = $lastMagazine[0];
        $term2 = $term;
        $reliz_jrnl1 = get_field('reliz_jrnl', $term);
        $my_date = date('Ymd');
        if($reliz_jrnl1 <= $my_date){
            $term = $term1;
        }else{
            $term = $term2;
        };
		$magazine_link = get_term_link($term -> term_id, 'issue');
		?>
		<div class="mainPageWrapper-part5__leftInsideBot">
			<div class="mainPageWrapper-part5__leftInsideBotMag">
				<div>
					<img src="<?php echo get_field('ssylka_na_oblozhku', $term);?>">
				</div>
				<div>
					<a class="button buttonGreen" href="<?php echo $magazine_link?>" target="_blank">
						Читать онлайн
					</a>
					<a onclick="openModal()" class="openModal">
						Подписаться на журнал
					</a>
				</div>
			</div>
			
			<div class="mainPageWrapper-part5__leftInsideBotHoriz">
				<?php
					$magazins = get_terms(array(
						'taxonomy' => 'issue',
						'number' => '4',
						'offset' => $off,
						'order' => 'DESC',
					));
					foreach( $magazins as $mag ) {
				?>
				
				<a href="<?php echo get_term_link($mag -> term_id, 'issue');?>" target="_blank">
					<img src="<?php echo get_field('ssylka_na_oblozhku', $mag);?>">
					<div>
						<div>
							<p>
								<?php echo $mag -> name; ?>
							</p>
							<div class="dateAndViews">
								<?php
								$date = get_field('reliz_jrnl', $mag);
								$formattedDate = substr($date, 6, 2) . '.' . substr($date, 4, 2) . '.' .  substr($date, 0, 4);
								?>
								<span class="date"><?php echo $formattedDate; ?></span>
							</div>
						</div>
						<span>
								Читать номер
						</span>
					</div>
				</a>
				
				<?php } ?>
			</div>
		</div>
	</div>
</div>