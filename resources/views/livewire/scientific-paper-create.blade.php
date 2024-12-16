<div>
    <div class="modal-body">
        @session('modal_success')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ session('modal_success') }}
            </div>
        @endsession
        <div class="form-group mt-2">
            <label>العنوان</label>
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <input type="text" wire:model='title' class="form-control mt-2">
        </div>
        <div class="form-group mt-2">
            <label>الملف</label>
            @error('file')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <input type="file" wire:model='file' class="form-control mt-2">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
        <button class="btn btn-primary mt-2" wire:click='store' wire:loading.remove>حفظ</button>
        <button class="btn btn-primary" wire:loading wire:target='store'>
            <div class="spinner-border text-light" role="status">
                <span class="visually-hidden">يرجى الانتظار</span>
            </div>
        </button>
    </div>
</div>
