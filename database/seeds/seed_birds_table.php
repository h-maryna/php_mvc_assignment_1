<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_birds_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    

  /**  <?php

use Illuminate\Database\Seeder;

class seed_pages_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*
    public function run()
    {
        DB::table('birds')->insert([
            'title' => 'Welcome to our website',
            'slug' => 'home', 
            'description' => "<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                ",
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()

        ]);

        DB::table('birds')->insert([
            'title' => 'About us', 
            'slug' => 'about_us',
            'description' => "<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>" ,
       'created_at' => Carbon\Carbon::now(),
       'updated_at' => Carbon\Carbon::now()
        ]);

         DB::table('birds')->insert([
            'title' => 'Birds', 
            'slug' => 'birds',
            'description' => "<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
            <ul>
       <li>Penguin</li>
       <li>Chicken</li>
       <li>Crow</li>
       <li>Sparrow</li>
       <li>Blue Jay</li>
       <li>Ostrich</li>
       </ul>",
       'created_at' => Carbon\Carbon::now(),
       'updated_at' => Carbon\Carbon::now()
        ]);

         DB::table('birds')->insert([
            'title' => 'Contact us', 
            'slug' => 'contact',
            'description' => "<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
            <ul>
       <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
       <li>Aliquam tincidunt mauris eu risus.</li>
       <li>Vestibulum auctor dapibus neque.</li>
    </ul>",
    'created_at' => Carbon\Carbon::now(),
       'updated_at' => Carbon\Carbon::now()
        ]);




    }
} 
*/
    public function run()
    {
        DB::table('birds')->insert([
           'name' => 'pengin',
           'color' => 'black',
           'can_fly' => false,
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
        ]);

        DB::table('birds')->insert([
           'name' => 'chicken',
           'color' => 'white',
           'can_fly' => false,
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
        ]);

        DB::table('birds')->insert([
           'name' => 'crow',
           'color' => 'black',
           'can_fly' => true,
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
        ]);

        DB::table('birds')->insert([
           'name' => 'sparrow',
           'color' => 'brown',
           'can_fly' => true,
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
        ]);

        DB::table('birds')->insert([
           'name' => 'blue jay',
           'color' => 'blue',
           'can_fly' => true,
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
        ]);

        DB::table('birds')->insert([
           'name' => 'ostrich',
           'color' => 'grey',
           'can_fly' => false,
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now()
        ]);
    }
}
