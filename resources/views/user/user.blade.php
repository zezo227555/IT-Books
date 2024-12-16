@extends('layouts.main')

@section('content')
    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#basicModal">
        <i class="bi bi-person-fill-add"></i> اضافة مستخدم جديد
    </button>
    <hr class="m-4">
    @livewire('users')
@endsection

@section('modals')
    <div class="modal fade rtl" id="basicModal" tabindex="-1">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">اضافة مستخدم جديد</h5>
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
                            <label>البريد الالكتروني</label>
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input type="email" name="email" class="form-control mt-2">
                        </div>
                        <div class="form-group mt-2">
                            <label>نوع المستخدم</label>
                            @error('role')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <select class="form-select mt-2" name="role" aria-label="Default select example">
                                <option value="طالب">طالب</option>
                                <option value="عضو هيئة تدريس">عضو هيئة تدريس</option>
                                <option value="مسؤول نظام">مسؤول نظام</option>
                            </select>
                        </div>
                        <div class="form-group mt-2">
                            <label>كلمة المرور</label>
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input type="password" name="password" class="form-control mt-2">
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
