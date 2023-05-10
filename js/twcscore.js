// NEW EPIC SCUFFED CALCULATOR FOR ISN's ISCORE SYSTEM 2023 POG CHAMP
// Made by 32th System

const iscore = {};
const iscore_scoring_table = JSON.parse(document.getElementById("scoring_json").value);
const iscore_survival_table = JSON.parse(document.getElementById("survival_json").value);

iscore.get_survival = (game, shot, miss, FS, end) => {
	let iscore_val;

	if (miss) {
        FS = 0;
    }

	if (game === "th08") {
		iscore_val = iscore_survival_table["th08"][end][shot];
	} else if (game === "th11" || game === "th13") {
		iscore_val = iscore_survival_table[game][shot][FS];
	} else {
		iscore_val = iscore_survival_table[game][shot];
	}

	for (let i = 0; i < miss; i++) {
		iscore_val /= 2;
	}

	return miss > 5 ? 0 : iscore_val;
}

iscore.get_th128_survival = (route, medals, miss) => {
	const d = iscore_survival_table["th128"][route];

	return Math.round((medals * d - miss) * 10) / 10;
}

iscore.get_scoring = (game, shot, score) => {
	const lnum_suff = {
		"m": 1000000,
		"b": 1000000000,
		"k": 1000
	}

	if (typeof(score) === "string") {
		score = score.trim();
		const lnum_mult = lnum_suff[score[score.length - 1]];

		if (typeof(lnum_mult) === "number") {
			score = parseFloat(score.substring(0, score.length - 1)) * lnum_mult;
		} else {
			score = parseFloat(score);
		}
	} else if (typeof(score) != "number") {
		throw "ISCORE ERROR: Invalid type for \"score\" in iscore.get_scoring";
	}

	const rubric = iscore_scoring_table[game][shot];
    const iscore = Math.pow(rubric["a"], score / 100000000) * rubric["b"] + rubric["c"];
	return Math.max(iscore.toFixed(3), 0);
}

iscore.get_scoring_reverse = (game, shot, iscore) => {
	const rubric = iscore_scoring_table[game][shot];
    let score = Math.round(Math.log((iscore - rubric["c"]) / rubric["b"]) / Math.log(rubric["a"]) * 100000000);
	return score;
}

try {
	module.exports = iscore;
} catch(e) {
    // do nothing
}
