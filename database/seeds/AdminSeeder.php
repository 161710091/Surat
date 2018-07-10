<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role;
        $adminRole->name = "Super Admin";
        $adminRole->display_name = "Super Admin";
        $adminRole->save();

        $memberRole = new Role;
        $memberRole->name = "Admin";
        $memberRole->display_name = "Admin";
        $memberRole->save();

        $admin = new User;
        $admin->name = "Alif Firmansyah";
        $admin->username = "Super Admin";
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        $member = new User;
        $member->name = "Admin";
        $member->username = "Admin";
        $member->password = bcrypt('rahasia');
        $member->save();
        $member->attachRole($memberRole);

    }
}
