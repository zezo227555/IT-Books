@extends('layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">عرض و تعديل بيانات الحساب</h5>

            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home"
                        type="button" role="tab" aria-controls="home" aria-selected="true">البيانات الشخصية</button>
                </li>

            </ul>
            <div class="tab-content pt-2" id="borderedTabContent">
                <div class="tab-pane fade show active" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mt-2">
                            <label>الاسم</label>
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input type="text" name="name" class="form-control mt-2" value="{{ $user->name }}">
                        </div>
                        <div class="form-group mt-2">
                            <label>البريد الالكتروني</label>
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input type="email" name="email" class="form-control mt-2" value="{{ $user->email }}">
                        </div>
                        <div class="form-group mt-2">
                            <label>كلمة المرور</label>
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input type="password" name="password" class="form-control mt-2">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3 d-block px-5">تعديل البيانات</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
