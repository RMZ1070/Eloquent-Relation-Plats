<?php

use Illuminate\Database\Seeder;
use App\Saveur;

class SaveurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('saveurs')->insert([

            ['nom'=>'salé'],

            ['nom'=>'sucré'],

        ]);
        
   
    }
}
