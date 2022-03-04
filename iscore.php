<!doctype html>

<?php include 'locale.php' ?>

<html lang="<?php echo $lc ?>">
<head>
	<meta charset="utf-8">
	<title><?php echo _('ISCORE') ?> - Touhou World Cup</title>
	<link rel="stylesheet" href="index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website">
	<meta property="og:title" content="Touhou World Cup" />
	<meta property="og:description" content="A calculator for the official points system used to judge how good a Touhou World Cup run is" />
	<meta property="og:site_name" content="Touhou World Cup" />
	<meta property="og:image" content="/twc.png" />
</head>

<body>
	<header class="header">
	<a href="/<?php echo query_string() ?>" class="logo">Touhou World Cup</a>
	<input class="menu-btn" type="checkbox" id="menu-btn" />
	<label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
	<ul class="menu">
		<li><a class="subpage" href="rules<?php echo query_string() ?>"><?php echo _('Rules') ?></a></li>
		<li><a class="subpage" href="schedule<?php echo query_string() ?>"><?php echo _('Schedule') ?></a></li>
		<li><a class="subpage" href="iscore<?php echo query_string() ?>"><?php echo _('ISCORE') ?></a></li>
		<li><a class="subpage" href="credits<?php echo query_string() ?>"><?php echo _('Credits') ?></a></li>
	</ul>
    <ul class="menu">
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
	<main id="main">
	<h1><?php echo _('ISCORE Calculator') ?></h1>
	<noscript><h2><?php echo _('This page requires JavaScript') ?></h2></noscript>
	<form id="calc-iscore">
	<label for="games"><?php echo _('Game') ?></label><br>
	<select name="games" id="games">
		<option value="th06"><?php echo _('Embodiment of Scarlet Devil') ?></option>
		<option value="th07"><?php echo _('Perfect Cherry Blossom') ?></option>
		<option value="th08"><?php echo _('Imperishable Night') ?></option>
		<option value="th10"><?php echo _('Mountain of Faith') ?></option>
		<option value="th11"><?php echo _('Subterranean Aminism') ?></option>
		<option value="th12"><?php echo _('Undefined Fantastic Object') ?></option>
		<option value="th128"><?php echo _('Great Fairy Wars') ?></option>
		<option value="th13"><?php echo _('Ten Desires') ?></option>
		<option value="th14"><?php echo _('Double Dealing Character') ?></option>
		<option value="th15"><?php echo _('Legacy of Lunatic Kingdom') ?></option>
		<option value="th16"><?php echo _('Hidden Star in Four Seasons') ?></option>
		<option value="th17"><?php echo _('Wily Beast and Weakest Creature') ?></option>
		<option value="th18"><?php echo _('Unconnected Marketeers') ?></option>
	</select><br><br>

	<label id="shot_lab" for="shottypes"><?php echo _('Shottype / Route') ?></label><br>
	<select name="shottype" id="shottype">
		<optgroup label="Embodiment of Scarlet Devil">
			<option value="ReimuA"><?php echo _('ReimuA') ?></option>
			<option value="ReimuB"><?php echo _('ReimuB') ?></option>
			<option value="MarisaA"><?php echo _('MarisaA') ?></option>
			<option value="MarisaB"><?php echo _('MarisaB') ?></option>
		</optgroup>
		<optgroup label="Perfect Cherry Blossom">
			<option value="ReimuA"><?php echo _('ReimuA') ?></option>
			<option value="ReimuB"><?php echo _('ReimuB') ?></option>
			<option value="MarisaA"><?php echo _('MarisaA') ?></option>
			<option value="MarisaB"><?php echo _('MarisaB') ?></option>
			<option value="SakuyaA"><?php echo _('SakuyaA') ?></option>
			<option value="SakuyaB"><?php echo _('SakuyaB') ?></option>
		</optgroup>
		<optgroup label="Imperishable Night">
			<option value="Reimu & Yukari"><?php echo _('Reimu & Yukari') ?></option>
			<option value="Marisa & Alice"><?php echo _('Marisa & Alice') ?></option>
			<option value="Sakuya & Remilia"><?php echo _('Sakuya & Remilia') ?></option>
			<option value="Youmu & Yuyuko"><?php echo _('Youmu & Yuyuko') ?></option>
			<option value="Reimu"><?php echo _('Reimu') ?></option>
			<option value="Marisa"><?php echo _('Marisa') ?></option>
			<option value="Sakuya"><?php echo _('Sakuya') ?></option>
			<option value="Youmu"><?php echo _('Youmu') ?></option>
			<option value="Yukari"><?php echo _('Yukari') ?></option>
			<option value="Alice"><?php echo _('Alice') ?></option>
			<option value="Remilia"><?php echo _('Remilia') ?></option>
			<option value="Yuyuko"><?php echo _('Yuyuko') ?></option>
		</optgroup>
		<optgroup label="Mountain of Faith">
			<option value="ReimuA"><?php echo _('ReimuA') ?></option>
			<option value="ReimuB"><?php echo _('ReimuB') ?></option>
			<option value="ReimuC"><?php echo _('ReimuC') ?></option>
			<option value="MarisaA"><?php echo _('MarisaA') ?></option>
			<option value="MarisaB"><?php echo _('MarisaB') ?></option>
			<option value="MarisaC"><?php echo _('MarisaC') ?></option>
		</optgroup>
		<optgroup label="Subterrarian Aminism">
			<option value="ReimuA"><?php echo _('ReimuA') ?></option>
			<option value="ReimuB"><?php echo _('ReimuB') ?></option>
			<option value="ReimuC"><?php echo _('ReimuC') ?></option>
			<option value="MarisaA"><?php echo _('MarisaA') ?></option>
			<option value="MarisaB"><?php echo _('MarisaB') ?></option>
			<option value="MarisaC"><?php echo _('MarisaC') ?></option>
		</optgroup>
		<optgroup label="Undefined Fantastic Object">
			<option value="ReimuA"><?php echo _('ReimuA') ?></option>
			<option value="ReimuB"><?php echo _('ReimuB') ?></option>
			<option value="MarisaA"><?php echo _('MarisaA') ?></option>
			<option value="MarisaB"><?php echo _('MarisaB') ?></option>
			<option value="SanaeA"><?php echo _('SanaeA') ?></option>
			<option value="SanaeB"><?php echo _('SanaeB') ?></option>
		</optgroup>
		<optgroup label="Ten Desires">
			<option value="Reimu"><?php echo _('Reimu') ?></option>
			<option value="Marisa"><?php echo _('Marisa') ?></option>
			<option value="Sanae"><?php echo _('Sanae') ?></option>
			<option value="Youmu"><?php echo _('Youmu') ?></option>
		</optgroup>
		<optgroup label="Double Dealing Character">
			<option value="ReimuA"><?php echo _('ReimuA') ?></option>
			<option value="ReimuB"><?php echo _('ReimuB') ?></option>
			<option value="MarisaA"><?php echo _('MarisaA') ?></option>
			<option value="MarisaB"><?php echo _('MarisaB') ?></option>
			<option value="SakuyaA"><?php echo _('SakuyaA') ?></option>
			<option value="SakuyaB"><?php echo _('SakuyaB') ?></option>
		</optgroup>
		<optgroup label="Legacy of Lunatic Kingdom">
			<option value="Reimu"><?php echo _('Reimu') ?></option>
			<option value="Marisa"><?php echo _('Marisa') ?></option>
			<option value="Sanae"><?php echo _('Sanae') ?></option>
			<option value="Reisen"><?php echo _('Reisen') ?></option>
		</optgroup>
		<optgroup label="Hidden Star in Four Seasons">
			<option value="Reimu(Spring)"><?php echo _('ReimuSpring') ?></option>
			<option value="Cirno(Spring)"><?php echo _('CirnoSpring') ?></option>
			<option value="Aya(Spring)"><?php echo _('AyaSpring') ?></option>
			<option value="Marisa(Spring)"><?php echo _('MarisaSpring') ?></option>
			<option value="Reimu(Summer)"><?php echo _('ReimuSummer') ?></option>
			<option value="Cirno(Summer)"><?php echo _('CirnoSummer') ?></option>
			<option value="Aya(Summer)"><?php echo _('AyaSummer') ?></option>
			<option value="Marisa(Summer)"><?php echo _('MarisaSummer') ?></option>
			<option value="Reimu(Autumn)"><?php echo _('ReimuAutumn') ?></option>
			<option value="Cirno(Autumn)"><?php echo _('CirnoAutumn') ?></option>
			<option value="Aya(Autumn)"><?php echo _('AyaAutumn') ?></option>
			<option value="Marisa(Autumn)"><?php echo _('MarisaAutumn') ?></option>
			<option value="Reimu(Winter)"><?php echo _('ReimuWinter') ?></option>
			<option value="Cirno(Winter)"><?php echo _('CirnoWinter') ?></option>
			<option value="Aya(Winter)"><?php echo _('AyaWinter') ?></option>
			<option value="Marisa(Winter)"><?php echo _('MarisaWinter') ?></option>
		</optgroup>
		<optgroup label="Wily Beast and Weakest Creature">
			<option value="Reimu(Wolf)"><?php echo _('ReimuWolf') ?></option>
			<option value="Reimu(Otter)"><?php echo _('ReimuOtter') ?></option>
			<option value="Reimu(Eagle)"><?php echo _('ReimuEagle') ?></option>
			<option value="Marisa(Wolf)"><?php echo _('MarisaWolf') ?></option>
			<option value="Marisa(Otter)"><?php echo _('MarisaOtter') ?></option>
			<option value="Marisa(Eagle)"><?php echo _('MarisaEagle') ?></option>
			<option value="Youmu(Wolf)"><?php echo _('YoumuWolf') ?></option>
			<option value="Youmu(Otter)"><?php echo _('YoumuOtter') ?></option>
			<option value="Youmu(Eagle)"><?php echo _('YoumuEagle') ?></option>
		</optgroup>
		<optgroup label="Unconnected Marketeers">
			<option value="Reimu"><?php echo _('Reimu') ?></option>
			<option value="Marisa"><?php echo _('Marisa') ?></option>
			<option value="Sakuya"><?php echo _('Sakuya') ?></option>
			<option value="Sanae"><?php echo _('Sanae') ?></option>
		</optgroup>
		<optgroup label="Great Fairy Wars">
			<option value="A-1"><?php echo _('A-1') ?></option>
			<option value="A-2"><?php echo _('A-2') ?></option>
			<option value="B-1"><?php echo _('B-1') ?></option>
			<option value="B-2"><?php echo _('B-2') ?></option>
			<option value="C-1"><?php echo _('C-1') ?></option>
			<option value="C-2"><?php echo _('C-2') ?></option>
			<option value="Extra"><?php echo _('Extra') ?></option>
		</optgroup>
	</select><br><br>

	<label for="runtype"><?php echo _('Category') ?></label><br>
	<select name="runtype" id="runtype">
		<option value="surv"><?php echo _('Survival') ?></option>
		<option value="score"><?php echo _('Scoring') ?></option>
	</select>

	<span id="fullspell_w">
	<br><br>
		<label for="fullspell"><?php echo _('Full Spell') ?></label>
		<input name="fullspell" type="checkbox" id="fullspell" />
	</span>

	<span id="surv_opts">
	<br><br>
		<label for="misscount"><?php echo _('Misses') ?></label><br>
		<input type="text" id="misscount" name="misscount">
	</span>

	<span id="score_opts">
	<br><br>
		<label for="score"><?php echo _('Score') ?></label><br>
		<input type="text" id="score" name="score">
	</span>

	<span id="th128_medal_w">
	<br><br>
	<label for="th128_medals" id="th128_medal_l"><?php echo _('Gold medals (th128 only)') ?></label><br>
		<input type="text" id="th128_medals" name="th128_medals">
	</span>

	<span id="diff_w">
	<br><br>
	<label for="diff"><?php echo _('Difficulty') ?></label><br>
	<select name="diff" id="diff">
		<option value="Lunatic">Lunatic</option>
		<option value="Extra">Extra</option>
	</select>
	</span>

	<span id="th08_opts">
	<br><br>
		<label for="th08_end"><?php echo _('Final Stage (th08 only)') ?></label><br>
		<select name="th08_end" id="th08_end">
			<option value="6A"><?php echo _('FinalA') ?></option>
			<option value="6B"><?php echo _('FinalB') ?></option>
		</select>
	</span>

	<div>
		<br>
		<button type="submit"><?php echo _('Calculate') ?></button>
	</div>

	<hr>
	<?php echo _('ISCORE') ?> = <span id="iscore_final"></span>
	</form>
	</main>
	<script src="/iscore.js" defer></script>
	<script src="/iscore_ui.js" defer></script>
</body>
</html>
