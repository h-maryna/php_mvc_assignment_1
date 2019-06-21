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
