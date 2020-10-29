<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostCategory;

class PostCatagoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostCategory::truncate();

        PostCategory::create([
            'name'=>'media Post',
            'shortDescription'=>'showing all media post'
        ]);

        PostCategory::create([
            'name'=>'our top posts',
            'shortDescription'=>'our top post goes here'
        ]);
    }
}
