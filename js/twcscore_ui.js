/*global iscore*/
window.onload = () => {
    const games    = ["th06", "th07", "th08", "th09", "th10", "th11", "th12", "th128", "th13", "th14", "th15", "th16", "th17", "th18", "th19"];
	const diff_w   = document.getElementById("diff_w");
	const runtype  = document.getElementById("runtype");
	const inputscore  = document.getElementById("inputscore");
	const game_sel = document.getElementById("games");
	const diff_sel = document.getElementById("diff");

	const surv_opts  = document.getElementById("surv_opts");
	const score_opts = document.getElementById("score_opts");

	const th08_opts      = document.getElementById("th08_opts");
	const th08_end       = document.getElementById("th08_end");
    const th09_s9r1      = document.getElementById("th09_s9r1");
	const th09_s9r1_w  = document.getElementById("th09_s9r1_w");
	const th128_medals   = document.getElementById("th128_medals");
	const th128_medal_w  = document.getElementById("th128_medal_w");
    const challengebonus_w = document.getElementById("challengebonus_w");
    const challengebonus = document.getElementById("challengebonus");
	const phantasm      = document.getElementById("phantasm");
    const shot_sels      = document.getElementsByName("shottype");

	const i_misses     = document.getElementById("misscount");
	const i_misses_l   = document.getElementById("misscount_l");
    const remaining_l  = document.getElementById("remaining_l");
	const i_plus       = document.getElementById("plus");
	const i_minus      = document.getElementById("minus");
	const i_score      = document.getElementById("score");
	const i_gold_plus  = document.getElementById("gold_plus");
	const i_gold_minus = document.getElementById("gold_minus");

    const submit       = document.getElementById("submit");
	const iscore_final = document.getElementById("twcscore_final");

	const score_label  = document.getElementById("score_label");
	const score_label_alt  = document.getElementById("score_label_alt");
	const twcscore_label = document.getElementById("twcscore_label");
	const twcscore_label_alt = document.getElementById("twcscore_label_alt");

	const game_has_ex = {
        "th06": true,
        "th07": true,
        "th08": true,
        "th09": true,
        "th10": true,
        "th11": true,
        "th13": true,
        "th14": true,
        "th16": true
	}

    const sep = (number) => {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    }

    const get_shot_sel = () => {
        for (let sel of shot_sels) {
            if (sel.id == get_name(game_sel)) {
                if (sel.id === "th16" && diff_sel.value === "Extra") {
                    return document.getElementById("th16ex");
                }

                return document.getElementById(sel.id);
            }
        }

        return "";
    }

    const get_name = (sel) => {
        let children = sel.childNodes;

        for (let i = 0; i < children.length; i++) {
            if ((sel.id === "games" || sel.id === "runtype" || sel.id === "inputscore") && (i === 0 || i === children.length - 1)) {
                continue;
            }

            if (children[i].control && children[i].control.checked) {
                return children[i].control.value;
            }
        }

        return "";
    }

    const get_shot_name = () => {
        let sel = get_shot_sel();
        return sel ? get_name(sel) : "";
    }

    const toggle_aya_medicine_phantasm = (game_name) => {
        const aya = document.getElementById("th09Aya");
        const medicine = document.getElementById("th09Medicine");

        if (aya && medicine) {
            const diff = diff_sel.value;
            const rt = get_name(runtype);
            const display = diff == "Extra" || rt == "surv" ? "inline-block": "none";

            aya.style.display = display;
            medicine.style.display = display;

            const shot_name = get_shot_name();

            if (diff == "Lunatic" && rt == "score" && (shot_name == "Aya" || shot_name == "Medicine")) {
                const radio_buttons = document.getElementById("th09").querySelectorAll("input");

                for (const radio_button of radio_buttons) {
                    radio_button.checked = false;
                }
            }
        }

        if (game_name !== "th07" && diff_sel.value === "Phantasm") {
            diff_sel.value = "Extra";
        }
    }

	const game_runtype_specific_opts = (game_name) => {
        const rt = get_name(runtype);
        phantasm.style.display = "none";

		if (rt === "score") {
			challengebonus_w.style.display = "none";
            th08_opts.style.display = "none";
			th09_s9r1_w.style.display = "none";
			th128_medal_w.style.display = "none";

			if (game_has_ex[game_name]) {
				diff_w.style.display = "inline";
                if (game_name === "th07") {
                    phantasm.style.display = "inline";
                }
			} else {
				diff_sel.value = "Lunatic";
				diff_w.style.display = "none";
			}
		} else if (rt === "surv") {
			diff_sel.value = "Lunatic";
			diff_w.style.display = "none";

            if (game_name === "th08") {
                th08_opts.style.display = "inline";
            } else {
                th08_opts.style.display = "none";
            }

            if (game_name === "th09") {
				th09_s9r1_w.style.display = "inline";
                remaining_l.style.display = "inline";
                i_misses_l.style.display = "none";
            } else {
				th09_s9r1_w.style.display = "none";
                remaining_l.style.display = "none";
                i_misses_l.style.display = "inline";
            }

            if (game_name === "th128") {
				th128_medal_w.style.display = "inline";
			} else {
				th128_medal_w.style.display = "none";
			}

            if (game_name === "th11" || game_name === "th13" || game_name === "th14") {
				challengebonus_w.style.display = "inline";
			} else {
				challengebonus_w.style.display = "none";
			}
		}

        toggle_aya_medicine_phantasm(game_name);
	}

	const game_selected = () => {
        document.getElementById("th16ex").disabled = true;
        document.getElementById("th16ex").style.display = "none";

        for (const game_name of games) {
            document.getElementById(game_name).disabled = true;
            document.getElementById(game_name).style.display = "none";
        }

        const selected_game = get_name(game_sel);

        if (selected_game) {
            document.getElementById(selected_game).disabled = false;
            document.getElementById(selected_game).style.display = "block";

            game_runtype_specific_opts(selected_game);
        }
	}

    const diff_selected = () => {
        const selected_game = get_name(game_sel);
        toggle_aya_medicine_phantasm(selected_game);

        if (selected_game === "th16" && diff_sel.value === "Extra") {
            for (const game_name of games) {
                document.getElementById(game_name).disabled = true;
                document.getElementById(game_name).style.display = "none";
            }

            document.getElementById("th16ex").disabled = false;
            document.getElementById("th16ex").style.display = "block";
        } else {
            document.getElementById("th16ex").disabled = true;
            document.getElementById("th16ex").style.display = "none";

            if (selected_game === "th16" && diff_sel.value !== "Extra") {
                document.getElementById("th16").disabled = false;
                document.getElementById("th16").style.display = "block";
            }
        }
    }

	const get_element_val = (element, error, type) => {
		if (typeof(element) != "object") {
			throw "fatal";
		}

		let ret = element.value;

        if (type !== "float") {
            ret = element.value.replace(/\.|,/g, "");
        }

		if (ret === "") {
			throw error;
		}

		if (type === "number") {
			ret = parseInt(ret, 10);
		} else if (type === "float") {
            ret = parseFloat(ret);
        }

		return ret;
	}

    const clear_errors = () => {
        const error_types = ["game", "shottype", "miss", "score", "final", "medals", "fatal"];

        for (let error of error_types) {
            document.getElementById("error_" + error).style.display = "none";
        }
    }

    const handle_error = (error) => {
        const error_types = ["game", "shottype", "miss", "score", "final", "medals", "fatal"];
        clear_errors();

        if (error_types.includes(error)) {
            document.getElementById("error_" + error).style.display = "block";
        }
    }

    const get_challenge_bonus = () => {
        if (challengebonus.checked) {
            return 1;
        } else {
            return 0;
        }
    }

    const calc_iscore = (data, rt, game_name) => {
        const is = get_name(inputscore);
        let iscore_val;

        if (rt === "surv") {
            const miss = get_element_val(i_misses, "miss", "number");

            if (game_name == "th09") {
                const s9_r1_duration = get_element_val(th09_s9r1, "s9r1", "number");
                iscore_val = iscore.calc_th09_survival(data, s9_r1_duration, miss);
            } else if (game_name === "th128") {
                const medals = get_element_val(th128_medals, "medals", "number");
                iscore_val = iscore.calc_th128_survival(data, medals, miss);
            } else {
                const CB = get_challenge_bonus();
                iscore_val = iscore.calc_survival(data, miss, CB);
            }
        } else { // scoring
            if (is === "ingame") {
                const score = get_element_val(i_score, "score", "string");
                iscore_val = iscore.calc_scoring(data, score);
            } else { // "twc"
                const score = get_element_val(i_score, "score", "float");
                iscore_val = iscore.calc_scoring_reverse(data, score);
                iscore_val = sep(iscore_val);
            }
        }

        return iscore_val;
    }

    const fetch_iscore_data = (rt, game_name, shottype_name) => {
        let url = `/php/db.php?rt=${rt}&game=${game_name}&shot=${shottype_name}`;

        if (rt === "score") {
            url += `&diff=${diff_sel.value}`;
        }

        if (rt === "surv" && game_name === "th08") {
            url += `&route=${get_element_val(th08_end, "", "string")}`;
        }

        const xhr = new XMLHttpRequest();
        xhr.open('GET', url);
        xhr.onreadystatechange = function () {
            if (this.readyState === 4) {
                let iscore_val = 0;

                if (this.status === 200) {
                    const data = JSON.parse(this.response);

                    if (Object.keys(data).length !== 0) {
                        iscore_val = calc_iscore(data, rt, game_name);
                    }
                }

                iscore_final.innerText = iscore_val.toString();
                window.scrollTo(0, document.body.scrollHeight);
                clear_errors();
            }
        }

        xhr.send();
    }

	const get_iscore_from_db = (event) => {
		event.preventDefault();

		try {
            const rt = get_name(runtype);
            let game_name = get_name(game_sel);

            if (game_name === "") {
                handle_error("game");
                return;
            }

            let shottype_name = get_shot_name();

            if (shottype_name === "") {
                handle_error("shottype");
                return;
            }

            fetch_iscore_data(rt, game_name, shottype_name);
		} catch (error) {
			handle_error(error);
		}
	}

    const adjust_miss_count = (event) => {
        if (event.target.id === "plus") {
            if (get_name(game_sel) === "th09" && i_misses.value === '7') {
                return;
            }

            i_misses.value = parseInt(i_misses.value) + 1;
        } else {
            i_misses.value = (i_misses.value == 0 ? 0 : i_misses.value - 1);
        }
    }

    const adjust_medal_count = (event) => {
        if (event.target.id === "gold_plus") {
            th128_medals.value = parseInt(th128_medals.value) + 1;
        } else {
            th128_medals.value = (th128_medals.value == 0 ? 0 : th128_medals.value - 1);
        }
    }

    const key_down = (event) => {
        if (event.target.id === "score" && event.key && /[^0-9.,]/.test(event.key)) {
            event.preventDefault();
        }
    }

    const key_press = (event) => {
        if (event.key && event.key == "Enter") {
            get_iscore_from_db(event);
        }
    }

    const change_runtype = () => {
        let rt = get_name(runtype);

        if (rt === "surv") {
            surv_opts.style.display = "inline";
            score_opts.style.display = "none";
        } else if (rt === "score") {
            surv_opts.style.display = "none";
            score_opts.style.display = "inline";
        } else {
            surv_opts.style.display = "none";
            score_opts.style.display = "none";
        }

        game_runtype_specific_opts(get_name(game_sel));
    }

    const change_inputscore = () => {
        let is = get_name(inputscore);

        if (is === "ingame") {
            score_label.style.display = "inline";   
            score_label_alt.style.display = "none";
            twcscore_label.style.display = "inline";
            twcscore_label_alt.style.display = "none";
        } else { // is === "twc"
            score_label.style.display = "none";
            score_label_alt.style.display = "inline";
            twcscore_label.style.display = "none";
            twcscore_label_alt.style.display = "inline";
        }
    }

    document.body.addEventListener("keypress", key_press, false);

    if (!i_score) {
        return;
    }

    i_score.addEventListener("keypress", key_down, false);
    i_plus.addEventListener("click", adjust_miss_count, false);
    i_minus.addEventListener("click", adjust_miss_count, false);
    i_gold_plus.addEventListener("click", adjust_medal_count, false);
    i_gold_minus.addEventListener("click", adjust_medal_count, false);
    submit.addEventListener("click", get_iscore_from_db, false);
    game_sel.addEventListener("change", game_selected, false);
    diff_sel.addEventListener("change", diff_selected, false);
    runtype.addEventListener("change", change_runtype, false);
    inputscore.addEventListener("change", change_inputscore, false);
    runtype.value = "";
    document.getElementById("calc-iscore").addEventListener("submit", get_iscore_from_db);
    challengebonus_w.style.display = "none";
    surv_opts.style.display = "none";
    score_opts.style.display = "none";
    diff_w.style.display = "none";
    th08_opts.style.display = "none";
    remaining_l.style.display = "none";
    th09_s9r1_w.style.display = "none";
    th128_medal_w.style.display = "none";
    game_selected();
    diff_selected();
    change_runtype();
    change_inputscore();
}
