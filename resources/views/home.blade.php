@extends('layouts.main')

@section('container')
    <h1 class="mb-3 title text-center">BINUS Book</h1>`

    @if (count($books))
        <div class="card mb-3">
            <div style="max-height: 350px; overflow:hidden;">
                <img src="https://source.unsplash.com/1200x400?book" class="card-img-top" alt="...">
            </div>
            <div class="card-body text-center">
                <h3 class="card-title">{{ $books[0]->title }}</h3>
                <p>
                    <small class="text-muted">
                        Donated by. {{ $books[0]->donator }}
                    </small>
                </p>
                <p class="card-text">{{ $books[0]->description }}</p>
            </div>
        </div>


        <div class="container">
            <div class="row">
                @foreach (array_slice($books, 1) as $book)
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <div style="max-height: 350px; overflow:hidden;">
                            <img src="https://source.unsplash.com/800x400?book" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body text-center">
                            <h3 class="card-title">{{ $book->title }}</h3>
                            <p>
                                <small class="text-muted">
                                    Donated by. {{ $book->donator }}
                                </small>
                            </p>
                            <p class="card-text">{{ $book->description }}</p>
                        </div>
                      </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="fs-4 text-center">No books found.</p>
    @endif

@endsection
