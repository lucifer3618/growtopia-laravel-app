// Carousel Start
const nextBtn = document.querySelector('.next');
const backBtn = document.querySelector('.back');
const mainCarousel = document.querySelector(".main-carousel");
const list = document.querySelector('.content-list');
const carouselItem = document.querySelectorAll('.carousel-items');
const timeSlider = document.querySelector('.Automatedslider');

let runningTime = 3000;
let autoChange = 7000;
let timeOut;

let AutoSwap = setTimeout(() => {
    nextBtn.click();
}, autoChange);

function Animationreset(){
    timeSlider.style.animation = 'none';
    timeSlider.offsetHeight;
    timeSlider.style.animation = null;
    timeSlider.style.animation = 'timebar 7s linear 1 forwards';
}

function showSlider(direction){
    let slideItems = list.querySelectorAll('.main-carousel .content-list .carousel-items')
    if(direction === "next"){
        list.appendChild(slideItems[0]);
        mainCarousel.classList.add('next');
    }else{
        list.prepend(slideItems[slideItems.length-1]);
        mainCarousel.classList.add('back');
    }

    clearTimeout(timeOut);

    timeOut = setTimeout(() => {
        mainCarousel.classList.remove('next');
        mainCarousel.classList.remove('back');
    }, runningTime)

    clearTimeout(AutoSwap);
    AutoSwap = setTimeout(() => {
        nextBtn.click();
    }, autoChange)

    Animationreset()
}


nextBtn.onclick = function(){
    showSlider("next");
}

backBtn.onclick = function(){
    showSlider("back");
}

Animationreset()
// Carousel End

// Slide-in Animation Start
const watch = new IntersectionObserver((items) => {
    items.forEach((item) => {
        if(item.isIntersecting){
            item.target.classList.add("show");
        }else{
            item.target.classList.remove("show");
        }
    });
});


const hiddenItems = document.querySelectorAll(".hidden");
hiddenItems.forEach((item) => watch.observe(item));
// Slide-in Animation End