<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'make',
        'model',
        'year'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function serviceOrders()
    {
        return $this->hasMany(ServiceOrder::class);
    }   
}
