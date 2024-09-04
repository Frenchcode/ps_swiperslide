
//const slide = document.querySelectorAll(".swiper-slide");
//for (const i of slide) {
//    const random = (number) => Math.floor(Math.random() * (number + 1));
//    i.style.backgroundColor = `rgb(${random(255)},${random(255)},${random(255)})`;
//}

const itemList = document.querySelectorAll(' .fade-item');
let currentIndex = 0;

const showNextItem = () => {
    itemList.forEach(item => item.classList.remove('active'));
    itemList[currentIndex].classList.add('active');
    currentIndex = (currentIndex + 1) % itemList.length;
}

showNextItem();
setInterval(showNextItem, 2000);



const swiperOptions = {
    loop: "infinite",
    effect: "fade",
    autoplay: {
        delay: 50000,
        disableOnInteraction: true
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    },
    // custom pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (i, className) {
            return `
            <button class="${className}">
               <svg class="progress" width="41" height="41">
               <svg class="progress" width="41" height="41">
                    <circle class="circle-origin" r="20" cx="20.5" cy="20.5"></circle>
               </svg>
               <span> ${ i + 1} </span> 
            </button>
                `;
        }
    }
};

const swiper = new Swiper(".swiper", swiperOptions);



