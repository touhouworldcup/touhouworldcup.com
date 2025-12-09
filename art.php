<?php
    $title = _('Artworks');
    $description = 'Official artworks commissioned by TWC staff';
    $keywords = 'touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2024, competition, scoring, survival, tournament, fan-art, art';
    include_once 'php/locale.php';
    include_once 'php/head.php';

    // 4:3 thumbnail_size = (500, 375)
    // 16:9 thumbnail_size = (640, 360)

    $end_cards_2024 = [
        ["TH06 Lunatic Survival", "EoSD_Lunatic_Survival.png", "ふぇぶりゅう", [["twitter", "https://twitter.com/MppjU"], ["pixiv", "https://www.pixiv.net/users/15053330"]]],
        ["TH06 Lunatic Scoring", "EoSD_Lunatic_Scoring.png", "らかさぁ, あずまよりこ", []],
        ["TH06 Extra Scoring", "EoSD_Extra_Scoring.png", "Ciel-9", [["twitter", "https://twitter.com/Cirnolover9"]]],
        ["TH07 Lunatic Survival", "PCB_Lunatic_Survival.png", "りんり", [["twitter", "https://twitter.com/pachurinri"]]],
        ["TH07 Lunatic Scoring", "PCB_Lunatic_Scoring.png", "WErty", []],
        ["TH07 Extra Scoring", "PCB_Extra_Scoring.png", "hrm", [["twitter", "https://twitter.com/hrm_wata"], ["pixiv", "https://www.pixiv.net/users/1526168"]]],
        ["TH07 Phantasm Scoring", "PCB_Phantasm_Scoring.png", "indigo", [["twitter", "https://twitter.com/IKuroto"]]],
        ["TH08 Lunatic Survival", "IN_Lunatic_Survival.png", "スライス蛸足", [["twitter", "https://twitter.com/S_tako_"]]],
        ["TH08 Lunatic Scoring", "IN_Lunatic_Scoring.png", "Ciel-9", [["twitter", "https://twitter.com/Cirnolover9"]]],
        ["TH09 Lunatic Survival", "PoFV_Lunatic_Survival.png", "桃里", [["twitter", "https://twitter.com/210marisa"], ["pixiv", "https://www.pixiv.net/users/13691788"]]],
        ["TH09 Lunatic Scoring", "PoFV_Lunatic_Scoring.png", "はらぴょん", [["twitter", "https://twitter.com/harapyon9711"]]],
        ["TH10 Lunatic Survival", "MoF_Lunatic_Survival.png", "こがらし", [["twitter", "https://twitter.com/chiyonosuki"], ["pixiv", "https://www.pixiv.net/users/28927093"]]],
        ["TH10 Lunatic Scoring", "MoF_Lunatic_Scoring.png", "seri", [["twitter", "https://twitter.com/serichii4"]]],
        ["TH10 Extra Scoring", "MoF_Extra_Scoring.png",  "陽菜", [["twitter", "https://twitter.com/tukudani_2005"]]],
        ["TH11 Lunatic Survival", "SA_Lunatic_Survival.png", "Sachisu", [["twitter", "https://twitter.com/sachisudesu"]]],
        ["TH11 Extra Scoring", "SA_Extra_Scoring.png", "松本岡", [["twitter", "https://twitter.com/kan10na2"], ["pixiv", "https://www.pixiv.net/users/33532818"]]],
        ["TH12 Lunatic Survival", "UFO_Lunatic_Survival.png", "TurboOven9000", [["tumblr", "https://www.tumblr.com/turbooven9000"]]],
        ["TH12 Lunatic Scoring", "UFO_Lunatic_Scoring.png", "WErty", []],
        ["TH128 Lunatic Survival", "GFW_Lunatic_Survival.png", "yeashie", [["twitter", "https://twitter.com/danmaku_stg"]]],
        ["TH128 Lunatic Scoring", "GFW_Lunatic_Scoring.png", "せい", [["twitter", "https://twitter.com/nonorieo__"]]],
        ["TH13 Lunatic Survival", "TD_Lunatic_Survival.png", "砕氷", [["twitter", "https://twitter.com/CreepingBarrett"], ["pixiv", "https://www.pixiv.net/en/users/9337602"]]],
        ["TH13 Lunatic Scoring", "TD_Lunatic_Scoring.png", "Skywalker2016GD", [["twitter", "https://twitter.com/Skywalker2016GD"]]],
        ["TH13 Extra Scoring", "TD_Extra_Scoring.png", "Addamelech", [["twitter", "https://twitter.com/addamelech"], ["pixiv", "https://www.pixiv.net/en/users/2570621"]]],
        ["TH14 Lunatic Survival", "DDC_Lunatic_Survival.png", "Redler Red7", [["twitter", "https://twitter.com/redlerred7"], ["tumblr", "https://redlerred7.tumblr.com/"], ["pixiv", "https://pixiv.me/redlerred7"]]],
        ["TH14 Lunatic Scoring", "DDC_Lunatic_Scoring.png", "Nill-Milan", [["twitter", "https://twitter.com/Nill_Milan"]]],
        ["TH14 Extra Scoring", "DDC_Extra_Scoring.png", "mero", [["tumblr", "https://merort.tumblr.com/"]]],
        ["TH15 Lunatic Survival", "LoLK_Lunatic_Survival.png", "松本岡", [["twitter", "https://twitter.com/kan10na2"], ["pixiv", "https://www.pixiv.net/users/33532818"]]],
        ["TH15 Lunatic Scoring", "LoLK_Lunatic_Scoring.png", "OmegaOof", [["pixiv", "https://www.pixiv.net/en/users/64677321"]]],
        ["TH16 Lunatic Survival", "HSiFS_Lunatic_Survival.png", "Muzilana", [["twitter", "https://twitter.com/muzilana1"], ["pixiv", "https://www.pixiv.net/en/users/32090790"]]],
        ["TH16 Extra Scoring", "HSiFS_Extra_Scoring.png", "TurboOven9000", [["tumblr", "https://www.tumblr.com/turbooven9000"]]],
        ["TH17 Lunatic Survival", "WBaWC_Lunatic_Survival.png", "Starmanz", [["twitter", "https://twitter.com/Its_a_Starman"]]],
        ["TH17 Lunatic Scoring", "WBaWC_Lunatic_Scoring.png", "Muzilana", [["twitter", "https://twitter.com/muzilana1"], ["pixiv", "https://www.pixiv.net/en/users/32090790"]]],
        ["TH18 Lunatic Survival", "UM_Lunatic_Survival.png", "うめ", [["twitter", "https://twitter.com/umebitansan"], ["pixiv", "https://www.pixiv.net/users/72729141"]]],
        ["TH19 Lunatic Survival", "UDoALG_Lunatic_Survival.png", "鈴奈神楽", [["twitter", "https://twitter.com/Suzuna_Kagura"]]],
    ];

    $final_2024 = [
        ["TH06 Lunatic Survival", "eosd_lnb.png", "TurboOven9000", [["tumblr", "https://www.tumblr.com/turbooven9000"]]],
        ["TH06 Lunatic Scoring", "eosd_scoring.png", "WErty", []],
        ["TH06 Extra Scoring", "eosd_ex.png", "スライス蛸足", [["twitter", "https://twitter.com/S_tako_"]]],
        ["TH07 Lunatic Survival", "pcb_lnb.png", "はらぴょん", [["twitter", "https://twitter.com/harapyon9711"]]],
        ["TH07 Lunatic Scoring", "pcb_scoring.png", "WErty", []],
        ["TH07 Extra Scoring", "pcb_ex.png", "Ciel-9", [["twitter", "https://twitter.com/Cirnolover9"]]],
        ["TH07 Phantasm Scoring", "pcb_phantasm.png", "indigo", [["twitter", "https://twitter.com/IKuroto"]]],
        ["TH08 Lunatic Survival", "in_lnb.png", "砕氷", [["twitter", "https://twitter.com/CreepingBarrett"], ["pixiv", "https://www.pixiv.net/en/users/9337602"]]],
        ["TH08 Lunatic Scoring", "in_scoring.png", "りんり", [["twitter", "https://twitter.com/pachurinri"]]],
        ["TH09 Lunatic Survival", "pofv_lnb.png", "Ciel-9", [["twitter", "https://twitter.com/Cirnolover9"]]],
        ["TH09 Lunatic Scoring", "pofv_scoring.png", "陽菜", [["twitter", "https://twitter.com/tukudani_2005"]]],
        ["TH10 Lunatic Survival", "mof_lnb.png", "こがらし", [["twitter", "https://twitter.com/chiyonosuki"], ["pixiv", "https://www.pixiv.net/users/28927093"]]],
        ["TH10 Lunatic Scoring", "mof_scoring.png", "Redler Red7", [["twitter", "https://twitter.com/redlerred7"], ["tumblr", "https://redlerred7.tumblr.com/"], ["pixiv", "https://pixiv.me/redlerred7"]]],
        ["TH10 Extra Scoring", "mof_ex.png", "Addamelech", [["twitter", "https://twitter.com/addamelech"], ["pixiv", "https://www.pixiv.net/en/users/2570621"]]],
        ["TH11 Lunatic Survival", "sa_lnb.png", "桃里", [["twitter", "https://twitter.com/210marisa"], ["pixiv", "https://www.pixiv.net/users/13691788"]]],
        ["TH11 Extra Scoring", "sa_ex.png", "らかさぁ", [["twitter", "https://twitter.com/rakasa0923"]]],
        ["TH12 Lunatic Survival", "ufo_lnb.png", "seri", [["twitter", "https://twitter.com/serichii4"]]],
        ["TH12 Lunatic Scoring", "ufo_scoring.png", "Starmanz", [["twitter", "https://twitter.com/Its_a_Starman"]]],
        ["TH128 Lunatic Survival", "gfw_survival.png", "うめ", [["twitter", "https://twitter.com/umebitansan"], ["pixiv", "https://www.pixiv.net/users/72729141"]]],
        ["TH128 Lunatic Scoring", "gfw_scoring.png", "Ciel-9", [["twitter", "https://twitter.com/Cirnolover9"]]],
        ["TH13 Lunatic Survival", "td_lnb.png", "ふぇぶりゅう", [["twitter", "https://twitter.com/MppjU"], ["pixiv", "https://www.pixiv.net/users/15053330"]]],
        ["TH13 Lunatic Scoring", "td_scoring.png", "Skywalker2016GD", [["twitter", "https://twitter.com/Skywalker2016GD"]]],
        ["TH13 Extra Scoring", "td_ex.png", "砕氷", [["twitter", "https://twitter.com/CreepingBarrett"], ["pixiv", "https://www.pixiv.net/en/users/9337602"]]],
        ["TH14 Lunatic Survival", "ddc_lnb.png", "松本岡", [["twitter", "https://twitter.com/kan10na2"], ["pixiv", "https://www.pixiv.net/users/33532818"]]],
        ["TH14 Lunatic Scoring", "ddc_scoring.png", "らかさぁ, あずまよりこ", []],
        ["TH14 Extra Scoring", "ddc_ex.png", "mero", [["tumblr", "https://merort.tumblr.com/"]]],
        ["TH15 Lunatic Survival", "lolk_lnb.png", "松本岡", [["twitter", "https://twitter.com/kan10na2"], ["pixiv", "https://www.pixiv.net/users/33532818"]]],
        ["TH15 Lunatic Scoring", "lolk_scoring.png", "OmegaOof", [["pixiv", "https://www.pixiv.net/en/users/64677321"]]],
        ["TH16 Lunatic Survival", "hsifs_lnb.png", "Nill-Milan", [["twitter", "https://twitter.com/Nill_Milan"]]],
        ["TH16 Extra Scoring", "hsifs_ex.png", "hrm", [["twitter", "https://twitter.com/hrm_wata"], ["pixiv", "https://www.pixiv.net/users/1526168"]]],
        ["TH17 Lunatic Survival", "wbawc_lnb.png", "鈴奈神楽", [["twitter", "https://twitter.com/Suzuna_Kagura"]]],
        ["TH17 Lunatic Scoring", "wbawc_scoring.png", "TurboOven9000", [["tumblr", "https://www.tumblr.com/turbooven9000"]]],
        ["TH18 Lunatic Survival", "um_lnb.png", "あずまよりこ", [["twitter", "https://twitter.com/AzumaYoriko"], ["pixiv", "https://www.pixiv.net/users/37450350"]]],
        ["TH19 Lunatic Survival", "udoalg_lnb.png", "Sachisu", [["twitter", "https://twitter.com/sachisudesu"]]],
    ];

    $end_cards_2023 = [
        ["TH06 Lunatic Survival", "th06_survival.png", "trisector", [["twitter", "https://twitter.com/tris3ctor"]]],
        ["TH06 Lunatic Scoring", "th06_scoring.png", "Addamelech", [["twitter", "https://twitter.com/addamelech"], ["pixiv", "https://www.pixiv.net/en/users/2570621"]]],
        ["TH06 Extra Scoring", "th06_scoring_ex.png", "Addamelech", [["twitter", "https://twitter.com/addamelech"], ["pixiv", "https://www.pixiv.net/en/users/2570621"]]],
        ["TH07 Lunatic Survival", "th07_survival.png", "sleepymausu", [["twitter", "https://twitter.com/sleepymausu"]]],
        ["TH07 Lunatic Scoring", "th07_scoring.png", "Aqwa", [["twitter", "https://twitter.com/aqwwa58"], ["tumblr", "https://aqwwa58.tumblr.com/"]]],
        ["TH07 Extra Scoring", "th07_scoring_ex.png", "pisangmolen", [["twitter", "https://twitter.com/314smol"]]],
        ["TH08 Lunatic Survival", "th08_survival.png", "Aqwa, DJThunderHeart, trisector", []],
        ["TH08 Lunatic Scoring", "th08_scoring.png", "trisector", [["twitter", "https://twitter.com/tris3ctor"]]],
        ["TH08 Extra Scoring", "th08_scoring_ex.png", "pisangmolen", [["twitter", "https://twitter.com/314smol"]]],
        ["TH09 Extra Scoring", "th09_scoring.png", "sleepymausu", [["twitter", "https://twitter.com/sleepymausu"]]],
        ["TH10 Lunatic Survival", "th10_survival.png", "sleepymausu", [["twitter", "https://twitter.com/sleepymausu"]]],
        ["TH10 Lunatic Scoring", "th10_scoring.png", "Aqwa", [["twitter", "https://twitter.com/aqwwa58"], ["tumblr", "https://aqwwa58.tumblr.com/"]]],
        ["TH11 Lunatic Survival", "th11_survival.png", "Aqwa", [["twitter", "https://twitter.com/aqwwa58"], ["tumblr", "https://aqwwa58.tumblr.com/"]]],
        ["TH11 Lunatic Scoring", "th11_scoring.png", "Addamelech", [["twitter", "https://twitter.com/addamelech"], ["pixiv", "https://www.pixiv.net/en/users/2570621"]]],
        ["TH11 Extra Scoring", "th11_scoring_ex.png", "Oligarchomp", [["twitter", "https://twitter.com/oligarchomp"]]],
        ["TH12 Lunatic Survival", "th12_survival.png", "Aqwa", [["twitter", "https://twitter.com/aqwwa58"], ["tumblr", "https://aqwwa58.tumblr.com/"]]],
        ["TH12 Lunatic Scoring", "th12_scoring.png", "Aqwa", [["twitter", "https://twitter.com/aqwwa58"], ["tumblr", "https://aqwwa58.tumblr.com/"]]],
        ["TH128 Lunatic Survival", "th128_survival.png", "yeashie", [["twitter", "https://twitter.com/danmaku_stg"]]],
        ["TH128 Lunatic Scoring", "th128_scoring.png", "Addamelech", [["twitter", "https://twitter.com/addamelech"], ["pixiv", "https://www.pixiv.net/en/users/2570621"]]],
        ["TH13 Lunatic Scoring", "th13_scoring.png", "pisangmolen", [["twitter", "https://twitter.com/314smol"]]],
        ["TH14 Lunatic Survival", "th14_survival.png", "Muzilana", [["twitter", "https://twitter.com/muzilana1"], ["pixiv", "https://www.pixiv.net/en/users/32090790"]]],
        ["TH14 Lunatic Scoring", "th14_scoring.png", "Aqwa", [["twitter", "https://twitter.com/aqwwa58"], ["tumblr", "https://aqwwa58.tumblr.com/"]]],
        ["TH14 Extra Scoring", "th14_scoring_ex.png", "Muzilana", [["twitter", "https://twitter.com/muzilana1"], ["pixiv", "https://www.pixiv.net/en/users/32090790"]]],
        ["TH15 Lunatic Survival", "th15_survival.jpg", "Muzilana", [["twitter", "https://twitter.com/muzilana1"], ["pixiv", "https://www.pixiv.net/en/users/32090790"]]],
        ["TH16 Lunatic Survival", "th16_survival.png", "sleepymausu", [["twitter", "https://twitter.com/sleepymausu"]]],
        ["TH16 Lunatic Scoring", "th16_scoring.png", "sleepymausu", [["twitter", "https://twitter.com/sleepymausu"]]],
        ["TH17 Lunatic Survival", "th17_survival.png", "DJThunderHeart", [["linktree", "https://linktr.ee/djthunderheart"]]],
        ["TH17 Lunatic Scoring", "th17_scoring.png", "砕氷", [["twitter", "https://twitter.com/CreepingBarrett"], ["pixiv", "https://www.pixiv.net/en/users/9337602"]]],
        ["TH18 Lunatic Survival", "th18_survival.png", "DJThunderHeart", [["linktree", "https://linktr.ee/djthunderheart"]]],
        ["TH18 Lunatic Scoring", "th18_scoring.png", "yeashie", [["twitter", "https://twitter.com/danmaku_stg"]]],
        ["2023: Final Illustration", "Final_Illustration.png", "", []],
    ];

    /**
     * Renders an array of artworks as HTML gallery items.
     * 
     * original img: png or jpg
     * thumbnail img: jpg
     *
     * @param array $artworks The array of artworks to display in the gallery.
     * Each artwork is expected to be in the format: [Title, Filename, Author, (Optional) Links Array].
     * @param string $img_dir The base path to the image directory.
     * @param bool $is_hide Whether to defer image loading (lazy loading) by setting src to empty.
     */
    function render_gallery($artworks, $img_dir, $is_hide) {
        foreach ($artworks as $art) {
            $title = $art[0];
            $file = $art[1];
            $author = $art[2];
            $links = isset($art[3]) ? $art[3] : [];
            $data_src = $img_dir . '/thumbnails/' . str_replace('.png', '.jpg', $file);
            $img_src = $is_hide ? "" : $data_src;

            echo '<div class="illustration">';
            echo '<img src="' . $img_src . '"data-src="' . $data_src . '" alt="' . $title . '" onclick="openModal(\'' . $img_dir . '/originals/' . $file . '\')">';
            echo '<h4>' . $title . '</h4>';
            if ($author) {
                echo '<div class="author-info">';
                echo 'Created by: <span class="author-name">' . $author;
                foreach ($links as $link) {
                    $icon = '/assets/icons/' . $link[0] . '-icon.png';
                    echo '<a href="' . $link[1] . '" target="_blank" class="social-link">';
                    echo '<img src="' . $icon . '" alt="' . ucfirst($link[0]) . ' icon">';
                    echo '</a>';
                }
                echo '</span></div>';
            }
            echo '</div>';
        }
    }
