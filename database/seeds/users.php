<?php

use Illuminate\Database\Seeder;
use  App\User;
class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $data = [];
        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 10 ; $i++) {
            array_push($data, [
                'name' =>$faker->name,
                'email' =>$faker->email,
                'password' => bcrypt('123456'),
                
            ]);
        }
        
        User::insert($data);

    
        //
    }
}
