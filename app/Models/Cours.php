<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class cours extends Model
{
    use HasFactory;

    protected $fillable = ['jour','nomGroupe', 'module','debutDeSeance', 'finDeSeance', 'salle', 'semestre_id'];

    public function semestre(): BelongsTo
    {
        return $this->belongsTo(Semestre::class);
    }
}
