{{--
  Template Name: Dining
--}}

@extends('layouts.app')

@section('content')
  @include('dining.hero')

  @include('dining.intro')

  @include('dining.nest')

  @include('dining.food')

  @include('dining.where-you-eat')

  @include('dining.deli')

  @include('dining.meal-plans')
@endsection
