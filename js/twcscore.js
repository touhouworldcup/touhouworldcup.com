const iscore = {};

// Calculates the amount of TWCScore for a given survival run (except GFW; see below)
iscore.calc_survival = (data, miss, FS) => {
	const max_score = parseInt(data["MaxScore"]);
	const full_spell_bonus = parseInt(data["FullSpellBonus"]);

	if (miss) {
        FS = 0;
    }

	let iscore_val = max_score;

	if (FS) {
		iscore_val += full_spell_bonus;
	}

	for (let i = 0; i < miss; i++) {
		iscore_val /= 2;
	}

	return miss > 5 ? 0 : iscore_val;
}

// Calculates the amount of TWCScore for a given GFW survival run
iscore.calc_th128_survival = (data, medals, miss) => {
	const d = parseInt(data["BaseScore"]);
	return Math.round((medals * d - miss) * 10) / 10;
}

// Calculates the amount of TWCScore for a given score run
iscore.calc_scoring = (rubric, score) => {
	const a = parseFloat(rubric.A);
	const b = parseFloat(rubric.B);
	const c = parseFloat(rubric.C);
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
		throw "ISCORE ERROR: Invalid type for \"score\" in iscore.calc_scoring";
	}

    const iscore = Math.pow(a, score / 100000000) * b + c;
	return Math.max(iscore.toFixed(3), 0);
}

// Calculates the score of a given score run based on what its TWCScore was
iscore.calc_scoring_reverse = (rubric, iscore) => {
	const a = parseFloat(rubric.A);
	const b = parseFloat(rubric.B);
	const c = parseFloat(rubric.C);
    let score = Math.round(Math.log((iscore - c) / b) / Math.log(a) * 100000000);
	return score;
}

try {
	module.exports = iscore;
} catch(e) {
    // do nothing
}
