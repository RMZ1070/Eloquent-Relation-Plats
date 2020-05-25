<?php


use Illuminate\Database\Seeder;
use App\Plat;

class PlatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Plat::truncate();
        factory(App\Plat::class, 5)->create();
    }
}
