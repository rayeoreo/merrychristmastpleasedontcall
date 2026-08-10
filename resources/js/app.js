const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const iconOpen = document.getElementById('icon-open');
const iconClose = document.getElementById('icon-close');

if (menuToggle && mobileMenu) {
    menuToggle.addEventListener('click', () => {
        const isOpen = mobileMenu.classList.toggle('hidden') === false;
        mobileMenu.classList.toggle('hidden', !isOpen);
        menuToggle.setAttribute('aria-expanded', String(isOpen));

        if (iconOpen && iconClose) {
            iconOpen.classList.toggle('hidden', isOpen);
            iconClose.classList.toggle('hidden', !isOpen);
        }
    });

    mobileMenu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            menuToggle.setAttribute('aria-expanded', 'false');
            if (iconOpen && iconClose) {
                iconOpen.classList.remove('hidden');
                iconClose.classList.add('hidden');
            }
        });
    });
}

const testimonialTrack = document.getElementById('testimoni-track');
const testiPrev = document.getElementById('testi-prev');
const testiNext = document.getElementById('testi-next');
const testiProgress = document.getElementById('testi-progress');

if (testimonialTrack && testiPrev && testiNext) {
    const gap = 24;
    const trackStyle = testimonialTrack.style;
    let slides = Array.from(testimonialTrack.querySelectorAll(':scope > article'));

    const cloneFirst = slides[0].cloneNode(true);
    const cloneLast = slides[slides.length - 1].cloneNode(true);
    cloneFirst.setAttribute('aria-hidden', 'true');
    cloneLast.setAttribute('aria-hidden', 'true');
    testimonialTrack.appendChild(cloneFirst);
    testimonialTrack.prepend(cloneLast);
    slides = Array.from(testimonialTrack.querySelectorAll(':scope > article'));

    const total = slides.length;
    let current = 1;

    const setTransition = (on) => {
        if (on) {
            testimonialTrack.classList.add('transition-transform', 'duration-500', 'ease-out');
        } else {
            testimonialTrack.classList.remove('transition-transform', 'duration-500', 'ease-out');
        }
    };

    const applyTransform = () => {
        const card = slides[0];
        const step = card.getBoundingClientRect().width + gap;
        trackStyle.transform = `translateX(-${current * step}px)`;
    };

    const updateProgress = () => {
        if (!testiProgress) return;
        const real = total - 2;
        const progress = real > 1 ? (current - 1) / (real - 1) : 0;
        testiProgress.style.width = `${Math.min(100, Math.max(0, progress * 100))}%`;
    };

    const goTo = (index) => {
        current = index;
        applyTransform();
        updateProgress();
    };

    const goToAnimated = (index) => {
        setTransition(true);
        goTo(index);
    };

    testiNext.addEventListener('click', () => {
        goToAnimated(current + 1);

        if (current >= total - 1) {
            setTimeout(() => {
                setTransition(false);
                goTo(1);
            }, 520);
        }
    });

    testiPrev.addEventListener('click', () => {
        goToAnimated(current - 1);

        if (current <= 0) {
            setTimeout(() => {
                setTransition(false);
                goTo(total - 2);
            }, 520);
        }
    });

    let isDown = false;
    let startX = 0;
    let dragged = false;

    testimonialTrack.addEventListener('pointerdown', (e) => {
        isDown = true;
        dragged = false;
        startX = e.clientX;
    });

    testimonialTrack.addEventListener('pointermove', (e) => {
        if (!isDown) return;
        if (Math.abs(e.clientX - startX) > 12) dragged = true;
    });

    testimonialTrack.addEventListener('pointerup', (e) => {
        if (!isDown) return;
        isDown = false;
        if (!dragged) return;
        const delta = e.clientX - startX;
        if (delta < -40) testiNext.click();
        else if (delta > 40) testiPrev.click();
    });

    testimonialTrack.addEventListener('pointerleave', () => {
        isDown = false;
    });

    window.addEventListener('resize', () => {
        setTransition(false);
        applyTransform();
    });

    setTransition(false);
    applyTransform();
    updateProgress();
}