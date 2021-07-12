const toggleMenu = document.querySelector('.main-nav button');
const menu = document.querySelector('#main-menu');

toggleMenu.addEventListener('click', function() {
  console.log('iuhzhuduaz')
  const open = JSON.parse(toggleMenu.getAttribute('aria-expanded'));
  toggleMenu.setAttribute('aria-expanded', !open);
  menu.hidden = !menu.hidden;
});

console.log('iuhiueahf')