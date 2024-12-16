@extends('layouts.main')

@section('content')
    <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#basicModal">
        <i class="bi bi-journal-arrow-up"></i> اضافة كتاب جديد
    </button>
    <hr class="m-4">
    @livewire('books')
@endsection

@section('modals')
    <div class="modal fade rtl" id="basicModal" tabindex="-1">
        <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">اضافة كتاب جديد</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mt-2">
                            <label>العنوان</label>
                            @error('title')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input type="text" name="title" class="form-control mt-2">
                        </div>
                        <div class="form-group mt-2">
                            <label>ISBN</label>
                            @error('isbn')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input type="text" name="isbn" class="form-control mt-2">
                        </div>
                        <div class="form-group mt-2">
                            <label>الوصف</label>
                            @error('discreption')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <textarea name="discreption" class="form-control" rows="5"></textarea>
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                        <input type="submit" class="btn btn-primary mt-2" value="حفظ">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
