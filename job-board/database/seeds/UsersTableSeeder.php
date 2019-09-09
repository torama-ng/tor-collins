<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::truncate();
       
       $adminRole = Role::where('name', 'admin')->first();
       $employerRole = Role::where('name', 'employer')->first();
       $jobSeekerRole = Role::where('name', 'jobSeeker')->first();


       $admin = User::create([
           'name' => 'Admin',
           'email' => 'admin@admin.com',
           'password' => bcrypt('password')
       ]);

        $employer = User::create([
            'name' => 'Employer',
            'email' => 'employer@employer.com',
            'password' => bcrypt('password')
        ]);

        $jobSeeker = User::create([
            'name' => 'jobSeeker',
            'email' => 'jobSeeker@jobSeeker.com',
            'password' => bcrypt('password')
        ]);

        $admin->roles()->attach($adminRole);
        $employer->roles()->attach($employerRole);
        $jobSeeker->roles()->attach($jobSeekerRole);
    }
}
