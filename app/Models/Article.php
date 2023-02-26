<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Article extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'title',
        'content',
    ];

//    public function comments() {
//        return $this->hasMany(Comment::class)->orderBy('created_at', 'desc');
//    }

public function authors()
{
    return $this->belongsToMany(Author::class, 'article_author');
}


}
