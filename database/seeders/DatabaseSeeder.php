<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pathologie;
use App\Models\Pharmacie;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(5)->create();
         $role = Role::create(['name' => 'admin']);
         Pharmacie::factory(10)->create();
         Produit::factory(20)->create();

        $user = User::factory()->create([
            'name' => 'Admin',
             'email' => 'admin@example.com',
         ]);
         $user->assignRole($role);
    }
}

