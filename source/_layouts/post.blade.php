@extends('_layouts.master')

@section('body')
    <section id="{{ str_slug($post->title) }}">
        <div class="container">
            <div class="mb-2">
                <a href="/">Go back</a>
                <h1 class="h2 mt-2">{{ $page->title }}</h1>
                <small class="text-muted">{{ date('F j, Y', $page->date) }}</small>
            </div>
            @yield('content')
        </div>
    </section>
@endsection



