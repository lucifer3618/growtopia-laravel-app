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



