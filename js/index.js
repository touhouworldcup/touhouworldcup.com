let language = "en-GB";
let step = setInterval(countdownToStart, 1000);
let schedule;

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

function sendXHR(type, url, data, callback) {
    const newXHR = new XMLHttpRequest() || new window.ActiveXObject("Microsoft.XMLHTTP");
    newXHR.open(type, url, true);
    newXHR.send(data);
    newXHR.onreadystatechange = function () {
        if (this.status === 200 && this.readyState === 4) {
            callback(this.response);
        }
    };
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

    for (const unix in schedule) {
        if (unix > now) {
            const timeLeft = unix - now;
            document.getElementById("countdown_title_match").style.display = "block";
            document.getElementById("countdown_start").innerHTML = formatTime(timeLeft * 1000);
            return;
        }
    }

    document.getElementById("countdown_start").innerHTML = "";
    document.getElementById("countdown_title_match").style.display = "none";
    clearInterval(step);
}

function countdownToStart() {
    const date = Date.UTC("2023", "4", "27", "12", "0", "0");
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

    sendXHR("GET", "/json/schedule.json", null, function (response) {
        schedule = JSON.parse(response);
        countdownToStart();
    });
}

window.addEventListener("DOMContentLoaded", init, false);
