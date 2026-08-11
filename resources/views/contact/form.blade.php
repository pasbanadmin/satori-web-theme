<section class="bg-white">
  <div class="mx-auto w-full max-w-7xl">
    <div class="grid lg:grid-cols-2 min-h-[80vh]">

      {{-- ── LEFT: Contact info + map ── --}}
      <div class="flex flex-col bg-brand-sand border-r border-brand-ink/10 px-6 py-14 sm:px-10 lg:px-14 lg:py-20"
        data-reveal>

        <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
          {{ __('Find Us', 'sage') }}
        </p>

        <h2 class="mt-4 font-heading text-3xl font-light leading-snug text-brand-ink">
          {{ __('Satori, Mulshi', 'sage') }}
        </h2>

        <div class="mt-6 h-px w-16 bg-brand-gold" aria-hidden="true"></div>

        {{-- Contact details --}}
        <ul class="mt-8 space-y-0" role="list">
          <li class="flex gap-4 border-t border-brand-ink/10 py-5 first:border-0 first:pt-0">
            <span class="shrink-0 w-5 text-brand-gold mt-0.5" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
              </svg>
            </span>
            <div>
              <p class="text-base font-medium text-brand-ink">{{ __('Address', 'sage') }}</p>
              <p class="mt-1 text-base leading-6 text-brand-muted">
                {{ __('Satori Estate, Mulshi, Pune District, Maharashtra — India', 'sage') }}
              </p>
            </div>
          </li>

          <li class="flex gap-4 border-t border-brand-ink/10 py-5">
            <span class="shrink-0 w-5 text-brand-gold mt-0.5" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 6.75Z" />
              </svg>
            </span>
            <div>
              <p class="text-base font-medium text-brand-ink">{{ __('Phone', 'sage') }}</p>
              <a href="tel:+919999999999"
                class="mt-1 text-sm text-brand-muted hover:text-brand-gold transition-colors duration-300">
                +91 99999 99999
              </a>
            </div>
          </li>

          <li class="flex gap-4 border-t border-brand-ink/10 py-5">
            <span class="shrink-0 w-5 text-brand-gold mt-0.5" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
              </svg>
            </span>
            <div>
              <p class="text-base font-medium text-brand-ink">{{ __('Email', 'sage') }}</p>
              <a href="mailto:hello@satori.in"
                class="mt-1 text-base text-brand-muted hover:text-brand-gold transition-colors duration-300">
                hello@satori.in
              </a>
            </div>
          </li>

          <li class="flex gap-4 border-t border-brand-ink/10 py-5">
            <span class="shrink-0 w-5 text-brand-gold mt-0.5" aria-hidden="true">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
            </span>
            <div>
              <p class="text-base font-medium text-brand-ink">{{ __('Response Time', 'sage') }}</p>
              <p class="mt-1 text-base leading-6 text-brand-muted">
                {{ __('We respond to all enquiries within 24 hours.', 'sage') }}
              </p>
            </div>
          </li>
        </ul>

      </div>

      {{-- ── RIGHT: Contact form ── --}}
      <div class="px-6 py-14 sm:px-10 lg:px-14 lg:py-20 bg-[#f7f3eb]" data-reveal>

        <p class="text-[0.75rem] uppercase tracking-[0.3em] text-brand-gold">
          {{ __('Enquiry', 'sage') }}
        </p>

        <h2 class="mt-4 font-heading text-3xl font-light leading-snug text-brand-ink">
          {{ __('Tell us what you have in mind', 'sage') }}
        </h2>

        <div class="mt-6 h-px w-16 bg-brand-gold" aria-hidden="true"></div>

        {{-- Success message --}}
        <div id="contact-success" class="hidden mt-8 border border-brand-gold/30 bg-brand-gold/8 px-5 py-4 rounded-sm">
          <p class="text-sm font-medium text-brand-ink">{{ __('Thank you — we will be in touch shortly.', 'sage') }}</p>
        </div>

        {{-- Error message --}}
        <div id="contact-error" class="hidden mt-8 border border-red-300/50 bg-red-50 px-5 py-4 rounded-sm">
          <p id="contact-error-text" class="text-sm text-red-700"></p>
        </div>

        <form id="contact-form" novalidate class="mt-8 space-y-6">
          <input type="hidden" name="nonce" value="{{ wp_create_nonce('satori_contact_nonce') }}">

          {{-- Name + Email --}}
          <div class="grid gap-6 sm:grid-cols-2">
            <div>
              <label for="contact-name" class="block text-[0.7rem] uppercase tracking-[0.2em] text-brand-ink mb-2">
                {{ __('Full Name', 'sage') }} <span class="text-brand-gold" aria-hidden="true">*</span>
              </label>
              <input type="text" id="contact-name" name="name" autocomplete="name" required
                class="w-full bg-white border border-brand-ink/15 px-4 py-3 text-sm text-brand-ink placeholder:text-brand-muted/50 focus:outline-none focus:border-brand-gold transition-colors duration-200"
                placeholder="{{ __('Your name', 'sage') }}">
              <p class="field-error hidden mt-1 text-xs text-red-600" data-field="name"></p>
            </div>

            <div>
              <label for="contact-email" class="block text-[0.7rem] uppercase tracking-[0.2em] text-brand-ink mb-2">
                {{ __('Email Address', 'sage') }} <span class="text-brand-gold" aria-hidden="true">*</span>
              </label>
              <input type="email" id="contact-email" name="email" autocomplete="email" required
                class="w-full bg-white border border-brand-ink/15 px-4 py-3 text-sm text-brand-ink placeholder:text-brand-muted/50 focus:outline-none focus:border-brand-gold transition-colors duration-200"
                placeholder="{{ __('your@email.com', 'sage') }}">
              <p class="field-error hidden mt-1 text-xs text-red-600" data-field="email"></p>
            </div>
          </div>

          {{-- Phone + Guests --}}
          <div class="grid gap-6 sm:grid-cols-2">
            <div>
              <label for="contact-phone" class="block text-[0.7rem] uppercase tracking-[0.2em] text-brand-ink mb-2">
                {{ __('Phone', 'sage') }}
              </label>
              <input type="tel" id="contact-phone" name="phone" autocomplete="tel"
                class="w-full bg-white border border-brand-ink/15 px-4 py-3 text-sm text-brand-ink placeholder:text-brand-muted/50 focus:outline-none focus:border-brand-gold transition-colors duration-200"
                placeholder="{{ __('+91 —', 'sage') }}">
            </div>

            <div>
              <label for="contact-guests" class="block text-[0.7rem] uppercase tracking-[0.2em] text-brand-ink mb-2">
                {{ __('No. of Guests', 'sage') }}
              </label>
              <input type="text" id="contact-guests" name="guests"
                class="w-full bg-white border border-brand-ink/15 px-4 py-3 text-sm text-brand-ink placeholder:text-brand-muted/50 focus:outline-none focus:border-brand-gold transition-colors duration-200"
                placeholder="{{ __('e.g. 4 adults', 'sage') }}">
            </div>
          </div>

          {{-- Dates + Subject --}}
          <div class="grid gap-6 sm:grid-cols-2">
            <div>
              <label for="contact-dates" class="block text-[0.7rem] uppercase tracking-[0.2em] text-brand-ink mb-2">
                {{ __('Preferred Dates', 'sage') }}
              </label>
              <input type="text" id="contact-dates" name="dates"
                class="w-full bg-white border border-brand-ink/15 px-4 py-3 text-sm text-brand-ink placeholder:text-brand-muted/50 focus:outline-none focus:border-brand-gold transition-colors duration-200"
                placeholder="{{ __('e.g. Oct 10–13', 'sage') }}">
            </div>

            <div>
              <label for="contact-subject" class="block text-[0.7rem] uppercase tracking-[0.2em] text-brand-ink mb-2">
                {{ __('Nature of Enquiry', 'sage') }}
              </label>
              <select id="contact-subject" name="subject"
                class="w-full bg-white border border-brand-ink/15 px-4 py-3 text-sm text-brand-ink focus:outline-none focus:border-brand-gold transition-colors duration-200 appearance-none">
                <option value="">{{ __('Select one…', 'sage') }}</option>
                <option value="{{ __('Stay Enquiry', 'sage') }}">{{ __('Stay Enquiry', 'sage') }}</option>
                <option value="{{ __('Estate Buyout / Gathering', 'sage') }}">
                  {{ __('Estate Buyout / Gathering', 'sage') }}
                </option>
                <option value="{{ __('Wellness & Spa', 'sage') }}">{{ __('Wellness & Spa', 'sage') }}</option>
                <option value="{{ __('Hosted Retreat', 'sage') }}">{{ __('Hosted Retreat', 'sage') }}</option>
                <option value="{{ __('General Enquiry', 'sage') }}">{{ __('General Enquiry', 'sage') }}</option>
              </select>
            </div>
          </div>

          {{-- Message --}}
          <div>
            <label for="contact-message" class="block text-[0.7rem] uppercase tracking-[0.2em] text-brand-ink mb-2">
              {{ __('Your Message', 'sage') }} <span class="text-brand-gold" aria-hidden="true">*</span>
            </label>
            <textarea id="contact-message" name="message" rows="5" required
              class="w-full bg-white border border-brand-ink/15 px-4 py-3 text-sm text-brand-ink placeholder:text-brand-muted/50 focus:outline-none focus:border-brand-gold transition-colors duration-200 resize-none"
              placeholder="{{ __('Tell us a little about what you\'re planning…', 'sage') }}"></textarea>
            <p class="field-error hidden mt-1 text-xs text-red-600" data-field="message"></p>
          </div>

          {{-- Submit --}}
          <div>
            <button type="submit" id="contact-submit"
              class="inline-flex items-center gap-3 rounded-full bg-brand-gold text-brand-primary px-8 py-3.5 text-[0.8125rem] uppercase tracking-[0.2em] font-medium transition-all duration-300 hover:bg-brand-primary hover:text-brand-sand disabled:opacity-60 disabled:cursor-not-allowed">
              <span id="contact-submit-label">{{ __('Send Enquiry', 'sage') }}</span>
              <svg id="contact-spinner" class="hidden h-4 w-4 animate-spin" viewBox="0 0 24 24" fill="none"
                aria-hidden="true">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
              </svg>
            </button>
            <p class="mt-4 text-[0.65rem] uppercase tracking-[0.15em] text-brand-muted/60">
              {{ __('We respond to all enquiries within 24 hours.', 'sage') }}
            </p>
          </div>

        </form>

      </div>

    </div>
  </div>
