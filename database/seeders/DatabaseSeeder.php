<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\admin\Apellido;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    use HasRoles;
    public function run()
    {
        $administrador = User::factory()->create([
            'name' => 'admin',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
            'email' => 'admin@admin.com',
        ]);
        Apellido::factory()->create([
            'user_id' => $administrador->id,
            'lastname' => 'HHh'
        ]);
        $cliente = User::factory()->create([
            'name' => 'cliente',
            'password' => bcrypt('cliente123'),
            'role' => 'client',
            'email' => 'cliente@cliente.com',
        ]);
        Apellido::factory()->create([
            'user_id' => $cliente->id,
            'lastname' => 'HHa'
        ]);
        $vendedor = User::factory()->create([
            'name' => 'vendedor',
            'password' => bcrypt('vendedor123'),
            'role' => 'seller',
            'email' => 'vendedor@vendedor.com',
        ]);
        Apellido::factory()->create([
            'user_id' => $vendedor->id,
            'lastname' => 'HHh'
        ]);
        Apellido::factory(100)->create();

        // Creamos los roles
        $admin = Role::create(['name' => 'administrador']);
        $client = Role::create(['name' => 'cliente']);
        $seller = Role::create(['name' => 'vendedor']);
        //Creamos los permisos
        $permissions = [
            'create',
            'read',
            'update',
            'delete'
        ];
        foreach (Role::all() as $rol) {

            foreach ($permissions as $permission) {
                if ($rol->name == 'administrador') $rol->name = 'usuario';
                Permission::create(['name' => "{$rol->name} $permission"]);
            }
        }
        // Asignamos los permisos alos roles
        $admin->syncPermissions(Permission::all());
        $client->syncPermissions(Permission::where('name', 'like', '%cliente%')->get());
        $seller->syncPermissions(Permission::where('name', 'like', '%vendedor%')->get());
        // Asignamos los roles a los usuarios
        $administrador->assignRole('administrador');
        $cliente->assignRole('cliente');
        $vendedor->assignRole('vendedor');
    }
}
