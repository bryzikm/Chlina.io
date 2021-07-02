var mobileMenuId = document.getElementById('mobile-menu');
var headerId = document.getElementById('header-id');
var hamburgerButtonClass = document.getElementsByClassName('hamburger');

function openMobileMenu() {
  mobileMenuId.classList.add('nav-list-active');
  hamburgerButtonClass[0].classList.add('open');
}

function closeMobileMenu() {
  mobileMenuId.classList.remove('nav-list-active');
  hamburgerButtonClass[0].classList.remove('open');
}

function toggleMobileMenu() {
  if (mobileMenuId.classList.contains('nav-list-active')) {
    closeMobileMenu();
  } else {
    openMobileMenu();
  }
}

function isClickAbleToCloseMenu(e) {
  if (mobileMenuId.classList.contains('nav-list-active') && e.target === hamburgerButtonClass[0]) {
    return false;
  }

  return mobileMenuId.classList.contains('nav-list-active') &&
    e.target.parentNode !== headerId &&
    e.target.parentNode !== mobileMenuId;
}

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: { lat: 50.4469853, lng: 19.8265339 },
    zoom: 15,
  });

  marker.setMap(map);
}

function onHrefClick() {
  $('a[href^="#"]').on('click', function (event) {
    var target = $($(this).attr('href'));

    if (target.length) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: (target.offset().top)
      }, 1000, 'swing');
    }
  });
}

window.addEventListener('mouseup', function (event) {
  if (isClickAbleToCloseMenu(event)) {
    closeMobileMenu();
  }
})

$(document).ready(function () {
  initMap();
  onHrefClick();
})
