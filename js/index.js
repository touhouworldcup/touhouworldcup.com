let language = "en-GB", step = setInterval(updateCountdowns, 1000);

function _(letter) {
    if (language != "ja-JP" && language != "zh-CN") {
        return letter;
    }

    return ({
        "d ": "日",
        "h ": "时",
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

function updateCountdowns() {
    let date = Date.UTC("2022", "4", "14", "0", "0", "0");
    let now = new Date().getTime();
    let timeLeft = date - now;
    document.getElementById("countdown_start").innerHTML = formatTime(timeLeft);

    if (timeLeft < 0) {
        document.getElementById("countdown_start").innerHTML = "";
        clearInterval(step);
    }
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

    updateCountdowns();
}

window.addEventListener("DOMContentLoaded", init, false);
