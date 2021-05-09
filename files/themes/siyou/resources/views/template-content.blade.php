{{--
  Template Name: Content Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-content-header')
    @include('partials.content-page')
  @endwhile
@endsection
