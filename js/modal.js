var btn = document.getElementsByClassName("btnModal");
var modal = document.getElementById("modalWindow");
var overlay = document.getElementById("js-overlay-modal");

function showModal() {
    event.preventDefault();
    modal.classList.add('active');
    overlay.classList.add('active');
    document.getElementById('formNewModal').reset();
    document.getElementById("checkClientResult").innerHTML = "";
}
function closeModal() {
    modal.classList.remove('active');
    overlay.classList.remove('active');
}
