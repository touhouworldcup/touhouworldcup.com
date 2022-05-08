function getClientTimeZone() {
    document.getElementById("timezone").innerHTML = "UTC" + new Date().toString().split("GMT")[1];
}

window.addEventListener("DOMContentLoaded", getClientTimeZone, false);
