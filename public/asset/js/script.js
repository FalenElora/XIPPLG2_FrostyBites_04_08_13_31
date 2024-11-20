new Swiper('.card-wrapper', {
    loop: true,
    spaceBetween: 30,

    // Pagination bullets
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Responsive breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    }
});

document.addEventListener("DOMContentLoaded", () => {
    const text = "Frosty Bites Lezatnya Makanan Beku, Harganya Bikin Senyum!";
    const pElement = document.querySelector('.content p');
    
    function typeEffect(text, element) {
        let index = 0;
        function type() {
            if (index < text.length) {
                element.innerHTML += text.charAt(index);
                index++;
                setTimeout(type, 50); 
            }
        }
        type();
    }

    pElement.innerHTML = ''; 
    typeEffect(text, pElement);
});
