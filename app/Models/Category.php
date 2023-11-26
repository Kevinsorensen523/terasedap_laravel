<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['id', 'name'];

    public function foodItems()
    {
        return $this->hasMany(FoodItem::class);
    }

    use HasFactory;
}