let intViewportWidth = window.innerWidth;
console.log(intViewportWidth);
if (intViewportWidth < 780) {
//mobile slider
const slider = document.querySelector('#diets'),
    slides = Array.from(document.querySelectorAll('.diet-box'))
  /*  slidesControl = Array.from(document.querySelectorAll('.slide-testimonials-numbers-mobile .slide-testimonials-number'))
    defaultControl = slidesControl[0]
    defaultControl.classList.add('on')
    prevActiveControl = slidesControl[-1]*/

let isDragging = false,
    startPos = 0,
    currentTranslate = 0,
    prevTranslate = 0,
    animationID = 0,
    currentIndex = 0

slides.forEach((slide, index) => {
    //touch event
    slide.addEventListener('touchstart', touchStart(index))
    slide.addEventListener('touchend', touchEnd)
    slide.addEventListener('touchmove', touchMove)
})


function touchStart(index) {
    return function (event) {
        currentIndex = index
        startPos = getPositionX(event)
        isDragging = true

        animationID = requestAnimationFrame(animation)
  //      prevActiveControl = slidesControl[currentIndex]
       
        
        
    }
}

function touchEnd() {
    isDragging = false
    
    cancelAnimationFrame(animationID)
    const movedBy = currentTranslate - prevTranslate
    

    if (movedBy < -100 && currentIndex < slides.length - 1){
        currentIndex += 1
    /*    slidesControl[currentIndex].classList.add('on')
        if( slidesControl[currentIndex] != prevActiveControl){

        prevActiveControl.classList.remove('on')
    */
        }
      
    
    if (movedBy > 100 && currentIndex > 0){
        currentIndex -= 1}
     /*   slidesControl[currentIndex].classList.add('on')
        if( slidesControl[currentIndex] != prevActiveControl){
        prevActiveControl.classList.remove('on')
        
        }
        if (slidesControl[currentIndex] != defaultControl){
            defaultControl.classList.remove('on')
        }*/
    

    setPositionByIndex();
    }   

    



function touchMove(event) {
    if (isDragging) {
        const currentPositon = getPositionX(event)
        currentTranslate = prevTranslate + currentPositon - startPos
    }
}

function getPositionX(event) {
    return event.type.includes('mouse') ? event.pageX : event.touches[0].clientX
}

function animation() {
    setSliderPosition()
    if (isDragging) requestAnimationFrame(animation)
}

function setSliderPosition() {
    slider.style.transform = `translateX(${currentTranslate}px)`
}

function setPositionByIndex() {
    currentTranslate = currentIndex * -window.innerWidth
    prevTranslate = currentTranslate
    setSliderPosition()
}
}
