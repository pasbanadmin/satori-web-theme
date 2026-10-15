<!doctype html>
<html @php(language_attributes())>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-site-verification" content="Cl5zKcIRMqj4gVCyAkerK7Okm1YHV60fzha9xK6TKEc" />
  @php(do_action('get_header'))
  @php(wp_head())

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-LMKN2TGELE"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-LMKN2TGELE');
  </script>
  <!-- End Google tag (gtag.js) -->
  @if (is_front_page() || is_home() || is_page_template('front-page.blade.php'))
    <script type="application/ld+json">
      {
        "@@context": "https://schema.org",
        "@@type": "Resort",
        "name": "Satori Mulshi",
        "url": "https://www.satorimulshi.com/",
        "telephone": "+91 92181 77261",
        "email": "satori.reservations@pasban.co",
        "image": "https://www.satorimulshi.com/wp-content/uploads/2026/08/28-Movie-Night-and-Bonfire-on-the-Lawn-1.webp",
        "description": "A private lakeside estate of twenty-one rooms above Mulshi Lake in the Sahyadri foothills, with garden cottages, lake residences, farm-to-table dining and full-estate buyouts.",
        "numberOfRooms": 21,
        "address": {
          "@@type": "PostalAddress",
          "streetAddress": "Satori Estate, Pimpri, Tata Talav",
          "addressLocality": "Mulshi",
          "addressRegion": "Maharashtra",
          "postalCode": "412108",
          "addressCountry": "IN"
        },
        "geo": { "@@type": "GeoCoordinates", "latitude": 18.5323, "longitude": 73.4519 },
        "hasMap": "https://maps.google.com/?cid=13398371662192921292",
        "sameAs": [
          "https://www.instagram.com/satorimulshi/",
          "https://www.facebook.com/people/SatoriMulshi/61575644977898/",
          "https://maps.google.com/?cid=13398371662192921292"
        ],
        "potentialAction": {
          "@@type": "ReserveAction",
          "target": "https://www.secure-booking-engine.com/accounts/HXm66tqenYOx-VZR46IBBQ/properties/P9JyVOBiPOXdUDFklZVpVA/booking-engine/web/source/4wsctBw6Oq6j-g9XuxeRzQ/cart/MdEkwhqgGd7N5zhKcIJ7Qw/#!/rooms"
        }
      }
      </script>
  @endif
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