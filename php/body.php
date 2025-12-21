<header id="header" class="header">
<a href="/<?php echo query_string() ?>" class="logo"><img class="banner" src="/assets/banner.png" alt="Touhou World Cup banner"></a>
<input class="menu-btn" type="radio" name="nav" id="menu-btn">
<label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
<input class="lang-btn" type="radio" name="nav" id="lang-btn">
<label class="lang-icon" for="lang-btn"><img src="assets/lang.png" alt="<?php echo _('Language') ?>" class="lang-icon" width=32 height=32></label>
<ul id="main_list" class="menu">
    <li><a class="subpage" href="art<?php echo query_string() ?>"><?php echo _('Art') ?></a></li>
    <li><a class="subpage" href="rules<?php echo query_string() ?>"><?php echo _('Rules') ?></a></li>
    <li><a class="subpage" href="schedule<?php echo query_string() ?>"><?php echo _('Schedule') ?></a></li>
    <li><a class="subpage" href="results<?php echo query_string() ?>"><?php echo _('Past Results') ?></a></li>
    <li><a class="subpage" href="twcscore<?php echo query_string() ?>"><?php echo _('TWCScore') ?></a></li>
    <li><a class="subpage" href="credits<?php echo query_string() ?>"><?php echo _('Credits') ?></a></li>
</ul>
<ul id="lang_list" class="menu">
    <li class="subpage flag_container <?php echo $lang == 'en_GB' ? 'selected' : '' ?>"><a id="en_GB" class="language" href="?hl=en-gb">
        <span class="flag"><img class="icon48 uk" src="/assets/icons/icon_sheet_48.png" alt="<?php echo _('Flag of the United Kingdom') ?>"> English (UK)</span>
    </a></li>
    <li class="subpage flag_container <?php echo $lang == 'en_US' ? 'selected' : '' ?>"><a id="en_US" class="language" href="?hl=en-us">
        <span class="flag"><img class="icon48 us" src="/assets/icons/icon_sheet_48.png" alt="<?php echo _('Flag of the United States') ?>"> English (US)</span>
    </a></li>
    <li class="subpage flag_container <?php echo $lang == 'ja_JP' ? 'selected' : '' ?>"><a id="ja_JP" class="language" href="?hl=ja">
        <span class="flag"><img class="icon48 japan" src="/assets/icons/icon_sheet_48.png" alt="<?php echo _('Flag of Japan') ?>"> 日本語</span>
    </a></li>
    <li class="subpage flag_container <?php echo $lang == 'zh_CN' ? 'selected' : '' ?>"><a id="zh_CN" class="language" href="?hl=zh">
        <span class="flag"><img class="icon48 china" src="/assets/icons/icon_sheet_48.png" alt="<?php echo _('Flag of the P.R.C.') ?>"> 简体中文</span>
    </a></li>
    <li class="subpage flag_container <?php echo $lang == 'ru_RU' ? 'selected' : '' ?>"><a id="ru_RU" class="language" href="?hl=ru">
        <span class="flag"><img class="icon48 russia" src="/assets/icons/icon_sheet_48.png" alt="<?php echo _('Flag of Russia') ?>"> Русский</span>
    </a></li>
    <li class="subpage flag_container <?php echo $lang == 'de_DE' ? 'selected' : '' ?>"><a id="de_DE" class="language" href="?hl=de">
        <span class="flag"><img class="icon48 germany" src="/assets/icons/icon_sheet_48.png" alt="<?php echo _('Flag of Germany') ?>"> Deutsch</span>
    </a></li>
    <li class="subpage flag_container <?php echo $lang == 'es_ES' ? 'selected' : '' ?>"><a id="es_ES" class="language" href="?hl=es">
        <span class="flag"><img class="icon48 spain" src="/assets/icons/icon_sheet_48.png" alt="<?php echo _('Flag of Spain') ?>"> Español</span>
    </a></li>
</ul>
<div class="languages dropdown">
    <a class="dropdown_button" href="#"><img id="language_link" class="icon48 lang" src="/assets/icons/icon_sheet_48.png" alt="Language" width=48 height=48></a>
    <div class="dropdown_content">
        <p class="flag_container <?php echo $lang == 'en_GB' ? 'selected' : '' ?>"><a class="language" href="?hl=en-gb">
            <span class="flag"><img class="icon48 uk" src="/assets/icons/icon_sheet_48.png" alt="<?php echo _('Flag of the United Kingdom') ?>" width=48 height=48> English (UK)</span>
        </a></p>
        <p class="flag_container <?php echo $lang == 'en_US' ? 'selected' : '' ?>"><a class="language" href="?hl=en-us">
            <span class="flag"><img class="icon48 us" src="/assets/icons/icon_sheet_48.png" alt="<?php echo _('Flag of the United States') ?>" width=48 height=48> English (US)</span>
        </a></p>
        <p class="flag_container <?php echo $lang == 'ja_JP' ? 'selected' : '' ?>"><a class="language" href="?hl=ja">
            <span class="flag"><img class="icon48 japan" src="/assets/icons/icon_sheet_48.png" alt="<?php echo _('Flag of Japan') ?>" width=48 height=48> 日本語</span>
        </a></p>
        <p class="flag_container <?php echo $lang == 'zh_CN' ? 'selected' : '' ?>"><a class="language" href="?hl=zh">
            <span class="flag"><img class="icon48 china" src="/assets/icons/icon_sheet_48.png" alt="<?php echo _('Flag of the P.R.C.') ?>" width=48 height=48> 简体中文</span>
        </a></p>
        <p class="flag_container <?php echo $lang == 'ru_RU' ? 'selected' : '' ?>"><a class="language" href="?hl=ru">
            <span class="flag"><img class="icon48 russia" src="/assets/icons/icon_sheet_48.png" alt="<?php echo _('Flag of Russia') ?>" width=48 height=48> Русский</span>
        </a></p>
        <p class="flag_container <?php echo $lang == 'de_DE' ? 'selected' : '' ?>"><a class="language" href="?hl=de">
            <span class="flag"><img class="icon48 germany" src="/assets/icons/icon_sheet_48.png" alt="<?php echo _('Flag of Germany') ?>" width=48 height=48> Deutsch</span>
        </a></p>
        <p class="flag_container <?php echo $lang == 'es_ES' ? 'selected' : '' ?>"><a class="language" href="?hl=es">
            <span class="flag"><img class="icon48 spain" src="/assets/icons/icon_sheet_48.png" alt="<?php echo _('Flag of Spain') ?>" width=48 height=48> Español</span>
        </a></p>
    </div>
</div>
</header>
<div class="moverdowner"></div>
