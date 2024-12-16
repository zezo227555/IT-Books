<div>
    <div class="card">
        <div class="card-body">
            <div class="card-title d-flex">
                <h5>قائمة الاوراق العلمية</h5>
                <div class="flex-grow-1" style="text-align: end;">
                    <button type="button" class="btn btn-primary float-start" data-bs-toggle="modal"
                        data-bs-target="#basicModal">
                        <i class="bi bi-journal-arrow-up"></i> اضافة ورقة جديدة
                    </button>
                </div>
            </div>
            <div class="list-group">
                @session('delete_success')
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        {{ session('delete_success') }}
                    </div>
                @endsession
                @foreach ($scientificPapers as $scientificPaper)
                    <span class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1">{{ $scientificPaper->title }}</h6>
                            <a href="{{ asset('storage/papers').'/'.$scientificPaper->file }}" class="btn btn-link">قراءة الورقة</a>
                            <small class="text-muted">{{ $scientificPaper->created_at->format('Y-m-d') }}</small>
                            <button class="btn btn-danger" wire:click='delete({{ $scientificPaper->id }})'>
                                <i class="bi bi-file-earmark-x"></i>
                            </button>
                        </div>
                    </span>
                @endforeach
            </div>
        </div>
    </div>
</div>
