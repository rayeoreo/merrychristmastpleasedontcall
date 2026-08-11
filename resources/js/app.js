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

document.querySelectorAll('.faq-column').forEach((column) => {
    const details = Array.from(column.querySelectorAll('details'));

    details.forEach((detail) => {
        detail.addEventListener('toggle', () => {
            if (detail.open) {
                details.forEach((other) => {
                    if (other !== detail) other.open = false;
                });
            }
        });
    });
});

const revealEls = document.querySelectorAll('.reveal');

if (revealEls.length > 0) {
    if ('IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                        revealObserver.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
        );

        revealEls.forEach((el) => {
            const siblings = el.parentElement.querySelectorAll(':scope > .reveal');
            const index = Array.prototype.indexOf.call(siblings, el);
            el.style.transitionDelay = `${(index % 3) * 110}ms`;
            revealObserver.observe(el);
        });
    } else {
        revealEls.forEach((el) => el.classList.add('is-revealed'));
    }
}

const progressBar = document.getElementById('scroll-progress');

if (progressBar) {
    const updateProgress = () => {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const pct = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
        progressBar.style.height = `${pct}%`;
    };

    updateProgress();
    window.addEventListener('scroll', updateProgress, { passive: true });
    window.addEventListener('resize', updateProgress);
}

const counterEls = document.querySelectorAll('[data-counter]');

if (counterEls.length > 0) {
    const animateCounter = (el) => {
        const target = parseFloat(el.dataset.counter);
        const decimals = parseInt(el.dataset.decimals || '0', 10);
        const duration = 1400;
        const start = performance.now();

        const format = (value) =>
            decimals > 0
                ? value.toFixed(decimals)
                : Math.round(value).toLocaleString('id-ID');

        const tick = (now) => {
            const progress = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = format(target * eased);
            if (progress < 1) requestAnimationFrame(tick);
        };

        requestAnimationFrame(tick);
    };

    if ('IntersectionObserver' in window) {
        const counterObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        counterObserver.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.4 }
        );

        counterEls.forEach((el) => counterObserver.observe(el));
    } else {
        counterEls.forEach(animateCounter);
    }
}

const heroVisual = document.getElementById('hero-visual');
const heroSection = document.getElementById('beranda');

if (heroVisual && heroSection && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const updateParallax = () => {
        const rect = heroSection.getBoundingClientRect();
        if (rect.bottom < 0 || rect.top > window.innerHeight) return;
        const offset = rect.top * 0.18;
        heroVisual.style.transform = `translateY(${offset}px)`;
    };

    updateParallax();
    window.addEventListener('scroll', updateParallax, { passive: true });
    window.addEventListener('resize', updateParallax);
}