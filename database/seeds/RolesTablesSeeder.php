<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class RolesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role;
        $adminRole->name = 'administrator';
        $adminRole->guard_name = 'web';
        $adminRole->save();
    }
}
