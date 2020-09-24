<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++) {
            for ($a = 1; $a <= 3; $a++) {
                Category::create([
                    'project_id' => $i,
                    'title' => 'テストカテゴリー' .$a,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
