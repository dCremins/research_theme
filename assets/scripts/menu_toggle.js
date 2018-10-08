var hamburger = document.getElementById('menu-toggle');
var menu = document.getElementById('mobile-nav');
var mobileActive = false;

function toggleMobile() {
  if (mobileActive) {
    mobileActive = false;
    menu.removeAttribute('style');
  } else {
    mobileActive = true;
    menu.setAttribute('style', 'display:block;');
  }
}

hamburger.addEventListener('click', toggleMobile);
