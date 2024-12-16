<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScientificPaper extends Model
{
    protected $table = 'scientific_papers';

    protected $fillable = [
        'title', 'file', 'scintific_journals_id',
    ];

    public function ScintificJournal() : BelongsTo
    {
        return $this->belongsTo(ScintificJournal::class, 'scintific_journals_id');
    }
}
