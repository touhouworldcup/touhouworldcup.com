<?php
    $title = _('Rules');
    $description = 'The rules that all Touhou World Cup players have to abide by';
    $keywords = 'touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2024, competition, scoring, survival, tournament, rules';
    include_once 'php/locale.php';
    include_once 'php/head.php';
?>

<body>
	<?php include_once 'php/body.php' ?>
	<main>
	<h1 id='rules'><?php echo _('Rules') ?></h1>
    <h2><?php echo _('Full Official Rules') ?></h2>
    <p><?php echo _('The full official rulebook can be found here:') ?></p>
    <ul class="style-none">
        <li>English: <a href="https://docs.google.com/document/d/e/2PACX-1vTATjRLhS3tTXoyp1NtoSVVsehDgVm22QZxBOCCnrXWVpzycXxz6Y4NDh7rX850ihByJ3-LUDrL24HU/pub" target="_blank">TWC Handbook</a></li>
        <li>日本語: <a href="assets/TWC_Handbook_JP.pdf" target="_blank">TWC_Handbook_JP.pdf</a></li>
    </ul>
    <hr>
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
        <p><?php echo _('For Survival Categories, each shot type starts with an initial TWCScore with this value being multiplied by a Rate of Decay between 0 and 1 for every miss the player accrues. Usually the rate is set to 0.5, but a few exceptions exist (e.g. UM Reimu).') ?></p>
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
                <p><?php echo _('Last Spell: Getting hit during a Last Spell is considered a death. Not meeting the time orb requirement in Stage 1-5 is also considered a death.<br>' .
                'Timing out a Last Spell is <strong>not</strong> considered a death.') ?></p>
            <h4><?php echo _('Touhou 9') ?></h4>
                <p><?php echo _('This category is played under different conditions to all other Survival Categories in TWC. ' .
                'There are two scoring methods in this category, and which one will be used will be decided by dialogue with players.') ?></p>
                <h4><?php echo _('Plan A (based on the number of remaining lives)') ?></h4>
                <p><?php echo _('Each Shot Type will be assigned a TWCScore by the TWCScore Rubric according to the number of remaining lives. ' .
                'TWCScore of this category can be regarded as substituting "7 - the number of remaining lives" for the "the number of misses" in the formula of other Survival Categories in TWC, ' .
                'with the exception that a bonus of [0.02 * the duration (in seconds) of Stage 9 first round] is added at the end of a credit. ' .
                'An additional TWCScore bonus will be applied when there are 7 remaining lives. Any credit that ends with less than 2 lives remaining will always attain a TWCScore of zero.') ?></p>
                <h4><?php echo _('Plan B (based on the number of rounds you lost)') ?></h4>
                <p><?php echo _('Each Shot Type will be assigned a TWCScore by the TWCScore Rubric according to the number of rounds you lost. ' .
                'TWCScore of this category can be regarded as substituting "the number of rounds you lost" for the "the number of misses" in the formula of other Survival Categories in TWC, ' .
                'with the exception that a bonus of [0.02 * the duration (in seconds) of Stage 9 first round] is added at the end of a credit. ' . 
                'An additional TWCScore bonus will be applied when you never lose any rounds. Any credit which accrues more than 5 rounds lost total will always attain a TWCScore of zero.') ?></p>
            <h4><?php echo _('Touhou 11') ?></h4>
                <p><?php echo _('For some shottypes, capturing Cat Sign "Vengeful Cat Spirit\'s Erratic Step" (Stage 5 midspell) will award a Challenge Bonus that is added to the initial TWCScore and is subject to the same score reduction from misses.') ?></p>
            <h4><?php echo _('Touhou 12') ?></h4>
                <p><?php echo _('UFOs: Summoning a UFO is considered a death. However, collecting UFO tokens is allowed and does not count as a death.') ?></p>
            <h4><?php echo _('Touhou 12.8') ?></h4>
                <p><?php echo _('This category is played under different conditions to all other Survival Categories in TWC. ' .
                'The goal of a player performing a credit in Great Fairy Wars Lunatic Survival is to play through the game on Lunatic difficulty while avoiding all enemy attacks and gaining gold medals from spell cards. ' .
                'Gold medals are attained by capturing spell cards without using Ice Power or a Perfect Freeze. ' .
                'TWCScore increases exponentially by the number of gold medals captured by the player and is lost depending on the number of misses. The parameters of this exponential gain are different for each route. ' .
                'The number of misses in a Great Fairy Wars Lunatic Survival credit does not affect the validity of the credit in any form. ' .
                'However, any otherwise valid credit in a match of Great Fairy Wars Lunatic Survival which ends in a Game Over will always attain a TWCScore of -50.') ?></p>
            <h4><?php echo _('Touhou 13') ?></h4>
                <p><?php echo _('Trance: A manually activated trance is considered two deaths.<br>' .
                'Capturing Desire Sign "Score Desire Eater" (Yoshika\'s last spell) will award a Challenge Bonus that is added to the initial TWCScore and is subject to the same score reduction from misses.') ?></p>
            <h4><?php echo _('Touhou 14') ?></h4>
                <p><?php echo _('For some shottypes, capturing Fang Sign "Moonlit Canine Teeth" (Stage 3 midspell) will award a Challenge Bonus that is added to the initial TWCScore and is subject to the same score reduction from misses.') ?></p>
            <h4><?php echo _('Touhou 16') ?></h4>
                <p><?php echo _('Season Release: Releasing your season gauge is considered two deaths.') ?></p>
            <h4><?php echo _('Touhou 17') ?></h4>
                <p><?php echo _('Animal Spirits: Channeling a Berserk Roar (3 or more of the same animal tokens during roar mode) is considered 2 deaths. ' .
                'Breaking a Berserk Roar by touching a bullet gives no extra punishment. However, breaking either a Berserk Roar or a Standard Roar ' .
                'by pressing the bomb key will always be considered one death.') ?></p>
            <h4><?php echo _('Touhou 18') ?></h4>
                <p><?php echo _('Only four ability cards are allowed to be equipped, used or activated at any time. These are:') ?></p>
                <ul>
                    <li><?php echo _('Money Comes and Goes On its Own') ?></li>
                    <li><?php echo _('Fragmented Life Card') ?></li>
                    <li><?php echo _('Fragmented Spell Card') ?></li>
                    <li><?php echo _('Ringo-Brand Dango') ?></li>
                </ul>
                <p><?php echo _('Additionally, the players are only allowed to buy "Money Comes and Goes On its Own" from the card shop between stages.') ?></p>
                <img src='assets/moneycard.png' alt='Money Comes and Goes On its Own card' width=96 height=120>
                <p><?php echo _('<em>The "Money Comes and Goes On its Own" card.</em>') ?></p>
            <h4><?php echo _('Touhou 19') ?></h4>
                <p><?php echo _('Players will incur no penalty for taking a hit with a shield active. Players will also incur no penalty for regenerating their shield by using their gauge.') ?></p>
        <h3><?php echo _('Scoring Categories') ?></h3>
            <p><?php echo _('In Scoring Categories the players will try to finish the game while gaining the highest score possible. ' .
            'They can die, bomb and use any other mechanics as much as they want.') ?></p>
            <p><?php echo _('Some extra details about Scoring Categories:') ?></p>
            <ul>
                <li><?php echo _('Unlike previous years of TWC, there is now no penalty to TWCScore if a player Game Overs in a Scoring Category.') ?></li>
                <li><?php echo _('Players of the Phantasmagoria of Flower View Lunatic Scoring category are not allowed to select Aya or Medicine.') ?></li>
                <li><?php echo _('In Touhou 17 and Touhou 18, it is possible to reach the maximum value the score counter can display, known as a counterstop. ' .
                'If this happens, we will use the player\'s "True Score" which can be determined by using counterstop removal patches.') ?></li>
                <li><?php echo _('In Touhou 12, the score counter will display the player\'s score incorrectly if the score reaches a high enough value. ' .
                'However, if this happens, the game will still record the player\'s score correctly on ' .
                'the high score leaderboard and that value will be used instead.') ?></li>
                <li><?php echo _('In Touhou 18, the "Market Manip." option from thprac is allowed for use. ' .
                'However, credits that directly use Market Manipulation are considered invalid. Market Manipulation can be performed both before and during the match. ' .
                'This rule is subject to change depending on dialogue with players.') ?></li>
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
    <p><a href="#top"><?php echo _('Back to Top') ?></a></p>
	</main>
</body>
</html>
