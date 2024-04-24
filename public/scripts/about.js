// Accordion About page
const accordionItems = document.querySelectorAll('.accordion-item');

accordionItems.forEach(item => {
  const header = item.querySelector('.accordion-header');
  const content = item.querySelector('.accordion-content');

  // Initially hide the content
  content.style.maxHeight = 0;
  content.style.overflow = 'hidden';

  header.addEventListener('click', () => {
    content.classList.toggle('active');
    if (content.classList.contains('active')) {
      content.style.maxHeight = content.scrollHeight + 'px';
      content.style.overflow = 'normal';
    } else {
      content.style.maxHeight = 0;
    }
  });
});


// Header slider About

const headerContent = document.getElementById('headerContent');
const header = document.getElementById('aboutHeader');
const sliderNav = document.getElementById('sliderNav');
const slides = [
  { headerImg: '../images/jpgs/bg-hd-image.jpg', text: "Reach millions of B2B and B2C buyers globally with deballage", button1Text: "Rejoindre Deballage", button2Text: "Parlez a un consultant" },
  { headerImg: '../images/jpgs/about-port.jpg', text: "Reach millions of B2B and B2C buyers globally with deballage", button1Text: "Rejoindre Deballage", button2Text: "Parlez a un consultant" },
  // Add more slides as needed
];
let currentSlide = 0;

function updateSlide() {
  headerContent.innerHTML = `
    <h1 class="text-[32px] lg:text-[48px] w-full lg:w-[900px] font-bold mb-4">${slides[currentSlide].text}</h1>
    <p class="text-lg">${slides[currentSlide].text}</p>
    <div class="mt-5 flex lg:flex-row flex-col px-6 lg:justify-center">
      <a href="#" class="py-[14px] font-bold px-7 text-[#333333] bg-white inline-block m-0 lg:mr-1 rounded-full">${slides[currentSlide].button1Text}</a>
      <a href="#" class="py-[14px] mt-2 inline-block lg:m-0 font-bold px-7 bg-red-700 text-white rounded-full">${slides[currentSlide].button2Text}</a>
    </div>
  `;
  header.style.backgroundImage = `url('${slides[currentSlide].headerImg}')`;

  // Update slider navigation indicators
  const indicators = [...sliderNav.children];
  indicators.forEach((indicator, index) => {
    if (index === currentSlide) {
      indicator.classList.add('active');
    } else {
      indicator.classList.remove('active');
    }
  });
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % slides.length;
  updateSlide();
}

// Create slider navigation indicators
for (let i = 0; i < slides.length; i++) {
  const indicator = document.createElement('div');
  indicator.className = 'sliderIndicator';
  indicator.addEventListener('click', () => {
    currentSlide = i;
    updateSlide();
  });
  sliderNav.appendChild(indicator);
}


setInterval(nextSlide, 5000); // Change slide every 5 seconds

updateSlide();