var btn = document.getElementsByClassName("btnModal");
var modal = document.getElementById("modalWindow");
var overlay = document.getElementById("js-overlay-modal");

function showModal() {
    alert('Open');
    event.preventDefault();
    modal.classList.add('active');
    overlay.classList.add('active');
}
function closeModal() {
    alert('close');
    modal.classList.remove('active');
    overlay.classList.remove('active');
}
