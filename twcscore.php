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
	<p><a href='https://docs.google.com/spreadsheets/d/e/2PACX-1vS97uPEhPc7Ys2LU9QZ2C5NBDTrcqOkCR9mixhs3yDt3zUSxIfNDAXENp8QzEsrFaLZI8wEt35nfLox/pubhtml?gid=161008384&amp;amp;single=true&amp;amp;widget=true&amp;amp;headers=false' target='_blank'>
		<?php echo _('Click here to see all rubrics.') ?>
	</a></p>
	<form id="calc-iscore">
	<label for="games"><?php echo _('Game') ?></label><br>
	<fieldset name="games" id="games">
        <label>
    		<input type="radio" name="games" value="th06"><span id="cover_th06" class="cover" width=100 height=100 title="<?php echo _('Touhou 6: Embodiment of Scarlet Devil') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th07"><span id="cover_th07" class="cover" width=100 height=100 title="<?php echo _('Touhou 7: Perfect Cherry Blossom') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th08"><span id="cover_th08" class="cover" width=100 height=100 title="<?php echo _('Touhou 8: Imperishable Night') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th09"><span id="cover_th09" class="cover" width=100 height=100 title="<?php echo _('Touhou 9: Phantasmagoria of Flower View') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th10"><span id="cover_th10" class="cover" width=100 height=100 title="<?php echo _('Touhou 10: Mountain of Faith') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th11"><span id="cover_th11" class="cover" width=100 height=100 title="<?php echo _('Touhou 11: Subterranean Animism') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th12"><span id="cover_th12" class="cover" width=100 height=100 title="<?php echo _('Touhou 12: Undefined Fantastic Object') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th128"><span id="cover_th128" class="cover" width=100 height=100 title="<?php echo _('Touhou 12.8: Great Fairy Wars') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th13"><span id="cover_th13" class="cover" width=100 height=100 title="<?php echo _('Touhou 13: Ten Desires') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th14"><span id="cover_th14" class="cover" width=100 height=100 title="<?php echo _('Touhou 14: Double Dealing Character') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th15"><span id="cover_th15" class="cover" width=100 height=100 title="<?php echo _('Touhou 15: Legacy of Lunatic Kingdom') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th16"><span id="cover_th16" class="cover" width=100 height=100 title="<?php echo _('Touhou 16: Hidden Star in Four Seasons') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th17"><span id="cover_th17" class="cover" width=100 height=100 title="<?php echo _('Touhou 17: Wily Beast and Weakest Creature') ?>"></span>
        </label><label>
    		<input type="radio" name="games" value="th18"><span id="cover_th18" class="cover" width=100 height=100 title="<?php echo _('Touhou 18: Unconnected Marketeers') ?>"></span>
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
                    echo '<label><input type="radio" name="shottype" value="' . $shot . '"><span id="' . $game . $shot . '" class="shottype" title="' . _($shot) . '"></span></label>';
                    $checked = false;
                    continue;
                }
                echo '<label><input type="radio" name="shottype" value="' . $shot . '"><span id="' . $game . $shot . '" class="shottype" title="' . _($shot) . '"></span></label>';
            }
            echo '</fieldset>';
        }
    ?><br><br>

	<label for="runtype"><?php echo _('Category') ?></label><br>
    <fieldset name="runtype" id="runtype">
        <label id="survival" class="float">
    		<input type="radio" id="input_surv" name="runtype" value="surv"><img class="cover" src="assets/surv_icon.png" width=100 height=100 alt="<?php echo _('Survival') ?>"><br>
            <label class="pointer" for="input_surv"><?php echo _('Survival') ?></label>
        </label><label id="scoring" class="float">
    		<input type="radio" id="input_score" name="runtype" value="score"><img class="cover" src="assets/score_icon.png" width=100 height=100 alt="<?php echo _('Scoring') ?>"><br>
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
		<label for="inputscore"><?php echo _('Input score') ?></label><br>
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
            <span id="twcscore_label_alt"><?php echo _('Score:') ?></span>
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
