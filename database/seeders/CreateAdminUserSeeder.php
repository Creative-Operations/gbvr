<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin Seeder
        $user = User::create([
            'firstname' => 'Fabian', 
            'lastname' => 'Owuor',
            'location' => 'Nairobi',
            'mobile' => '0721948852',
            'email' => 'fabian@webworx.co.ke',
            'password' => bcrypt('password'),
            'remarks' => 'developer of the system',
        ]);
      
        $role = Role::create(['name' => 'Admin']);
       
        $permissions = Permission::pluck('id','id')->all();
     
        $role->syncPermissions($permissions);
       
        $user->assignRole([$role->id]);
    }
}