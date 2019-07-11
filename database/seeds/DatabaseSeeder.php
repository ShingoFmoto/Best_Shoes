<?php

use Illuminate\Database\Seeder;
use App\shoes;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MakerTableSeeder::class);
        $this->call(ShoesTableSeeder::class);
        $this->call(ThumbnailsTableSeeder::class);
        $this->call(PostsTableSeeder::class);

        $datas = Shoes::all();
        foreach ($datas as $data) {
          $data->thumbnail_id = $data->id;
          $data->save();
        }

        }
    }
