<div>
    <div class="mb-3">
        <label>بحث بالاسم: </label>
        <input type="text" class="form-control d-inline w-50" wire:model.live="search">
    </div>
    <div class="row">
        @foreach ($books as $book)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">{{ $book->created_at->format('Y-m-d') }}</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p>ISBN: <b>{{ $book->isbn }}</b></p>
                        <p>{{ $book->discreption }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('book.show', $book->id) }}" class="btn btn-info"><i
                                class="bi bi-eye-fill"></i></a>
                        <a href="{{ route('book.edit', $book->id) }}" class="btn btn-warning mx-2"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('book.destroy', $book->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button role="submit" class="btn btn-danger"><i class="bi bi-journal-x"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
