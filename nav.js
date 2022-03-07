const menuButton = document.getElementById('menu_button');
const menu_Dropdown = document.getElementById('menu');
menuButton.addEventListener('click', function(){
  menu_Dropdown.classList.toggle("hidden");
});