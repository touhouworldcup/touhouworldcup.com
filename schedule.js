var language = "en_US", timezone;

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

function toDateString(unix) {
    var date = new Date(Number(unix) * 1000);

    if (language == "en_US") {
        return date.toLocaleString("en-US", {"dateStyle": "full"}) + ", " + date.toLocaleTimeString("en-US");
    } else if (language == "ja_JP") {
        return date.toLocaleString("ja-JP", {"dateStyle": "full"}) + ", " + date.toLocaleTimeString("ja-JP");
    } else if (language == "zh_CN") {
        return date.toLocaleString("zh-CN", {"dateStyle": "full"}) + ", " + date.toLocaleTimeString("zh-CN");
    } else if (language == "ru_RU") {
        return date.toLocaleString("ru-RU", {"dateStyle": "full"}) + ", " + date.toLocaleTimeString("ru-RU");
    } else {
        return date.toLocaleString("de-DE", {"dateStyle": "full"}) + ", " + date.toLocaleTimeString("de-DE");
    }
}

function printSchedule(schedule) {
    var highlight = false, match, id, dateString, team, unix;

    for (unix in schedule) {
        match = schedule[unix];
        id = match.category.replace(/ /g, '_');
        document.getElementById("schedule_tbody").innerHTML += "<tr id='" + unix + "'></tr>";
        dateString = toDateString(unix);
        document.getElementById(unix).innerHTML = "<td class='noborders'>" + dateString +
        "</td><th class='" + match.category.split(' ')[0] + " noborders'>" + match.category + "</th>" +
        "<td id='" + id + "_players' class='noborders'></td><td id='" + id +
        "_reset' class='noborders'>" + (match.reset === 0 ? "N/A" : match.reset) + "</td>";

        if (!highlight && unix >= new Date().getTime() / 1000) {
            document.getElementById("unix").classList.add("highlight");
            highlight = true;
        }

        for (var i = 0; i < match.players.length; i++) {
            if (match.countries[i] == "cn") {
                team = "CHINA: ";
            } else if (match.countries[i] == "jp") {
                team = "JAPAN: ";
            } else {
                team = "WEST: ";
            }

            document.getElementById(id + "_players").innerHTML += (i > 0 ? "<br>" : "") + team + match.players[i];
        }
    }
}

function init() {
    if (getCookie("lang") == "ja_JP" || location.href.includes("jp")) {
        language = "ja_JP";
    } else if (getCookie("lang") == "zh_CN" || location.href.includes("zh")) {
        language = "zh_CN";
    } else if (getCookie("lang") == "ru_RU") {
        language = "ru_RU";
    } else if (getCookie("lang") == "de_DE") {
        language = "de_DE";
    }

    document.getElementById("timezone").innerHTML = getClientTimeZone();
}

window.addEventListener("DOMContentLoaded", init, false);
