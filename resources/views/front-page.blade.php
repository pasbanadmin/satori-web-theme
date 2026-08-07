{{--
  Template Name: Home Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

    @include('home.hero')

    @include('home.opening-statement')

    @include('home.the-homes')

    @include('home.dining-wellness')

    @include('home.experiences-section')

    @include('home.gatherings-section')

  @endwhile
@endsection
