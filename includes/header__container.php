<div class="header__container">
    <a target="_blank" href="<?php echo $link; ?>" onclick="ym(53069830,'reachGoal','main'); return true;" class="header__top"  data-src-set="<?php echo $image . ', ' . $image2; ?>">
        <div class="container">
            <div class="header__topText" style="bottom: <?php echo $bottom; ?>">
                <span  class="headerHiddenLink <?php if ($logo === '' || $logo == NULL) echo 'default';?>" >
                    <?php if ($logo !== '' || !$logo == NULL) { ?>
                        <img src="<?php echo $logo; ?>">
                    <?php } ?>
                    <?php echo $title2; ?>
                </span>
            </div>
        </div>
    </a>

    <div class="header__containerWrapper">
        <div class="container">
            <div class="header__topButtons">
                <span onclick="ym(53069830,'reachGoal','more'); return true;">Узнать больше</span>
                <span onclick="ym(53069830,'reachGoal','hidden'); return true;">Свернуть</span>
            </div>
            <div class="header__topButtonsHidden">
                <span>Развернуть</span>
            </div>
        </div>
    </div>

    <div class="header__hidden">
        <div class="container">
            <div>
                <p>
                    <?php echo $text; ?>
                </p>

            </div>

            <div class="specWrap">
                <a onclick="ym(53069830,'reachGoal','details'); return true;" target="_blank" class="header__hiddenButton" href="<?php echo $link; ?>">
                    Подробнее
                </a>
                <span class="collapseAdditionalButton" >
                  Свернуть
                </span>
            </div>

        </div>
    </div>

</div>

<script src="<?php bloginfo('template_url')?>/js/localStorage.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/newHeader.min.js?version=5.12"></script>