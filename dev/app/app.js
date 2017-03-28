/**
* @Author: Nicolas Fazio <webmaster-fazio>
* @Date:   20-02-2017
* @Email:  contact@nicolasfazio.ch
 * @Last modified by:   webmaster-fazio
 * @Last modified time: 28-03-2017
*/
console.log('test');
jQuery.noConflict()
// Toogle Primary Menu on click
function toggleMenu(){
  document.getElementsByClassName('primary-nav-trigger')[0].addEventListener('click',_=>{
    document.querySelector('header').classList.toggle('menu-is-open')
    document.querySelector('nav.primary-nav').classList.toggle('show')
    document.querySelector('.menu-icon').classList.toggle('active')
  })
}
function toggleSubMenu(){
  document.querySelector('.sub-level-title').addEventListener('click',_=>{
    document.querySelector('.sub-level-container').classList.toggle('open')
    document.querySelector('.arrow-toggle').classList.toggle('rotate')
  })
}
// Effect on Primary Menu Nav on Window Scroll
function navShowOnScroll(){
  window.addEventListener('scroll', _=>{
  	let distanceY = window.pageYOffset,
  			breackPoint = 100,
  			header = document.querySelector("header"),
  			logo = document.querySelector(".brand-logo"),
  			menuTrigger = document.querySelector(".menu-icon"),
  			panelHeader = document.querySelector(".panel-header")

  	if (distanceY > breackPoint) {
			header.classList.add('show')
			menuTrigger.classList.add('show')
			//pageTitle.classList.add('show')
			logo.classList.add('show')
			panelHeader.classList.add('show')
  	} else {
			if (header.classList.contains('show')=== true) {
				header.classList.remove('show')
				menuTrigger.classList.remove('show')
				logo.classList.remove('show')
				panelHeader.classList.remove('show')
			}
			}
	});
}
// Emule event click with triggerClick()

function triggerClick(){
  // open modal IMG box shadow on click .triggerModalIMG button
  jQuery('.triggerModalIMG').on('click',function(e){
    // select img of the trigger button
    //console.log(jQuery(e.target).parent().find('img'));
    var img = jQuery(e.target).parent().find('img');
    img.trigger( "click" );
  })

  jQuery('.block-views-exposed-filter-blocksearch-page-1 .input-field .prefix').on('click',function(e){

    console.log(jQuery('#edit-submit-search'));
    jQuery('#edit-submit-search').trigger( "click" );
  })
}

// load DOM function Effects
toggleMenu()
toggleSubMenu()
navShowOnScroll()

// enable all Materialize plugins
jQuery(document).ready(function() {
  // dropdown input select form
  jQuery('select').material_select();
  triggerClick()
  jQuery('.carousel.carousel-slider').carousel({fullWidth: true});
});
