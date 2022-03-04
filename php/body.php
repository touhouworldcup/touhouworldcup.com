<header class="header">
<a href="/<?php echo query_string() ?>" class="logo">Touhou World Cup</a>
<input class="menu-btn" type="checkbox" id="menu-btn">
<label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
<ul class="menu">
    <li><a class="subpage" href="rules<?php echo query_string() ?>"><?php echo _('Rules') ?></a></li>
    <li><a class="subpage" href="schedule<?php echo query_string() ?>"><?php echo _('Schedule') ?></a></li>
    <li><a class="subpage" href="iscore<?php echo query_string() ?>"><?php echo _('ISCORE') ?></a></li>
    <li><a class="subpage" href="credits<?php echo query_string() ?>"><?php echo _('Credits') ?></a></li>
    <?php
        require_once 'php/mobile_detect.php';
        $detect_device = new Mobile_Detect;
        $is_mobile = $detect_device -> isMobile();
        if ($is_mobile) {
            echo '<li><a class="subpage" href="language' . query_string() . '"><img src="/assets/lang.png" alt="Language"></a></li>';
        }
    ?>
</ul>
<ul class="languages">
    <li<?php echo $lang == 'en_GB' ? ' class="selected"' : '' ?>><a id="en_GB" class="language" href="?hl=en-gb">
        <img src="/assets/uk.png" alt="<?php echo _('Flag of the United Kingdom') ?>" title="English (UK)">
    </a></li>
    <li<?php echo $lang == 'en_US' ? ' class="selected"' : '' ?>><a id="en_US" class="language" href="?hl=en-us">
        <img src="/assets/us.png" alt="<?php echo _('Flag of the United States') ?>" title="English (US)">
    </a></li>
    <li<?php echo $lang == 'ja_JP' ? ' class="selected"' : '' ?>><a id="ja_JP" class="language" href="?hl=jp">
        <img src="/assets/japan.png" alt="<?php echo _('Flag of Japan') ?>" title="日本語">
    </a></li>
    <li<?php echo $lang == 'zh_CN' ? ' class="selected"' : '' ?>><a id="zh_CN" class="language" href="?hl=zh">
        <img src="/assets/china.png" alt="<?php echo _('Flag of the P.R.C.') ?>" title="简体中文">
    </a></li>
    <li<?php echo $lang == 'ru_RU' ? ' class="selected"' : '' ?>><a id="ru_RU" class="language" href="?hl=ru">
        <img src="/assets/russia.png" alt="<?php echo _('Flag of Russia') ?>" title="Русский">
    </a></li>
    <li<?php echo $lang == 'de_DE' ? ' class="selected"' : '' ?>><a id="de_DE" class="language" href="?hl=de">
        <img src="/assets/germany.png" alt="<?php echo _('Flag of Germany') ?>" title="Deutsch">
    </a></li>
</ul>
</header>
<div class="moverdowner"></div>
