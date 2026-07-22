/* --- LOADER --- */
window.addEventListener('load', () => {
    const loader = document.getElementById('loader');
    setTimeout(() => { loader.style.display = 'none'; }, 1000);
});

/* --- MOBILE MENU --- */
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close');

if(navToggle) {
    navToggle.addEventListener('click', () => { navMenu.classList.add('show-menu'); });
}
if(navClose) {
    navClose.addEventListener('click', () => { navMenu.classList.remove('show-menu'); });
}

/* --- STICKY HEADER --- */
window.addEventListener('scroll', () => {
    const header = document.getElementById('header');
    if(window.scrollY >= 50) header.classList.add('header--scroll');
    else header.classList.remove('header--scroll');
});

/* --- DARK MODE --- */
const themeButton = document.getElementById('theme-button');
themeButton.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme');
    const icon = themeButton.querySelector('i');
    icon.classList.toggle('fa-sun');
    icon.classList.toggle('fa-moon');
});

/* --- FAQ ACCORDION --- */
const faqItems = document.querySelectorAll('.faq__item');
faqItems.forEach(item => {
    const header = item.querySelector('.faq__header');
    header.addEventListener('click', () => {
        item.classList.toggle('active');
    });
});

/* --- SCROLL REVEAL & COUNTERS --- */
const revealElements = document.querySelectorAll('.reveal');
const statsSection = document.querySelector('.stats');
const statsNumbers = document.querySelectorAll('.stats__number');
let started = false;

function animateCounters() {
    statsNumbers.forEach(num => {
        const target = +num.getAttribute('data-target');
        const count = +num.innerText;
        const speed = target / 100;
        if (count < target) {
            num.innerText = Math.ceil(count + speed);
            setTimeout(animateCounters, 20);
        } else {
            num.innerText = target;
        }
    });
}

window.addEventListener('scroll', () => {
    // Reveal animation
    revealElements.forEach(el => {
        const windowHeight = window.innerHeight;
        const revealTop = el.getBoundingClientRect().top;
        if(revealTop < windowHeight - 100) el.classList.add('active');
    });

    // Stats counter trigger
    if(statsSection) {
        const sectionTop = statsSection.getBoundingClientRect().top;
        if(sectionTop < window.innerHeight && !started) {
            animateCounters();
            started = true;
        }
    }

    // Scroll up button
    const scrollUp = document.getElementById('scroll-up');
    if(window.scrollY >= 350) scrollUp.classList.add('show-scroll');
    else scrollUp.classList.remove('show-scroll');
});
