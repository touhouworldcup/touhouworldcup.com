const iscore = {};

// Calculates the amount of TWCScore for a given survival run (except GFW; see below)
iscore.calc_survival = (rubric, miss, CB) => {
	let iscore_val = Number(rubric["N"]);
	if (CB) {
		iscore_val += Number(rubric["ChallengeBonus"]);
	}

	const rate_of_decay = Number(rubric["RateOfDecay"]);
	iscore_val = Number((iscore_val * (rate_of_decay ** miss)).toFixed(10));

	return miss > 5 ? 0 : iscore_val;
}

// Calculates the amount of TWCScore for a given PoFV survival run
iscore.calc_th09_survival = (rubric, s9_r1_duration, remaining) => {
	let iscore_val = Number(rubric["N"]);

	if (remaining == 7) {
		iscore_val += Number(rubric["ChallengeBonus"]);
	} else {
		const rate_of_decay = Number(rubric["RateOfDecay"]);
		iscore_val = iscore_val * (rate_of_decay ** (6 - remaining));
	}

	iscore_val += 0.02 * Math.max(s9_r1_duration, 0);
	return remaining < 2 ? 0 : iscore_val;
}

// Calculates the amount of TWCScore for a given GFW survival run
iscore.calc_th128_survival = (rubric, medals, miss) => {
	const a = parseFloat(rubric["A"]);
	const b = parseFloat(rubric["B"]);
	const c = parseFloat(rubric["C"]);
	const iscore = b * Math.pow(a, medals) + c - Math.pow(2, miss);
	return Math.max(iscore.toFixed(3), 0);
}

// Calculates the amount of TWCScore for a given FW survival run
iscore.calc_th20_survival = (rubric, miss) => {
	const a = Number(rubric["A"]);
	const b = Number(rubric["B"]);
	const c = Number(rubric["C"]);
	const d = Number(rubric["D"]);
	const iscore_val = a * (0.5 * (b + c) - 0.4 * Math.abs(b - c)) * d;

	const rate_of_decay = Number(rubric["RateOfDecay"]);
	iscore_val = Number((iscore_val * (rate_of_decay ** miss)).toFixed(10));

	return iscore_val;
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
    let score = Math.round(Math.log((iscore - c) / b) / Math.log(a) * 10000000) * 10;

	if (isNaN(score)) {
		score = 0;
	}

	return score;
}

try {
	module.exports = iscore;
} catch(e) {
    // do nothing
}
