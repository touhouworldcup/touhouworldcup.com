<?php
    $title = _('Language');
    $description = 'The official Touhou World Cup website';
    $keywords = 'touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2022 competition, scoring, survival, tournament';
    include_once 'php/locale.php';
    include_once 'php/head.php';
?>

<body>
	<?php include_once 'php/body.php' ?>
	<main>
    <ul class="languages mobile">
        <li><a id="en_GB" class="language" href="/?hl=en-gb">
            <img src="/assets/uk.png" alt="<?php echo _('Flag of the United Kingdom') ?>" title="English (UK)"> English (UK)
        </a></li>
        <li><a id="en_US" class="language" href="/?hl=en-us">
            <img src="/assets/us.png" alt="<?php echo _('Flag of the United States') ?>" title="English (US)"> English (US)
        </a></li>
        <li><a id="ja_JP" class="language" href="/?hl=jp">
            <img src="/assets/japan.png" alt="<?php echo _('Flag of Japan') ?>" title="日本語"> 日本語
        </a></li>
        <li><a id="zh_CN" class="language" href="/?hl=zh">
            <img src="/assets/china.png" alt="<?php echo _('Flag of the P.R.C.') ?>" title="简体中文"> 简体中文
        </a></li>
        <li><a id="ru_RU" class="language" href="/?hl=ru">
            <img src="/assets/russia.png" alt="<?php echo _('Flag of Russia') ?>" title="Русский"> Русский
        </a></li>
        <li><a id="de_DE" class="language" href="/?hl=de">
            <img src="/assets/germany.png" alt="<?php echo _('Flag of Germany') ?>" title="Deutsch"> Deutsch
        </a></li>
    </ul>
	</main>
</body>
</html>