</section>

<script>
  (function () {
    const form = document.getElementById('contact-form');
    const submitBtn = document.getElementById('contact-submit');
    const submitLabel = document.getElementById('contact-submit-label');
    const spinner = document.getElementById('contact-spinner');
    const successEl = document.getElementById('contact-success');
    const errorEl = document.getElementById('contact-error');
    const errorText = document.getElementById('contact-error-text');

    if (!form) return;

    /** Clear all inline field errors */
    function clearErrors() {
      form.querySelectorAll('.field-error').forEach((el) => {
        el.textContent = '';
        el.classList.add('hidden');
      });
      form.querySelectorAll('input, textarea, select').forEach((el) => {
        el.classList.remove('border-red-400');
      });
      successEl.classList.add('hidden');
      errorEl.classList.add('hidden');
    }

    /** Show a field-level error */
    function showFieldError(name, msg) {
      const errEl = form.querySelector(`.field-error[data-field="${name}"]`);
      const inputEl = form.querySelector(`[name="${name}"]`);
      if (errEl) { errEl.textContent = msg; errEl.classList.remove('hidden'); }
      if (inputEl) inputEl.classList.add('border-red-400');
    }

    /** Client-side validation */
    function validate() {
      let valid = true;

      const name = form.querySelector('[name="name"]').value.trim();
      if (!name) { showFieldError('name', 'Your name is required.'); valid = false; }

      const email = form.querySelector('[name="email"]').value.trim();
      if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        showFieldError('email', 'A valid email address is required.');
        valid = false;
      }

      const message = form.querySelector('[name="message"]').value.trim();
      if (!message) { showFieldError('message', 'Please tell us a little about your enquiry.'); valid = false; }

      return valid;
    }

    form.addEventListener('submit', async function (e) {
      e.preventDefault();
      clearErrors();

      if (!validate()) return;

      // Show loading state
      submitBtn.disabled = true;
      submitLabel.textContent = 'Sending…';
      spinner.classList.remove('hidden');

      const data = new FormData(form);
      data.append('action', 'satori_contact');

      try {
        const res = await fetch(window.ajaxurl || '/wp-admin/admin-ajax.php', { method: 'POST', body: data });
        const json = await res.json();

        if (json.success) {
          form.reset();
          successEl.classList.remove('hidden');
          successEl.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        } else {
          // Field-level errors from server
          if (json.data?.fields) {
            Object.entries(json.data.fields).forEach(([field, msg]) => showFieldError(field, msg));
          } else {
            errorText.textContent = json.data?.message || 'Something went wrong. Please try again.';
            errorEl.classList.remove('hidden');
          }
        }
      } catch {
        errorText.textContent = 'A network error occurred. Please try again or contact us directly.';
        errorEl.classList.remove('hidden');
      } finally {
        submitBtn.disabled = false;
        submitLabel.textContent = 'Send Enquiry';
        spinner.classList.add('hidden');
      }
    });
  })();
</script>