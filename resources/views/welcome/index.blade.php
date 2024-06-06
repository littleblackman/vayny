@extends('templates.front')
@section('title', 'Welcome at Vayny')
@section('description', 'Welcome at Vayny : The best place to find the best hotel for your vacation')


@section('content')
    @include('welcome.partials._header')
    @include('welcome.partials._about')
    @include('welcome.partials._rooms')
    {{--@include('welcome.partials._pricing') --}}
    @include('welcome.partials._video')
    {{-- @include('welcome.partials._facilities') --}}
    @include('welcome.partials._booking')
    @include('welcome.partials._testimonials')
    @include('welcome.partials._services')
    {{-- @include('welcome.partials._news')--}}
    @include('welcome.partials._reservation')
    {{-- @include('welcome.partials._customers') --}}
@endsection
