@extends('_layouts.master')

@section('body')
    <section id="{{ str_slug($post->title) }}">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <a href="{{ $post->getPath() }}" class="col-md-3 mx-auto animated fadeIn">
                        <div class="blog-card text-white p-3 shadow position-relative rounded"
                        style="background-image: url('/assets/images/blogs/{{ $post->image }}')">
                            <div class="black-overlay"></div>
                            <div class="blog-title">
                                <h1 class="h4 m-0 mb-3">
                                    {{ $post->title }}
                                </h1>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    </section>
@endsection
