<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $blogs =['Tech','Entertainment','Education'];
        foreach($blogs as $key => $blog)
        {
            Blog::updateOrCreate([
                'title'=> $blog,
                'blog_category_id'=> 1,
                'slug'=> $blog,
                'description'=> $blog
            ]);
        }
    }
}
