// wow js
new WOW().init();

// preloader 
var loader = document.getElementById("preloader");
window.addEventListener("load",function(){
  loader.style.display="none";
});




// owl carousel 
$('.owl-carousel').owlCarousel({
loop:true,
margin:0,
autoplay:true,
autoplayTimeout:3000,
autoplayHoverPause:true,
nav:false,
animateOut: 'fadeOut',
responsive:{
    0:{
        items:1
    },
    600:{
        items:1
    },
    1000:{
        items:1
    }
}
})






//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 


