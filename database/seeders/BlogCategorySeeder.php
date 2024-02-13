<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogCategory;
class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories =['Tech','Entertainment','Education'];
        foreach($categories as $key => $category)
        {
            BlogCategory::updateOrCreate([
                'category_name'=> $category,
                'category_description'=> $category
            ]);
        }
    }
}
