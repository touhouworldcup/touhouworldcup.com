<?php
    $title = _('Schedule');
    $description = 'Order and time at which Touhou World Cup matches will happen';
    $keywords = 'touhou, touhou project, 東方, 东方, world cup, touhou world cup, twc, 2023 competition, scoring, survival, tournament, schedule, timetable';
    include_once 'php/locale.php';
    include_once 'php/head.php';
    include_once 'php/table_func.php';
?>

<body>
    <?php include_once 'php/body.php' ?>
    <main>
    <h1><?php echo _('Schedule') ?></h1>
    <!--<p><?php //echo _('Coming soon!') ?></p>-->
    <p><?php echo _('Your time zone was detected as <strong id="timezone">UTC+0000 (Coordinated Universal Time)</strong>.') ?></p>
    <p><?php
        if ($lang == 'en_GB' || $lang == 'en_US' || $lang == 'de_DE' || $lang == 'es_ES') {
            echo _('Daylight Saving Time (also known as Summer Time or DST) is taken into account automatically.');
        }
    ?></p>
    <!--<p><input type="button" id="show_results" value="<?php echo _('Show Results') ?>"></p>
    <p><input type="button" id="hide_results" value="<?php echo _('Hide Results') ?>"></p>-->
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
            $json = file_get_contents('json/schedule.json');
            $schedule = json_decode($json, true);
            $json = file_get_contents('json/results.json');
            $results = json_decode($json, true);
            $teams = array(
                (object) [
                    'name' => 'Spirit',
                    'image' => '<img src="assets/icons/spirit.png" alt="' . _('Team Spirit') . '">'
                ],
                (object) [
                    'name' => 'Lotus',
                    'image' => '<img src="assets/icons/lotus.png" alt="' . _('Team Lotus') . '">'
                ],
                (object) [
                    'name' => 'Harmony',
                    'image' => '<img src="assets/icons/harmony.png" alt="' . _('Team Harmony') . '">'
                ]
            );
            print_schedule($schedule, $results, $teams);
        ?></tbody>
    </table>
    </main>
</body>
</html>
