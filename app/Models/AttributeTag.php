<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeTag extends Model
{
    use HasFactory;
    public function data() {
        return $this->hasMany(IncomeStatement::class, 'attribute_name');
    }
}
