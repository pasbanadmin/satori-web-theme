import Swiper from 'swiper';
import { Autoplay, Keyboard, Mousewheel, Navigation, Pagination } from 'swiper/modules';
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
    modules: [Autoplay, Keyboard],
    slidesPerView: 1.15,
    spaceBetween: 24,
    grabCursor: true,
    autoplay: window.matchMedia('(prefers-reduced-motion: reduce)').matches
      ? false
      : {
          delay: 3500,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        },
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

(() => {
  const section = document.querySelector('[data-gatherings]');

  if (!section || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    return;
  }

  const image = section.querySelector('[data-gatherings-image]');
  const items = section.querySelectorAll('[data-gatherings-item]');

  gsap.fromTo(
    image,
    { scale: 1.1 },
    {
      scale: 1.25,
      ease: 'none',
      scrollTrigger: {
        trigger: section,
        start: 'top bottom',
        end: 'bottom top',
        scrub: true,
      },
    }
  );

  gsap.from(items, {
    autoAlpha: 0,
    y: 40,
    duration: 1,
    stagger: 0.12,
    ease: 'power3.out',
    scrollTrigger: {
      trigger: section,
      start: 'top 65%',
      once: true,
    },
  });
})();

(() => {
  const section = document.querySelector('[data-stays-hero]');

  if (!section || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    return;
  }

  const image = section.querySelector('[data-stays-hero-image]');
  const items = section.querySelectorAll('[data-stays-hero-item]');

  if (image) {
    gsap.fromTo(
      image,
      { scale: 1.15 },
      {
        scale: 1,
        ease: 'none',
        scrollTrigger: {
          trigger: section,
          start: 'top top',
          end: 'bottom top',
          scrub: true,
        },
      }
    );
  }

  gsap.from(items, {
    autoAlpha: 0,
    y: 48,
    duration: 1.1,
    stagger: 0.15,
    ease: 'power3.out',
    scrollTrigger: {
      trigger: section,
      start: 'top 70%',
      once: true,
    },
  });
})();

(() => {
  const sections = document.querySelectorAll('[data-satoriway-hero], [data-satoriway-wellness]');

  if (!sections.length || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    return;
  }

  sections.forEach((section) => {
    const image = section.querySelector('[data-satoriway-image]');
    const items = section.querySelectorAll('[data-satoriway-item]');

    if (image) {
      gsap.fromTo(
        image,
        { scale: 1.15 },
        {
          scale: 1,
          ease: 'none',
          scrollTrigger: {
            trigger: section,
            start: 'top top',
            end: 'bottom top',
            scrub: true,
          },
        }
      );
    }

    gsap.from(items, {
      autoAlpha: 0,
      y: 48,
      duration: 1.1,
      stagger: 0.15,
      ease: 'power3.out',
      scrollTrigger: {
        trigger: section,
        start: 'top 70%',
        once: true,
      },
    });
  });
})();

(() => {
  const wrappers = document.querySelectorAll('[data-read-more]');

  if (!wrappers.length) {
    return;
  }

  wrappers.forEach((wrapper) => {
    const clamp = wrapper.querySelector('[data-read-more-clamp]');
    const toggle = wrapper.querySelector('[data-read-more-toggle]');
    const label = wrapper.querySelector('[data-read-more-label]');
    const caret = wrapper.querySelector('[data-read-more-caret]');

    if (!clamp || !toggle) {
      return;
    }

    toggle.addEventListener('click', () => {
      const isOpen = clamp.classList.toggle('line-clamp-none');

      toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');

      if (label) {
        label.textContent = isOpen ? toggle.dataset.closeLabel : toggle.dataset.openLabel;
      }

      if (caret) {
        caret.textContent = isOpen ? '\u2191' : '\u2193';
      }
    });
  });
})();

(() => {
  const swipers = document.querySelectorAll('[data-stay-gallery-swiper]');

  if (!swipers.length) {
    return;
  }

  swipers.forEach((el) => {
    new Swiper(el, {
      modules: [Keyboard, Mousewheel, Navigation, Pagination],
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      speed: 700,
      grabCursor: true,
      pagination: {
        el: el.querySelector('[data-stay-gallery-pagination]'),
        clickable: true,
      },
      navigation: {
        nextEl: el.querySelector('[data-stay-gallery-next]'),
        prevEl: el.querySelector('[data-stay-gallery-prev]'),
      },
      keyboard: {
        enabled: true,
        onlyInViewport: true,
      },
      mousewheel: {
        forceToAxis: true,
      },
    });
  });
})();

(() => {
  const sections = document.querySelectorAll('[data-experiences-hero], [data-experiences-parallax]');

  if (!sections.length || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    return;
  }

  sections.forEach((section) => {
    const image = section.querySelector('[data-experiences-image]');
    const items = section.querySelectorAll('[data-experiences-item]');

    if (image) {
      gsap.fromTo(
        image,
        { scale: 1.15 },
        {
          scale: 1,
          ease: 'none',
          scrollTrigger: {
            trigger: section,
            start: 'top top',
            end: 'bottom top',
            scrub: true,
          },
        }
      );
    }

    if (items.length) {
      gsap.from(items, {
        autoAlpha: 0,
        y: 48,
        duration: 1.1,
        stagger: 0.15,
        ease: 'power3.out',
        scrollTrigger: {
          trigger: section,
          start: 'top 70%',
          once: true,
        },
      });
    }
  });
})();

(() => {
  const counters = document.querySelectorAll('[data-counter]');

  if (!counters.length) {
    return;
  }

  counters.forEach((counter) => {
    const target = parseInt(counter.dataset.counterTarget || '200', 10);
    const valueEl = counter.querySelector('[data-counter-value]');

    if (!valueEl) {
      return;
    }

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      valueEl.textContent = target;
      return;
    }

    ScrollTrigger.create({
      trigger: counter,
      start: 'top 85%',
      once: true,
      onEnter: () => {
        const obj = { val: 0 };
        valueEl.textContent = '0';

        gsap.to(obj, {
          val: target,
          duration: 1.8,
          ease: 'power2.out',
          onUpdate: () => {
            valueEl.textContent = Math.floor(obj.val);
          },
          onComplete: () => {
            valueEl.textContent = target;
          },
        });
      },
    });
  });
})();

