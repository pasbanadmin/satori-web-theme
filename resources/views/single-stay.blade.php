@extends('layouts.app')

@section('content')
  @while(have_posts())
    @php
      the_post();

      $stay = \App\stay_data(get_the_ID());
      $allStaysUrl = \App\stay_all_stays_url();
      $otherHomes = \App\stay_other_homes(get_the_ID(), $stay['slug']);
      $estateExperiences = \App\stay_estate_experiences();
    @endphp

    @include('partials.stay.hero', ['stay' => $stay, 'allStaysUrl' => $allStaysUrl])

    @include('partials.stay.overview', ['stay' => $stay])

    @if (!empty($stay['story']))
      @include('partials.stay.story', ['stay' => $stay])
    @endif

    @if (!empty($stay['features']))
      @include('partials.stay.features', ['stay' => $stay])
    @endif

    @if (!empty($stay['gallery']))
      @include('partials.stay.gallery', ['stay' => $stay])
    @endif

    @if (!empty($stay['experience']['title']) || !empty($stay['experience']['paragraphs']))
      @include('partials.stay.experience', ['stay' => $stay])
    @endif

    @if (!empty($stay['inclusions']))
      @include('partials.stay.inclusions', ['stay' => $stay])
    @endif

    @include('partials.stay.estate', ['experiences' => $estateExperiences])

    @if (!empty($otherHomes))
      @include('partials.stay.other-homes', ['homes' => $otherHomes])
    @endif

    @include('partials.stay.booking', ['stay' => $stay])
  @endwhile
@endsection
