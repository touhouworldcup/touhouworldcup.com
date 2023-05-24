<?php
    $title = _('Rules');
    $description = 'The rules that all Touhou World Cup players have to abide by';
    $keywords = 'touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2022 competition, scoring, survival, tournament, rules';
    include_once 'php/locale.php';
    include_once 'php/head.php';
?>

<body>
	<?php include_once 'php/body.php' ?>
	<main>
	<h1 id='rules'><?php echo _('Rules') ?></h1>
    <h2><?php echo _('Format') ?></h2>
        <p><?php echo _('The players from each team will play against each other simultaneously.') ?></p>
        <p><?php echo _('For every match, each player can earn points for their team:') ?></p>
        <ul>
            <li><?php echo _('1st place - 2 points') ?></li>
            <li><?php echo _('2nd place - 1 point') ?></li>
            <li><?php echo _('3rd place - 0 points') ?></li>
        </ul>
        <p><?php echo _('In 2-team matches, the first place will gain 2 points and second place will gain 1 point.') ?></p>
        <p><?php
            echo _('If multiple players have the same TWCScore at the end of a match, they are considered tied and their points will be split equally.');
        ?></p>
        <p><?php echo _('Whichever team has the most points at the end of Touhou World Cup is the winner.') ?></p>
    <hr>
    <h2><?php echo _('TWCScore') ?></h2>
        <p><?php echo _('The quality of credits is calculated through the <a href="twcscore">TWCScore Calculator</a>. This is a scoring metric which compensates for differences in shot type performance so that there is a point of comparison between credits in a category.') ?></p>
        <p><?php echo _('The TWCScore of credits is used to determine player ranking at the end of a match, with each player\'s best performing credit being used.') ?></p>
        <p><?php echo _('For Survival Categories, each shot type starts with a prescribed TWCScore with this value being cut in half every time the player dies.') ?></p>
        <p><?php echo _('For Scoring Categories, TWCScore increases exponentially as the player\'s in-game score increases.') ?></p>
    <hr>
    <h2><?php echo _('Reset Timer') ?></h2>
        <p><?php echo _('Each Category has a Reset Timer which counts down as the match progresses, this shows the time in which a player can start a new credit.') ?></p>
        <p><?php echo _('Players can start as many credits as they want while the Reset Timer is counting down.') ?></p>
        <p><?php echo _('When the timer reaches zero, the players cannot start any new credits, but they can finish a credit already in progress.') ?></p>
    <hr>
    <h2><?php echo _('Gameplay Rules') ?></h2>
        <h3><?php echo _('Survival Categories') ?></h3>
            <p><?php echo _('In Survival Categories, players will try to finish the game without dying. ' .
            'They can only die a maximum of five times and are not allowed to use bombs or any other in game mechanics to help them.') ?></p>
            <p><?php echo _('Here is a quick breakdown of how different game mechanics affect Survival Categories:') ?></p>
            <h4><?php echo _('All Touhou Games') ?></h4>
                <p><?php echo _('Bombs: Bombing at anytime is considered two deaths.') ?></p>
            <h4><?php echo _('Touhou 7') ?></h4>
                <p><?php echo _('Supernatural Border: Breaking a border manually by pressing the bomb key is considered two deaths. ' .
                'However, running into a bullet while a border is active will only count as one death.') ?></p>
            <h4><?php echo _('Touhou 8') ?></h4>
                <p><?php echo _('Last Spell: Getting hit during a Last Spell is considered a death. Not meeting the time orb requirement in Stage 1-5 is also considered a death. ' .
                'Timing out a Last Spell is <strong>not</strong> considered a death. Failing any number of Kaguya\'s Last Spells counts as 1 death, even if the player dies more than once.') ?></p>
            <h4><?php echo _('Touhou 12') ?></h4>
                <p><?php echo _('UFOs: Summoning a UFO is considered a death. However, collecting UFO tokens is allowed and does not count as a death.') ?></p>
            <h4><?php echo _('Touhou 13') ?></h4>
                <p><?php echo _('Trance: A manually activated trance is considered two deaths.<br>' .
                'Additionally, there is a TWCScore Bonus for a credit that captures all spellcards and finishes with zero deaths.') ?></p>
            <h4><?php echo _('Touhou 16') ?></h4>
                <p><?php echo _('Season Release: Releasing your season gauge is considered two deaths.') ?></p>
            <h4><?php echo _('Touhou 17') ?></h4>
                <p><?php echo _('Animal Spirits: Channeling a Berserk Roar (3 or more of the same animal tokens during roar mode) is considered 2 deaths. ' .
                'Breaking a Beserk Roar by touching a bullet gives no extra punishment. However, breaking either a Beserk Roar or a Standard Roar ' .
                'by pressing the bomb key will always be considered one death.') ?></p>
            <h4><?php echo _('Touhou 18') ?></h4>
                <p><?php echo _('Cards: Players are not allowed to use cards.<br>' .
                'Additionally, the players are only allowed to buy "Money Comes and Goes On its Own" from the card shop between stages.') ?></p>
                <img src='assets/moneycard.png' alt='Money Comes and Goes On its Own card' width=96 height=120>
                <p><?php echo _('<em>The "Money Comes and Goes On its Own" card.</em>') ?></p>
        <h3><?php echo _('Scoring Categories') ?></h3>
            <p><?php echo _('In Scoring Categories the players will try to finish the game while gaining the highest score possible. ' .
            'They can die, bomb and use any other mechanics as much as they want.') ?></p>
            <p><?php echo _('Some extra details about Scoring Categories:') ?></p>
            <ul>
                <li><?php echo _('Unlike previous years of TWC, there is now no penalty to TWCScore if a player Game Overs in a Scoring Category.') ?></li>
                <li><?php echo _('In Touhou 17 and Touhou 18, it is possible to reach the maximum value the score counter can display, known as a counterstop. ' .
                'If this happens, we will use the player\'s "True Score" which can be determined by using counterstop removal patches.') ?></li>
                <li><?php echo _('In Touhou 12, the score counter will display the player\'s score incorrectly if the score reaches a high enough value. ' .
                'However, if this happens, the game will still record the player\'s score correctly on ' .
                'the high score leaderboard and that value will be used instead.') ?></li>
            </ul>
    <hr>
    <h2><?php echo _('Allowed Game Mods') ?></h2>
    <p><?php echo _('Vpatch is allowed for all applicable games.') ?></p>
    <p><?php echo _('thprac can be used for practice during a match, but all cheats must be disabled when performing credits.') ?></p>
    <p><?php echo _('Counterstop Removal Patches and Scorebug Patches are allowed.') ?></p>
    <p><?php echo _('Visual, Audio and Translation patches are not allowed.') ?></p>
    <hr>
    <h2><?php echo _('Other Rules') ?></h2>
    <ul>
        <li><?php echo _('Players must stream their gameplay while playing their match, without covering any HUD or gameplay elements.') ?></li>
        <li><?php echo _('The replay file of each player\'s best performing credit must be submitted to the TWC Committee at the end of a match.') ?></li>
        <li><?php echo _('Please hide the ending when you reach the end of the game.') ?></li>
    </ul>
    <hr>
    <h2><?php echo _('Full Official Rules') ?></h2>
    <p><?php echo _('The full official rulebook can be found <a href="assets/TWC_Handbook.pdf" target="_blank">here</a>. Currently, it is only available in the English language.') ?></p>
    <p><a href="#top"><?php echo _('Back to Top') ?></a></p>
	</main>
</body>
</html>
