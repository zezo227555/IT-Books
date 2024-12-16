@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                @if (isset($book->cover))
                    <img src="{{ asset('cover').'/'.$book->cover }}" class="card-img-top" alt="cover">
                @else
                    <img src="{{ asset('cover/default.webp') }}" class="card-img-top" alt="cover">
                @endif

                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <h5 class="card-title">{{ $book->title }}</h5>
                        </div>
                        <div class="col-4">
                            <p style="padding: 20px 0 15px 0;">{{ $book->created_at->format('Y-m-d') }}</p>
                        </div>
                    </div>

                    <hr>

                    <p class="card-text">{{ $book->discreption }}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ asset('books').'/'.$book->file }}" class="btn btn-primary">صفحة كاملة</a>
                </div>
                <div class="card-body">
                    <object data="{{ asset('books').'/'.$book->file }}" class="w-100" type="application/pdf" style="height: 100vh;">
                    </object>
                </div>
            </div>
        </div>
    </div>
@endsection
