<?php
    $title = _('Artworks');
    $description = 'Official artworks commissioned by TWC staff';
    $keywords = 'touhou, touhou project, 東方, 东方, Тохо, world cup, touhou world cup, twc, 2024, competition, scoring, survival, tournament, fan-art, art';
    include_once 'php/locale.php';
    include_once 'php/head.php';

    // 4:3 thumbnail_size = (500, 375)
    // 16:9 thumbnail_size = (640, 360)

    $artist_links = [
        "Addamelech" => [["twitter", "https://twitter.com/addamelech"], ["pixiv", "https://www.pixiv.net/en/users/2570621"]],
        "Aqwa" => [["twitter", "https://twitter.com/aqwwa58"], ["tumblr", "https://aqwwa58.tumblr.com/"]],
        "daisymels" => [["twitter", "https://twitter.com/daisymels"], ["tumblr", "https://daisymels.tumblr.com/"]],
        "Ciel-9" => [["twitter", "https://twitter.com/Cirnolover9"]],
        "DJThunderHeart" => [["linktree", "https://linktr.ee/djthunderheart"]],
        "hrm" => [["twitter", "https://twitter.com/hrm_wata"], ["pixiv", "https://www.pixiv.net/users/1526168"]],
        "indigo" => [["twitter", "https://twitter.com/IKuroto"]],
        "mero" => [["tumblr", "https://merort.tumblr.com/"]],
        "Muzilana" => [["twitter", "https://twitter.com/muzilana1"], ["pixiv", "https://www.pixiv.net/en/users/32090790"]],
        "Nill-Milan" => [["twitter", "https://twitter.com/Nill_Milan"]],
        "Oligarchomp" => [["twitter", "https://twitter.com/oligarchomp"]],
        "OmegaOof" => [["pixiv", "https://www.pixiv.net/en/users/64677321"]],
        "pisangmolen" => [["twitter", "https://twitter.com/314smol"]],
        "Redler Red7" => [["twitter", "https://twitter.com/redlerred7"], ["tumblr", "https://redlerred7.tumblr.com/"], ["pixiv", "https://pixiv.me/redlerred7"]],
        "Sachisu" => [["twitter", "https://twitter.com/sachisudesu"]],
        "seri" => [["twitter", "https://twitter.com/serichii4"]],
        "Skywalker2016GD" => [["twitter", "https://twitter.com/Skywalker2016GD"]],
        "sleepymausu" => [["twitter", "https://twitter.com/sleepymausu"]],
        "Starmanz" => [["twitter", "https://twitter.com/Its_a_Starman"]],
        "trisector" => [["twitter", "https://twitter.com/tris3ctor"]],
        "TurboOven9000" => [["tumblr", "https://www.tumblr.com/turbooven9000"]],
        "TurboMaya9000" => [["tumblr", "https://www.tumblr.com/turbooven9000"]],
        "WErty" => [],
        "yeashie" => [["twitter", "https://twitter.com/danmaku_stg"]],
        "あずまよりこ" => [["twitter", "https://twitter.com/AzumaYoriko"], ["pixiv", "https://www.pixiv.net/users/37450350"]],
        "うめ" => [["twitter", "https://twitter.com/umebitansan"], ["pixiv", "https://www.pixiv.net/users/72729141"]],
        "こがらし" => [["twitter", "https://twitter.com/chiyonosuki"], ["pixiv", "https://www.pixiv.net/users/28927093"]],
        "スライス蛸足" => [["twitter", "https://twitter.com/S_tako_"]],
        "せい" => [["twitter", "https://twitter.com/nonorieo__"]],
        "はらぴょん" => [["twitter", "https://twitter.com/harapyon9711"]],
        "ふぇぶりゅう" => [["twitter", "https://twitter.com/MppjU"], ["pixiv", "https://www.pixiv.net/users/15053330"]],
        "らかさぁ" => [["twitter", "https://twitter.com/rakasa0923"]],
        "りんり" => [["twitter", "https://twitter.com/pachurinri"]],
        "松本岡" => [["twitter", "https://twitter.com/kan10na2"], ["pixiv", "https://www.pixiv.net/users/33532818"]],
        "桃里" => [["twitter", "https://twitter.com/210marisa"], ["pixiv", "https://www.pixiv.net/users/13691788"]],
        "砕氷" => [["twitter", "https://twitter.com/CreepingBarrett"], ["pixiv", "https://www.pixiv.net/en/users/9337602"]],
        "陽菜" => [["twitter", "https://twitter.com/tukudani_2005"]],
        "鈴奈神楽" => [["twitter", "https://twitter.com/Suzuna_Kagura"]],
    ];

    $end_cards_2025 = [
        ["TH06 Lunatic Survival", "TH06_Lunatic_Survival.png", ["Skywalker2016GD"]],
        ["TH06 Lunatic Scoring", "TH06_Lunatic_Scoring.png", ["白犬"]],
        ["TH06 Extra Scoring", "TH06_Extra_Scoring.png", ["ひまじん"]],
        ["TH07 Lunatic Survival", "TH07_Lunatic_Survival.png", ["TurboMaya9000"]],
        ["TH07 Lunatic Scoring", "TH07_Lunatic_Scoring.png", ["Lwiizi"]],
        ["TH07 Extra Scoring", "TH07_Extra_Scoring.png", ["hrm"]],
        ["TH08 Lunatic Survival", "TH08_Lunatic_Survival.png", ["えーじーてぃー"]],
        ["TH08 Lunatic Scoring", "TH08_Lunatic_Scoring.png", ["Kosuka"]],
        ["TH08 Extra Scoring", "TH08_Extra_Scoring.png", ["砕氷"]],
        ["TH09 Lunatic Survival", "TH09_Lunatic_Survival.png", ["スライス蛸足"]],
        ["TH09 Lunatic Scoring", "TH09_Lunatic_Scoring.png", ["yeashie"]],
        ["TH10 Lunatic Survival", "TH10_Lunatic_Survival.png", ["とっとこ避太郎"]],
        ["TH10 Lunatic Scoring", "TH10_Lunatic_Scoring.png", ["TESM"]],
        ["TH10 Extra Scoring", "TH10_Extra_Scoring.png", ["Ciel-9"]],
        ["TH11 Lunatic Survival", "TH11_Lunatic_Survival.png", ["桃里"]],
        ["TH11 Lunatic Scoring", "TH11_Lunatic_Scoring.png", ["Sowako"]],
        ["TH11 Extra Scoring", "TH11_Extra_Scoring.png", ["おみず"]],
        ["TH12 Lunatic Survival", "TH12_Lunatic_Survival.png", ["Aniiue"]],
        ["TH12 Lunatic Scoring", "TH12_Lunatic_Scoring.png", ["SanneSakura"]],
        ["TH12 Extra Scoring", "TH12_Extra_Scoring.png", ["Ohako"]],
        ["TH128 Lunatic Survival", "TH128_Lunatic_Survival.png", ["めえきち"]],
        ["TH128 Lunatic Scoring", "TH128_Lunatic_Scoring.png", ["breezyleaf"]],
        ["TH13 Lunatic Survival", "TH13_Lunatic_Survival.png", ["つくだに"]],
        ["TH13 Lunatic Scoring", "TH13_Lunatic_Scoring.png", ["イロドリほたる"]],
        ["TH14 Lunatic Survival", "TH14_Lunatic_Survival.png", ["オノ･コーヘイ"]],
        ["TH14 Lunatic Scoring", "TH14_Lunatic_Scoring.png", ["Redlerred7"]],
        ["TH14 Extra Scoring", "TH14_Extra_Scoring.png", ["はらぴょん"]],
        ["TH15 Lunatic Survival", "TH15_Lunatic_Survival.png", ["暇人"]],
        ["TH15 Lunatic Scoring", "TH15_Lunatic_Scoring.png", ["Addamelech"]],
        ["TH15 Extra Scoring", "TH15_Extra_Scoring.png", ["omegaOof"]],
        ["TH16 Lunatic Survival", "TH16_Lunatic_Survival.png", ["缶詰"]],
        ["TH16 Lunatic Scoring", "TH16_Lunatic_Scoring_A.png", ["のけん"]],
        ["TH16 Lunatic Scoring", "TH16_Lunatic_Scoring_B.png", ["藍雪"]],
        ["TH17 Lunatic Survival", "TH17_Lunatic_Survival.png", ["Sachisu"]],
        ["TH17 Lunatic Scoring", "TH17_Lunatic_Scoring.png", ["Werty"]],
        ["TH18 Lunatic Survival", "TH18_Lunatic_Survival.png", ["あずまよりこ"]],
        ["TH18 Extra Scoring", "TH18_Extra_Scoring.png", ["Starmanz"]],
        ["TH19 Lunatic Survival", "TH19_Lunatic_Survival.png", ["鈴奈神楽"]],
    ];

    $final_2025 = [
        ["Embryo's Dream", "1.png", ["暇人"]],
        ["Cat Sign \"Vengeful Cat Spirit's Erratic Step\"", "2.png", ["桃里"]],
        ["Music Sign \"Double Score\"", "3.png", ["Redlerred7"]],
        ["Direction Sign \"Kimontonkou\"", "4.png", ["Lwiizi"]],
        ["\"The Seven Issun-Boshi\"", "5.png", ["Quoastli"]],
        ["Sphere Sign \"Yin-Yang God Sphere\"", "6.png", ["つくだに", "あずまよりこ"]],
        ["Scarlet Sign \"Scarlet Meister\"", "7.png", ["Niiue"]],
        ["\"Scarlet Gensokyou\"", "8.png", ["ひまじん"]],
        ["Judgement \"Last Judgement\"", "9.png", ["スライス蛸足"]],
        ["\"Blue Lady Show\"", "10.png", ["Starmanz"]],
        ["Border Sign \"Boundary of Wave and Particle\"", "11.png", ["砕氷"]],
        ["Explosion Sign \"Peta Flare\"", "12.png", ["はらぴょん"]],
        ["\"Divine Virtues of Wind God\"", "13.png", ["SanneSakura"]],
        ["Deadly Dance \"Law of Mortality\"", "14.png", ["AGT"]],
        ["Native God \"Red Frogs of Houei 4\"", "15.png", ["Sowako"]],
        ["Circular \"Circle Creature\"", "16.png", ["鈴奈神楽"]],
        ["Taboo \"Kagome Kagome\"", "17.png", ["TurboOven9000"]],
        ["Big Centipede \"Dragon Eater\"", "18.png", ["hrm"]],
        ["Dust Sign \"Karabitsu Upheaval\"", "19.png", ["Ciel-9"]],
        ["Team Tech \"Fairy Overdrive\"", "20.png", ["Skywalker2006"]],
        ["Reaction \"Youkai Polygraph\"", "21.png", ["sachisu"]]
    ];

    $end_cards_2024 = [
        ["TH06 Lunatic Survival", "EoSD_Lunatic_Survival.png", ["ふぇぶりゅう"]],
        ["TH06 Lunatic Scoring", "EoSD_Lunatic_Scoring.png", ["らかさぁ", "あずまよりこ"]],
        ["TH06 Extra Scoring", "EoSD_Extra_Scoring.png", ["Ciel-9"]],
        ["TH07 Lunatic Survival", "PCB_Lunatic_Survival.png", ["りんり"]],
        ["TH07 Lunatic Scoring", "PCB_Lunatic_Scoring.png", ["WErty"]],
        ["TH07 Extra Scoring", "PCB_Extra_Scoring.png", ["hrm"]],
        ["TH07 Phantasm Scoring", "PCB_Phantasm_Scoring.png", ["indigo"]],
        ["TH08 Lunatic Survival", "IN_Lunatic_Survival.png", ["スライス蛸足"]],
        ["TH08 Lunatic Scoring", "IN_Lunatic_Scoring.png", ["Ciel-9"]],
        ["TH09 Lunatic Survival", "PoFV_Lunatic_Survival.png", ["桃里"]],
        ["TH09 Lunatic Scoring", "PoFV_Lunatic_Scoring.png", ["はらぴょん"]],
        ["TH10 Lunatic Survival", "MoF_Lunatic_Survival.png", ["こがらし"]],
        ["TH10 Lunatic Scoring", "MoF_Lunatic_Scoring.png", ["seri"]],
        ["TH10 Extra Scoring", "MoF_Extra_Scoring.png",  ["陽菜"]],
        ["TH11 Lunatic Survival", "SA_Lunatic_Survival.png", ["Sachisu"]],
        ["TH11 Extra Scoring", "SA_Extra_Scoring.png", ["松本岡"]],
        ["TH12 Lunatic Survival", "UFO_Lunatic_Survival.png", ["TurboOven9000"]],
        ["TH12 Lunatic Scoring", "UFO_Lunatic_Scoring.png", ["WErty"]],
        ["TH128 Lunatic Survival", "GFW_Lunatic_Survival.png", ["yeashie"]],
        ["TH128 Lunatic Scoring", "GFW_Lunatic_Scoring.png", ["せい"]],
        ["TH13 Lunatic Survival", "TD_Lunatic_Survival.png", ["砕氷"]],
        ["TH13 Lunatic Scoring", "TD_Lunatic_Scoring.png", ["Skywalker2016GD"]],
        ["TH13 Extra Scoring", "TD_Extra_Scoring.png", ["Addamelech"]],
        ["TH14 Lunatic Survival", "DDC_Lunatic_Survival.png", ["Redler Red7"]],
        ["TH14 Lunatic Scoring", "DDC_Lunatic_Scoring.png", ["Nill-Milan"]],
        ["TH14 Extra Scoring", "DDC_Extra_Scoring.png", ["mero"]],
        ["TH15 Lunatic Survival", "LoLK_Lunatic_Survival.png", ["松本岡"]],
        ["TH15 Lunatic Scoring", "LoLK_Lunatic_Scoring.png", ["OmegaOof"]],
        ["TH16 Lunatic Survival", "HSiFS_Lunatic_Survival.png", ["Muzilana"]],
        ["TH16 Extra Scoring", "HSiFS_Extra_Scoring.png", ["TurboOven9000"]],
        ["TH17 Lunatic Survival", "WBaWC_Lunatic_Survival.png", ["Starmanz"]],
        ["TH17 Lunatic Scoring", "WBaWC_Lunatic_Scoring.png", ["Muzilana"]],
        ["TH18 Lunatic Survival", "UM_Lunatic_Survival.png", ["うめ"]],
        ["TH19 Lunatic Survival", "UDoALG_Lunatic_Survival.png", ["鈴奈神楽"]],
    ];

    $final_2024 = [
        ["TH06 Lunatic Survival", "eosd_lnb.png", ["TurboOven9000"]],
        ["TH06 Lunatic Scoring", "eosd_scoring.png", ["WErty"]],
        ["TH06 Extra Scoring", "eosd_ex.png", ["スライス蛸足"]],
        ["TH07 Lunatic Survival", "pcb_lnb.png", ["はらぴょん"]],
        ["TH07 Lunatic Scoring", "pcb_scoring.png", ["WErty"]],
        ["TH07 Extra Scoring", "pcb_ex.png", ["Ciel-9"]],
        ["TH07 Phantasm Scoring", "pcb_phantasm.png", ["indigo"]],
        ["TH08 Lunatic Survival", "in_lnb.png", ["砕氷"]],
        ["TH08 Lunatic Scoring", "in_scoring.png", ["りんり"]],
        ["TH09 Lunatic Survival", "pofv_lnb.png", ["Ciel-9"]],
        ["TH09 Lunatic Scoring", "pofv_scoring.png", ["陽菜"]],
        ["TH10 Lunatic Survival", "mof_lnb.png", ["こがらし"]],
        ["TH10 Lunatic Scoring", "mof_scoring.png", ["Redler Red7"]],
        ["TH10 Extra Scoring", "mof_ex.png", ["Addamelech"]],
        ["TH11 Lunatic Survival", "sa_lnb.png", ["桃里"]],
        ["TH11 Extra Scoring", "sa_ex.png", ["らかさぁ"]],
        ["TH12 Lunatic Survival", "ufo_lnb.png", ["seri"]],
        ["TH12 Lunatic Scoring", "ufo_scoring.png", ["Starmanz"]],
        ["TH128 Lunatic Survival", "gfw_survival.png", ["うめ"]],
        ["TH128 Lunatic Scoring", "gfw_scoring.png", ["Ciel-9"]],
        ["TH13 Lunatic Survival", "td_lnb.png", ["ふぇぶりゅう"]],
        ["TH13 Lunatic Scoring", "td_scoring.png", ["Skywalker2016GD"]],
        ["TH13 Extra Scoring", "td_ex.png", ["砕氷"]],
        ["TH14 Lunatic Survival", "ddc_lnb.png", ["松本岡"]],
        ["TH14 Lunatic Scoring", "ddc_scoring.png", ["らかさぁ", "あずまよりこ"]],
        ["TH14 Extra Scoring", "ddc_ex.png", ["mero"]],
        ["TH15 Lunatic Survival", "lolk_lnb.png", ["松本岡"]],
        ["TH15 Lunatic Scoring", "lolk_scoring.png", ["OmegaOof"]],
        ["TH16 Lunatic Survival", "hsifs_lnb.png", ["Nill-Milan"]],
        ["TH16 Extra Scoring", "hsifs_ex.png", ["hrm"]],
        ["TH17 Lunatic Survival", "wbawc_lnb.png", ["鈴奈神楽"]],
        ["TH17 Lunatic Scoring", "wbawc_scoring.png", ["TurboOven9000"]],
        ["TH18 Lunatic Survival", "um_lnb.png", ["あずまよりこ"]],
        ["TH19 Lunatic Survival", "udoalg_lnb.png", ["Sachisu"]],
    ];

    $end_cards_2023 = [
        ["TH06 Lunatic Survival", "th06_survival.png", ["trisector"]],
        ["TH06 Lunatic Scoring", "th06_scoring.png", ["Addamelech"]],
        ["TH06 Extra Scoring", "th06_scoring_ex.png", ["Addamelech"]],
        ["TH07 Lunatic Survival", "th07_survival.png", ["sleepymausu"]],
        ["TH07 Lunatic Scoring", "th07_scoring.png", ["Aqwa"]],
        ["TH07 Extra Scoring", "th07_scoring_ex.png", ["pisangmolen"]],
        ["TH08 Lunatic Survival", "th08_survival.png", ["Aqwa", "DJThunderHeart", "trisector"]],
        ["TH08 Lunatic Scoring", "th08_scoring.png", ["trisector"]],
        ["TH08 Extra Scoring", "th08_scoring_ex.png", ["pisangmolen"]],
        ["TH09 Extra Scoring", "th09_scoring.png", ["sleepymausu"]],
        ["TH10 Lunatic Survival", "th10_survival.png", ["sleepymausu"]],
        ["TH10 Lunatic Scoring", "th10_scoring.png", ["Aqwa"]],
        ["TH11 Lunatic Survival", "th11_survival.png", ["Aqwa"]],
        ["TH11 Lunatic Scoring", "th11_scoring.png", ["Addamelech"]],
        ["TH11 Extra Scoring", "th11_scoring_ex.png", ["Oligarchomp"]],
        ["TH12 Lunatic Survival", "th12_survival.png", ["Aqwa"]],
        ["TH12 Lunatic Scoring", "th12_scoring.png", ["Aqwa"]],
        ["TH128 Lunatic Survival", "th128_survival.png", ["yeashie"]],
        ["TH128 Lunatic Scoring", "th128_scoring.png", ["Addamelech"]],
        ["TH13 Lunatic Survival", "th13_survival.png", ["daisymels"]],
        ["TH13 Lunatic Scoring", "th13_scoring.png", ["pisangmolen"]],
        ["TH14 Lunatic Survival", "th14_survival.png", ["Muzilana"]],
        ["TH14 Lunatic Scoring", "th14_scoring.png", ["Aqwa"]],
        ["TH14 Extra Scoring", "th14_scoring_ex.png", ["Muzilana"]],
        ["TH15 Lunatic Survival", "th15_survival.jpg", ["Muzilana"]],
        ["TH16 Lunatic Survival", "th16_survival.png", ["sleepymausu"]],
        ["TH16 Lunatic Scoring", "th16_scoring.png", ["sleepymausu"]],
        ["TH17 Lunatic Survival", "th17_survival.png", ["DJThunderHeart"]],
        ["TH17 Lunatic Scoring", "th17_scoring.png", ["砕氷"]],
        ["TH18 Lunatic Survival", "th18_survival.png", ["DJThunderHeart"]],
        ["TH18 Lunatic Scoring", "th18_scoring.png", ["yeashie"]],
        ["2023: Final Illustration", "Final_Illustration.png", []],
    ];

    /**
     * Renders an array of artworks as HTML gallery items.
     * 
     * original img: png or jpg
     * thumbnail img: jpg
     *
     * @param array $artworks The array of artworks to display in the gallery.
     * Each artwork is expected to be in the format: [Title, Filename, Artist].
     * @param string $img_dir The base path to the image directory.
     * @param bool $is_hide Whether to defer image loading (lazy loading) by setting src to empty.
     */
    function render_gallery($artworks, $img_dir, $is_hide) {
        global $artist_links;

        foreach ($artworks as $art) {
            $title = _($art[0]);
            $file = $art[1];
            $artist_names = $art[2];
            $data_src = $img_dir . '/thumbnails/' . str_replace('.png', '.jpg', $file);
            $img_src = $is_hide ? "" : $data_src;

            echo '<div class="illustration">';
            echo '<img class="art" src="' . $img_src . '"data-src="' . $data_src . '" alt="' . $title . '" onclick="openModal(\'' . $img_dir . '/originals/' . $file . '\')">';
            echo '<h4>' . $title . '</h4>';

            if (!empty($artist_names)) {
                echo '<div class="artist-info">';
                $rendered_artists = [];
                foreach ($artist_names as $artist_name) {
                    $links = isset($artist_links[$artist_name]) ? $artist_links[$artist_name] : [];
                    $artist_html = '<span class="artist-name">' . $artist_name;
                    foreach ($links as $link) {
                        $icon = '/assets/icons/icon_sheet_24.png';
                        $artist_html .= '<a href="' . $link[1] . '" target="_blank" class="social-link">';
                        $artist_html .= '<img class="icon24 ' . $link[0] . '" src="' . $icon . '" alt="' . ucfirst($link[0]) . ' icon" width=24 height=24>';
                        $artist_html .= '</a>';
                    }
                    $artist_html .= '</span>';
                    $rendered_artists[] = $artist_html;
                }
                echo implode(', ', $rendered_artists);
                echo '</div>';
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
            <p><a href="#2025-end-cards">2025 End Cards</a></p>
            <p><a href="#2025-final">2025 Final Collab Illustrations</a></p>
            <p><a href="#2024-end-cards">2024 End Cards</a></p>
            <p><a href="#2024-final">2024 Final Collab Illustrations</a></p>
            <p><a href="#2023-end-cards">2023 End Cards</a></p>
        </div>

        <h2 id="2025-end-cards"><a class="expander" onclick="art_hide(this)">▾2025 End Cards</a></h2>
        <div class="thumbnail-gallery three-cols">
            <?php render_gallery($end_cards_2025, '/static/art/2025_end_cards', false);?>
        </div>

        <h2 id="2025-final"><a class="expander" onclick="art_hide(this)">▾2025 Final Collab Illustrations</a></h2>
        <div class="thumbnail-gallery two-cols">
            <?php render_gallery($final_2025, '/static/art/2025_final_collab_illustrations', false);?>
        </div>

        <h2 id="2024-end-cards"><a class="expander" onclick="art_show(this)">▸2024 End Cards</a></h2>
        <div class="thumbnail-gallery three-cols art-past">
            <?php render_gallery($end_cards_2024, '/static/art/2024_end_cards', true);?>
        </div>

        <h2 id="2024-final"><a class="expander" onclick="art_show(this)">▸2024 Final Collab Illustrations</a></h2>
        <div class="thumbnail-gallery two-cols art-past">
            <?php render_gallery($final_2024, '/static/art/2024_final_collab_illustrations', true);?>
        </div>

        <h2 id="2023-end-cards"><a class="expander" onclick="art_show(this)">▸2023 End Cards</a></h2>
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
