<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $hidden = ['updated_at', 'created_at', 'pivot'];

    public function articles()
    {
        return $this->hasMany(Article::class)->orderBy('created_at', 'desc');
    }

}
