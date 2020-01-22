<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            Post::create([
                'title' => $faker->sentence(5),
                'content' => $faker->paragraph(50),
                'created_at' => now()->subDays(random_int(1, 3))->subHours(random_int(1, 10)),
            ]);
        }
    }
}
