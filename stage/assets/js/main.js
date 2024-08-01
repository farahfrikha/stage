/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

/* Menu show */
if(navToggle){
   navToggle.addEventListener('click', () =>{
      navMenu.classList.add('show-menu')
   })
}

/* Menu hidden */
if(navClose){
   navClose.addEventListener('click', () =>{
      navMenu.classList.remove('show-menu')
   })
}

document.addEventListener('DOMContentLoaded', function () {
   const form = document.getElementById('projectForm');
   const metierSelect = document.getElementById('metier');

   form.addEventListener('submit', function (event) {
       event.preventDefault();
       const selectedMetier = metierSelect.value;
       if (selectedMetier) {
         window.location.href = `formulaires/${selectedMetier}.php`;
      }
   });
});
