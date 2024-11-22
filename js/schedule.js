let language = "en-GB";
let step = setInterval(getNextMatch, 1000);
let schedule = [];
let scheduleElement;

function getCookie(name) {
    const decodedCookies = decodeURIComponent(document.cookie);
    let cookieArray = decodedCookies.split(';');
    name += '=';

    for (let cookie of cookieArray) {
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

function showResults(event) {
    const spoilerOl = document.getElementById("spoiler_ol");
    const results = document.getElementsByClassName("spoiler");
    document.getElementById(event.target.id).style.display = "none";
    document.getElementById(event.target.id.replace("show", "hide")).style.display = "inline";

    if (spoilerOl) {
        spoilerOl.style.display = "block";
    }

    for (const result of results) {
        if (result.tagName == "P") {
            result.style.display = "block";
        } else {
            result.style.display = "table-cell";
        }
    }
}

function hideResults(event) {
    const spoilerOl = document.getElementById("spoiler_ol");
    const results = document.getElementsByClassName("spoiler");
    document.getElementById(event.target.id).style.display = "none";
    document.getElementById(event.target.id.replace("hide", "show")).style.display = "inline";

    if (spoilerOl) {
        spoilerOl.style.display = "none";
    }

    for (const result of results) {
        result.style.display = "none";
    }
}

function getClientTimeZone() {
    return "UTC" + new Date().toString().split("GMT")[1];
}

function toDateString(dateTime) {
    const date = new Date(dateTime);
    return date.toLocaleString(language, {"dateStyle": "full"}) + ", " + date.toLocaleTimeString(language);
}

function convertDateTimes(year) {
    const loop = true;
    let index = 0;

    while (loop) {
        const dateElement = document.getElementById(`date_${year}_${index}`);

        if (!dateElement) {
            break;
        }

        const dateString = toDateString(dateElement.innerHTML + " UTC");
        dateElement.innerHTML = `<td class='noborders'>${dateString}</td>`;
        index++;
    }
}

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

function formatTime(timeLeft) {
    let days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
    let hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
    return days + _("d ") + hours + _("h ") + minutes + _("m ") + seconds + _("s");
}

function getNextMatch() {
    if (!scheduleElement) {
        clearInterval(step);
        return;
    }

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

    const showButton = document.getElementById("show_results");
    const hideButton = document.getElementById("hide_results");

    if (showButton) {
        showButton.addEventListener("click", showResults, false);
        hideButton.addEventListener("click", hideResults, false);
        showButton.style.display = "inline";
    }
    
    if (document.getElementById("timezone")) {
        document.getElementById("timezone").innerHTML = getClientTimeZone();
    }

    if (location.pathname == "/schedule") {
        convertDateTimes("2024");
    } else {
        convertDateTimes("2023");
        convertDateTimes("2022");
        convertDateTimes("2021");
        convertDateTimes("2020");
    }

    scheduleElement = document.getElementById("schedule");

    if (scheduleElement) {
        const scheduleJSON = scheduleElement.value;

        if (scheduleJSON === "" && localStorage.hasOwnProperty("schedule") !== "undefined") {
            schedule = JSON.parse(localStorage.getItem("schedule"));
            getNextMatch();
        } else if (scheduleJSON !== "") {
            localStorage.setItem("schedule", scheduleJSON);
            schedule = JSON.parse(scheduleJSON);
            getNextMatch();
        }
    }
}

window.addEventListener("DOMContentLoaded", init, false);
