{{--
  Template Name: Wellness
--}}

@extends('layouts.app')

@section('content')
  @include('wellness.hero')

  @include('wellness.intro')

  @include('wellness.spa')

  @include('wellness.movement')

  @include('wellness.gardens')

  @include('wellness.retreats')

  @include('wellness.closing')
@endsection