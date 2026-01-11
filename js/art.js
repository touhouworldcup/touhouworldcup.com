function art_hide(clicker) {
    clicker.innerText = '▸' + clicker.innerText.slice(1);
    clicker.parentElement.nextElementSibling.style.display = "none";
    clicker.setAttribute("onclick", "art_show(this)");
}

function art_show(clicker) {
    const contentElement = clicker.parentElement.nextElementSibling;
    const images = contentElement.getElementsByTagName('img');

    for (let i = 0; i < images.length; i++) {
        const img = images[i];
        const dataSrc = img.getAttribute('data-src');

        if (dataSrc && !img.getAttribute('src')) {
            img.setAttribute('src', dataSrc);
            img.removeAttribute('data-src');
        }
    }

    clicker.innerText = '▾' + clicker.innerText.slice(1);
    clicker.parentElement.nextElementSibling.style.display = "flex";
    clicker.setAttribute("onclick", "art_hide(this)");
}

function openModal(src) {
    const modal = document.getElementById('modal');
    const modalImage = document.getElementById('modalImage');
    const modalVideo = document.getElementById('modalVideo');

    if (src.endsWith('.mp4')) {
        modalVideo.src = src;
        modalVideo.style.display = 'block';
        modalVideo.play();
    } else {
        modalImage.src = src;
        modalImage.style.display = 'block';
    }

    modal.style.display = 'flex';
}

function closeModal() {
    const modal = document.getElementById('modal');
    const modalImage = document.getElementById('modalImage');
    const modalVideo = document.getElementById('modalVideo');

    modalImage.removeAttribute('src');
    modalVideo.pause();
    modalVideo.removeAttribute('src');
    modalVideo.load();
    modal.style.display = 'none';
    modalImage.style.display = 'none';
    modalVideo.style.display = 'none';
}
