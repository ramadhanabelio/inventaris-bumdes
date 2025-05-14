<?php

namespace App\Models;

use App\Models\Loan;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'brand',
        'origin',
        'quantity',
        'type',
        'acquired_date',
        'price',
        'status',
        'condition',
        'image',
        'qr_code'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}
