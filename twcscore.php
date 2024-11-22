<?php
    $title = _('TWCScore');
    $description = 'A calculator for the official points system used to judge how good a Touhou World Cup run is';
    $keywords = 'touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2024, competition, scoring, survival, tournament, iscore, score, calculator';
    include_once 'php/locale.php';
    include_once 'php/head.php';
    try {
        $db = mysqli_connect('localhost', 'twc_admin', file_get_contents('.pw'), 'twc');
    } catch (Exception $e) {
        $_GET['error'] = 503;
        include_once 'php/error.php';
        die();
    }
?>

<body>
	<?php include_once 'php/body.php' ?>
	<main id="main">
	<h1><?php echo _('TWCScore Calculator') ?></h1>
	<noscript><h2><?php echo _('This page requires JavaScript') ?></h2></noscript>
    <p><?php echo _('Use this page to calculate TWCScore for any particular run. TWCScore is subject to change.') ?></p>
	<p><a href='https://wl7c2u3z.nocodb.com/#/nc/view/21e12de7-d9a3-4a65-8b41-94b4288991d0' target='_blank'>
		<?php echo _('Click here to see the survival rubrics.') ?>
	</a></p>
	<p><a href='https://wl7c2u3z.nocodb.com/#/nc/view/4525b5ee-87ae-41da-a056-b63f6014eeb3' target='_blank'>
		<?php echo _('Click here to see the scoring rubrics.') ?>
	</a></p>
	<form id="calc-iscore">
	<span><?php echo _('Game') ?></span><br>
	<fieldset name="games" id="games">
        <label>
    		<input type="radio" name="games" value="th06"><span id="cover_th06" class="cover" title="<?php echo _('Touhou 6: Embodiment of Scarlet Devil') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th07"><span id="cover_th07" class="cover" title="<?php echo _('Touhou 7: Perfect Cherry Blossom') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th08"><span id="cover_th08" class="cover" title="<?php echo _('Touhou 8: Imperishable Night') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th09"><span id="cover_th09" class="cover" title="<?php echo _('Touhou 9: Phantasmagoria of Flower View') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th10"><span id="cover_th10" class="cover" title="<?php echo _('Touhou 10: Mountain of Faith') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th11"><span id="cover_th11" class="cover" title="<?php echo _('Touhou 11: Subterranean Animism') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th12"><span id="cover_th12" class="cover" title="<?php echo _('Touhou 12: Undefined Fantastic Object') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th128"><span id="cover_th128" class="cover" title="<?php echo _('Touhou 12.8: Great Fairy Wars') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th13"><span id="cover_th13" class="cover" title="<?php echo _('Touhou 13: Ten Desires') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th14"><span id="cover_th14" class="cover" title="<?php echo _('Touhou 14: Double Dealing Character') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th15"><span id="cover_th15" class="cover" title="<?php echo _('Touhou 15: Legacy of Lunatic Kingdom') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th16"><span id="cover_th16" class="cover" title="<?php echo _('Touhou 16: Hidden Star in Four Seasons') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th17"><span id="cover_th17" class="cover" title="<?php echo _('Touhou 17: Wily Beast and Weakest Creature') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th18"><span id="cover_th18" class="cover" title="<?php echo _('Touhou 18: Unconnected Marketeers') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th19"><span id="cover_th19" class="cover" title="<?php echo _('Touhou 19: Unfinished Dream of All Living Ghost') ?>"></span>
        </label>
	</fieldset><br><br>

	<span><?php echo _('Shottype / Route') ?></span><br>
    <?php
        $json = file_get_contents('json/shots.json');
        $shots = json_decode($json, true);
        foreach ($shots as $game => $shots) {
            $checked = true;
            echo '<fieldset name="shottype" id="' . $game . '" class="game">';
            foreach ($shots as $key => $shot) {
                if ($checked) {
                    echo '<label><input type="radio" name="shottype" value="' . $shot . '"><span id="' . $game . $shot . '" class="shottype" title="' . _($shot) . '"></span></label>';
                    $checked = false;
                    continue;
                }
                echo '<label><input type="radio" name="shottype" value="' . $shot . '"><span id="' . $game . $shot . '" class="shottype" title="' . _($shot) . '"></span></label>';
            }
            echo '</fieldset>';
        }
    ?>
	<fieldset name="shottype" id="th16ex" class="game">
		<label><input type="radio" name="shottype" value="Reimu"><span id="th16ReimuExtra" class="shottype" title="<?php echo _('Reimu'); ?>"></span></label>
		<label><input type="radio" name="shottype" value="Cirno"><span id="th16CirnoExtra" class="shottype" title="<?php echo _('Cirno'); ?>"></span></label>
		<label><input type="radio" name="shottype" value="Aya"><span id="th16AyaExtra" class="shottype" title="<?php echo _('Aya'); ?>"></span></label>
		<label><input type="radio" name="shottype" value="Marisa"><span id="th16MarisaExtra" class="shottype" title="<?php echo _('Marisa'); ?>"></span></label>
	</fieldset>
	<br><br>

	<span><?php echo _('Category') ?></span><br>
    <fieldset name="runtype" id="runtype">
        <label id="survival" for="input_surv" class="float">
    		<input type="radio" id="input_surv" name="runtype" value="surv"><img class="cover" src="assets/surv_icon.png" alt="<?php echo _('Survival') ?>"><br>
            <span class="pointer"><?php echo _('Survival') ?></span>
        </label><label id="scoring" for="input_score" class="float">
    		<input type="radio" id="input_score" name="runtype" value="score"><img class="cover" src="assets/score_icon.png" alt="<?php echo _('Scoring') ?>"><br>
            <span class="pointer"><?php echo _('Scoring') ?></span>
        </label>
	</fieldset>

	<span id="fullspell_w">
		<br><br>
		<label for="fullspell"><?php echo _('Full Spell') ?></label>
		<input name="fullspell" type="checkbox" id="fullspell">
	</span>

	<span id="surv_opts">
		<br><br>
        <label for="misscount" id="misscount_l"><?php echo _('Misses') ?></label>
        <label for="misscount" id="remaining_l"><?php echo _('Remaining lives') ?></label><br>
        <input type="button" id="minus" value="-">
		<input type="number" id="misscount" name="misscount" value=0 readonly>
        <input type="button" id="plus" value="+">
	</span>

	<div id="score_opts">
		<br><br>
		<span><?php echo _('Input score') ?></span><br>
		<fieldset name="inputscore" id="inputscore">
			<input type="radio" id="ingame" name="inputscore" value="ingame" checked>
			<label for="ingame" class="float"><?php echo _('Score') ?></label>
			<br><br>
			<input type="radio" id="twc" name="inputscore" value="twc">
			<label for="twc" class="float"><?php echo _('TWCScore') ?></label>
		</fieldset><br><br>
		<label id="score_label" for="score"><?php echo _('Score') ?></label>
		<label id="score_label_alt" for="score"><?php echo _('TWCScore') ?></label><br>
		<input type="text" id="score" name="score">
	</div>

	<span id="th09_s9r1_w">
		<br><br>
        <label for="th09_s9r1" id="th09_s9r1_l"><?php echo _('Duration of Stage 9 Round 1 (seconds)') ?></label><br>
		<input type="number" id="th09_s9r1" name="th09_s9r1" value=0>
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
		<option id="phantasm" value="Phantasm">Phantasm</option>
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
            <span id="twcscore_label_alt"><?php echo _('Score:') ?></span>
        </p>
    	<p id="twcscore_final"></p>
    </div>
	</form>
	</main>
    <input id="shots_json" type="hidden" value='<?php echo file_get_contents('json/shots.json') ?>'>
</body>
</html>
