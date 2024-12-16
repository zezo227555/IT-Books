@extends('layouts.main')

@section('content')
    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#basicModal">
        <i class="bi bi-journal-arrow-up"></i> اضافة مجلة جديدة
    </button>
    <hr class="m-4">
    @livewire('scintific-journals')
@endsection

@section('modals')
    <div class="modal fade rtl" id="basicModal" tabindex="-1">
        <form action="{{ route('scintific-journals.store') }}" method="POST">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">اضافة مجلة جديدة</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mt-2">
                            <label>الاسم</label>
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input type="text" name="name" class="form-control mt-2">
                        </div>
                        <div class="form-group mt-2">
                            <label>ISSN</label>
                            @error('issn')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input type="text" name="issn" class="form-control mt-2">
                        </div>
                        <div class="form-group mt-2">
                            <label>الوصف</label>
                            @error('discreption')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <textarea name="discreption" class="form-control" rows="5"></textarea>
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
