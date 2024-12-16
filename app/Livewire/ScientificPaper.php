<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ScientificPaper as PcientificPaperModel;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;

class ScientificPaper extends Component
{
    public $scintific_journals_id;

    #[On('refresh')]
    public function refresh()
    {
        PcientificPaperModel::where('scintific_journals_id', '=', $this->scintific_journals_id)->get();
    }

    public function render()
    {
        $scientificPapers = PcientificPaperModel::where('scintific_journals_id', '=', $this->scintific_journals_id)->get();
        return view('livewire.scientific-paper', ['scientificPapers' => $scientificPapers]);
    }

    public function delete($id)
    {
        $PcientificPaperModel =  PcientificPaperModel::find($id);

        Storage::disk('public')->delete("papers/$PcientificPaperModel->file");

        $PcientificPaperModel->delete();

        session()->flash('delete_success','تم الحذف بنجاح');
    }
}
