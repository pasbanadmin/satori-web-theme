{{--
  Template Name: Gathering
--}}

@extends('layouts.app')

@section('content')
  @include('gatherings.hero')

  @include('gatherings.intro')

  @include('gatherings.capacity')

  @include('gatherings.formats')

  @include('gatherings.how-it-works')

  @include('gatherings.closing')
@endsection