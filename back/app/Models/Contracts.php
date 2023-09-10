<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'salary',
        'start_date',
        'end_date',
        'holidays_per_year'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function holidays(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Holidays::class);
    }
}
