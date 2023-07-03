<?php

namespace App\Models;

use App\Models\article;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function articles():HasMany{
        return $this->hasMany(article::class);
    }
}
