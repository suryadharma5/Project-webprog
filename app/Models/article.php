<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;


    public function categories() : BelongsTo{ 
        return $this->belongsTo(Category::class);
    }

    protected $guarded = []; //klo guarded kosong maka semua bisa diisi
}
