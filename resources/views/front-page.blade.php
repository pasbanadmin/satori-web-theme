{{--
  Template Name: Home Page
--}}

@extends('layouts.app')

@section('content')
  @include('home.hero')

  @include('home.opening-statement')

  @include('home.the-homes')

  @include('home.dining-wellness')

  @include('home.experiences-section')

  @include('home.gatherings-section')

  @include('home.reviews-section')

  @include('home.location')

  @include('home.closing-section')
@endsection
