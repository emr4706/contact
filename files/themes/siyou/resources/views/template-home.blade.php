{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-home-header')
    @include('partials.content-home-page')
  @endwhile
@endsection
