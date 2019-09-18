let toggleMenuButton = document.getElementById('toggle-menu-button'),
  top_menu = document.getElementsByClassName('menu')[0],
  menuIcon = toggleMenuButton.getElementsByTagName('ion-icon')[0],
  closeIcon = toggleMenuButton.getElementsByTagName('ion-icon')[1];

toggleMenuButton.addEventListener('click', function() {
  top_menu.classList.toggle('show');
  closeIcon.classList.toggle('hide');
  menuIcon.classList.toggle('hide');
});

function checkWindowWidth() {
  windowWidth = window.innerWidth;

  windowWidth >= 768
    ? top_menu.classList.remove('show')
    : (menuIcon.classList.remove('hide'), closeIcon.classList.add('hide'));
}

window.addEventListener('resize', checkWindowWidth);
