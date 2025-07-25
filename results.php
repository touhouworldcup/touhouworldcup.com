<?php
    $title = _('Past Results');
    $description = 'Touhou World Cup results from past years';
    $keywords = 'touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2025, competition, scoring, survival, tournament';
    include_once 'php/locale.php';
    include_once 'php/head.php';
    include_once 'php/table_func.php';
    include_once 'php/db.php';
    try {
		$db_host = getenv('DB_HOST') ? getenv('DB_HOST') : 'localhost';
        $db = mysqli_connect($db_host, 'twc_admin', getenv('DB_PASSWORD'), 'twc_archive');
    } catch (Exception $e) {
        $_GET['error'] = 503;
        include_once 'php/error.php';
        die();
    }
?>

<body>
	<?php include_once 'php/body.php' ?>
	<main>
	<h1><?php echo _('Past Results') ?></h1>
    <!--<p class='large'><?php //echo _('This is NOT the current schedule! For the schedule, see the <a href="/schedule' . query_string(). '">Schedule</a> page.') ?></p>-->
    <p><?php echo _('Your time zone was detected as <strong id="timezone">UTC+0000 (Coordinated Universal Time)</strong>.') ?></p>
    <p><?php
        if ($lang == 'en_GB' || $lang == 'en_US' || $lang == 'de_DE' || $lang == 'es_ES') {
            echo _('Daylight Saving Time (also known as Summer Time or DST) is taken into account automatically.');
        }
    ?></p>
    <h2 class="contents"><?php echo _('Contents') ?></h2>
    <div class="contents">
        <p><a href="#2024">2024</a></p>
        <p><a href="#2023">2023</a></p>
        <p><a href="#2022">2022</a></p>
        <p><a href="#2021">2021</a></p>
        <p><a href="#2020">2020</a></p>
    </div>
    <p><input type="button" id="show_results" value="<?php echo _('Show Results') ?>"></p>
    <p><input type="button" id="hide_results" value="<?php echo _('Hide Results') ?>"></p>
    <h2 id="2024"><img class="favicon" src="/assets/legacy/favicon_2024.ico" alt="2024 favicon"> TWC 2024</h2>
    <p><?php echo _('Final tally:') ?></p>
    <ol><?php
        $json = get_teams($db, '2024');
        $teams_2024 = json_decode($json, true);
        $index = 0;
        $max_index = 0;
        $max_points = 0;
        $teams = array();
        uasort($teams_2024, function ($a, $b) {
            return $a['Points'] < $b['Points'] ? 1 : -1;
        });
        foreach ($teams_2024 as $team) {
            array_push($teams, '<li><img src="' . $team['Icon'] . '" alt="' . _('Team ' . $team['Name']) . '"> ' . _('Team ' . $team['Name'] . ': ') . (float) $team['Points'] . _(' points') . '</li>');
            if ($team['Points'] > $max_points) {
                $max_points = $team['Points'];
                $max_index = $index;
            }
            $index++;
        }
        if (array_key_exists($max_index, $teams)) {
            $teams[$max_index] = str_replace('">', '"><strong>', $teams[$max_index]);
            $teams[$max_index] = str_replace('</li>', '</strong></li>', $teams[$max_index]);
        }
        echo implode($teams);
    ?></ol>
    <table class="schedule_table spoiler">
        <thead>
            <tr>
                <th><?php echo _('Date / Time') ?></th>
                <th><?php echo _('Category') ?></th>
                <th><?php echo _('Players') ?></th>
                <th><?php echo _('Reset Time<br>(minutes)') ?></th>
                <th><?php echo _('Results') ?></th>
                <th><?php echo _('Points') ?></th>
            </tr>
        </thead>
        <tbody id="schedule_tbody_2024"><?php
            $json = get_schedule($db, '2024');
            $schedule_2024 = json_decode($json, true);
            $json = get_results($db, '2024');
            $results_2024 = json_decode($json, true);
            print_schedule($schedule_2024, $results_2024, $teams_2024, '2024', []);
        ?></tbody>
    </table>
    <h2 id="2023"><img class="favicon" src="/assets/legacy/favicon_2023.ico" alt="2023 favicon"> TWC 2023</h2>
    <p><?php echo _('Final tally:') ?></p>
    <ol><?php
        $json = get_teams($db, '2023');
        $teams_2023 = json_decode($json, true);
        $index = 0;
        $max_index = 0;
        $max_points = 0;
        $teams = array();
        uasort($teams_2023, function ($a, $b) {
            return $a['Points'] < $b['Points'] ? 1 : -1;
        });
        foreach ($teams_2023 as $team) {
            array_push($teams, '<li><img src="' . $team['Icon'] . '" alt="' . _('Team ' . $team['Name']) . '"> ' . _('Team ' . $team['Name'] . ': ') . (float) $team['Points'] . _(' points') . '</li>');
            if ($team['Points'] > $max_points) {
                $max_points = $team['Points'];
                $max_index = $index;
            }
            $index++;
        }
        $teams[$max_index] = str_replace('">', '"><strong>', $teams[$max_index]);
        $teams[$max_index] = str_replace('</li>', '</strong></li>', $teams[$max_index]);
        echo implode($teams);
    ?></ol>
    <table class="schedule_table spoiler">
        <thead>
            <tr>
                <th><?php echo _('Date / Time') ?></th>
                <th><?php echo _('Category') ?></th>
                <th><?php echo _('Players') ?></th>
                <th><?php echo _('Reset Time<br>(minutes)') ?></th>
                <th><?php echo _('Results') ?></th>
                <th><?php echo _('Points') ?></th>
            </tr>
        </thead>
        <tbody id="schedule_tbody_2023"><?php
            $json = get_schedule($db, '2023');
            $schedule_2023 = json_decode($json, true);
            $json = get_results($db, '2023');
            $results_2023 = json_decode($json, true);
            print_schedule($schedule_2023, $results_2023, $teams_2023, '2023', []);
        ?></tbody>
    </table>
    <h2 id="2022"><img class="favicon" src="/assets/legacy/favicon_2022.ico" alt="2022 favicon"> TWC 2022</h2>
    <p><?php echo _('Final tally:') ?></p>
    <ol><?php
        $json = get_teams($db, '2022');
        $teams_2022 = json_decode($json, true);
        $index = 0;
        $max_index = 0;
        $max_points = 0;
        $teams = array();
        uasort($teams_2022, function ($a, $b) {
            return $a['Points'] < $b['Points'] ? 1 : -1;
        });
        foreach ($teams_2022 as $team) {
            array_push($teams, '<li><img src="' . $team['Icon'] . '" alt="' . _('Team ' . $team['Name']) . '"> ' . _('Team ' . $team['Name'] . ': ') . (float) $team['Points'] . _(' points') . '</li>');
            if ($team['Points'] > $max_points) {
                $max_points = $team['Points'];
                $max_index = $index;
            }
            $index++;
        }
        $teams[$max_index] = str_replace('">', '"><strong>', $teams[$max_index]);
        $teams[$max_index] = str_replace('</li>', '</strong></li>', $teams[$max_index]);
        echo implode($teams);
    ?></ol>
    <table class="schedule_table spoiler">
        <thead>
            <tr>
                <th><?php echo _('Date / Time') ?></th>
                <th><?php echo _('Category') ?></th>
                <th><?php echo _('Players') ?></th>
                <th><?php echo _('Reset Time<br>(minutes)') ?></th>
                <th><?php echo _('Results') ?></th>
                <th><?php echo _('Points') ?></th>
            </tr>
        </thead>
        <tbody id="schedule_tbody_2022"><?php
            $json = get_schedule($db, '2022');
            $schedule_2022 = json_decode($json, true);
            $json = get_results($db, '2022');
            $results_2022 = json_decode($json, true);
            print_schedule($schedule_2022, $results_2022, $teams_2022, '2022', []);
        ?></tbody>
    </table>
    <h2 id="2021"><img class="favicon" src="/assets/legacy/favicon_2021.ico" alt="2021 favicon"> TWC 2021</h2>
    <p><?php echo _('Final tally:') ?></p>
    <ol><?php
        $json = get_teams($db, '2021');
        $teams_2021 = json_decode($json, true);
        $index = 0;
        $max_index = 0;
        $max_points = 0;
        $teams = array();
        uasort($teams_2021, function ($a, $b) {
            return $a['Points'] < $b['Points'] ? 1 : -1;
        });
        foreach ($teams_2021 as $team) {
            array_push($teams, '<li><img src="' . $team['Icon'] . '" alt="' . _('Team ' . $team['Name']) . '"> ' . _('Team ' . $team['Name'] . ': ') . (float) $team['Points'] . _(' points') . '</li>');
            if ($team['Points'] > $max_points) {
                $max_points = $team['Points'];
                $max_index = $index;
            }
            $index++;
        }
        $teams[$max_index] = str_replace('">', '"><strong>', $teams[$max_index]);
        $teams[$max_index] = str_replace('</li>', '</strong></li>', $teams[$max_index]);
        echo implode($teams);
    ?></ol>
    <table class="schedule_table spoiler">
        <thead>
            <tr>
                <th><?php echo _('Date / Time') ?></th>
                <th><?php echo _('Category') ?></th>
                <th><?php echo _('Players') ?></th>
                <th><?php echo _('Reset Time<br>(minutes)') ?></th>
                <th><?php echo _('Results') ?></th>
                <th><?php echo _('Points') ?></th>
            </tr>
        </thead>
        <tbody id="schedule_tbody_2021"><?php
            $json = get_schedule($db, '2021');
            $schedule_2021 = json_decode($json, true);
            $json = get_results($db, '2021');
            $results_2021 = json_decode($json, true);
            print_schedule($schedule_2021, $results_2021, $teams_2021, '2021', []);
        ?></tbody>
    </table>
    <p class="spoiler">* <?php echo _('Game Over') ?></p>
    <h2 id="2020"><img class="favicon" src="/assets/legacy/favicon_2020.ico" alt="2020 favicon"> TWC 2020</h2>
    <p><?php echo _('Final tally:') ?></p>
    <ol><?php
        $json = get_teams($db, '2020');
        $teams_2020 = json_decode($json, true);
        $index = 0;
        $max_index = 0;
        $max_points = 0;
        $teams = array();
        uasort($teams_2020, function ($a, $b) {
            return $a['Points'] < $b['Points'] ? 1 : -1;
        });
        foreach ($teams_2020 as $team) {
            array_push($teams, '<li><img src="' . $team['Icon'] . '" alt="' . _('Team ' . $team['Name']) . '"> ' . _('Team ' . $team['Name'] . ': ') . (float) $team['Points'] . _(' points') . '</li>');
            if ($team['Points'] > $max_points) {
                $max_points = $team['Points'];
                $max_index = $index;
            }
            $index++;
        }
        $teams[$max_index] = str_replace('">', '"><strong>', $teams[$max_index]);
        $teams[$max_index] = str_replace('</li>', '</strong></li>', $teams[$max_index]);
        echo implode($teams);
    ?></ol>
    <table class="schedule_table spoiler">
        <thead>
            <tr>
                <th><?php echo _('Date / Time') ?></th>
                <th><?php echo _('Category') ?></th>
                <th><?php echo _('Players') ?></th>
                <th><?php echo _('Reset Time<br>(minutes)') ?></th>
                <th><?php echo _('Results') ?></th>
                <th><?php echo _('Points') ?></th>
            </tr>
        </thead>
        <tbody id="schedule_tbody_2020"><?php
            $json = get_schedule($db, '2020');
            $schedule_2020 = json_decode($json, true);
            $json = get_results($db, '2020');
            $results_2020 = json_decode($json, true);
            print_schedule($schedule_2020, $results_2020, $teams_2020, '2020', []);
        ?></tbody>
    </table>
    <p class="spoiler">* <?php echo _('Game Over') ?></p>
    <p class="spoiler"><a href="#top"><?php echo _('Back to Top') ?></a></p>
	</main>
</body>
</html>
