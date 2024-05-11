@extends('layouts.main')

@section('container')
    <div class="containe">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>By. <a class="text-decoration-none"
                        href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in
                    <a class="text-decoration-none"
                        href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                </p>

                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}"
                    class="img-fluid">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                </article>
                <a href="/blog" class="d-block mt-4">&laquo; Back to posts</a>
            </div>
        </div>
    </div>
    <article>
    @endsection