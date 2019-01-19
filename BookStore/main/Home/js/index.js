
// SLIDESHOW CAROUSEL AUTOMATIC
var slideIndex = 0;
carousel();

function carousel() {

    var x = document.getElementsByClassName("mySlides");
    for (var i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 4000); // Change image every 4 seconds

}

