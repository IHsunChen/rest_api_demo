<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeStatement extends Model
{
    use HasFactory;
    public function attribute() {
        return $this->belongsTo(AttributeTag::class, 'attribute_name', 'attribute_name');
    }
}
