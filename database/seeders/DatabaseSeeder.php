<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'BaBoon',
            'email' => 'baboon@mail.com',
            'password' => bcrypt('baboon123')
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Post::create([
            'title' => 'Learn Laravel 8',
            'slug' => 'learn-laravel-8',
            'category_id' => '1',
            'user_id' => '1',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae illum dicta molestias consequatur sint provident? Magni nihil perspiciatis earum! Dolor, dicta.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae illum dicta molestias consequatur sint provident? Magni nihil perspiciatis earum! Dolor, dicta. Voluptas ipsam velit dolor facere expedita provident sapiente, asperiores inventore ab voluptates sequi fugiat?</p><p>Neque sunt praesentium sit minima debitis explicabo, dolores voluptas dolorem labore tenetur iste exercitationem magnam fuga saepe aliquam quo odio impedit temporibus eum consequuntur rerum delectus autem voluptatibus!</p><p>Reiciendis neque debitis exercitationem, explicabo consequuntur perferendis natus eos voluptate cupiditate dolor recusandae non rem perspiciatis minima? Iure velit, autem iusto odio voluptas accusamus eveniet aliquid est deserunt odit tenetur rem et eos doloremque! Odit, voluptate aut!</p>'
        ]);
    }
}
