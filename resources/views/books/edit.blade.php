@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">تعديل بيانات الكتاب</h2>
        </div>
        <form action="{{ route('book.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group mt-2">
                    <label>العنوان</label>
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="text" name="title" class="form-control mt-2" value="{{ $book->title }}">
                </div>
                <div class="form-group mt-2">
                    <label>ISBN</label>
                    @error('isbn')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="text" name="isbn" class="form-control mt-2" value="{{ $book->isbn }}">
                </div>
                <div class="form-group mt-2">
                    <label>الوصف</label>
                    @error('discreption')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <textarea name="discreption" class="form-control" rows="5">{{ $book->discreption }}</textarea>
                </div>
                <div class="form-group mt-2">
                    <label>ملف الكتاب</label>
                    @error('file')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="file" name="file" class="form-control mt-2">
                </div>
                <div class="form-group mt-2">
                    <label>صورة الغلاف</label>
                    @error('cover')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="file" name="cover" class="form-control mt-2">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" role="submit" class="btn btn-primary">حفظ</button>
            </div>
        </form>
    </div>
@endsection
