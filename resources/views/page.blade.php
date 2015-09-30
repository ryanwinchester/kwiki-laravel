@extends('kwiki::layout')

@unless (empty($title))
    @section('title')
        <title>{{ $title }} &ndash; {{ config('kwiki.title') }}</title>
    @stop
@endunless

@section('content')

    <section class="kwiki container">

        @include('kwiki::partials.breadcrumbs')

        @if (count($index))
            @include('kwiki::partials.category-list')
        @endif

        <div class="kwiki__post">
            {!! $post !!}
        </div>

    </section>

@stop
