@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $scintificJournal->name }}</h3>
                </div>
                <div class="card-body p-3">
                    {{ $scintificJournal->discreption }}
                </div>
                <div class="card-footer">
                    {{ $scintificJournal->created_at->format('Y-m-d') }}
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            @livewire('scientific-paper', ['scintific_journals_id' => $scintificJournal->id])
        </div>
    </div>
@endsection

@section('modals')
    <div class="modal fade rtl" id="basicModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">اضافة ورقة علمية جديدة</h5>
                </div>
                @livewire('scientific-paper-create', ['scintific_journals_id' => $scintificJournal->id])
            </div>
        </div>
    </div>
@endsection
