<?php
    $title = _('ISCORE');
    $description = 'A calculator for the official points system used to judge how good a Touhou World Cup run is';
    $keywords = 'touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2022 competition, scoring, survival, tournament, iscore, score, calculator';
    include_once 'php/locale.php';
    include_once 'php/head.php';
?>

<body>
	<?php include_once 'php/body.php' ?>
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
	<script src="/js/iscore.js" defer></script>
	<script src="/js/iscore_ui.js" defer></script>
</body>
</html>
