let language = "en-GB";

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
    const results = document.getElementsByClassName("spoiler");
    document.getElementById(event.target.id).style.display = "none";
    document.getElementById(event.target.id.replace("show", "hide")).style.display = "inline";

    for (const result of results) {
        if (result.tagName == "P") {
            result.style.display = "block";
        } else {
            result.style.display = "table-cell";
        }
    }
}

function hideResults(event) {
    const results = document.getElementsByClassName("spoiler");
    document.getElementById(event.target.id).style.display = "none";
    document.getElementById(event.target.id.replace("hide", "show")).style.display = "inline";

    for (const result of results) {
        result.style.display = "none";
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
    const date = new Date(Number(unix) * 1000);
    return date.toLocaleString(language, {"dateStyle": "full"}) + ", " + date.toLocaleTimeString(language);
}

function convertDateTimes(json) {
    sendXHR("GET", json, null, function (response) {
        const schedule = JSON.parse(response);

        for (const unix in schedule) {
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

    const showButton = document.getElementById("show_results");
    const hideButton = document.getElementById("hide_results");

    if (showButton) {
        showButton.addEventListener("click", showResults, false);
        hideButton.addEventListener("click", hideResults, false);
        showButton.style.display = "inline";
    }
    
    document.getElementById("timezone").innerHTML = getClientTimeZone();

    if (location.pathname == "/schedule") {
        convertDateTimes("/json/schedule_new.json");
    } else {
        convertDateTimes("/past/schedule_2021.json");
        convertDateTimes("/past/schedule_2020.json");
    }
}

window.addEventListener("DOMContentLoaded", init, false);
