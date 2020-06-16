@extends('site_pages.layouts.main')

@section('content')

    @include('site_pages.general_components.header')

    @include('site_pages.pages.about.components.tabs')
    
    @include('site_pages.general_components.footer')
    
@endsection