let language = "en-GB";

function getCookie(name) {
    let decodedCookies = decodeURIComponent(document.cookie);
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

function showResults() {
    const results = document.getElementsByClassName("spoiler");

    for (const result of results) {
        result.style.display = "table-cell";
    }
}

function getClientTimeZone() {
    return "UTC" + new Date().toString().split("GMT")[1];
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

function toDateString(unix) {
    var date = new Date(Number(unix) * 1000);

    return date.toLocaleString(language, {"dateStyle": "full"}) + ", " + date.toLocaleTimeString(language);
}

function convertDateTimes() {
    sendXHR("GET", "/json/schedule_new.json", null, function (response) {
        let schedule = JSON.parse(response);

        for (let unix in schedule) {
            const dateString = toDateString(unix);
            document.getElementById(unix + "_date").innerHTML = "<td class='noborders'>" + dateString + "</td>";
        }
    });
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

    document.getElementById("show_results").addEventListener("click", showResults, false);
    document.getElementById("timezone").innerHTML = getClientTimeZone();
    document.getElementById("show_results").style.display = "inline";
    convertDateTimes();
}

window.addEventListener("DOMContentLoaded", init, false);
