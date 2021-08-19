window.onload = (E) => {
	const game_shots = {
		"th06": [
			"ReimuA",
			"ReimuB",
			"MarisaA",
			"MarisaB",
		],
		"th07": [
			"ReimuA",
			"ReimuB",
			"MarisaA",
			"MarisaB",
			"SakuyaA",
			"SakuyaB"
		],
		"th08": [
			"Reimu & Yukari",
			"Marisa & Alice",
			"Sakuya & Remilia",
			"Youmu & Yuyuko",
			"Reimu",
			"Marisa",
			"Sakuya",
			"Youmu",
			"Yukari",
			"Alice",
			"Remilia",
			"Yuyuko"
		],
		"th10": [
			"ReimuA",
			"ReimuB",
			"ReimuC",
			"MarisaA",
			"MarisaB",
			"MarisaC"
		],
		"th11": [
			"ReimuA",
			"ReimuB",
			"ReimuC",
			"MarisaA",
			"MarisaB",
			"MarisaC"
		],
		"th12": [
			"ReimuA",
			"ReimuB",
			"MarisaA",
			"MarisaB",
			"SanaeA",
			"SanaeB"
		],
		"th13": [
			"Reimu",
			"Marisa",
			"Sanae",
			"Youmu",
		],
		"th14": [
			"ReimuA",
			"ReimuB",
			"MarisaA",
			"MarisaB",
			"SakuyaA",
			"SakuyaB"
		],
		"th15": [
			"Reimu",
			"Marisa",
			"Sanae",
			"Reisen",
		],
		"th16": [
			"Reimu(Spring)",
			"Cirno(Spring)",
			"Aya(Spring)",
			"Marisa(Spring)",
			"Reimu(Summer)",
			"Cirno(Summer)",
			"Aya(Summer)",
			"Marisa(Summer)",
			"Reimu(Autumn)",
			"Cirno(Autumn)",
			"Aya(Autumn)",
			"Marisa(Autumn)",
			"Reimu(Winter)",
			"Cirno(Winter)",
			"Aya(Winter)",
			"Marisa(Winter)",
		],
		"th17": [
			"Reimu(Wolf)",
			"Reimu(Otter)",
			"Reimu(Eagle)",
			"Marisa(Wolf)",
			"Marisa(Otter)",
			"Marisa(Eagle)",
			"Youmu(Wolf)",
			"Youmu(Otter)",
			"Youmu(Eagle)"
		],
		"th18": [
			"Reimu",
			"Marisa",
			"Sakuya",
			"Sanae"
		],
		"th128": [
			"A-1",
			"A-2",
			"B-1",
			"B-2",
			"C-1",
			"C-2",
			"Extra"
		]
	}

	const diff_w   = document.getElementById("diff_w");
	const runtype  = document.getElementById("runtype");
	const game_sel = document.getElementById("games");
	const diff_sel = document.getElementById("diff");

	const surv_opts  = document.getElementById("surv_opts");
	const score_opts = document.getElementById("score_opts");

	const th08_opts      = document.getElementById("th08_opts");
	const th08_end       = document.getElementById("th08_end");
	const th128_medals   = document.getElementById("th128_medals");
	const th128_medal_w  = document.getElementById("th128_medal_w");
	const th128_medal_l  = document.getElementById("th128_medal_l");
	const fullspell_w    = document.getElementById("fullspell_w");
	const fullspell      = document.getElementById("fullspell");

	const shottypes = document.getElementById("shottype");
	const shot_lab  = document.getElementById("shot_lab");

	const i_misses = document.getElementById("misscount");
	const i_score  = document.getElementById("score");

	const iscore_final = document.getElementById("iscore_final");

	const game_has_ex = {
		"th06": true,
		"th08": true,
		"th13": true,
		"th14": true
	}
	
	const game_runtype_specific_opts = (game_name) => {
		if(runtype.value === "score") {
			fullspell_w.style.display = "none";
			th128_medal_w.style.display = "none";
			
			if(game_has_ex[game_sel.value]) {
				diff_w.style.display = "block";
			} else {
				diff_sel.value = "Lunatic";
				diff_w.style.display = "none";
			}
		} else if(runtype.value === "surv") {
			diff_sel.value = "Lunatic";
			diff_w.style.display = "none";
			
			if(game_sel.value === "th128") {
				th128_medal_w.style.display = "inline";
			} else {
				th128_medal_w.style.display = "none";
			}
			if(game_name === "th08" || game_name === "th13") {
				fullspell_w.style.display = "inline";
			} else {
				fullspell_w.style.display = "none";
			}
		}
	}

	const game_selected = () => {
		th08_opts.style.display = "none";

		shottypes.innerHTML = "";
		let game_name = game_sel.value;
		let shot_arr = game_shots[game_name];

		for(let i = 0; i < shot_arr.length; i++) {
			let opt = document.createElement("option");
			opt.value = shot_arr[i];
			opt.innerText = shot_arr[i];
			shottypes.appendChild(opt);
		}

		if(game_name === "th08") {
			th08_opts.style.display = "block";
		}

		if(game_name === "th128") {
			shot_lab.innerText = "Route";
		} else {
			shot_lab.innerText = "Shot";
		}

		game_runtype_specific_opts(game_name);
	}

	game_sel.addEventListener("change", game_selected, false);
	game_sel.value = "";
	runtype.addEventListener("change", (E) => {
		let rt = runtype.value;
		if(rt === "surv") {
			surv_opts.style.display = "inline";
			score_opts.style.display = "none";
		} else if (rt === "score") {
			surv_opts.style.display = "none";
			score_opts.style.display = "inline";
		} else {
			surv_opts.style.display = "none";
			score_opts.style.display = "none";
		}
		game_runtype_specific_opts(game_sel.value);
	}, false);
	runtype.value = "";

	const get_element_val = (element, friendly_name, type) => {
		if(typeof(element) != "object") {
			throw "FATAL ERROR: wrong type for 'element' in get_element_val. Please contact 32th System";
		}
		let ret = element.value;
		if(ret == "") {
			throw "Please fill out " + friendly_name;
		}
		if(type === "number") {
			ret = parseInt(ret, 10);
		}
		return ret;
	}

	const calc_iscore = (event) => {
		event.preventDefault();

		const get_full_spell = () => {
			let game = game_sel.value;
			if(game === "th08" || game === "th13") {
				if(fullspell.checked) {
					return 1;
				} else {
					return 0;
				}
			} else {
				return 0;
			}
		}

		let rt = runtype.value;

		let iscore_val = 0;
		try {
			if(rt === "surv") {
				if(game_sel.value === "th128") {
					iscore_val = iscore.get_th128_survival(
						get_element_val(th128_medals, "the medals", "number"),
						get_element_val(i_misses, "the miss count", "number")
					);
				} else {
					iscore_val = iscore.get_survival(
						get_element_val(game_sel, "the game", "string"),
						get_element_val(shottypes, "the shottype", "string"),
						get_element_val(i_misses, "the miss count", "number"),
						get_full_spell(),
						get_element_val(th08_end, "", "string")
					);
				}
				
			} else if(rt === "score") {
				let game = get_element_val(game_sel, "the game", "string");
				if(diff_sel.value === "Extra") {
					game = game + "ex";
				}
				iscore_val = iscore.get_scoring(
					game,
					get_element_val(shottypes, "the shottype", "string"),
					get_element_val(i_score, "the score", "string")
				);
			}
		} catch (error) {
			alert(error);
		}
		iscore_final.innerText = iscore_val.toString();
	}
	document.getElementById("calc-iscore").addEventListener("submit", calc_iscore);

	fullspell_w.style.display = "none";
	surv_opts.style.display = "none";
	score_opts.style.display = "none";
	diff_w.style.display = "none";
	th128_medal_w.style.display = "none";
	th128_medal_l.innerText = "Gold Medals";
	
	shottypes.innerHTML = "";
	shot_lab.innerText = "Shot:";
}