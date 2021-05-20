<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config("comics");

        for ($i=0; $i < count($comics) ; $i++) { 
            $comic = $comics[$i];

            $new_comic_obj = new Comic();
            $new_comic_obj->title = $comic["title"];
            $new_comic_obj->description = $comic["description"];
            $new_comic_obj->thumb = $comic["thumb"];
            $new_comic_obj->price = $comic["price"];
            $new_comic_obj->series = $comic["series"];
            $new_comic_obj->sale_date = $comic["sale_date"];
            $new_comic_obj->type = $comic["type"];
            $new_comic_obj->save();
        }
    }
}
