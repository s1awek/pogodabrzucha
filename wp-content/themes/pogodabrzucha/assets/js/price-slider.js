
let intViewportWidth = window.innerWidth;
console.log(intViewportWidth);
if (intViewportWidth < 780) {

 //slider reviews mobile
 var slideIndexF = 1;
 showSlidesF(slideIndexF);
 
 // Next/previous controls
 function plusSlidesF(n) {
   showSlidesF(slideIndexF += n);
 }
// mobile diets
function showSlidesF(n) {
    var i;
    var slides = document.getElementsByClassName("diet-box");
   // var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndexF = 1}
    if (n < 1) {slideIndexF = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
  
    slides[slideIndexF-1].style.display = "flex";
   
  }
 
} 