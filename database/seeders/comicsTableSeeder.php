<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// model
use App\Models\Comic;

class comicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $comic) {
            $singleComic = new Comic();
            $singleComic->title = $comic['title'];
            $singleComic->description = $comic['description'];
            $singleComic->thumb = $comic['thumb'];
            $singleComic->price = $comic['price'];
            $singleComic->series = $comic['series'];
            $singleComic->sale_date = $comic['sale_date'];
            $singleComic->type = $comic['type'];
            $singleComic->save();
        }
    }
}
