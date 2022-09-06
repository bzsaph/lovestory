<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Permissionseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $createUser = new Permission();
        $createUser->name = 'user-create';
        $createUser->guard_name = 'web';
        $createUser->save();

        $updateUser = new Permission();
        $updateUser->name = 'user-update';
        $updateUser->guard_name = 'web';
        $updateUser->save();

        $deleteUser = new Permission();
        $deleteUser->name = 'user-delete';
        $deleteUser->guard_name = 'web';
        $deleteUser->save();


         /**
         * Client Permissions
         */

        $createClient = new Permission();
        $createClient->name = 'client-create';
        $createClient->guard_name = 'web';
        $createClient->save();

        $updateClient = new Permission();
        $updateClient->name = 'client-update';
        $updateClient->guard_name = 'web';
        $updateClient->save();

        $deleteClient = new Permission();
        $deleteClient->name = 'client-delete';
        $deleteClient->guard_name = 'web';
        $deleteClient->save();

         /**
         * Tasks Permissions
         */

        $createTask = new Permission();
        $createTask->name = 'making-create';
        $createTask->guard_name = 'web';
        $createTask->save();

        $updateTask = new Permission();
        $updateTask->name = 'making-update';
        $updateTask->guard_name = 'web';
        $updateTask->save();

        $updateTask = new Permission();
        $updateTask->name = 'making-delete';
        $updateTask->guard_name = 'web';
        $updateTask->save();

        $updateTask = new Permission();
        $updateTask->name = 'view-dashboard';
        $updateTask->guard_name = 'web';
        $updateTask->save();


        $updateTask = new Permission();
        $updateTask->name = 'privillage';
        $updateTask->guard_name = 'web';
        $updateTask->save();
    }
}
