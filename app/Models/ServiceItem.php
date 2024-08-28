<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_order_id',
        'description',
        'price',
        'quantity'
    ];

    public function serviceOrder()
    {
        return $this->belongsTo(serviceOrder::class);
    }
}
