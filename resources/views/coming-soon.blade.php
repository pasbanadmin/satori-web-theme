<!doctype html>
<html @php(language_attributes()) class="h-full">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ __('Satori, Mulshi — A Luxury Retreat | Coming Soon', 'sage') }}</title>
  <meta name="description" content="{{ __('A private estate of twenty-one rooms set across the hills and waters of Mulshi. Coming soon.', 'sage') }}">

  {{-- Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">

  @php(wp_head())
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    :root {
      --brand-primary: #16100c;
      --brand-sand: #efe4d0;
      --brand-gold: #BCA169;
      --brand-olive: #5b6b4a;
      --font-heading: 'Cormorant Garamond', Georgia, serif;
      --font-body: 'Jost', system-ui, sans-serif;
    }

    body {
      font-family: var(--font-body);
      background-color: var(--brand-primary);
      color: var(--brand-sand);
      margin: 0;
      padding: 0;
      min-height: 100vh;
      -webkit-font-smoothing: antialiased;
    }

    .font-heading {
      font-family: var(--font-heading);
    }

    /* Ambient glass cards */
    .glass-panel {
      background: rgba(22, 16, 12, 0.72);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(188, 161, 105, 0.22);
      transition: all 0.35s ease;
    }

    .glass-panel:hover {
      border-color: rgba(188, 161, 105, 0.5);
      transform: translateY(-2px);
      box-shadow: 0 16px 36px -12px rgba(0, 0, 0, 0.5);
    }

    /* Subtle pulse animation for the status dot */
    @keyframes pulse-subtle {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.55; transform: scale(1.15); }
    }
    .pulse-dot {
      animation: pulse-subtle 2.5s infinite ease-in-out;
    }
  </style>
</head>

<body class="relative min-h-screen flex flex-col justify-between overflow-x-hidden selection:bg-brand-gold selection:text-brand-primary">

  {{-- Atmospheric Full-Bleed Background --}}
  <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden">
    <img
      src="/wp-content/uploads/2026/09/satori-hero-aerial-1920.webp"
      alt="{{ __('Satori Mulshi Estate Dusk Aerial View', 'sage') }}"
      class="h-full w-full object-cover object-center scale-105 transition-transform duration-[12000ms] ease-out motion-safe:hover:scale-100"
      fetchpriority="high"
    />
    {{-- Multi-layered Luxury Scrim & Vignette --}}
    <div class="absolute inset-0 bg-gradient-to-b from-[#16100c]/85 via-[#16100c]/70 to-[#16100c]/95"></div>
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_transparent_20%,_#16100c_90%)] opacity-80"></div>
    {{-- Subtle Gold Ambient Glow --}}
    <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[700px] h-[350px] bg-[#BCA169]/10 blur-[130px] rounded-full pointer-events-none"></div>
  </div>

  {{-- Top Navigation / Brand Crest --}}
  <header class="relative z-10 w-full pt-8 pb-4 px-6 sm:px-10 lg:px-16">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
      <a href="{{ home_url('/') }}" class="inline-block transition-opacity duration-300 hover:opacity-85" aria-label="{{ __('Satori, Mulshi', 'sage') }}">
        <img
          src="/wp-content/uploads/2026/08/Satori_Logo.webp"
          alt="{{ __('Satori Logo', 'sage') }}"
          class="h-8 sm:h-9 w-auto brightness-0 invert"
        />
      </a>

      {{-- Location Tag --}}
      <div class="hidden sm:flex items-center gap-2 text-[0.7rem] uppercase tracking-[0.25em] text-[#efe4d0]/70">
        <span class="inline-block w-1.5 h-1.5 rounded-full bg-[#BCA169]"></span>
        <span>{{ __('Mulshi, Maharashtra', 'sage') }}</span>
      </div>
    </div>
  </header>

  {{-- Main Content Section --}}
  <main class="relative z-10 flex-1 flex items-center justify-center px-5 sm:px-8 py-10 lg:py-16">
    <div class="max-w-4xl mx-auto text-center">

      {{-- Badge / Subtitle --}}
      <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full border border-[#BCA169]/35 bg-[#16100c]/60 backdrop-blur-md mb-8">
        <span class="w-2 h-2 rounded-full bg-[#BCA169] pulse-dot"></span>
        <span class="text-[0.6875rem] font-medium uppercase tracking-[0.28em] text-[#efe4d0]/90">
          {{ __('Coming Soon · In The Sahyadris', 'sage') }}
        </span>
      </div>

      {{-- Primary Headline --}}
      <h1 class="font-heading text-4xl sm:text-6xl md:text-7xl font-light leading-[1.12] tracking-tight text-[#efe4d0] max-w-3xl mx-auto">
        Something extraordinary is unfolding above <span class="italic font-normal text-[#BCA169]">Mulshi Lake.</span>
      </h1>

      {{-- Divider Ornament --}}
      <div class="flex items-center justify-center gap-3 my-6 sm:my-8 opacity-70">
        <span class="h-px w-12 bg-gradient-to-r from-transparent to-[#BCA169]"></span>
        <span class="text-[#BCA169] text-xs">✦</span>
        <span class="h-px w-12 bg-gradient-to-l from-transparent to-[#BCA169]"></span>
      </div>

      {{-- Body Copy --}}
      <p class="max-w-2xl mx-auto text-base sm:text-lg font-light leading-relaxed text-[#efe4d0]/80">
        {{ __('A private sanctuary of twenty-one rooms set across the hills and tranquil waters of Mulshi. Our complete digital experience is being crafted to welcome you soon.', 'sage') }}
      </p>

      {{-- Quick Action Buttons --}}
      <div class="mt-9 flex flex-col sm:flex-row items-center justify-center gap-4">
        {{-- WhatsApp Direct --}}
        <a
          href="https://wa.me/{{ $whatsappNumber }}?text={{ rawurlencode('Hello, I would like to enquire about stays and bookings at Satori, Mulshi.') }}"
          target="_blank"
          rel="noopener noreferrer"
          class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-7 py-3.5 rounded-full bg-[#BCA169] text-[#16100c] text-xs font-medium uppercase tracking-[0.2em] shadow-lg shadow-[#BCA169]/15 transition-all duration-300 hover:bg-[#c9b27e] hover:shadow-xl hover:scale-[1.02] active:scale-[0.99]"
        >
          <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-5.705 1.542zm6.59-4.235c1.571.932 3.327 1.498 5.244 1.499 5.534 0 10.038-4.503 10.04-10.039.001-2.682-1.044-5.204-2.943-7.106-1.901-1.902-4.42-2.947-7.103-2.948-5.535 0-10.039 4.504-10.04 10.04-.001 1.983.582 3.864 1.688 5.485l-.978 3.571 3.092-.803z"/>
          </svg>
          <span>{{ __('Enquire via WhatsApp', 'sage') }}</span>
        </a>

        {{-- Email Reservations --}}
        <a
          href="mailto:{{ $contactEmail }}"
          class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-7 py-3.5 rounded-full border border-[#efe4d0]/30 bg-[#16100c]/40 text-[#efe4d0] text-xs font-medium uppercase tracking-[0.2em] backdrop-blur-sm transition-all duration-300 hover:border-[#BCA169] hover:text-[#BCA169] hover:bg-[#16100c]/70 hover:scale-[1.02] active:scale-[0.99]"
        >
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
          </svg>
          <span>{{ __('Email Concierge', 'sage') }}</span>
        </a>
      </div>

      {{-- Touchpoints Grid: Contact, Location & Social --}}
      <div class="mt-14 sm:mt-16 grid grid-cols-1 md:grid-cols-3 gap-4 text-left">

        {{-- Contact Card --}}
        <div class="glass-panel rounded-2xl p-6 relative overflow-hidden">
          <div class="h-0.5 w-12 bg-[#BCA169] mb-4"></div>
          <p class="text-[0.6875rem] font-semibold uppercase tracking-[0.25em] text-[#BCA169] mb-3">
            {{ __('Direct Enquiries', 'sage') }}
          </p>
          <div class="space-y-1.5 text-xs text-[#efe4d0]/85">
            <p>
              <a href="tel:{{ $contactPhoneTel }}" class="transition-colors duration-300 hover:text-[#BCA169] font-medium tracking-wide">
                {{ $contactPhone }}
              </a>
            </p>
            <p>
              <a href="mailto:{{ $contactEmail }}" class="transition-colors duration-300 hover:text-[#BCA169] break-all">
                {{ $contactEmail }}
              </a>
            </p>
          </div>
        </div>

        {{-- Estate Location Card --}}
        <div class="glass-panel rounded-2xl p-6 relative overflow-hidden">
          <div class="h-0.5 w-12 bg-[#BCA169] mb-4"></div>
          <p class="text-[0.6875rem] font-semibold uppercase tracking-[0.25em] text-[#BCA169] mb-3">
            {{ __('The Estate', 'sage') }}
          </p>
          <div class="space-y-1 text-xs text-[#efe4d0]/85 leading-relaxed">
            <p>{{ __('Satori Estate, Mulshi', 'sage') }}</p>
            <p class="text-[#efe4d0]/65">{{ __('Pune District, Maharashtra, India', 'sage') }}</p>
          </div>
        </div>

        {{-- Social & Updates Card --}}
        <div class="glass-panel rounded-2xl p-6 relative overflow-hidden">
          <div class="h-0.5 w-12 bg-[#BCA169] mb-4"></div>
          <p class="text-[0.6875rem] font-semibold uppercase tracking-[0.25em] text-[#BCA169] mb-3">
            {{ __('Follow Our Journey', 'sage') }}
          </p>
          <div class="flex items-center gap-4 pt-1">
            {{-- Instagram --}}
            <a
              href="https://www.instagram.com/satorimulshi/"
              target="_blank"
              rel="noopener noreferrer"
              class="inline-flex items-center gap-2 text-xs text-[#efe4d0]/85 transition-colors duration-300 hover:text-[#BCA169]"
              aria-label="{{ __('Satori on Instagram', 'sage') }}"
            >
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-[#BCA169]" aria-hidden="true">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z" />
              </svg>
              <span>Instagram</span>
            </a>

            <span class="text-[#efe4d0]/25">·</span>

            {{-- Facebook --}}
            <a
              href="https://www.facebook.com/people/SatoriMulshi/61575644977898/"
              target="_blank"
              rel="noopener noreferrer"
              class="inline-flex items-center gap-2 text-xs text-[#efe4d0]/85 transition-colors duration-300 hover:text-[#BCA169]"
              aria-label="{{ __('Satori on Facebook', 'sage') }}"
            >
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-[#BCA169]" aria-hidden="true">
                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987H7.898V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
              </svg>
              <span>Facebook</span>
            </a>
          </div>
        </div>

      </div>

    </div>
  </main>

  {{-- Footer --}}
  <footer class="relative z-10 w-full py-6 px-6 sm:px-10 lg:px-16 border-t border-[#efe4d0]/10 text-center sm:text-left">
    <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-3 text-[0.6875rem] uppercase tracking-[0.2em] text-[#efe4d0]/50">
      <p>
        &copy; {{ date('Y') }} {{ __('Satori Living Pvt Ltd', 'sage') }}
        <span class="mx-2 text-[#BCA169]/40">·</span>
        <span>{{ __('Managed by Pasban — The Gatekeeper', 'sage') }}</span>
      </p>

      <p class="text-[0.65rem] text-[#efe4d0]/40 tracking-[0.18em]">
        {{ __('Villas & Cottages Above Mulshi Lake', 'sage') }}
      </p>
    </div>
  </footer>

  @php(wp_footer())
</body>
</html>