?>

<body>
	<?php include_once 'php/body.php' ?>
	<main>
        <h1><?php echo _("Artworks") ?></h1>
        <h2 class="contents"><?php echo _('Contents') ?></h2>
        <div class="contents">
            <p><a href="#2024-end-cards">2024 End Cards</a></p>
            <p><a href="#2024-final">2024 Final Collab Illustrations</a></p>
            <p><a href="#2023-end-cards">2023 End Cards</a></p>
        </div>

        <h2 id="2024-end-cards"><a class="expander" onclick="art_hide(this)">▼</a> 2024 End Cards</h2>
        <div class="thumbnail-gallery three-cols">
            <?php render_gallery($end_cards_2024, '/static/art/2024_end_cards', false);?>
        </div>

        <h2 id="2024-final"><a class="expander" onclick="art_show(this)">▶</a> TWC 2024 Final Collab Illustrations</h2>
        <div class="thumbnail-gallery two-cols art-past">
            <?php render_gallery($final_2024, '/static/art/2024_final_collab_illustrations', true);?>
        </div>

        <h2 id="2023-end-cards"><a class="expander" onclick="art_show(this)">▶</a> 2023 End Cards</h2>
        <div class="thumbnail-gallery three-cols art-past">
            <?php render_gallery($end_cards_2023, '/static/art/2023_end_cards', true);?>
        </div>
        <!--<h2><a class="expander" onclick="art_show(this)">⮞</a> daisymels <a href="https://twitter.com/daisymels"><img src="/assets/icons/twitter-icon.png" alt="Twitter icon"></a> <a href="https://daisymels.tumblr.com/"><img src="/assets/icons/tumblr-icon.png" alt="Tumblr icon"></a></h2>
        <div>
            
        </div>-->
	</main>

    <!-- Modal structure -->
    <div id="imageModal" class="modal" onclick="closeModal()">
        <span class="modal-close">&times;</span>
        <img id="modalImage" src="" alt="">
    </div>

</body>
</html>
