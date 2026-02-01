
const menuToggle = document.getElementById('menu-toggle');
const menuList = document.getElementById('menu-list');

menuToggle.addEventListener('click', () => {
  menuToggle.classList.toggle('active');
  menuList.classList.toggle('active');
});

