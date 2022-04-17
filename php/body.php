<header id="header" class="header">
<a href="/<?php echo query_string() ?>" class="logo"><img class="banner" src="/assets/banner.png" alt="Touhou World Cup banner"></a>
<input class="menu-btn" type="radio" name="nav" id="menu-btn" unchecked>
<label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
<input class="lang-btn" type="radio" name="nav" id="lang-btn" unchecked>
<label class="lang-icon" for="lang-btn"><img src="assets/icons/lang.png" alt="<?php echo _('Language') ?>" class="lang-icon" width=32 height=32></img></label>
<ul id="main_list" class="menu">
    <li><a class="subpage" href="rules<?php echo query_string() ?>"><?php echo _('Rules') ?></a></li>
    <li><a class="subpage" href="schedule<?php echo query_string() ?>"><?php echo _('Schedule') ?></a></li>
    <li><a class="subpage" href="twcscore<?php echo query_string() ?>"><?php echo _('TWCScore') ?></a></li>
    <li><a class="subpage" href="credits<?php echo query_string() ?>"><?php echo _('Credits') ?></a></li>
</ul>
<ul id="lang_list" class="menu">
    <li class="subpage flag_container <?php echo $lang == 'en_GB' ? 'selected' : '' ?>"><a id="en_GB" class="language" href="?hl=en-gb">
        <span class="flag"><img class="flag_img" src="/assets/icons/uk.png" alt="<?php echo _('Flag of the United Kingdom') ?>"> English (UK)</span>
    </a></li>
    <li class="subpage flag_container <?php echo $lang == 'en_US' ? 'selected' : '' ?>"><a id="en_US" class="language" href="?hl=en-us">
        <span class="flag"><img class="flag_img" src="/assets/icons/us.png" alt="<?php echo _('Flag of the United States') ?>"> English (US)</span>
    </a></li>
    <li class="subpage flag_container <?php echo $lang == 'ja_JP' ? 'selected' : '' ?>"><a id="ja_JP" class="language" href="?hl=jp">
        <span class="flag"><img class="flag_img" src="/assets/icons/japan.png" alt="<?php echo _('Flag of Japan') ?>"> 日本語</span>
    </a></li>
    <li class="subpage flag_container <?php echo $lang == 'zh_CN' ? 'selected' : '' ?>"><a id="zh_CN" class="language" href="?hl=zh">
        <span class="flag"><img class="flag_img" src="/assets/icons/china.png" alt="<?php echo _('Flag of the P.R.C.') ?>"> 简体中文</span>
    </a></li>
    <li class="subpage flag_container <?php echo $lang == 'ru_RU' ? 'selected' : '' ?>"><a id="ru_RU" class="language" href="?hl=ru">
        <span class="flag"><img class="flag_img" src="/assets/icons/russia.png" alt="<?php echo _('Flag of Russia') ?>"> Русский</span>
    </a></li>
    <li class="subpage flag_container <?php echo $lang == 'de_DE' ? 'selected' : '' ?>"><a id="de_DE" class="language" href="?hl=de">
        <span class="flag"><img class="flag_img" src="/assets/icons/germany.png" alt="<?php echo _('Flag of Germany') ?>"> Deutsch</span>
    </a></li>
    <li class="subpage flag_container <?php echo $lang == 'es_ES' ? 'selected' : '' ?>"><a id="es_ES" class="language" href="?hl=es">
        <span class="flag"><img class="flag_img" src="/assets/icons/spain.png" alt="<?php echo _('Flag of Spain') ?>"> Español</span>
    </a></li>
</ul>
<div class="languages dropdown">
    <a class="dropdown_button" href="#"><img id="language_link" src="/assets/icons/lang_big.png" alt="Language"></a>
    <div class="dropdown_content">
        <p class="flag_container <?php echo $lang == 'en_GB' ? 'selected' : '' ?>"><a id="en_GB" class="language" href="?hl=en-gb">
            <span class="flag"><img class="flag_img" src="/assets/icons/uk.png" alt="<?php echo _('Flag of the United Kingdom') ?>"> English (UK)</span>
        </a></p>
        <p class="flag_container <?php echo $lang == 'en_US' ? 'selected' : '' ?>"><a id="en_US" class="language" href="?hl=en-us">
            <span class="flag"><img class="flag_img" src="/assets/icons/us.png" alt="<?php echo _('Flag of the United States') ?>"> English (US)</span>
        </a></p>
        <p class="flag_container <?php echo $lang == 'ja_JP' ? 'selected' : '' ?>"><a id="ja_JP" class="language" href="?hl=jp">
            <span class="flag"><img class="flag_img" src="/assets/icons/japan.png" alt="<?php echo _('Flag of Japan') ?>"> 日本語</span>
        </a></p>
        <p class="flag_container <?php echo $lang == 'zh_CN' ? 'selected' : '' ?>"><a id="zh_CN" class="language" href="?hl=zh">
            <span class="flag"><img class="flag_img" src="/assets/icons/china.png" alt="<?php echo _('Flag of the P.R.C.') ?>"> 简体中文</span>
        </a></p>
        <p class="flag_container <?php echo $lang == 'ru_RU' ? 'selected' : '' ?>"><a id="ru_RU" class="language" href="?hl=ru">
            <span class="flag"><img class="flag_img" src="/assets/icons/russia.png" alt="<?php echo _('Flag of Russia') ?>"> Русский</span>
        </a></p>
        <p class="flag_container <?php echo $lang == 'de_DE' ? 'selected' : '' ?>"><a id="de_DE" class="language" href="?hl=de">
            <span class="flag"><img class="flag_img" src="/assets/icons/germany.png" alt="<?php echo _('Flag of Germany') ?>"> Deutsch</span>
        </a></p>
        <p class="flag_container <?php echo $lang == 'es_ES' ? 'selected' : '' ?>"><a id="es_ES" class="language" href="?hl=es">
            <span class="flag"><img class="flag_img" src="/assets/icons/spain.png" alt="<?php echo _('Flag of Spain') ?>"> Español</span>
        </a></p>
    </div>
</div>
</header>
<div class="moverdowner"></div>
