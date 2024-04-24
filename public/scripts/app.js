





$(function () {
    // Navbar section
    const menuToggle = document.querySelector('.menuToggle');
    const menuItems = document.getElementById('menuItems');

    menuToggle.addEventListener('click', () => {
        menuItems.classList.add('open');
        document.getElementById('openIcon').classList.toggle('block');
        document.getElementById('closeIcon').classList.toggle('block');
    });

    document.getElementById('closeIcon').addEventListener("click", () => {
        menuItems.classList.remove('open');
    });

    // Hero sliders
    const slideContainer = document.querySelector('.slide-container');
    const heroSlides = document.querySelectorAll('.slide');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    let slideIndex = 0;
    const slideWidth = heroSlides[0].clientWidth;
    let autoplayInterval;

    function showSlide(index) {
        slideContainer.style.transform = `translateX(-${slideWidth * index}px)`;
    }

    function nextHeroSlide() {
        slideIndex++;
        if (slideIndex >= heroSlides.length) {
            slideIndex = 0;
        }
        showSlide(slideIndex);
    }

    function prevSlide() {
        slideIndex--;
        if (slideIndex < 0) {
            slideIndex = heroSlides.length - 1;
        }
        showSlide(slideIndex);
    }

    function startAutoplay() {
        autoplayInterval = setInterval(() => {
            nextHeroSlide();
        }, 3000); // Adjust the interval duration (in milliseconds) as desired
    }

    function stopAutoplay() {
        clearInterval(autoplayInterval);
    }

    nextBtn.addEventListener('click', () => {
        nextHeroSlide();
        stopAutoplay();
    });

    prevBtn.addEventListener('click', () => {
        prevSlide();
        stopAutoplay();
    });

    startAutoplay();

    // Code for the drop down menu

    // const sidebarTrigger = document.querySelector('.sidebar-trigger');

    // sidebarTrigger.addEventListener('mouseenter', function() {
    // sidebarTrigger.classList.add('hover');
    // });

    // sidebarTrigger.addEventListener('mouseleave', function() {
    // sidebarTrigger.classList.remove('hover');
    // });
})



