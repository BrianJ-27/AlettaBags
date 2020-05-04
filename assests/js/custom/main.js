/* eslint-disable linebreak-style */
/* eslint-disable vars-on-top */
/* eslint-disable no-undef */


/* Global Variables */

const menu = document.querySelector( '.hamburger-menu' );
const sideNav = document.querySelector( '.side-nav' );
const navBar = document.querySelector( '.nav-bar' );

/* Main Navigation Menu Toggle */
menu.addEventListener( 'click', ()=>{
	menu.classList.toggle( 'change' );
	navBar.style.transform = 'translateX(0px)';
	navBar.style.transition = 'transform .4s .3s ease-in';
	sideNav.classList.toggle( 'change-side-nav' );
});


/* Smooth Scroll functionality*/

document.querySelectorAll( 'a[href^="#"]' ).forEach( anchor => {
	anchor.addEventListener( 'click', function( e ) {
		e.preventDefault();

		document.querySelector( this.getAttribute( 'href' ) ).scrollIntoView({
			behavior: 'smooth'
		});
	});
});

/* Animate front page features on scroll */

// Testimonials
ScrollReveal().reveal( '.reviews', {
	delay: 800,
	rotate: {
		y: 90
	},
	easing: 'ease-in'
});

// Biography Content Section
ScrollReveal().reveal( '.bio__content-wrapper', {
	delay: 500,
	origin: 'left',
	distance: '120px',
	easing: 'ease-in',
	viewFactor: 0.5
});

// Biography Video
ScrollReveal().reveal( 'iframe', {
	delay: 700,
	origin: 'bottom',
	distance: '150px',
	easing: 'ease-in',
	viewFactor: 0.5
});


