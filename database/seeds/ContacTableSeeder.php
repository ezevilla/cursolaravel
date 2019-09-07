<?php

use Illuminate\Database\Seeder;
use App\Contac;

class ContacTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacs')->insert([
           'name' => Str::random(10),
           'email' => Str::random(10).'@gmail.com',
           'user_id' => 1,
           'birthday' => '1988-05-10',
       ]);
       factory(Contac::class,10)->create();
    }
}
