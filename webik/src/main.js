import '../styles/styles.scss';
import '../node_modules/@fortawesome/fontawesome-free/js/all';
import '../node_modules/bootstrap/dist/js/bootstrap.bundle.js'

/* When the user scrolls down, hide the navbar.
When the user scrolls up, show the navbar */
var prevScrollpos = window.pageYOffset;
window.onscroll = function (e) {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("scroll").style.top = "0";
    } else if (window.scrollY > 0) {
        document.getElementById("scroll").style.top = "-250px";
    }
    prevScrollpos = currentScrollPos;
}

function change() {
    let navbar = document.getElementById("scroll");
    if (window.scrollTop > 20) {
//show
        navbar.classList.add('hidden');
    } else {
//hide
        navbar.classList.remove('hidden');
    }
}

window.onload = window.onscroll = change;