<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'summary',
        'content',
    ];

    public function comments() {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'desc');
    }

}
