<!doctype html>

<?php include 'locale.php' ?>

<html lang="en">
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
	<a href="/" class="logo">Touhou World Cup</a>
	<input class="menu-btn" type="checkbox" id="menu-btn" />
	<label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
	<ul class="menu">
		<li><a href="rules"><?php echo _('Rules') ?></a></li>
		<li><a href="schedule"><?php echo _('Schedule') ?></a></li>
		<li><a href="iscore"><?php echo _('ISCORE') ?></a></li>
		<li><a href="credits"><?php echo _('Credits') ?></a></li>
	</ul>
	</header>
	<div class="moverdowner"></div>
	<main id="main">
	<h1>ISCORE Calculator</h1>
	<noscript><h2>This page requires JavaScript</h2></noscript>
	<form id="calc-iscore">
	<label for="games">Game</label><br>
	<select name="games" id="games">
		<option value="th06">Embodiment of Scarlet Devil</option>
		<option value="th07">Perfect Cherry Blossom</option>
		<option value="th08">Imperishable Night</option>
		<option value="th10">Mountain of Faith</option>
		<option value="th11">Subterranean Aminism</option>
		<option value="th12">Undefined Fantastic Object</option>
		<option value="th128">Great Fairy Wars</option>
		<option value="th13">Ten Desires</option>
		<option value="th14">Double Dealing Character</option>
		<option value="th15">Legacy of Lunatic Kingdom</option>
		<option value="th16">Hidden Star in Four Seasons</option>
		<option value="th17">Wily Beast and Weaksest Creature</option>
		<option value="th18">Unconnected Marketeers</option>
	</select><br><br>

	<label id="shot_lab" for="shottypes">Shot/GFW Route</label><br>
	<select name="shottype" id="shottype">
		<optgroup label="Embodiment of Scarlet Devil">
			<option value="ReimuA">ReimuA</option>
			<option value="ReimuB">ReimuB</option>
			<option value="MarisaA">MarisaA</option>
			<option value="MarisaB">MarisaB</option>
		</optgroup>
		<optgroup label="Perfect Cherry Blossom">
			<option value="ReimuA">ReimuA</option>
			<option value="ReimuB">ReimuB</option>
			<option value="MarisaA">MarisaA</option>
			<option value="MarisaB">MarisaB</option>
			<option value="SakuyaA">SakuyaA</option>
			<option value="SakuyaB">SakuyaB</option>
		</optgroup>
		<optgroup label="Imperishable Night">
			<option value="Reimu & Yukari">Reimu & Yukari</option>
			<option value="Marisa & Alice">Marisa & Alice</option>
			<option value="Sakuya & Remilia">Sakuya & Remilia</option>
			<option value="Youmu & Yuyuko">Youmu & Yuyuko</option>
			<option value="Reimu"> Reimu</option>
			<option value="Marisa">Marisa</option>
			<option value="Sakuya">Sakuya</option>
			<option value="Youmu">Youmu</option>
			<option value="Yukari">Yukari</option>
			<option value="Alice">Alice</option>
			<option value="Remilia">Remilia</option>
			<option value="Yuyuko">Yuyuko</option>
		</optgroup>
		<optgroup label="Mountain of Faith">
			<option value="ReimuA">ReimuA</option>
			<option value="ReimuB">ReimuB</option>
			<option value="ReimuC">ReimuC</option>
			<option value="MarisaA">MarisaA</option>
			<option value="MarisaB">MarisaB</option>
			<option value="MarisaC">MarisaC</option>
		</optgroup>
		<optgroup label="Subterrarian Aminism">
			<option value="ReimuA">ReimuA</option>
			<option value="ReimuB">ReimuB</option>
			<option value="ReimuC">ReimuC</option>
			<option value="MarisaA">MarisaA</option>
			<option value="MarisaB">MarisaB</option>
			<option value="MarisaC">MarisaC</option>
		</optgroup>
		<optgroup label="Undefined Fantastic Object">
			<option value="ReimuA">ReimuA</option>
			<option value="ReimuB">ReimuB</option>
			<option value="MarisaA">MarisaA</option>
			<option value="MarisaB">MarisaB</option>
			<option value="SanaeA">SanaeA</option>
			<option value="SanaeB">SanaeB</option>
		</optgroup>
		<optgroup label="Ten Desires">
			<option value="Reimu">Reimu</option>
			<option value="Marisa">Marisa</option>
			<option value="Sanae">Sanae</option>
			<option value="Youmu">Youmu</option>
		</optgroup>
		<optgroup label="Double Dealing Character">
			<option value="ReimuA">ReimuA</option>
			<option value="ReimuB">ReimuB</option>
			<option value="MarisaA">MarisaA</option>
			<option value="MarisaB">MarisaB</option>
			<option value="SakuyaA">SakuyaA</option>
			<option value="SakuyaB">SakuyaB</option>
		</optgroup>
		<optgroup label="Legacy of Lunatic Kingdom">
			<option value="Reimu">Reimu</option>
			<option value="Marisa">Marisa</option>
			<option value="Sanae">Sanae</option>
			<option value="Reisen">Reisen</option>
		</optgroup>
		<optgroup label="Hidden Star in Four Seasons">
			<option value="Reimu(Spring)">Reimu(Spring)</option>
			<option value="Cirno(Spring)">Cirno(Spring)</option>
			<option value="Aya(Spring)">Aya(Spring)</option>
			<option value="Marisa(Spring)">Marisa(Spring)</option>
			<option value="Reimu(Summer)">Reimu(Summer)</option>
			<option value="Cirno(Summer)">Cirno(Summer)</option>
			<option value="Aya(Summer)">Aya(Summer)</option>
			<option value="Marisa(Summer)">Marisa(Summer</option>
			<option value="Reimu(Autumn)">Reimu(Autumn)</option>
			<option value="Cirno(Autumn)">Cirno(Autumn)</option>
			<option value="Aya(Autumn)">Aya(Autumn)</option>
			<option value="Marisa(Autumn)">Marisa(Autumn</option>
			<option value="Reimu(Winter)">Reimu(Winter)</option>
			<option value="Cirno(Winter)">Cirno(Winter)</option>
			<option value="Aya(Winter)">Aya(Winter)</option>
			<option value="Marisa(Winter)">Marisa(Winter)</option>
		</optgroup>
		<optgroup label="Wily Beast and Weaksest Creature">
			<option value="Reimu(Wolf)">Reimu(Wolf)</option>
			<option value="Reimu(Otter)">Reimu(Otter)</option>
			<option value="Reimu(Eagle)">Reimu(Eagle)</option>
			<option value="Marisa(Wolf)">Marisa(Wolf)</option>
			<option value="Marisa(Otter)">Marisa(Otter)</option>
			<option value="Marisa(Eagle)">Marisa(Eagle)</option>
			<option value="Youmu(Wolf)">Youmu(Wolf)</option>
			<option value="Youmu(Otter)">Youmu(Otter)</option>
			<option value="Youmu(Eagle)">Youmu(Eagle)</option>
		</optgroup>
		<optgroup label="Unconnected Marketeers">
			<option value="Reimu">Reimu</option>
			<option value="Marisa">Marisa</option>
			<option value="Sakuya">Sakuya</option>
			<option value="Sanae">Sanae</option>
		</optgroup>
		<optgroup label="Great Fairy Wars">
			<option value="A-1">A-1</option>
			<option value="A-2">A-2</option>
			<option value="B-1">B-1</option>
			<option value="B-2">B-2</option>
			<option value="C-1">C-1</option>
			<option value="C-2">C-2</option>
			<option value="Extra">Extra</option>
		</optgroup>
	</select><br><br>

	<label for="runtype">Type of run</label><br>
	<select name="runtype" id="runtype">
		<option value="surv">Survival</option>
		<option value="score">Score</option>
	</select>

	<span id="fullspell_w">
	<br><br>
		<label for="fullspell">Full Spell</label>
		<input name="fullspell" type="checkbox" id="fullspell" />
	</span>

	<span id="surv_opts">
	<br><br>
		<label for="misscount">Misses</label><br>
		<input type="text" id="misscount" name="misscount">
	</span>

	<span id="score_opts">
	<br><br>
		<label for="score">Score</label><br>
		<input type="text" id="score" name="score">
	</span>

	<span id="th128_medal_w">
	<br><br>
	<label for="th128_medals" id="th128_medal_l">Gold Medals (th128 only)</label><br>
		<input type="text" id="th128_medals" name="th128_medals">
	</span>

	<span id="diff_w">
	<br><br>
	<label for="diff">Difficulty</label><br>
	<select name="diff" id="diff">
		<option value="Lunatic">Lunatic</option>
		<option value="Extra">Extra</option>
	</select>
	</span>

	<span id="th08_opts">
	<br><br>
		<label for="th08_end">Final stage (th08 only)</label><br>
		<select name="th08_end" id="th08_end">
			<option value="6A">FinalA</option>
			<option value="6B">FinalB</option>
		</select>
	</span>

	<div>
		<br>
		<button type="submit">Calculate</button>
	</div>

	<hr>
	ISCORE = <span id="iscore_final"></span>
	</form>
	</main>
	<script src="iscore.js" defer></script>
	<script src="iscore_ui.js" defer></script>
</body>
</html>
