function selectClip() {
    const match = document.getElementById('select_clip').value;
    console.log(match);
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `/php/db?clips=${match}`);
    xhr.onreadystatechange = function () {
        const ul = document.getElementById('match_clips');
        ul.innerHTML = '';

        if (this.readyState === 4 && this.status === 200) {
            const data = JSON.parse(this.response);

            for (const clip of data) {
                const li = document.createElement('li');
                const anchor = document.createElement('a');
                anchor.href = clip['Link'];
                anchor.innerText = clip['Title'];
                anchor.addEventListener("click", clipLinkClicked, false);
                li.appendChild(anchor);
                ul.appendChild(li);
            }
        }
    }

    xhr.send();
}

function playClip(url) {
    const clipEmbed = document.getElementById('embed');
    clipEmbed.style.background = "url('/assets/loading.gif') center no-repeat";
    clipEmbed.src = `${url}&parent=${window.location.hostname}&autoplay=true`;
    window.scrollTo(0, document.body.scrollHeight);
}

function clipLinkClicked(event) {
    event.preventDefault();
    playClip(event.target.href);
}

function randomClip() {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', '/php/db?clips=all');
    xhr.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            const data = JSON.parse(this.response);
            playClip(data['Link']);
        }
    }

    xhr.send();
}

function init() {
    const showButton = document.getElementById("select_clip");
    const hideButton = document.getElementById("random_clip");

    if (showButton) {
        showButton.addEventListener("change", selectClip, false);
        hideButton.addEventListener("click", randomClip, false);
        showButton.style.display = "inline";
    }
}

window.addEventListener("DOMContentLoaded", init, false);
