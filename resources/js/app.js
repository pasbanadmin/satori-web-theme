import Swiper from 'swiper';
import { Keyboard } from 'swiper/modules';
import 'swiper/css';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

(() => {
  const header = document.querySelector('[data-header]');

  if (!header) {
    return;
  }

  const toggle = header.querySelector('[data-header-toggle]');
  const nav = header.querySelector('[data-header-nav]');

  const updateScrollState = () => {
    header.classList.toggle('is-scrolled', window.scrollY > 80);
    ticking = false;
  };

  let ticking = false;

  window.addEventListener('scroll', () => {
    if (!ticking) {
      window.requestAnimationFrame(updateScrollState);
      ticking = true;
    }
  }, { passive: true });

  updateScrollState();

  if (toggle && nav) {
    const setMenu = (open) => {
      const toggleLabel = toggle.querySelector('.sr-only');

      header.classList.toggle('is-menu-open', open);
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');

      if (toggleLabel) {
        toggleLabel.textContent = open ? toggle.dataset.closeLabel : toggle.dataset.openLabel;
      }

      document.documentElement.style.overflow = open ? 'hidden' : '';
    };

    toggle.addEventListener('click', () => {
      setMenu(!header.classList.contains('is-menu-open'));
    });

    nav.addEventListener('click', (event) => {
      if (event.target.closest('a')) {
        setMenu(false);
      }
    });

    window.addEventListener('keydown', (event) => {
      if (event.key === 'Escape' && header.classList.contains('is-menu-open')) {
        setMenu(false);
      }
    });
  }
})();

(() => {
  const section = document.querySelector('[data-opening-statement]');

  if (!section) {
    return;
  }

  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    return;
  }

  const divider = section.querySelector('[data-divider]');
  const paragraph = section.querySelector('[data-paragraph]');
  const words = [];

  section.querySelectorAll('[data-line]').forEach((line) => {
    const fragment = document.createDocumentFragment();

    line.textContent
      .split(/\s+/)
      .filter(Boolean)
      .forEach((word) => {
        const mask = document.createElement('span');
        mask.className = 'reveal-mask';

        const inner = document.createElement('span');
        inner.className = 'reveal-word';
        inner.textContent = `${word} `;

        mask.appendChild(inner);
        fragment.appendChild(mask);
      });

    line.replaceChildren(fragment);
    words.push(...line.querySelectorAll('.reveal-word'));
  });

  gsap
    .timeline({
      scrollTrigger: {
        trigger: section,
        start: 'top 75%',
        once: true,
      },
    })
    .from(words, {
      yPercent: 110,
      autoAlpha: 0,
      duration: 0.8,
      stagger: 0.03,
      ease: 'power3.out',
    })
    .from(divider, {
      autoAlpha: 0,
      scaleX: 0,
      transformOrigin: 'center center',
      duration: 0.8,
      ease: 'power3.inOut',
    })
    .from(
      paragraph,
      {
        autoAlpha: 0,
        y: 24,
        duration: 0.9,
        ease: 'power3.out',
      },
      '-=0.4'
    );
})();

(() => {
  const reveals = document.querySelectorAll('[data-reveal]');

  if (!reveals.length || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    return;
  }

  reveals.forEach((el) => {
    gsap.from(el, {
      autoAlpha: 0,
      y: 40,
      duration: 0.9,
      ease: 'power3.out',
      scrollTrigger: {
        trigger: el,
        start: 'top 80%',
        once: true,
      },
    });
  });
})();

(() => {
  const swiperEl = document.querySelector('[data-experiences-swiper]');

  if (!swiperEl) {
    return;
  }

  new Swiper(swiperEl, {
    modules: [Keyboard],
    slidesPerView: 1.15,
    spaceBetween: 24,
    grabCursor: true,
    keyboard: {
      enabled: true,
      onlyInViewport: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 2.4,
      },
      1440: {
        slidesPerView: 3,
      },
    },
  });
})();
