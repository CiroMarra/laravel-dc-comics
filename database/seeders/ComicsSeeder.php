<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\comic;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicArray = config('comic');

        foreach($comicArray as $comicBook) {
            $newComic = new Comic();
            $newComic->title = $comicBook['title'];
            $newComic->description = $comicBook['description'];
            $newComic->type = $comicBook['type'];
            $newComic->price = $comicBook['price'];
            $newComic->series = $comicBook['series'];
            $newComic->sale_date = $comicBook['sale_date'];
            $newComic->thumb = $comicBook['thumb'];
            $newComic->save();
    }
}
}
