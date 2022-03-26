

//slider reviews
var slideIndexR = 1;
showSlidesR(slideIndexR);

// Next/previous controls
function plusSlidesR(n) {
  showSlidesR(slideIndexR += n);
}


function showSlidesR(n) {
  var i;
  var slides = document.getElementsByClassName("section-reviews__row--desc");
 // var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndexR = 1}
  if (n < 1) {slideIndexR = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }

  slides[slideIndexR-1].style.display = "flex";
 
}
//slider reviews mobile
var slideIndexM = 1;
showSlidesM(slideIndexM);

// Next/previous controls
function plusSlidesM(n) {
  showSlidesM(slideIndexM += n);
}


function showSlidesM(n) {
  var i;
  var slides = document.getElementsByClassName("section-reviews__row--mobile");
 // var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndexM = 1}
  if (n < 1) {slideIndexM = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }

  slides[slideIndexM-1].style.display = "flex";
 
}

  


