<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Role;
use App\Models\HomeData;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();

        DB::table('role_user')->truncate();

        $superAdmin = Role::where('name','superAdmin')->first();

        $user =  User::create([
            'name'=>'avinash vishwakarma',
            'email'=>'300codeavinash@gmail.com',
            'number'=>'7000789511',
            'password'=>Hash::make('AVINASH.V')
        ]);

        $user->roles()->attach($superAdmin);



        HomeData::create([
            'donators'=>000,
            'mission'=>000,
            'volenter'=>000,
            'totalVisitos'=>000
        ]);
    }
}
