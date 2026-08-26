<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "Resort",
      "name": "Satori, Mulshi",
      "description": "A private estate of fourteen stays set across the hills and waters of Mulshi.",
      "url": "{{ home_url('/') }}",
      "email": "satori.reservations@pasban.co",
      "telephone": "+919218177261",
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "Satori Estate",
        "addressLocality": "Mulshi",
        "addressRegion": "Maharashtra",
        "addressCountry": "IN"
      }
    }
    </script>
  </head>

  <body @php(body_class())>
    @php(wp_body_open())

    <div id="app">
      <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content', 'sage') }}
      </a>

      @include('sections.header')

      <main id="main" class="main">
        @yield('content')
      </main>

      @hasSection('sidebar')
        <aside class="sidebar">
          @yield('sidebar')
        </aside>
      @endif

      @include('sections.footer')
      @include('partials.whatsapp-widget')
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>
