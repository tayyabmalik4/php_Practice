<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
// use App\Models\user;

class memberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employees')->insert([
            'name'=>Str::random(10),
            'email'=>Str::random(10).'@gmail.com',
            'password'=>Str::random(10)
       ]);
        // public function run(){
    //  user::factory()
    //         ->count(50)
    //         ->hasPosts(1)
    //         ->create();
         
    }
    

// }
}

