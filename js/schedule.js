let language = "en-GB", timezone;

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

function getClientTimeZone() {
    timezone = "UTC" + new Date().toString().split("GMT")[1];
    return timezone;
}

function sendXHR(type, url, data, callback) {
    var newXHR = new XMLHttpRequest() || new window.ActiveXObject("Microsoft.XMLHTTP");

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

function printSchedule() {
    var teams = ["Rose", "Mind", "Heart"], highlight = false, schedule, match, id, dateString, unix, i;

    sendXHR("GET", "/json/schedule.json", null, function (response) {
        schedule = JSON.parse(response);

        for (unix in schedule) {
            match = schedule[unix];
            id = match.category.replace(/ /g, '_');
            document.getElementById("schedule_tbody").innerHTML += "<tr id='" + unix + "'></tr>";
            dateString = toDateString(unix);
            document.getElementById(unix).innerHTML = "<td class='noborders'>" + dateString +
            "</td><td class='" + match.category.split(' ')[0] + "'>" + match.category + "</td>" +
            "<td id='" + id + "_players' class='noborders'></td><td id='" + id +
            "_reset' class='noborders'>" + (match.reset === 0 ? "N/A" : match.reset) + "</td>";

            if (!highlight && unix >= new Date().getTime() / 1000) {
                document.getElementById(unix).classList.add("highlight");
                highlight = true;
            }

            for (i = 0; i < match.players.length; i++) {
                document.getElementById(id + "_players").innerHTML += (i > 0 ? "<br>" : "") + "<span class='team'><img src='assets/icons/" + teams[i].toLowerCase() +
                ".png' alt='Team " + teams[i] + "'><span class='tooltip'>Team " + teams[i] + "</span></span>" + match.players[i];
            }
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

    document.getElementById("timezone").innerHTML = getClientTimeZone();
    printSchedule();
}

window.addEventListener("DOMContentLoaded", init, false);
