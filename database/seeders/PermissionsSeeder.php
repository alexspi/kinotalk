<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    private $data = [];

    public function run()
    {
        $this->loadData();
        $this->seedRoles();
    }

    public function loadData(): void
    {
        $this->data = $this->getRoles();
    }

    private function seedRoles(): void
    {
// Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $sAdmin = Role::create(['name' => 'super_admin', 'guard_name' => 'web']);
//        User::find(1)->assignRole($sAdmin);

        foreach ($this->data as $roleName => $perms) {
            $role = Role::create(['name' => $roleName, 'guard_name' => 'web']);
            $this->seedRolePermissions($role, $perms);
        }
    }

    private function seedRolePermissions(Role $role, array $modelPermissions): void
    {
        foreach ($modelPermissions as $model => $perms) {
            $buildedPerms = collect($perms)->crossJoin($model)
                ->map(
                    function ($item) {
                        $perm = implode('-', $item); //view-post
                        Permission::findOrCreate($perm, 'web');

                        return $perm;
                    }
                )->toArray();

            $role->givePermissionTo($buildedPerms);
        }
    }

    private function getRoles(): array
    {
        return json_decode($this->getFile(), true);
    }


    private function getPath()
    {
        return database_path("seeders/json_resources/permission_roles.json");
    }

    private function getFile()
    {
        return file_get_contents($this->getPath());
    }
}
