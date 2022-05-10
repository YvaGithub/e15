<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Note the use of the `updateOrCreate` Eloquent method
        # This is useful here because the email for each user has to be unique
        $user = User::updateOrCreate(
            ['email' => 'jill@harvard.edu', 'name' => 'Jill Harvard'],
            ['password' => Hash::make('asdfasdf')
        ]);
        
        $user = User::updateOrCreate(
            ['email' => 'jamal@harvard.edu', 'name' => 'Jamal Harvard'],
            ['password' => Hash::make('asdfasdf')
        ]);
    }
    private function addOneUserook()
    {
        $user = new User();
        $user->created_at = $this->faker->dateTimeThisMonth();
        $user->updated_at = $user->created_at;
        $user->first_name = 'Jill';
        $user->last_name = 'Harvard';
        $user->attendance_year = 2002;
        $user->email = 'jill@harvard.edu';
        $users->phone_number = 6179999998;
        $user->profile = 'I am Jill Harvard and I am an alumi at the university. I graduated from Hyde Park University in the Spring of 2002...';
        $user->save();
   
        $user = new User();
        $user->created_at = $this->faker->dateTimeThisMonth();
        $user->updated_at = $user->created_at;
        $user->first_name = 'Jamal';
        $user->last_name = 'Harvard';
        $user->attendance_year = 2000;
        $user->email = 'jamal@harvard.edu';
        $user->phone_number = 6179999999;
        $user->profile = 'I am Jamal Harvard and I am an alumi at the university. I graduated from Hyde Park University in the Spring of 2002...';
        $user->save();
    }


}
