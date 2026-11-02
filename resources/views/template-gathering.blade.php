{{--
  Template Name: Gathering
--}}

@extends('layouts.app')

@section('content')
  @include('gatherings.hero')

  @include('gatherings.intro')

  @include('gatherings.capacity')

  @include('gatherings.formats')

  @include('gatherings.offsites')

  @include('gatherings.amenities')

  @include('gatherings.packages')

  @include('gatherings.quote')

  @include('gatherings.how-it-works')

  @include('gatherings.closing')
@endsection
