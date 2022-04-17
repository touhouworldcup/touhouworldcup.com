<?php
    $title = 'Index';
    $description = 'Main page of the official Touhou World Cup website';
    $keywords = 'touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2022 competition, scoring, survival, tournament';
    include_once 'php/locale.php';
    include_once 'php/head.php';
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
        <h2><?php echo _('TWC Starts In:') ?></h2>
        <p class="large"><span id="countdown_start"></span></p>
    </div>
    <div id="cards">
        <div class="card"><a href="https://www.twitch.tv/touhou_replay_showcase" class="card_link" target="_blank">
            <img class="thumbnail" src="/assets/twitch.png" alt="TWC Twitch stream" width=500 height=320>
            <span class="title large"><img class="icon" src="/assets/icons/twitch-icon.png" alt="Twitch icon" width=64 height=64> <?php echo _('TWC English Commentary Stream') ?></span>
        </a></div>
        <div class="card"><a href="https://www.youtube.com/channel/UCfF3O4wo0YxppTZGmtTGDwg" class="card_link" target="_blank">
            <img class="thumbnail" src="/assets/jpyt.png" alt="TWC Japanese stream" width=500 height=320>
            <span class="title large"><img class="icon" src="/assets/icons/youtube-icon.png" alt="YouTube icon" width=64 height=64> <?php echo _('TWC Japanese Commentary Stream') ?></span>
        </a></div>
        <div class="card"><a href="https://www.youtube.com/c/TouhouWorldCup" class="card_link" target="_blank">
            <img class="thumbnail" src="/assets/youtube.png" alt="TWC YouTube channel" width=500 height=320>
            <span class="title large"><img class="icon" src="/assets/icons/youtube-icon.png" alt="YouTube icon" width=64 height=64> <?php echo _('Official TWC YouTube Channel') ?></span>
        </a></div>
        <div class="card"><a href="https://twitter.com/touhouworldcup" class="card_link" target="_blank">
            <img class="thumbnail" src="/assets/twitter.png" alt="TWC Twitter account" width=500 height=320>
            <span class="title large"><img class="icon" src="/assets/icons/twitter-icon.png" alt="Twitter icon" width=64 height=64> <?php echo _('Official TWC Twitter') ?></span>
        </a></div>
    </div>
    <!--
    <a class="twitter-timeline" data-width="300" data-height="500" data-dnt="true" data-theme="light" href="https://twitter.com/touhouworldcup?ref_src=twsrc%5Etfw">Tweets by touhouworldcup</a>
    -->
    <p class="bottom">Touhou World Cup 2022</p>
	</main>
</body>
</html>
