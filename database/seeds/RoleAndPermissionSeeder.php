<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
 
        // Dashboard
        Permission::findOrCreate('dashboard_access');

         $this->initCustomer();
 
         $role = Role::findOrCreate('administrator');
 
         $role->givePermissionTo(Permission::all());
    }
     public function initCustomer(){
 
        // this can be done as separate statements
        $customer = Role::findOrCreate('customer');
    }
}
