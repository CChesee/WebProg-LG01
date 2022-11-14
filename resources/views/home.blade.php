@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">BINUS Blog</h1>

    @if ($posts->count())
        <div class="card mb-3">
            <div style="max-height: 350px; overflow:hidden;">
                <img src={{ $posts[0]->image ? asset('storage/' . $posts[0]->image) : 'https://source.unsplash.com/1200x400?' . $posts[0]->category->name }} class="card-img-top" alt="...">
            </div>
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">
                        By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary text-decoration-none">Read more..</a>
            </div>
        </div>


        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card" style="width: 18rem;">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7);"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                            <img src={{ $post->image ? asset('storage/' . $post->image) : 'https://source.unsplash.com/1200x400?' . $post->category->name }} class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">
                                    <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a>
                                </h3>
                                <p>
                                    <small class="text-muted">
                                        By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                            <p class="card-text"> {{ $post->excerpt }} </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="fs-4 text-center">No post found.</p>
    @endif

@endsection
