const mobileMenuId = document.getElementById('mobile-menu');
const headerId = document.getElementById('header-id');
const hamburgerButtonClass = document.getElementsByClassName('hamburger');

const openMobileMenu = () => {
  mobileMenuId.classList.add('nav-list-active');
  hamburgerButtonClass[0].classList.add('open');
}

const closeMobileMenu = () => {
  mobileMenuId.classList.remove('nav-list-active');
  hamburgerButtonClass[0].classList.remove('open');
}

const toggleMobileMenu = () => {
  if (mobileMenuId.classList.contains('nav-list-active')) {
    closeMobileMenu();
  } else {
    openMobileMenu();
  }
}

const isClickAbleToCloseMenu = (e) => {
  if (mobileMenuId.classList.contains('nav-list-active') && e.target === hamburgerButtonClass[0]) {
    return false;
  }

  return mobileMenuId.classList.contains('nav-list-active') &&
    e.target.parentNode !== headerId &&
    e.target.parentNode !== mobileMenuId;
}

window.addEventListener('mouseup', event => {
  if (isClickAbleToCloseMenu(event)) {
    closeMobileMenu();
  }
})
