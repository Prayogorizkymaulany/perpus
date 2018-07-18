<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        // Membuat role member
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        // Membuat sample Admin
        $admin = new User();
        $admin->name = "Admin";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt("admin123");
        $admin->is_verified = 1;
        $admin->save();
        $admin->attachRole($adminRole);

        $admin = new User();
        $admin->name = "Hendra Wahyudi";
        $admin->email = "hendra@gmail.com";
        $admin->password = bcrypt("hendra123");
        $admin->is_verified = 1;
        $admin->save();
        $admin->attachRole($adminRole);

        // Membuat sample member
        $member = new User();
        $member->name = "Member";
        $member->email = "member@gmail.com";
        $member->password = bcrypt("member123");
        $member->is_verified = 1;
        $member->save();
        $member->attachRole($memberRole);

    }
}
