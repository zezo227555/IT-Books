<div>
    <div class="mb-3">
        <label>بحث بالاسم: </label>
        <input type="text" class="form-control d-inline w-50" wire:model.live="search">
    </div>
    <div class="row">
        @foreach ($users as $user)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">{{ $user->created_at->format('Y-m-d') }}</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->name }}</h5>
                        <p>البريد الالكتروني: <b>{{ $user->email }}</b></p>
                        <p>الصلاحية: <b>{{ $user->role }}</b></p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('user.show', $user->id) }}" class="btn btn-info"><i
                                class="bi bi-eye-fill"></i></a>
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning mx-2"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button role="submit" class="btn btn-danger"><i
                                    class="bi bi-person-fill-slash"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
