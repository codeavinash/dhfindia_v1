<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        $roles = ['user','admin','superAdmin','PostManager'];

        foreach($roles as $role){
            Role::create([
                'name'=>$role
            ]);
        }
    }
}
