<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DefaultData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'User' ,
            'email' => 'user@gmail.com',
            'password' => bcrypt(555555)
        ];
        User::create($user);

        $admin = [
            'name' => 'Admin' ,
            'email' => 'admin@gmail.com',
            'password' => bcrypt(555555)
        ];
        Admin::create($admin);

        $teacher = [
            'name' => 'Teacher' ,
            'email' => 'teacher@gmail.com',
            'password' => bcrypt(555555)
        ];
        Teacher::create($teacher);
    }
}
