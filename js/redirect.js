setTimeout("document.location.href='../index.html'", 5000);

let updateTimer = () => {
    if (document.getElementById('timer').innerText){
    document.getElementById('timer').innerHTML = document.getElementById('timer').innerText - 1;
    console.log(document.getElementById('timer').innerText); }
    else {
        clearInterval(timer);}
}
let timer = setInterval(updateTimer, 1000);
updateTimer();
