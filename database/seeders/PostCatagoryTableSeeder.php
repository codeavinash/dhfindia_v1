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
            'thumbnailUrl'=>'/networkingFiles/images/categoryImages/holdingImage.jpg',
            'shortDescription'=>'showing all media post'
        ]);

        PostCategory::create([
            'name'=>'our top posts',
            'thumbnailUrl'=>'/networkingFiles/images/categoryImages/holdingImage.jpg',
            'shortDescription'=>'our top post goes here'
        ]);
    }
}
