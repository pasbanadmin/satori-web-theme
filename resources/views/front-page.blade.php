{{--
  Template Name: Home Page
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

    @include('home.hero')

    @include('home.opening-statement')

  @endwhile
@endsection
