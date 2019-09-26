<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = config('roles.models.role')::where('name', '=', 'User')->first();
        $adminRole = config('roles.models.role')::where('name', '=', 'Admin')->first();
        $permissions = config('roles.models.permission')::all();
        $users = [
            [
                'name' => 'Tran Van Anh',
                'email' => 'maintth1807076@fpt.edu.vn',
            ],
            [
                'name' => 'Nguyen Van Binh',
                'email' => 'cocyeukin@gmail.com',
            ],
        ];
        foreach ($users as $user) {
            $newUser = User::where('name', '=', $user['email'])->first();
            if ($newUser === null) {
                $newUser = User::create([
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'password' => bcrypt('password'),
                ]);
            }
            $newUser->attachRole($userRole);
        }
        if (config('roles.models.defaultUser')::where('email', '=', 'admin@admin.com')->first() === null) {
            $newUser = config('roles.models.defaultUser')::create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ]);
            $newUser->attachRole($adminRole);
            foreach ($permissions as $permission) {
                $newUser->attachPermission($permission);
            }
        }
        if (config('roles.models.defaultUser')::where('email', '=', 'user@user.com')->first() === null) {
            $newUser = config('roles.models.defaultUser')::create([
                'name' => 'User',
                'email' => 'user@user.com',
                'password' => bcrypt('password'),
            ]);
            $newUser;
            $newUser->attachRole($userRole);
        }
    }
}