<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancyLocation extends Model
{
    use HasFactory;

    protected $touches = [
      "vacancy"
    ];

    public function vacancy(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Vacancy::class);
    }
}
