{{--
Template Name: Contact Us
--}}

@extends('layouts.app')

@section('content')
  @include('contact.hero')

  @include('contact.paths')

  @include('contact.form')

  @include('contact.closing')
@endsection