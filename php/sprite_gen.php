<?php
$row_size = 9;
$offset = -100;
$shots = array('th06ReimuA', 'th06ReimuB', 'th06MarisaA', 'th06MarisaB', 'th07ReimuA', 'th07ReimuB', 'th07MarisaA', 'th07MarisaB', 'th07SakuyaA', 'th07SakuyaB', 'th08ReimuYukari', 'th08MarisaAlice', 'th08SakuyaRemilia',
'th08YoumuYuyuko', 'th08Reimu', 'th08Yukari', 'th08Marisa', 'th08Alice', 'th08Sakuya', 'th08Remilia', 'th08Youmu', 'th08Yuyuko', 'th09Reimu', 'th09Marisa', 'th09Sakuya', 'th09Youmu', 'th09Reisen', 'th09Cirno',
'th09Lyrica', 'th09Mystia', 'th09Tewi', 'th09Aya', 'th09Medicine', 'th09Yuuka', 'th09Komachi', 'th09Eiki', 'th10ReimuA', 'th10ReimuB', 'th10ReimuC', 'th10MarisaA', 'th10MarisaB', 'th10MarisaC',
'th11ReimuA', 'th11ReimuB', 'th11ReimuC', 'th11MarisaA', 'th11MarisaB', 'th11MarisaC', 'th12ReimuA', 'th12ReimuB', 'th12MarisaA', 'th12MarisaB', 'th12SanaeA', 'th12SanaeB', 'th13Reimu', 'th13Marisa', 'th13Sanae',
'th13Youmu', 'th14ReimuA', 'th14ReimuB', 'th14MarisaA', 'th14MarisaB', 'th14SakuyaA', 'th14SakuyaB', 'th15Reimu', 'th15Marisa', 'th15Sanae', 'th15Reisen', 'th16ReimuSpring', 'th16ReimuSummer', 'th16ReimuAutumn',
'th16ReimuWinter', 'th16CirnoSpring', 'th16CirnoSummer', 'th16CirnoAutumn', 'th16CirnoWinter', 'th16AyaSpring', 'th16AyaSummer', 'th16AyaAutumn', 'th16AyaWinter', 'th16MarisaSpring',
'th16MarisaSummer', 'th16MarisaAutumn', 'th16MarisaWinter', 'th17ReimuWolf', 'th17ReimuOtter', 'th17ReimuEagle', 'th17MarisaWolf', 'th17MarisaOtter', 'th17MarisaEagle',
'th17YoumuWolf', 'th17YoumuOtter', 'th17YoumuEagle', 'th18Reimu', 'th18Marisa', 'th18Sakuya', 'th18Sanae', 'th02ReimuA', 'th02ReimuB', 'th02ReimuC', 'th03Reimu', 'th03Mima', 'th03Marisa',
'th03Ellen', 'th03Kotohime', 'th03Kana', 'th03Rikako', 'th03Chiyuri', 'th03Yumemi', 'th04ReimuA', 'th04ReimuB', 'th04MarisaA', 'th04MarisaB', 'th05Reimu', 'th05Marisa', 'th05Mima', 'th05Yuuka',
'th09Merlin', 'th09Lunasa', 'th16ReimuExtra', 'th16CirnoExtra', 'th16AyaExtra', 'th16MarisaExtra', 'th128A1', 'th128A2', 'th128B1', 'th128B2', 'th128C1', 'th128C2', 'th128Extra');
for ($i = 0; $i < count($shots); $i++) {
    $x = ($i % $row_size) * $offset;
    $y = floor($i / $row_size) * $offset;
    echo '#' . $shots[$i] . '{background-position:' . $x . 'px ' . $y . 'px}';
}
$games = array('th06', 'th07', 'th08', 'th09', 'th10', 'th11', 'th12', 'th128', 'th13', 'th14', 'th15', 'th16', 'th17', 'th18');
for ($i = 0; $i < count($games); $i++) {
    $x = $i * $offset;
    echo '#cover_' . $games[$i] . '{background-position:' . $x . 'px 0px}';
}
?>
