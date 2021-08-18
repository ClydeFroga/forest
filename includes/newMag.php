<?php
	$lastMagazine = get_terms(array(
        'taxonomy' => 'issue',
        'number' => '2',
        'orderby' => 'slug',
        'order' => 'DESC',
    ));
$lastMagazine = array_values($lastMagazine);
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
//	$term = get_term_by('id', 2059, 'issue');
	$magazine_link = get_term_link($term -> term_id, 'issue');
?>



<div class="newMag">
	<div class="newMagInside">
		<div class="newMagInsideTop">
			<span>
					Журнал "Лесной комплекс"
			</span>
		</div>
		<div class="newMagInsideBot">
			<div class="newMagInsideBotMag">
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
		</div>
	</div>
</div>