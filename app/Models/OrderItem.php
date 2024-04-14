<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    public function item()
    {
        return $this->hasOne(Product::class, 'id', 'item_id')->withTrashed();
    }
}
