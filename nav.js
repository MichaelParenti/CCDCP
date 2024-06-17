var nav = document.querySelector('nav');
var menu = document.getElementById('menu');
var ulold = document.getElementById('ul');
var ul = document.getElementById('ul2');

menu.onclick = () => {
        if(ul.style.display == 'none'){
            ul.style.display = 'flex';
        }
        else {
            ul.style.display = 'none';
            console.log("it works");
        }
}
setInterval(() => {
if(window.innerWidth > 1150){
    ul.style.display = 'none';
}
}, 1)