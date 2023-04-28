<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Member;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Member::factory(10)->create();

        Member::create([
            'name' => 'Fabian Owuor',
            'email' => 'fabian@webworx.co.ke',
            'school' => 'Mathematics, Science, English',

        ]);

        Member::create([
            'name' => 'Bug Tester',
            'email' => 'bug@gmail.com',
            'school' => 'English, History, Academia',

        ]);

        Member::create([
            'name' => 'Trevor Noah',
            'email' => 'trevoh@noah.co.ke',
            'school' => 'Mathematics, French, Booglish',

        ]);

        Member::create([
            'name' => 'Ben Ten',
            'email' => 'ben@ten.co.ke',
            'school' => 'Maps, Science, Agric',

        ]);

        Member::create([
            'name' => 'Pam Sasa',
            'email' => 'pam@sasa.co.ke',
            'school' => 'Swahili, English, Mathematics',

        ]);

        Member::create([
            'name' => 'Stone Led',
            'email' => 'stone@edr.com',
            'school' => 'Maps, Science, Agric, Swahili, English, History, Academia',

        ]);
    }
}
