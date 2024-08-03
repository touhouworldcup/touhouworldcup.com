function art_hide(clicker) {
    clicker.parentElement.nextElementSibling.style.display = "none";
    clicker.innerText = "⮞";
    clicker.setAttribute("onclick", "art_show(this)");
}

function art_show(clicker) {
    clicker.parentElement.nextElementSibling.style.display = "block";
    clicker.innerText = "⮟";
    clicker.setAttribute("onclick", "art_hide(this)");
}