<?php
    include_once 'php/locale.php';
    include_once 'php/head.php';
    include_once 'php/db.php';
    try {
        $db = mysqli_connect('localhost', 'twc_admin', file_get_contents('.pw'), 'twc');
        $schedule_json = get_schedule($db, '2024');
    } catch (Exception $e) {
        $schedule_json = '';
    }
?>

<body>
	<?php include_once 'php/body.php' ?>
    <main>
	<h1>Touhou World Cup</h1>
    <p><?php
        echo _('<strong>Touhou World Cup (TWC)</strong> is an annual international Touhou shooting game competition, ' .
        'first held in 2020 and held every year since. It is organised by the Touhou gameplay community worldwide.');
    ?></p>
    <p><?php
        echo _('Three teams duke it out on Lunatic and Extra mode, playing on live streams and playing both high score and survival.');
    ?></p>
    <p><?php
        echo _('See below for official communication channels.');
    ?></p>
    <div id="countdowns">
        <h2 id="countdown_title_start"><?php echo _('TWC Starts In:') ?></h2>
        <h2 id="countdown_title_match"><?php echo _('Next Match:') ?></h2>
        <p id="countdown" class="large"><span id="countdown_start"></span></p>
        <h2 id="current_match"><?php echo _('Currently ongoing: <a class="match_link" href="https://twitch.tv/touhou_replay_showcase" target="_blank">')?><span id="match_category"></span></a></h2>
        <p class="huge"><?php echo _('Touhou World Cup 2024 has ended. Go to the <a href="/results">Past Results page</a> to see the results.') ?></p>
    </div>
    <div id="cards">
        <div class="cards_inner">
            <h2><?php echo _('Live Streams') ?></h2>
            <div class="card"><a href="https://www.twitch.tv/touhou_replay_showcase" class="card_link" target="_blank">
                <span class="title large"><img class="icon" src="/assets/icons/twitch-icon.png" alt="Twitch icon" width=64 height=64> <?php echo _('English Commentary Stream') ?></span>
            </a></div>
            <div class="card"><a href="https://www.youtube.com/@TWC_JP/live" class="card_link" target="_blank">
                <span class="title large"><img class="icon" src="/assets/icons/youtube-icon.png" alt="YouTube icon" width=64 height=64> <?php echo _('Japanese Commentary Stream') ?></span>
            </a></div>
            <div class="card"><a href="https://live.bilibili.com/51792" class="card_link" target="_blank">
                <span class="title large"><img class="icon" src="/assets/icons/bilibili-icon.png" alt="Bilibili icon" width=64 height=64> <?php echo _('Chinese Commentary Stream') ?></span>
            </a></div>
        </div>
        <div class="cards_inner">
        <h2><?php echo _('Social Media') ?></h2>
            <div class="card">
                <a href="https://bsky.app/profile/touhouworldcup.com" class="card_link_split card_link" target="_blank">
                    <span class="title large"><img class="icon" src="/assets/icons/bluesky-icon.png" alt="Bluesky icon" width=64 height=64> <?php echo _('English Bluesky') ?></span>
                </a>
                <a href="https://twitter.com/touhouworldcup" class="card_link_split card_link" target="_blank">
                    <span class="title large"><img class="icon" src="/assets/icons/twitter-icon.png" alt="Twitter icon" width=64 height=64> <?php echo _('English Twitter') ?></span>
                </a>
            </div>
            <div class="card">
                <a href="https://bsky.app/profile/jp.touhouworldcup.com" class="card_link_split card_link" target="_blank">
                    <span class="title large"><img class="icon" src="/assets/icons/bluesky-icon.png" alt="Bluesky icon" width=64 height=64> <?php echo _('Japanese Bluesky') ?></span>
                </a>
                <a href="https://twitter.com/TWC_JP" class="card_link_split card_link" target="_blank">
                    <span class="title large"><img class="icon" src="/assets/icons/twitter-icon.png" alt="Bluesky icon" width=64 height=64> <?php echo _('Japanese Twitter') ?></span>
                </a>
            </div>
        </div>
        <div class="cards_inner">
        <h2><?php echo _('Videos') ?></h2>
            <div class="card"><a href="https://www.youtube.com/c/TouhouWorldCup" class="card_link" target="_blank">
                <span class="title large"><img class="icon" src="/assets/icons/youtube-icon.png" alt="YouTube icon" width=64 height=64> <?php echo _('English YouTube Channel') ?></span>
            </a></div>
            <div class="card"><a href="https://www.youtube.com/@TWC_JP/streams" class="card_link" target="_blank">
                <span class="title large"><img class="icon" src="/assets/icons/youtube-icon.png" alt="YouTube icon" width=64 height=64> <?php echo _('Japanese YouTube Channel') ?></span>
            </a></div>
        </div>
    </div>
    <p class="bottom">
        <a class="language_small" href="/?hl=en-gb">English (UK)</a>
        <a class="language_small" href="/?hl=en-us">English (US)</a>
        <a class="language_small" href="/?hl=ja">日本語</a>
        <a class="language_small" href="/?hl=zh">简体中文</a>
        <a class="language_small" href="/?hl=ru">Русский</a>
        <a class="language_small" href="/?hl=de">Deutsch</a>
        <a class="language_small" href="/?hl=es">Español</a>
    </p>
    <p class="bottom">Touhou World Cup 2024</p>
    <input id="schedule" type="hidden" value='<?php echo str_replace("'", "`", $schedule_json) ?>'>
	</main>
</body>
</html>
