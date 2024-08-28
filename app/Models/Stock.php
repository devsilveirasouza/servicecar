<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'part_id',
        'movement_type',
        'quantity',
        'movement_reason',
    ];

    public function part()
    {
        return $this->belongsTo(Part::class);
    }
}
