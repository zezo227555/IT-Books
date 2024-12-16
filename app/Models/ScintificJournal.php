<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScintificJournal extends Model
{
    protected $table = 'scintific_journals';

    protected $fillable = [
        'name', 'user_id', 'issn', 'discreption',
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
