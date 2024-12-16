<div>
    <div class="mb-3">
        <label>بحث بالاسم: </label>
        <input type="text" class="form-control d-inline w-50" wire:model.live="search">
    </div>
    <div class="row">
        @foreach ($scintificJournals as $scintificJournal)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">{{ $scintificJournal->created_at->format('Y-m-d') }}</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $scintificJournal->name }}</h5>
                        <p>ISSN: <b>{{ $scintificJournal->issn }}</b> <span class="mx-3">المؤلف:
                                <b>{{ $scintificJournal->user->name }}</b></span></p>
                        <p>{{ $scintificJournal->discreption }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('scintific-journals.show', $scintificJournal->id) }}" class="btn btn-info"><i
                                class="bi bi-eye-fill"></i></a>
                        <a href="{{ route('scintific-journals.edit', $scintificJournal->id) }}"
                            class="btn btn-warning mx-2"><i class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('scintific-journals.destroy', $scintificJournal->id) }}" method="POST"
                            class="d-inline-block">
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
