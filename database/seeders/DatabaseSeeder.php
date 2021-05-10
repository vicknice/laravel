<?php

namespace Database\Seeders;

use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;
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
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
          'name' => 'Personal',
          'slug' => 'personal'
        ]);

        $family = Category::create([
          'name' => 'Family',
          'slug' => 'family'
        ]);

        $work = Category::create([
          'name' => 'Work',
          'slug' => 'work'
        ]);

        Post::create([
          'user_id' => $user->id,
          'category_id' => $personal->id,
          'title' => 'My Personal Post',
          'slug' => 'my-personal-post',
          'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id auctor eros.</p>',
          'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id auctor eros. Donec vitae consequat sapien. In eu molestie quam. Suspendisse facilisis venenatis nulla vitae euismod. Sed turpis mi, lobortis at est id, efficitur auctor ligula. In dapibus est sit amet elit facilisis, in sollicitudin ligula fringilla. Sed efficitur velit odio. Curabitur purus diam, sagittis ornare mauris id, interdum porta leo. Mauris non tortor sem. Nullam dictum tortor nec arcu blandit, ac volutpat ex fermentum. Integer eu mauris arcu. Donec posuere lorem ipsum, et fermentum turpis feugiat sagittis. Praesent id consectetur arcu, non molestie leo. Nullam dapibus et leo a pretium. </p>',
        ]);

        Post::create([
          'user_id' => $user->id,
          'category_id' => $family->id,
          'title' => 'My Family Post',
          'slug' => 'my-family-post',
          'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id auctor eros.</p>',
          'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id auctor eros. Donec vitae consequat sapien. In eu molestie quam. Suspendisse facilisis venenatis nulla vitae euismod. Sed turpis mi, lobortis at est id, efficitur auctor ligula. In dapibus est sit amet elit facilisis, in sollicitudin ligula fringilla. Sed efficitur velit odio. Curabitur purus diam, sagittis ornare mauris id, interdum porta leo. Mauris non tortor sem. Nullam dictum tortor nec arcu blandit, ac volutpat ex fermentum. Integer eu mauris arcu. Donec posuere lorem ipsum, et fermentum turpis feugiat sagittis. Praesent id consectetur arcu, non molestie leo. Nullam dapibus et leo a pretium.</p> ',
        ]);

        Post::create([
          'user_id' => $user->id,
          'category_id' => $work->id,
          'title' => 'My Work Post',
          'slug' => 'my-work-post',
          'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id auctor eros.</p>',
          'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam id auctor eros. Donec vitae consequat sapien. In eu molestie quam. Suspendisse facilisis venenatis nulla vitae euismod. Sed turpis mi, lobortis at est id, efficitur auctor ligula. In dapibus est sit amet elit facilisis, in sollicitudin ligula fringilla. Sed efficitur velit odio. Curabitur purus diam, sagittis ornare mauris id, interdum porta leo. Mauris non tortor sem. Nullam dictum tortor nec arcu blandit, ac volutpat ex fermentum. Integer eu mauris arcu. Donec posuere lorem ipsum, et fermentum turpis feugiat sagittis. Praesent id consectetur arcu, non molestie leo. Nullam dapibus et leo a pretium.</p> ',
        ]);
    }
}
