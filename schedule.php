<?php
    $title = _('Schedule');
    $description = 'Order and time at which Touhou World Cup matches will happen';
    $keywords = 'touhou, touhou project, 東方, 东方, world cup, touhou world cup, twc, 2022 competition, scoring, survival, tournament, schedule, timetable';
    include_once 'php/locale.php';
    include_once 'php/head.php';
?>

<body>
	<?php include_once 'php/body.php' ?>
	<main>
	<h1><?php echo _('Schedule') ?></h1>
    <p><?php echo _('Your time zone was detected as <strong id="timezone">UTC+0000 (Coordinated Universal Time)</strong>.') ?></p>
    <p><?php
        if ($lang == 'en_GB' || $lang == 'en_US' || $lang == 'de_DE' || $lang == 'es_ES') {
            echo _('Daylight Saving Time (also known as Summer Time or DST) is taken into account automatically.');
        }
    ?></p>
    <p><input type="button" id="show_results" value="<?php echo _('Show Results') ?>"></p>
    <p><input type="button" id="hide_results" value="<?php echo _('Hide Results') ?>"></p>
    <table id="schedule_table">
        <thead>
            <tr>
                <th rowspan="3"><?php echo _('Date / Time') ?></th>
                <th rowspan="3"><?php echo _('Category') ?></th>
                <th rowspan="3"><?php echo _('Players') ?></th>
                <th rowspan="3"><?php echo _('Reset Time<br>(minutes)') ?></th>
                <th rowspan="3" class="spoiler"><?php echo _('Results') ?></th>
                <th rowspan="3" class="spoiler"><?php echo _('Points') ?></th>
                <noscript>
                    <th rowspan="3"><?php echo _('Results') ?></th>
                    <th rowspan="3"><?php echo _('Points') ?></th>
                </noscript>
            </tr>
        </thead>
        <tbody id="schedule_tbody"><?php
            function format_results(array $results, string $key) {
                $formatted = '';
                for ($i = 0; $i < count($results[$key]); $i++) {
                    $result = $results[$key][$i];
                    $formatted .= ($i > 0 ? '<br>' : '');
                    $formatted .= _($result['shot']) . ' ';
                    if (is_string($result['score'])) { // survival
                        $formatted .= $result['score'];
                    } else { // scoring
                        $formatted .= number_format($result['score'], 0, '.', ',');
                    }
                    $formatted .= _(' (');
                    $formatted .= $result['twcscore'];
                    $formatted .= _(')');
                }
                return $formatted;
            }
            function format_points(array $results, string $key) {
                $formatted = '';
                for ($i = 0; $i < count($results[$key]); $i++) {
                    $result = $results[$key][$i];
                    $formatted .= ($i > 0 ? '<br>' : '');
                    $formatted .= ($result['points'] == 2 ? '<strong>2</strong>' : $result['points']);
                }
                return $formatted;
            }
            $json = file_get_contents('json/schedule_new.json');
            $schedule = json_decode($json, true);
            $json = file_get_contents('json/results.json');
            $results = json_decode($json, true);
            $teams = ['rose', 'mind', 'heart'];
            $highlight = false;
            foreach ($schedule as $key => $match) {
                if (!$highlight && $key >= time()) {
                    echo '<tr class="highlight">';
                    $highlight = true;
                } else {
                    echo '<tr>';
                }
                echo '<td id="' . $key . '_date">' . gmdate(get_date_format($lang), $key) . '</td>';
                echo '<td class="' . preg_split('/ /', $match['category'])[0] . '">' . $match['category'] . '</td><td>';
                foreach ($match['players'] as $index => $player) {
                    $team = $teams[$index];
                    echo '<span class="team"><img src="assets/icons/' . $team . '.png" alt="' . ucfirst($team) . '"><span class="tooltip">Team ' . ucfirst($team) . '</span></span> ' . $player . '<br>';
                }
                echo '</td><td>' . ($match['reset'] === 0 ? 'N/A' : $match['reset']) . '</td>';
                if (array_key_exists($key, $results)) {
                    echo '<td class="spoiler">' . format_results($results, $key) . '</td><td class="spoiler">' . format_points($results, $key) . '</td>';
                    echo '<noscript><td>' . format_results($results, $key) . '</td><td>' . format_points($results, $key) . '</td></noscript>';
                } else {
                    echo '<td class="spoiler">&nbsp;</td><td class="spoiler">&nbsp;</td>';
                    echo '<noscript><td>&nbsp;</td><td>&nbsp;</td></noscript>';
                }
                echo '</tr>';
            }
        ?></tbody>
    </table>
	</main>
</body>
</html>
