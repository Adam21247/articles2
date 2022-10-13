<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::factory()
            ->count(50)
            ->create();


//        DB::table('articles')->insert([
//            'title' => Str::random(10),
//            'summary' => Str::random(100),
//            'content' => Str::random(300),
//        ]);
    }
}
