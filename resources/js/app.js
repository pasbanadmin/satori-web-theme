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
