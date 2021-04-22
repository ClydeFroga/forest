<?php
	$ItsMagPage = get_queried_object();
	$linkFl = get_field('floowie_link', $ItsMagPage);
	$linkPdf = get_field('pdf_magazine', $ItsMagPage);
	$linkCover = get_field('ssylka_na_oblozhku', $ItsMagPage);
	$mag_name = $ItsMagPage->name;
	?>
	<div class="horizontalBar horizontalBarIssue">
	<div>
		<div>
			<div class="horizontalBarFirst imgBlock">
				<img src="<?php echo $linkCover; ?>">
			</div>
			<div class="horizontalBar__Right">
				<h2 class="h2Title">
					<?php echo $mag_name; ?>
				</h2>
				<?php if($ItsMagPage -> description) { ?>
					<p>
						<?php echo kama_excerpt( array('maxchar'=>650, 'text'=> $ItsMagPage -> description) ); ?>
					</p>
				<?php } ?>
				<?php if($linkFl) { ?>
					<a href="<?php echo $linkFl; ?>">Листать журнал</a>
				<?php } ?>
				
				<?php if($linkPdf) { ?>
					<a href="<?php echo $linkPdf; ?>">Смотреть pdf</a>
				<?php } ?>
				<a onclick="openModal()">Подписаться</a>
			</div>
		</div>
	</div>
</div>