// NEW EPIC SCUFFED CALCULATOR FOR ISN's ISCORE SYSTEM 2023 POG CHAMP
// Made by 32th System

const iscore = {};
const iscore_scoring_table = JSON.parse(document.getElementById("scoring_json").value);
const iscore_survival_table = JSON.parse(document.getElementById("survival_json").value);

iscore.get_survival = (game, shot, miss, FS, end) => {
	let iscore_val;
	if(miss) {
        FS = 0;
    }
	if(game === "th08") {
		iscore_val = iscore_survival_table["th08"][end][shot][FS];
	} else if(game === "th13") {
		iscore_val = iscore_survival_table["th13"][shot][FS];
	} else {
		iscore_val = iscore_survival_table[game][shot];
	}
	for(let i = 0; i < miss; i++) {
		iscore_val /= 2;
	}
	return iscore_val;
}

iscore.get_th128_survival = (medals, miss) => {
	return medals * 1.5 - miss;
}

iscore.get_scoring = (game, shot, score) => {
	const lnum_suff = {
		"m": 1000000,
		"b": 1000000000,
		"k": 1000
	}

	if(typeof(score) === "string") {
		score = score.trim();
		let lnum_mult = lnum_suff[score[score.length - 1]];
		if(typeof(lnum_mult) === "number") {
			score = parseFloat(score.substring(0, score.length - 1)) * lnum_mult;
		} else {
			score = parseFloat(score);
		}
	} else if(typeof(score) != "number") {
		throw "ISCORE ERROR: Invalid type for \"score\" in iscore.get_scoring";
	}

	let x = iscore_scoring_table[game][shot];
	return Math.pow(x["a"], score / 100000000) * x["b"] + x["c"]
}

try {
	module.exports = iscore;
} catch(e) {
    // do nothing
}
