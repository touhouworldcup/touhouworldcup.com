<?php
    $title = _('Artworks');
    $description = 'Official artworks commissioned by TWC staff';
    $keywords = 'touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2024, competition, scoring, survival, tournament, fan-art, art';
    include_once 'php/locale.php';
    include_once 'php/head.php';
?>

<body>
	<?php include_once 'php/body.php' ?>
	<main>
        <h1><?php echo _("Artworks") ?></h1>
        <h2 class="contents"><?php echo _('Contents') ?></h2>
        <div class="contents">
            <p><a href="#2024">2024</a></p>
            <p><a href="#2023">2023</a></p>
        </div>

        <h2 id="2024">TWC 2024</h2>
        <h2><a class="expander" onclick="art_hide(this)">⮟</a> <?php echo _("Collaborative works") ?></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/ddc_scoring.png">
                <h4>TH14 Lunatic Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/EoSD_Lunatic_Scoring.png">
                <h4>TH06 Lunatic Scoring</h4>
                <?php echo _("Created by:") ?> らかさぁ, あずまよりこ
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> Addamelech <a href="https://twitter.com/addamelech"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a> <a href="https://www.pixiv.net/en/users/2570621"><img src="/assets/icons/pixiv-icon.png" alt="Pixiv icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/TD_Extra_Scoring.png">
                <h4>TH13 Extra Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/mof_ex.png">
                <h4>TH10 Extra Scoring</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> TurboOven9000 <a href="https://www.tumblr.com/turbooven9000"><img src="/assets/icons/tumblr-icon.png" alt="Tumblr icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/UFO_Lunatic_Survival.png">
                <h4>TH12 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/HSiFS_Extra_Scoring.png">
                <h4>TH16 Extra Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/eosd_lnb.png">
                <h4>TH06 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/wbawc_scoring.png">
                <h4>TH17 Lunatic Scoring</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> Ciel-9 <a href="https://twitter.com/Cirnolover9"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/EoSD_Extra_Scoring.png">
                <h4>TH06 Extra Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/IN_Lunatic_Scoring.png">
                <h4>TH08 Lunatic Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/gfw_scoring.png">
                <h4>TH128 Lunatic Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/pcb_ex.png">
                <h4>TH07 Extra Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/pofv_lnb.png">
                <h4>TH09 Lunatic Survival</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> Redler Red7 <a href="https://twitter.com/redlerred7"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a> <a href="https://redlerred7.tumblr.com/"><img src="/assets/icons/tumblr-icon.png" alt="Tumblr icon"></a> <a href="https://pixiv.me/redlerred7"><img src="/assets/icons/pixiv-icon.png" alt="Pixiv icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/DDC_Lunatic_Survival.png">
                <h4>TH14 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/mof_scoring.png">
                <h4>TH10 Lunatic Scoring</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> Starmanz <a href="https://twitter.com/Its_a_Starman"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/WBaWC_Lunatic_Survival.png">
                <h4>TH17 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/ufo_scoring.png">
                <h4>TH12 Lunatic Scoring</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> 砕氷 <a href="https://twitter.com/CreepingBarrett"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a> <a href="https://www.pixiv.net/en/users/9337602"><img src="/assets/icons/pixiv-icon.png" alt="Pixiv icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/TD_Lunatic_Survival.png">
                <h4>TH13 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/in_lnb.png">
                <h4>TH08 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/td_ex.png">
                <h4>TH13 Extra Scoring</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> WErty</h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/PCB_Lunatic_Scoring.png">
                <h4>TH07 Lunatic Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/UFO_Lunatic_Scoring.png">
                <h4>TH12 Lunatic Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/eosd_scoring.png">
                <h4>TH06 Lunatic Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/pcb_scoring.png">
                <h4>TH07 Lunatic Scoring</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> Muzilana <a href="https://twitter.com/muzilana1"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a> <a href="https://www.pixiv.net/en/users/32090790"><img src="/assets/icons/pixiv-icon.png" alt="Pixiv icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/HSiFS_Lunatic_Survival.png">
                <h4>TH16 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/WBaWC_Lunatic_Scoring.png">
                <h4>TH17 Lunatic Scoring</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> Skywalker2016GD <a href="https://twitter.com/Skywalker2016GD"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/TD_Lunatic_Scoring.png">
                <h4>TH13 Lunatic Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/td_scoring.png">
                <h4>TH13 Lunatic Scoring</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> スライス蛸足 <a href="https://twitter.com/S_tako_"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/IN_Lunatic_Survival.png">
                <h4>TH08 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/eosd_ex.png">
                <h4>TH06 Extra Scoring</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> はらぴょん <a href="https://twitter.com/harapyon9711"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/PoFV_Lunatic_Scoring.png">
                <h4>TH09 Lunatic Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/pcb_lnb.png">
                <h4>TH07 Lunatic Survival</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> こがらし <a href="https://twitter.com/chiyonosuki"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a> <a href="https://www.pixiv.net/users/28927093"><img src="/assets/icons/pixiv-icon.png" alt="Pixiv icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/MoF_Lunatic_Survival.png">
                <h4>TH10 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/mof_lnb.png">
                <h4>TH10 Lunatic Survival</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> OmegaOof <a href="https://www.pixiv.net/en/users/64677321"><img src="/assets/icons/pixiv-icon.png" alt="Pixiv icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/LoLK_Lunatic_Scoring.png">
                <h4>TH15 Lunatic Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/lolk_scoring.png">
                <h4>TH15 Lunatic Scoring</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> せい <a href="https://twitter.com/nonorieo__"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/GFW_Lunatic_Scoring.png">
                <h4>TH128 Lunatic Scoring</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> りんり <a href="https://twitter.com/pachurinri"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/PCB_Lunatic_Survival.png">
                <h4>TH07 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/in_scoring.png">
                <h4>TH08 Lunatic Scoring</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> Sachisu <a href="https://twitter.com/sachisudesu"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/SA_Lunatic_Survival.png">
                <h4>TH11 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/udoalg_lnb.png">
                <h4>TH19 Lunatic Survival</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> hrm <a href="https://twitter.com/hrm_wata"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a> <a href="https://www.pixiv.net/users/1526168"><img src="/assets/icons/pixiv-icon.png" alt="Pixiv icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/PCB_Extra_Scoring.png">
                <h4>TH07 Extra Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/hsifs_ex.png">
                <h4>TH16 Extra Scoring</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> mero <a href="https://merort.tumblr.com/"><img src="/assets/icons/tumblr-icon.png" alt="Tumblr icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/DDC_Extra_Scoring.png">
                <h4>TH14 Extra Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/ddc_ex.png">
                <h4>TH14 Extra Scoring</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> indigo <a href="https://twitter.com/IKuroto"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/PCB_Phantasm_Scoring.png">
                <h4>TH07 Phantasm Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/pcb_phantasm.png">
                <h4>TH07 Phantasm Scoring</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> うめ <a href="https://twitter.com/umebitansan"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a> <a href="https://www.pixiv.net/users/72729141"><img src="/assets/icons/pixiv-icon.png" alt="Pixiv icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/UM_Lunatic_Survival.png">
                <h4>TH18 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/gfw_survival.png">
                <h4>TH128 Lunatic Survival</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> 松本岡 <a href="https://twitter.com/kan10na2"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a> <a href="https://www.pixiv.net/users/33532818"><img src="/assets/icons/pixiv-icon.png" alt="Pixiv icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/SA_Extra_Scoring.png">
                <h4>TH11 Extra Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/LoLK_Lunatic_Survival.png">
                <h4>TH15 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/ddc_lnb.png">
                <h4>TH14 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/lolk_lnb.png">
                <h4>TH15 Lunatic Survival</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> 鈴奈神楽 <a href="https://twitter.com/Suzuna_Kagura"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/UDoALG_Lunatic_Survival.png">
                <h4>TH19 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/wbawc_lnb.png">
                <h4>TH17 Lunatic Survival</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> 陽菜 <a href="https://twitter.com/tukudani_2005"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/MoF_Extra_Scoring.png">
                <h4>TH10 Extra Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/pofv_scoring.png">
                <h4>TH09 Lunatic Scoring</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> yeashie <a href="https://twitter.com/danmaku_stg"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/GFW_Lunatic_Survival.png">
                <h4>TH128 Lunatic Survival</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> ふぇぶりゅう <a href="https://twitter.com/MppjU"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a> <a href="https://www.pixiv.net/users/15053330"><img src="/assets/icons/pixiv-icon.png" alt="Pixiv icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/EoSD_Lunatic_Survival.png">
                <h4>TH06 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/td_lnb.png">
                <h4>TH13 Lunatic Survival</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> 桃里 <a href="https://twitter.com/210marisa"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a> <a href="https://www.pixiv.net/users/13691788"><img src="/assets/icons/pixiv-icon.png" alt="Pixiv icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/PoFV_Lunatic_Survival.png">
                <h4>TH09 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/sa_lnb.png">
                <h4>TH11 Lunatic Survival</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> seri <a href="https://twitter.com/serichii4"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/MoF_Lunatic_Scoring.png">
                <h4>TH10 Lunatic Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/ufo_lnb.png">
                <h4>TH12 Lunatic Survival</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> Nill-Milan <a href="https://twitter.com/Nill_Milan"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/DDC_Lunatic_Scoring.png">
                <h4>TH14 Lunatic Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2024/hsifs_lnb.png">
                <h4>TH16 Lunatic Survival</h4>
            </div>
        </div>

        <h2><a class="expander" onclick="art_hide(this)">⮟</a> らかさぁ <a href="https://twitter.com/rakasa0923"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/sa_ex.png">
                <h4>TH11 Extra Scoring</h4>
            </div>
        </div>
        
        <h2><a class="expander" onclick="art_hide(this)">⮟</a> あずまよりこ <a href="https://twitter.com/AzumaYoriko"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a> <a href="https://www.pixiv.net/users/37450350"><img src="/assets/icons/pixiv-icon.png" alt="Pixiv icon"></a></h2>
        <div>
            <div class="illustration">
                <img src="/static/art/2024/um_lnb.png">
                <h4>TH18 Lunatic Survival</h4>
            </div>
        </div>

        <h2 id="2023">TWC 2023</h2>
        <h2><a class="expander" onclick="art_show(this)">⮞</a> <?php echo _("Collaborative works") ?></h2>
        <div class="art_past">
            <div class="illustration">
                <img src="/static/art/2023/Final_Illustration.png">
                <h4><?php echo _('2023: Final Illustration') ?></h4>
            </div>
            <div class="collab illustration">
                <img src="/static/art/2023/th08_survival.png">
                <h4>TH08 Lunatic Survival</h4>
                <?php echo _("Created by:") ?> Aqwa, DJThunderHeart, trisector
            </div>
        </div>

        <h2><a class="expander" onclick="art_show(this)">⮞</a> Addamelech <a href="https://twitter.com/addamelech"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a> <a href="https://www.pixiv.net/en/users/2570621"><img src="/assets/icons/pixiv-icon.png" alt="Pixiv icon"></a></h2>
        <div class="art_past">
            <div class="illustration">
                <img src="/static/art/2023/th06_scoring.png">
                <h4>TH06 Lunatic Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2023/th06_scoring_ex.png">
                <h4>TH06 Extra Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2023/th11_scoring.png">
                <h4>TH11 Lunatic Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2023/th128_scoring.png">
                <h4>TH128 Lunatic Scoring</h4>
            </div>
        </div>
        
        <h2><a class="expander" onclick="art_show(this)">⮞</a> Aqwa <a href="https://twitter.com/aqwwa58"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a> <a href="https://aqwwa58.tumblr.com/"><img src="/assets/icons/tumblr-icon.png" alt="Tumblr icon"></a></h2>
        <div class="art_past">
            <div class="illustration">
                <img src="/static/art/2023/th07_scoring.png">
                <h4>TH07 Lunatic Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2023/th10_scoring.png">
                <h4>TH10 Lunatic Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2023/th11_survival.png">
                <h4>TH11 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2023/th12_survival.png">
                <h4>TH12 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2023/th12_scoring.png">
                <h4>TH12 Lunatic Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2023/th14_scoring.png">
                <h4>TH14 Lunatic Scoring</h4>
            </div>
        </div>
        <!--<h2><a class="expander" onclick="art_show(this)">⮞</a> daisymels <a href="https://twitter.com/daisymels"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a> <a href="https://daisymels.tumblr.com/"><img src="/assets/icons/tumblr-icon.png" alt="Tumblr icon"></a></h2>
        <div>
            
        </div>-->
        <h2><a class="expander" onclick="art_show(this)">⮞</a> DJThunderHeart <a href="https://linktr.ee/djthunderheart"><img src="/assets/icons/linktree-icon.png"></a></h2>
        <div class="art_past">
            <div class="illustration">
                <img src="/static/art/2023/th17_survival.png">
                <h4>TH17 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2023/th18_survival.png">
                <h4>TH18 Lunatic Survival</h4>
            </div>
        </div>
        <h2><a class="expander" onclick="art_show(this)">⮞</a> Muzilana <a href="https://twitter.com/muzilana1"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a> <a href="https://www.pixiv.net/en/users/32090790"><img src="/assets/icons/pixiv-icon.png" alt="Pixiv icon"></a></h2>
        <div class="art_past">
            <div class="illustration">
                <img src="/static/art/2023/th14_survival.png">
                <h4>TH14 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2023/th14_scoring_ex.png">
                <h4>TH14 Extra Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2023/th15_survival.jpg">
                <h4>TH15 Lunatic Survival</h4>
            </div>
        </div>
        <h2><a class="expander" onclick="art_show(this)">⮞</a> Oligarchomp <a href="https://twitter.com/oligarchomp"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div class="art_past">
            <div class="illustration">
                <img src="/static/art/2023/th11_scoring_ex.png">
                <h4>TH11 Extra Scoring</h4>
            </div>
        </div>
        <h2><a class="expander" onclick="art_show(this)">⮞</a> pisangmolen <a href="https://twitter.com/314smol"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div class="art_past">
            <div class="illustration">
                <img src="/static/art/2023/th07_scoring_ex.png">
                <h4>TH07 Extra Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2023/th08_scoring_ex.png">
                <h4>TH08 Extra Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2023/th13_scoring.png">
                <h4>TH13 Lunatic Scoring</h4>
            </div>
        </div>
        <h2><a class="expander" onclick="art_show(this)">⮞</a> sleepymausu <a href="https://twitter.com/sleepymausu"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div class="art_past">
            <div class="illustration">
                <img src="/static/art/2023/th07_survival.png">
                <h4>TH07 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2023/th09_scoring.png">
                <h4>TH09 Lunatic Scoring</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2023/th10_survival.png">
                <h4>TH10 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2023/th16_survival.png">
                <h4>TH16 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2023/th16_scoring.png">
                <h4>TH16 Lunatic Scoring</h4>
            </div>
        </div>
        <h2><a class="expander" onclick="art_show(this)">⮞</a> trisector <a href="https://twitter.com/tris3ctor"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div class="art_past">
            <div class="illustration">
                <img src="/static/art/2023/th06_survival.png">
                <h4>TH06 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2023/th08_scoring.png">
                <h4>TH08 Lunatic Scoring</h4>
            </div>
        </div>
        <h2><a class="expander" onclick="art_show(this)">⮞</a> yeashie <a href="https://twitter.com/danmaku_stg"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a></h2>
        <div class="art_past">
            <div class="illustration">
                <img src="/static/art/2023/th128_survival.png">
                <h4>TH128 Lunatic Survival</h4>
            </div>
            <div class="illustration">
                <img src="/static/art/2023/th18_scoring.png">
                <h4>TH18 Lunatic Scoring</h4>
            </div>
        </div>
        <h2><a class="expander" onclick="art_show(this)">⮞</a> 砕氷 <a href="https://twitter.com/CreepingBarrett"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a> <a href="https://www.pixiv.net/en/users/9337602"><img src="/assets/icons/pixiv-icon.png" alt="Pixiv icon"></a></h2>
        <div class="art_past">
            <div class="illustration">
                <img src="/static/art/2023/th17_scoring.png">
                <h4>TH17 Lunatic Scoring</h4>
            </div>
        </div>
	</main>
</body>
</html>
