@extends('site_pages.layouts.main')

@section('content')

    @include('site_pages.general_components.header')

    @include('site_pages.pages.index.components.intro')

    @include('site_pages.pages.index.components.tabs')

    @include('site_pages.pages.index.components.blog')

    @include('site_pages.general_components.footer')
    
@endsection