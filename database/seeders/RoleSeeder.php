<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Role::all();

        if (!$roles->count()){
            $data = [
                ['name'=>'user'],
                ['name'=>'admin']
            ];
            Role::insert($data);
        }
    }
}
