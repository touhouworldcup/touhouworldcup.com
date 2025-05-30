<?php
    $title = _('Schedule');
    $description = 'Order and time at which Touhou World Cup matches will happen';
    $keywords = 'touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2025, competition, scoring, survival, tournament, schedule, timetable';
    include_once 'php/locale.php';
    include_once 'php/head.php';
    include_once 'php/table_func.php';
    include_once 'php/db.php';
    try {
		$db_host = file_exists('.db_host') ? file_get_contents('.db_host') : 'localhost';
        $db = mysqli_connect($db_host, 'twc_admin', file_get_contents('.pw'), 'twc');
    } catch (Exception $e) {
        $_GET['error'] = 503;
        include_once 'php/error.php';
        die($e);
    }
    $json = get_schedule($db, '2025');
    $schedule = json_decode($json, true);
    uasort($schedule, function ($a, $b) {
        if (empty($b['Date__UTC_'])) {
            return false;
        }
        return $a['Date__UTC_'] > $b['Date__UTC_'];
    });
?>

<body>
    <?php include_once 'php/body.php' ?>
    <main>
    <h1><?php echo _('Schedule'); ?></h1>
    <p><?php if (count($schedule) === 0) echo _('Coming soon!') ?></p>
    <?php if (count($schedule) === 0) {
        echo '</main></body></html>';
        die();
    } ?>
    <p><?php echo _('Your time zone was detected as <strong id="timezone">UTC+0000 (Coordinated Universal Time)</strong>.') ?></p>
    <p><?php
        if ($lang == 'en_GB' || $lang == 'en_US' || $lang == 'de_DE' || $lang == 'es_ES') {
            echo _('Daylight Saving Time (also known as Summer Time or DST) is taken into account automatically.');
        }
        echo '<p><input type="button" id="show_results" value="' . _('Show Results') . '"></p>';
        echo '<p><input type="button" id="hide_results" value="' . _('Hide Results') . '"></p>';
    ?></p>
    <ol id="spoiler_ol"></ol>
    <table class="schedule_table">
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
            $json = get_results($db, '2025');
            $results = json_decode($json, true);
            $json = get_teams($db, '2025');
            $teams = json_decode($json, true);
            $json = get_players($db);
            $players = json_decode($json, true);
            print_schedule($schedule, $results, $teams, '2025', $players);
        ?></tbody>
    </table>
    </main>
</body>
</html>