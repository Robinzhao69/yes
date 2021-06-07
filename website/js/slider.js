let thumbnails = document.getElementsByClassName('product-card');
let slider = document.getElementById('slider');

let buttonRight = document.getElementById('slide-right');
let buttonLeft = document.getElementById('slide-left');

buttonLeft.addEventListener('click', function(){
    console.log("yes");
    slider.scrollLeft -= 125;
})

buttonRight.addEventListener('click', function(){
    console.log("yes");
    slider.scrollLeft += 125;
})

const maxScrollLeft = slider.scrollWidth - slider.clientWidth;
// alert(maxScrollLeft);
// alert("Left Scroll:" + slider.scrollLeft);
