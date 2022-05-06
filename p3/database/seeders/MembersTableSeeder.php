<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Member;
use Faker\Factory;

class MembersTableSeeder extends Seeder
    {
        private $faker;

        public function run()
        {
            # https://fakerphp.github.io
            $this->faker = Factory::create();
            # Three different examples of how to add books
            //$this->addOneBook();
            //$this->addAllBooksFromBooksDotJsonFile();
            //$this->addRandomlyGeneratedBooksUsingFaker();
        }

    private function addOneMember()
    {
        $member = new Member();
        $member->created_at = $this->faker->dateTimeThisMonth();
        $member->updated_at = $member->created_at;
        $member->firstName = 'Yvaral';
        $member->lastname = 'Louis-Jame';
        $member->attendance_year = '2020';
        $member->email = 'yvl905@g.harvard.edu';
        $member->phone_number = '6170000000';
        $member->save();
    }

    /**
     *
     */
    private function addAllMembersFromMembersDotJsonFile()
    {
        $memberData = file_get_contents(database_path('members.json'));
        $members = json_decode($memberData, true);

        foreach ($members as $member => $memberData) {
            $member = new Member();
            
            $member->created_at = $this->faker->dateTimeThisMonth();
            $member->updated_at = $member->created_at;
            $member->firstname = $memberData['firstname'];
            $member->lastname = $memberData['lastname'];
            $member->attendance_year = $memberData['attendance_year'];
            $member->email = $memberData['email'];
            $member->phone_number = $memberData['phone_number'];
            $member->profile = $memberData['profile'];
            $member->save();
        }
    }

    /**
     *
     */
    private function addRandomlyGeneratedMembersUsingFaker()
    {
        for ($i = 0; $i < 20; $i++) {
            $member = new Member();
            $member->created_at =  $this->faker->dateTimeThisMonth();
            $member->updated_at =  $member->created_at;
            $member->firstname = Str::firstname($firstname);
            $member->lastname = Str::lastname($lastname, '-');
            $member->attendance_year = $this->faker->attendance_year . ' ' . $this->faker->lastName;
            $member->email = $this->faker->email;
            $member->phone_number = $this->faker->phone_number;
            $member->profile = $this->faker->profile;
            $member->save();
        }
    }
}