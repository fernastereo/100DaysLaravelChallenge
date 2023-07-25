<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    public function scopePages(Builder $query){
        $query->whereType('PAGE');
    }

    public function scopePosts(Builder $query){
        $query->whereType('POST')->orderByDESC('id')->get();
    }
}
