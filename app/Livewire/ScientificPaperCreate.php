<?php

namespace App\Livewire;

use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\ScientificPaper as PcientificPaperModel;

class ScientificPaperCreate extends Component
{
    use WithFileUploads;
    public $scintific_journals_id;
    public $title;
    public $file;

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'file' => 'required',
        ]);

        $fileName = time().'.'.$this->file->getClientOriginalExtension();

        $this->file->storePubliclyAs('papers', $fileName, 'public');

        PcientificPaperModel::create([
            'title' => $this->title,
            'file' => $fileName,
            'scintific_journals_id' => $this->scintific_journals_id,
        ]);

        session()->flash('modal_success', 'تم الاضافة بنجاح');
        $this->dispatch('refresh');
    }
    public function render()
    {
        return view('livewire.scientific-paper-create');
    }
}
