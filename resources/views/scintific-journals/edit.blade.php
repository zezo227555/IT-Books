@extends('layouts.main')

@section('content')
    <form action="{{ route('scintific-journals.update', $scintificJournal->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="card">
            <div class="card-header">
                <h5 class="modal-title">تعديل بينات المجلة العملية</h5>
            </div>
            <div class="card-body pt-3">
                <div class="form-group mt-2">
                    <label>الاسم</label>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="text" name="name" class="form-control mt-2" value="{{ $scintificJournal->name }}">
                </div>
                <div class="form-group mt-2">
                    <label>ISSN</label>
                    @error('issn')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="text" name="issn" class="form-control mt-2" value="{{ $scintificJournal->issn }}">
                </div>
                <div class="form-group mt-2">
                    <label>الوصف</label>
                    @error('discreption')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <textarea name="discreption" class="form-control" rows="5">{{ $scintificJournal->discreption }}</textarea>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary w-25" value="حفظ">
            </div>
        </div>
    </form>
@endsection
