<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class Review extends Model
{
    use HasFactory;

    protected $table="reviews";

    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class);
    }
}
