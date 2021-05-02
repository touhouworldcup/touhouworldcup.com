// NEW EPIC SCUFFED CALCULATOR FOR ISN's ISCORE SYSTEM 2023 POG CHAMP
// Made by 32th System

const iscore = {};

iscore.get_survival = (game, shot, miss, FS, end) => {
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
				"Reimu & Yukari": [ 5, 15 ],
				"Marisa & Alice": [ 5, 18 ],
				"Sakuya & Remilia": [ 5, 18 ],
				"Youmu & Yuyuko": [ 5, 15 ],
				"Reimu": [ 12, 22 ],
				"Yukari": [ 9, 19 ],
				"Marisa": [ 13, 26 ],
				"Alice": [ 20, 40 ],
				"Sakuya": [ 25, 40 ],
				"Remilia": [ 10, 23 ],
				"Youmu": [ 5, 15 ],
				"Yuyuko": [ 12, 22 ]
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
	};
	let iscore_val;
	if(miss) FS = 0;
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
	
	const iscore_scoring_table = {
		"th06ex": {
			"ReimuA": {
				"a": 9.4179,
				"b": 0.000025153,
				"c": 2.5148
			},
			"ReimuB":  {
				"a": 8.9481,
				"b": 0.000017806,
				"c": 2.6586
			},
			"MarisaA": {
				"a": 9.4179,
				"b": 0.000025153,
				"c": 2.5148
			},
			"MarisaB": {
				"a": 8.9481,
				"b": 0.000017806,
				"c": 2.6586
			}
		},
		"th06": {
			"ReimuA": {
				"a": 13.76,
				"b": 9.7425E-06,
				"c": 2.8777
			},
			"ReimuB": {
				"a": 4.0967,
				"b": 0.0038547,
				"c": 2.1811
			},
			"MarisaA": {
				"a": 13.76,
				"b": 0.000012663,
				"c": 2.8777
			},
			"MarisaB": {
				"a": 9.8963,
				"b": 0.000032468,
				"c": 2.8031
			}
		},
		"th07": {
			"ReimuA": {
				"a": 1.4389,
				"b": 0.00058826,
				"c": 2.5735
			},
			"ReimuB": {
				"a": 1.3976,
				"b": 0.000918,
				"c": 2.03
			},
			"MarisaA": {
				"a": 1.4198,
				"b": 0.0008114,
				"c": 2.101
			},
			"MarisaB": {
				"a": 1.458,
				"b": 0.00044106,
				"c": 2.5941
			},
			"SakuyaA": {
				"a": 1.4389,
				"b": 0.00058826,
				"c": 2.5735
			},
			"SakuyaB": {
				"a": 1.3208,
				"b": 0.0038484,
				"c": 1.6731
			}
		},
		"th08": {
			"Reimu & Yukari": {
				"a": 1.2182,
				"b": 0.00037497,
				"c": 1.1816
			},
			"Marisa & Alice": {
				"a": 1.2182,
				"b": 0.00037497,
				"c": 1.1816
			},
			"Sakuya & Remilia": {
				"a": 1.2024,
				"b": 0.00034261,
				"c": 1.3538
			},
			"Youmu & Yuyuko": {
				"a": 1.2182,
				"b": 0.00020742,
				"c": 1.1816
			},
			"Reimu": {
				"a": 1.2182,
				"b": 0.0010059,
				"c": 1.1816
			},
			"Marisa": {
				"a": 1.207,
				"b": 0.0011464,
				"c": 0.43702
			},
			"Sakuya": {
				"a": 1.2182,
				"b": 0.0010059,
				"c": 1.1816
			},
			"Youmu": {
				"a": 1.2024,
				"b": 0.00034261,
				"c": 1.3538
			},
			"Yukari": {
				"a": 1.4409,
				"b": 0.000012507,
				"c": 2.28193
			},
			"Alice": {
				"a": 1.4409,
				"b": 0.000012507,
				"c": 2.28193
			},
			"Remilia": {
				"a": 1.4409,
				"b": 0.000006024,
				"c": 2.28193
			},
			"Yuyuko": {
				"a": 1.4409,
				"b": 0.000012507,
				"c": 2.28193
			}
		},
		"th08ex": {
			"Reimu & Yukari": {
				"a": 1.5385,
				"b": 0.000083359,
				"c": 2.4294
			},
			"Marisa & Alice": {
				"a": 1.5385,
				"b": 0.000067205,
				"c": 2.4294
			},
			"Sakuya & Remilia": {
				"a": 1.5385,
				"b": 0.000067205,
				"c": 2.4294
			},
			"Youmu & Yuyuko": {
				"a": 1.5385,
				"b": 0.000067205,
				"c": 2.4294
			},
			"Reimu": {
				"a": 1.6439,
				"b": 0.00015646,
				"c": 2.4294
			},
			"Marisa": {
				"a": 1.6439,
				"b": 0.000067205,
				"c": 2.4294
			},
			"Sakuya": {
				"a": 1.6439,
				"b": 0.00011048,
				"c": 2.4294
			},
			"Youmu": {
				"a": 1.5385,
				"b": 0.000035217,
				"c": 2.4294
			},
			"Yukari": {
				"a": 1.8505,
				"b": 0.000067205,
				"c": 2.4294
			},
			"Alice": {
				"a": 1.8505,
				"b": 0.000067205,
				"c": 2.4294
			},
			"Remilia": {
				"a": 1.8505,
				"b": 0.000036317,
				"c": 2.4294
			},
			"Yuyuko": {
				"a": 1.8505,
				"b": 0.000036317,
				"c": 2.4294
			}
		},
		"th10": {
			"ReimuA": {
				"a": 47.065,
				"b": 2.0019E-35,
				"c": 2.9821
			},
			"ReimuB": {
				"a": 47.01,
				"b": 7.8408E-36,
				"c": 2.9783
			},
			"ReimuC": {
				"a": 47.065,
				"b": 2.0019E-35,
				"c": 2.9821
			},
			"MarisaA": {
				"a": 47.065,
				"b": 1.6512E-35,
				"c": 2.9821
			},
			"MarisaB": {
				"a": 47.044,
				"b": 6.875E-36,
				"c": 2.9807
			},
			"MarisaC": {
				"a": 47.166,
				"b": 3.6438E-36,
				"c": 2.9892
			}
		},
		"th11": {
			"ReimuA": {
				"a": 1.3366,
				"b": 0.000028672,
				"c": 2.2632
			},
			"ReimuB": {
				"a": 1.3366,
				"b": 0.00021855,
				"c": 2.2632
			},
			"ReimuC": {
				"a": 1.3092,
				"b": 0.0013349,
				"c": 1.5297
			},
			"MarisaA": {
				"a": 1.2897,
				"b": 0.00038275,
				"c": 2.2108
			},
			"MarisaB": {
				"a": 1.2897,
				"b": 0.00038275,
				"c": 2.2108
			},
			"MarisaC": {
				"a": 1.4336,
				"b": 0.00032957,
				"c": 2.0898
			}
		},
		"th12": {
			"ReimuA": {
				"a": 1.4244,
				"b": 0.0020046,
				"c": 1.8327
			},
			"ReimuB": {
				"a": 1.4244,
				"b": 0.0020046,
				"c": 1.8327
			},
			"MarisaA": {
				"a": 1.3092,
				"b": 0.01152,
				"c": 1.5297
			},
			"MarisaB": {
				"a": 1.3092,
				"b": 0.01152,
				"c": 1.5297
			},
			"SanaeA": {
				"a": 1.3092,
				"b": 0.01152,
				"c": 1.5297
			},
			"SanaeB": {
				"a": 1.2789,
				"b": 0.018429,
				"c": 0.47688
			}
		},
		"th13": {
			"Reimu": {
				"a": 1.484,
				"b": 0.000094189,
				"c": 1.1816
			},
			"Marisa": {
				"a": 1.5069,
				"b": 0.000009182,
				"c": 0.98072
			},
			"Sanae": {
				"a": 1.5069,
				"b": 0.000071337,
				"c": 0.98072
			},
			"Youmu": {
				"a": 1.484,
				"b": 4.0048E-06,
				"c": 1.1816
			}
		},
		"th13ex": {
			"Reimu": {
				"a": 5521.2,
				"b": 1.2908E-20,
				"c": 2.4292
			},
			"Marisa": {
				"a": 640.51,
				"b": 7.9374E-17,
				"c": 2.4292
			},
			"Sanae": {
				"a": 5521.2,
				"b": 1.1127E-19,
				"c": 2.4292
			},
			"Youmu": {
				"a": 640.51,
				"b": 5.7458E-17,
				"c": 2.4292
			}
		},
		"th14": {
			"ReimuA": {
				"a": 2.3467,
				"b": 0.000025356,
				"c": 2.2928
			},
			"ReimuB": {
				"a": 3.1843,
				"b": 0.00002275,
				"c": 2.2343
			},
			"MarisaA": {
				"a": 2.7156,
				"b": 0.000062971,
				"c": 2.4943
			},
			"MarisaB": {
				"a": 2.9526,
				"b": 4.4319E-08,
				"c": 2.4993
			},
			"SakuyaA": {
				"a": 2.9171,
				"b": 1.7178E-06,
				"c": 2.3478
			},
			"SakuyaB": {
				"a": 2.1603,
				"b": 1.1974E-06,
				"c": 2.604
			}
		},
		"th14ex": {
			"ReimuA": {
				"a": 44619,
				"b": 1.7603E-36,
				"c": 2.3478
			},
			"ReimuB": {
				"a": 44619,
				"b": 6.3506E-34,
				"c": 2.3478
			},
			"MarisaA": {
				"a": 44619,
				"b": 6.3506E-34,
				"c": 2.3478
			},
			"MarisaB": {
				"a": 4091.6,
				"b": 6.7222E-44,
				"c": 2.815
			},
			"SakuyaA": {
				"a": 44619,
				"b": 8.7701E-36,
				"c": 2.3478
			},
			"SakuyaB": {
				"a": 7009.1,
				"b": 3.5834E-32,
				"c": 2.7913
			}
		},
		"th15": {
			"Reimu": {
				"a": 1.6632,
				"b": 0.00023013,
				"c": 2.211
			},
			"Marisa": {
				"a": 1.6632,
				"b": 0.00023013,
				"c": 2.211
			},
			"Sanae": {
				"a": 1.3998,
				"b": 0.0014424,
				"c": 0.64334
			},
			"Reisen": {
				"a": 1.379,
				"b": 0.001493,
				"c": 1.2446
			}
		},
		"th16": {
			"Reimu(Spring)": {
				"a": 1.2182,
				"b": 0.0032873,
				"c": 1.1816
			},
			"Cirno(Spring)": {
				"a": 1.2182,
				"b": 0.0018185,
				"c": 1.1816
			},
			"Aya(Spring)": {
				"a": 1.2182,
				"b": 0.0014928,
				"c": 1.1816
			},
			"Marisa(Spring)": {
				"a": 1.2182,
				"b": 0.0026985,
				"c": 1.1816
			},
			"Reimu(Summer)": {
				"a": 1.291,
				"b": 0.0023051,
				"c": 0.7229
			},
			"Cirno(Summer)": {
				"a": 1.291,
				"b": 0.0017855,
				"c": 0.7229
			},
			"Aya(Summer)": {
				"a": 1.291,
				"b": 0.0019776,
				"c": 0.7229
			},
			"Marisa(Summer)": {
				"a": 1.291,
				"b": 0.0023051,
				"c": 0.7229
			},
			"Reimu(Autumn)": {
				"a": 1.1277,
				"b": 0.0030887,
				"c": 1.4014
			},
			"Cirno(Autumn)": {
				"a": 1.1442,
				"b": 0.0017476,
				"c": 1.5297
			},
			"Aya(Autumn)": {
				"a": 1.1037,
				"b": 0.0059427,
				"c": 1.1836
			},
			"Marisa(Autumn)": {
				"a": 1.1145,
				"b": 0.0044123,
				"c": 1.2859
			},
			"Reimu(Winter)": {
				"a": 1.1854,
				"b": 0.0041316,
				"c": 0.35195
			},
			"Cirno(Winter)": {
				"a": 1.1854,
				"b": 0.0024804,
				"c": 0.35195
			},
			"Aya(Winter)": {
				"a": 1.1854,
				"b": 0.0029403,
				"c": 0.35195
			},
			"Marisa(Winter)": {
				"a": 1.1854,
				"b": 0.0048978,
				"c": 0.35195
			}
		},
		"th17": {
			"Reimu(Wolf)": {
				"a": 1.229,
				"b": 5.1617E-06,
				"c": 0.21973
			},
			"Reimu(Otter)": {
				"a": 1.1304,
				"b": 0.000099981,
				"c": 1.3962
			},
			"Reimu(Eagle)": {
				"a": 1.229,
				"b": 5.7223E-06,
				"c": 0.21973
			},
			"Marisa(Wolf)": {
				"a": 1.229,
				"b": 0.0000042,
				"c": 0.21973
			},
			"Marisa(Otter)": {
				"a": 1.1304,
				"b": 0.000061232,
				"c": 1.3962
			},
			"Marisa(Eagle)": {
				"a": 1.229,
				"b": 0.0000042,
				"c": 0.21973
			},
			"Youmu(Wolf)": {
				"a": 1.2564,
				"b": 1.3566E-06,
				"c": 0.61581
			},
			"Youmu(Otter)": {
				"a": 1.1304,
				"b": 0.000094037,
				"c": 1.3962
			},
			"Youmu(Eagle)": {
				"a": 1.229,
				"b": 0.0000042,
				"c": 0.21973
			}
		},
		"th128": {
			"A-1": {
				"a": 51044,
				"b": 0.00029355,
				"c": 1.2859
			},
			"A-2": {
				"a": 50351,
				"b": 0.000050454,
				"c": 2.4993
			},
			"B-1": {
				"a": 51044,
				"b": 0.00029355,
				"c": 1.2859
			},
			"B-2": {
				"a": 51044,
				"b": 0.00029355,
				"c": 1.2859
			},
			"C-1": {
				"a": 51044,
				"b": 0.00036462,
				"c": 1.2859
			},
			"C-2": {
				"a": 51044,
				"b": 0.00029355,
				"c": 1.2859
			},
			"Extra": {
				"a": 51044,
				"b": 0.00029355,
				"c": 1.2859
			}
		}
	};
	let x = iscore_scoring_table[game][shot];	
	return Math.pow(x["a"], score / 100000000) * x["b"] + x["c"]
}

try {
	module.exports = iscore;
} catch(e) {}