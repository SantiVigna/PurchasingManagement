<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price'
    ];

    public function shoppingList()
    {
        return $this->belongsTo(ShoppingList::class);
    }

}
