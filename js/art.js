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

function openModal(imageSrc) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    modalImage.src = imageSrc;
    modal.style.display = 'flex';
}

function closeModal() {
    const modal = document.getElementById('imageModal');
    modalImage.src = '';
    modal.style.display = 'none';
}
