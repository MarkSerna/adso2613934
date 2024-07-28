<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // using ORM eloquent
        $user = new User;
        $user->document = 1053000001;
        $user->fullname = 'John Doe';
        $user->gender = 'male';
        $user->birthdate = '1988-10-07';
        $user->phone = '3127333333';
        $user->email = 'johndoe@gmail.com';
        $user->password = bcrypt('admin');
        $user->role = 'Administator';
        $user->save();

        // using ORM eloquent
        $user = new User;
        $user->document = 1060000000;
        $user->fullname = 'Mark Serna';
        $user->gender = 'Male';
        $user->birthdate = '1989-05-24';
        $user->phone = '3044265666';
        $user->email = 'marcoesernal@gmail.com';
        $user->password = bcrypt('admin');
        $user->role = 'Administator';
        $user->save();
    
        DB::table('users')->insert([
        'document' => 1053000002,
        'fullname' => 'Jane Doe',
        'gender' => 'Female',
        'birthdate' => '1988-10-07',
        'phone' => '3127333333',
        'email' => 'janedoe@gmail.com',
        'password' => bcrypt('admin'),
        'role' => 'Customer',
        'created_at' => now(),
        'updated_at' => now(),
        ]);
    }

}
