let language = "en-GB";
let step = setInterval(countdownToStart, 1000);
let schedule = [];

function _(letter) {
    if (language != "ja-JP" && language != "zh-CN") {
        return letter;
    }

    return ({
        "d ": "日",
        "h ": "時間",
        "m ": "分",
        "s": "秒"
    }[letter]);
}

function getCookie(name) {
    var decodedCookies, cookieArray, cookie;

    decodedCookies = decodeURIComponent(document.cookie);
    cookieArray = decodedCookies.split(';');
    name += '=';

    for (var i = 0; i < cookieArray.length; i += 1) {
        cookie = cookieArray[i];

        while (cookie.charAt(0) === ' ') {
            cookie = cookie.substring(1);
        }

        if (cookie.indexOf(name) === 0) {
            try {
                return JSON.parse(cookie.substring(name.length, cookie.length));
            } catch (err) {
                return JSON.parse("\"" + cookie.substring(name.length, cookie.length) + "\"");
            }
        }
    }

    return "";
}

function formatTime(timeLeft) {
    let days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
    let hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
    return days + _("d ") + hours + _("h ") + minutes + _("m ") + seconds + _("s");
}

function getNextMatch() {
    const now = Math.round(new Date().getTime() / 1000);

    for (const match of schedule) {
        const time = match["Date__UTC_"];
        const date = new Date(time);
        const unix = (date.getTime() - date.getTimezoneOffset() * 60 * 1000) / 1000;
        const resetTime = match["ResetTime"] * 60; // seconds
        const matchEnd = unix + resetTime;

        if (unix > now) {
            const timeLeft = unix - now;
            document.getElementById("countdown_title_match").style.display = "block";
            document.getElementById("countdown_start").innerHTML = formatTime(timeLeft * 1000);
            return;
        } else if (unix <= now && matchEnd > now) {
            document.getElementById("countdown_start").innerHTML = "";
            document.getElementById("countdown_title_match").style.display = "none";
            document.getElementById("current_match").style.display = "block";
            document.getElementById("match_category").innerHTML = match["Category"];
            return;
        }
    }

    document.getElementById("match_category").innerHTML = "";
    document.getElementById("countdown_start").innerHTML = "";
    document.getElementById("current_match").style.display = "none";
    document.getElementById("countdown_title_match").style.display = "none";
    clearInterval(step);
}

function countdownToStart() {
    const date = Date.UTC("2024", "4", "18", "7", "0", "0");
    const now = new Date().getTime();
    const timeLeft = date - now;

    if (timeLeft < 0) {
        clearInterval(step);
        step = setInterval(getNextMatch, 1000);
        getNextMatch();
        return;
    }

    document.getElementById("countdown_title_start").style.display = "block";
    document.getElementById("countdown_start").innerHTML = formatTime(timeLeft);
}

function init() {
    if (getCookie("lang") == "en_US") {
        language = "en-US";
    } else if (getCookie("lang") == "ja_JP") {
        language = "ja-JP";
    } else if (getCookie("lang") == "zh_CN") {
        language = "zh-CN";
    } else if (getCookie("lang") == "ru_RU") {
        language = "ru-RU";
    } else if (getCookie("lang") == "de_DE") {
        language = "de-DE";
    } else if (getCookie("lang") == "es_ES") {
        language = "es-ES";
    }

    const scheduleJSON = document.getElementById("schedule").value;

    if (scheduleJSON === "" && localStorage.hasOwnProperty("schedule")) {
        schedule = JSON.parse(localStorage.getItem("schedule"));
        countdownToStart();
    } else if (scheduleJSON !== "") {
        localStorage.setItem("schedule", scheduleJSON);
        schedule = JSON.parse(scheduleJSON);
        countdownToStart();
    }
}

window.addEventListener("DOMContentLoaded", init, false);
