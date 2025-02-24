<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // gets all permissions via Gate::before rule; see AuthServiceProvider
        $SAR = Role::create(['name' => 'Super-Admin']);
        $SAU = User::create(['user_name' => 'Yasser', 'password'=>'Yasser']);
        $SAU->assignRole($SAR);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Originator']);
        Role::create(['name' => 'Manager']);
        Role::create(['name' => 'Teacher']);
        Role::create(['name' => 'Assistant']);
        Role::create(['name' => 'Accountant']);
        Role::create(['name' => 'Student']);
        Role::create(['name' => 'JobSeeker']);
        Role::create(['name' => 'Examiner']);
        Role::create(['name' => 'NewComer']);
        Role::create(['name' => 'Marketer']);
        Role::create(['name' => 'QuestionMaker']);
        Role::create(['name' => 'QuestionAuditor']);
    }
}
