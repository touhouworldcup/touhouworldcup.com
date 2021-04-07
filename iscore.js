// NEW EPIC SCUFFED CALCULATOR FOR ISN's ISCORE SYSTEM 2023 POG CHAMP
// Made by 32th System

// This object ONLY describes the maximum amount of ISCORE you can get for a survival run,
// because that and the miss count is all the information needed for a survival ISCORE.
const iscore_survival_table = {
	"th06": {
		"ReimuA": 24,
		"ReimuB": 20,
		"MarisaA": 30,
		"MarisaB": 30
	},
	"th07": {
		"ReimuA": 9,
		"ReimuB": 8,
		"MarisaA": 14,
		"MarisaB": 17,
		"SakuyaA": 10,
		"SakuyaB": 8
	},
	"th08": {
		"6A": {
			"Reimu & Yukari": [ 15, 5 ],
			"Marisa & Alice": [ 18, 5 ],
			"Sakuya & Remilia": [ 18, 5 ],
			"Youmu & Yuyuko": [ 15, 5 ],
			"Reimu": [ 22, 12 ],
			"Yukari": [ 19, 9 ],
			"Marisa": [ 26, 13 ],
			"Alice": [ 40, 20 ],
			"Sakuya": [ 40, 25 ],
			"Remilia": [ 23, 10 ],
			"Youmu": [ 15, 5 ],
			"Yuyuko": [ 22, 12 ]
		},
		"6B": {
			"Reimu & Yukari": [ 5, 20 ],
			"Marisa & Alice": [ 4, 22 ],
			"Sakuya & Remilia": [ 4, 22 ],
			"Youmu & Yuyuko": [ 15, 20 ],
			"Reimu": [ 12, 27 ],
			"Yukari": [ 9, 24 ],
			"Marisa": [ 13, 31 ],
			"Alice": [ 20, 45 ],
			"Sakuya": [ 25, 45 ],
			"Remilia": [ 10, 28 ],
			"Youmu": [ 5, 20 ],
			"Yuyuko": [ 12, 27 ]
		}
	},
	"th10": {
		"ReimuA": 10,
		"ReimuB": 9,
		"ReimuC": 11,
		"MarisaA": 22,
		"MarisaB": 4,
		"MarisaC": 10
	},
	"th11": {
		"ReimuA": 9,
		"ReimuB": 10,
		"ReimuC": 10,
		"MarisaA": 11,
		"MarisaB": 11,
		"MarisaC": 22
	},
	"th12": {
		"ReimuA": 18,
		"ReimuB": 23,
		"MarisaA": 40,
		"MarisaB": 40,
		"SanaeA": 36,
		"SanaeB": 36
	},
	"th13": {
		"Reimu": [ 9, 12 ],
		"Marisa": [ 18, 23 ],
		"Sanae": [ 25, 45 ],
		"Youmu": [ 9, 11 ]
	},
	"th14": {
		"ReimuA": 3,
		"ReimuB": 50,
		"MarisaA": 150,
		"MarisaB": 25,
		"SakuyaA": 3,
		"SakuyaB": 100
	},
	"th15": {
		"Reimu": 30,
		"Marisa": 80,
		"Sanae": 60,
		"Reisen": 60,
	},
	"th16": {
		"Reimu(Spring)": 34,
		"Cirno(Spring)": 40,
		"Aya(Spring)": 50,
		"Marisa(Spring)": 34,
		"Reimu(Summer)": 34,
		"Cirno(Summer)": 41,
		"Aya(Summer)": 50,
		"Marisa(Summer)": 34,
		"Reimu(Autumn)": 10,
		"Cirno(Autumn)": 13,
		"Aya(Autumn)": 16,
		"Marisa(Autumn)": 10,
		"Reimu(Winter)": 11,
		"Cirno(Winter)": 14,
		"Aya(Winter)": 17,
		"Marisa(Winter)": 12
	},
	"th17": {
		"Reimu(Wolf)": 10,
		"Reimu(Otter)": 25,
		"Reimu(Eagle)": 19,
		"Marisa(Wolf)": 8,
		"Marisa(Otter)": 19,
		"Marisa(Eagle)": 11,
		"Youmu(Wolf)": 7,
		"Youmu(Otter)": 8,
		"Youmu(Eagle)": 50
	}
}

const iscore_get_survival = (game, shot, miss, FS, end) => {
	let iscore = 0;
	if(game === "th08") {
		iscore = iscore_survival_table["th08"][end][shot][FS];
	} else if(game === "th13") {
		iscore = iscore_survival_table["th13"][shot][FS];
	} else {
		iscore = iscore_survival_table[game][shot];
	}
	for(let i = 0; i < miss; i++) {
		iscore /= 2;
	}
	return iscore;
}