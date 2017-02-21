/**
* @Author: Nicolas Fazio <webmaster-fazio>
* @Date:   20-02-2017
* @Email:  contact@nicolasfazio.ch
* @Last modified by:   webmaster-fazio
* @Last modified time: 21-02-2017
*/
console.log('test');

// Toogle Primary Menu on click
function toggleMenu(){
  document.getElementsByClassName('primary-nav-trigger')[0].addEventListener('click',_=>{
    document.querySelector('nav').classList.toggle('show')
  })
}
toggleMenu();
