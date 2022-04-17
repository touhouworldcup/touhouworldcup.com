<?php
    $title = _('TWCScore');
    $description = 'A calculator for the official points system used to judge how good a Touhou World Cup run is';
    $keywords = 'touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2022 competition, scoring, survival, tournament, iscore, score, calculator';
    include_once 'php/locale.php';
    include_once 'php/head.php';
?>

<body>
	<?php include_once 'php/body.php' ?>
	<main id="main">
	<h1><?php echo _('TWCScore Calculator') ?></h1>
	<noscript><h2><?php echo _('This page requires JavaScript') ?></h2></noscript>
    <p><?php echo _('Use this page to calculate TWCScore for any particular run. TWCScore is subject to change.') ?></p>
	<form id="calc-iscore">
	<label for="games"><?php echo _('Game') ?></label><br>
	<fieldset name="games" id="games">
        <label>
    		<input type="radio" name="games" value="th06"><img class="cover" src="assets/games/eosd.jpg" width="100" height="100"
                    alt="<?php echo _('Touhou 6') ?>" title="<?php echo _('Touhou 6: Embodiment of Scarlet Devil') ?>">
        </label><label>
    		<input type="radio" name="games" value="th07"><img class="cover" src="assets/games/pcb.jpg" width="100" height="100"
                    alt="<?php echo _('Touhou 7') ?>" title="<?php echo _('Touhou 7: Perfect Cherry Blossom') ?>">
        </label><label>
    		<input type="radio" name="games" value="th08"><img class="cover" src="assets/games/in.jpg" width="100" height="100"
                    alt="<?php echo _('Touhou 8') ?>" title="<?php echo _('Touhou 8: Imperishable Night') ?>">
        </label><label>
    		<input type="radio" name="games" value="th10"><img class="cover" src="assets/games/mof.jpg" width="100" height="100"
                    alt="<?php echo _('Touhou 10') ?>" title="<?php echo _('Touhou 10: Mountain of Faith') ?>">
        </label><label>
    		<input type="radio" name="games" value="th11"><img class="cover" src="assets/games/sa.jpg" width="100" height="100"
                    alt="<?php echo _('Touhou 11') ?>" title="<?php echo _('Touhou 11: Subterranean Aminism') ?>">
        </label><label>
    		<input type="radio" name="games" value="th12"><img class="cover" src="assets/games/ufo.jpg" width="100" height="100"
                    alt="<?php echo _('Touhou 12') ?>" title="<?php echo _('Touhou 12: Undefined Fantastic Object') ?>">
        </label><label>
    		<input type="radio" name="games" value="th128"><img class="cover" src="assets/games/gfw.jpg" width="100" height="100"
                    alt="<?php echo _('Touhou 12.8') ?>" title="<?php echo _('Touhou 12.8: Great Fairy Wars') ?>">
        </label><label>
    		<input type="radio" name="games" value="th13"><img class="cover" src="assets/games/td.jpg" width="100" height="100"
                    alt="<?php echo _('Touhou 13') ?>" title="<?php echo _('Touhou 13: Ten Desires') ?>">
        </label><label>
    		<input type="radio" name="games" value="th14"><img class="cover" src="assets/games/ddc.jpg" width="100" height="100"
                    alt="<?php echo _('Touhou 14') ?>" title="<?php echo _('Touhou 14: Double Dealing Character') ?>">
        </label><label>
    		<input type="radio" name="games" value="th15"><img class="cover" src="assets/games/lolk.jpg" width="100" height="100"
                    alt="<?php echo _('Touhou 15') ?>" title="<?php echo _('Touhou 15: Legacy of Lunatic Kingdom') ?>">
        </label><label>
    		<input type="radio" name="games" value="th16"><img class="cover" src="assets/games/hsifs.jpg" width="100" height="100"
                    alt="<?php echo _('Touhou 16') ?>" title="<?php echo _('Touhou 16: Hidden Star in Four Seasons') ?>">
        </label><label>
    		<input type="radio" name="games" value="th17"><img class="cover" src="assets/games/wbawc.jpg" width="100" height="100"
                    alt="<?php echo _('Touhou 17') ?>" title="<?php echo _('Touhou 17: Wily Beast and Weakest Creature') ?>">
        </label><label>
    		<input type="radio" name="games" value="th18"><img class="cover" src="assets/games/um.jpg" width="100" height="100"
                    alt="<?php echo _('Touhou 18') ?>" title="<?php echo _('Touhou 18: Unconnected Marketeers') ?>">
        </label>
	</fieldset><br><br>

	<label id="shot_lab" for="shottype"><?php echo _('Shottype / Route') ?></label><br>
    <?php
        $json = file_get_contents('json/shots.json');
        $shots = json_decode($json, true);
        foreach ($shots as $game => $shots) {
            $checked = true;
            echo '<fieldset name="shottype" id="' . $game . '" class="game">';
            foreach ($shots as $key => $shot) {
                if ($checked) {
                    echo '<label><input type="radio" name="shottype" value="' . $shot . '"><span id="' . $game . $shot . '" class="shottype" alt="' . _($shot) . '"></span></label>';
                    $checked = false;
                    continue;
                }
                echo '<label><input type="radio" name="shottype" value="' . $shot . '"><span id="' . $game . $shot . '" class="shottype" alt="' . _($shot) . '"></span></label>';
            }
            echo '</fieldset>';
        }
    ?><br><br>

	<label for="runtype"><?php echo _('Category') ?></label><br>
    <fieldset name="runtype" id="runtype">
        <label class="float">
    		<input type="radio" id="input_surv" name="runtype" value="surv"><img class="cover" src="assets/surv.png" width="100" height="100" alt="<?php echo _('Survival') ?>"><br>
            <label class="pointer" for="input_surv"><?php echo _('Survival') ?></label>
        </label><label class="float">
    		<input type="radio" id="input_score" name="runtype" value="score"><img class="cover" src="assets/score.png" width="100" height="100" alt="<?php echo _('Scoring') ?>"><br>
            <label class="pointer" for="input_score"><?php echo _('Scoring') ?></label>
        </label>
	</fieldset>

	<span id="fullspell_w">
	<br><br>
		<label for="fullspell"><?php echo _('Full Spell') ?></label>
		<input name="fullspell" type="checkbox" id="fullspell" />
	</span>

	<span id="surv_opts">
	<br><br>
        <label for="misscount"><?php echo _('Misses') ?></label><br>
        <input type="button" id="minus" value="-">
		<input type="number" id="misscount" name="misscount" value=0 readonly>
        <input type="button" id="plus" value="+">
	</span>

	<span id="score_opts">
	<br><br>
		<label for="score"><?php echo _('Score') ?></label><br>
		<input type="text" id="score" name="score">
	</span>

	<span id="th128_medal_w">
	<br><br>
        <label for="th128_medals" id="th128_medal_l"><?php echo _('Gold medals') ?></label><br>
        <input type="button" id="gold_minus" value="-">
		<input type="number" id="th128_medals" name="th128_medals" value=0 readonly>
        <input type="button" id="gold_plus" value="+">
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
		<label for="th08_end"><?php echo _('Final Stage') ?></label><br>
		<select name="th08_end" id="th08_end">
			<option value="6A"><?php echo _('FinalA') ?></option>
			<option value="6B"><?php echo _('FinalB') ?></option>
		</select>
	</span>

	<div>
        <div id="twcscore_error">
            <p id="error_game"><?php echo _('Please fill out the game') ?></p>
            <p id="error_shottype"><?php echo _('Please fill out the shottype') ?></p>
            <p id="error_miss"><?php echo _('Please fill out the miss count') ?></p>
            <p id="error_score"><?php echo _('Please fill out the score') ?></p>
            <p id="error_final"><?php echo _('Please fill out the Final Stage') ?></p>
            <p id="error_medals"><?php echo _('Please fill out the gold medals') ?></p>
            <p id="error_fatal"><?php echo _('FATAL ERROR: wrong type for "element" in get_element_val. ' .
                    'Please contact <a href="https://twitter.com/32thc" target="_blank">32th System</a>') ?></p>
        </div>
		<br>
		<input id="submit" type="button" value="<?php echo _('Calculate') ?>">
	</div>

	<hr>
    <div id="twcscore_result">
        <p id="twcscore_label_container">
            <span id="twcscore_label"><?php echo _('TWCScore:') ?></span>
        </p>
    	<p id="twcscore_final"></p>
    </div>
	</form>
	</main>
    <input id="shots_json" type="hidden" value='<?php echo file_get_contents('json/shots.json') ?>'>
    <input id="scoring_json" type="hidden" value='<?php echo file_get_contents('json/scoring.json') ?>'>
    <input id="survival_json" type="hidden" value='<?php echo file_get_contents('json/survival.json') ?>'>
</body>
</html>
