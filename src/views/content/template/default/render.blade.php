@extends('layouts.app')

@php
    $templatePath = 'content/template/default';

    switch ($pageType) {
        case 'single':
            $contentLayout = $content->layout ?? get_theme_setting('content.' . $contentType->slug  . '.layout.singlePage');
            break;
        default:
            $contentLayout = get_theme_setting('content.' . $contentType->slug . '.layout.indexPage');
            break;
    }
@endphp

@include('includes/seo')

@section('content')
    @switch($contentLayout)
        @case("content-fullwidth")
            @include($templatePath.'/layouts/content-fullwidth')
            @break
        @case("content-sidebar")
            @include($templatePath.'/layouts/content-sidebar')
            @break
        @case("sidebar-content")
            @include($templatePath.'/layouts/sidebar-content')
            @break
        @case("none")
            @include($templatePath.'/layouts/none')
            @break
    @endswitch
@endsection

@push('scripts')

@endpush
