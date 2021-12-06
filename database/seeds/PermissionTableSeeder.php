<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

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
        $createTask->name = 'task-create';
        $createTask->guard_name = 'web';
        $createTask->save();

        $updateTask = new Permission();
        $updateTask->name = 'task-update';
        $updateTask->guard_name = 'web';
        $updateTask->save();

         /**
         * Leads Permissions
         */

        $createLead = new Permission();
        $createLead->name = 'lead-create';
        $createLead->guard_name = 'web';
        $createLead->save();

        $updateLead = new Permission();
        $updateLead->name = 'lead-update';
        $updateLead->guard_name = 'web';
        $updateLead->save();

         /**
         * Client Permissions
         */

        $createClient = new Permission();
        $createClient->name = 'product-create';
        $createClient->guard_name = 'web';
        $createClient->save();

        $updateClient = new Permission();
        $updateClient->name = 'product-update';
        $updateClient->guard_name = 'web';
        $updateClient->save();

        $deleteClient = new Permission();
        $deleteClient->name = 'product-delete';
        $deleteClient->guard_name = 'web';
        $deleteClient->save();

         /**
         * Tasks Permissions
         */
    }
}
