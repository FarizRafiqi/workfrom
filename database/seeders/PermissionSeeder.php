<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissionsByRole = [
            'admin' => [
                'user_access', 'user_store', 'user_update', 'user_delete', 'user_show',
                'building_access', 'building_store', 'building_update', 'building_delete', 'building_show',
                'room_access', 'room_store', 'room_update', 'room_delete', 'room_show',
                'use_case_access', 'use_case_store', 'use_case_update', 'use_case_delete', 'use_case_show',
                'room_use_case_access', 'room_use_case_store', 'room_use_case_update', 'room_use_case_delete',
                'amenity_access', 'amenity_store', 'amenity_update', 'amenity_delete', 'amenity_show',
                'facility_access', 'facility_store', 'facility_update', 'facility_delete', 'facility_show',
                'order_access', 'order_store', 'order_update', 'order_delete', 'order_show',
                'payment_access', 'payment_store', 'payment_update', 'payment_delete', 'payment_show',
                'nearby_facility_access', 'nearby_facility_store', 'nearby_facility_update', 'nearby_facility_delete', 'nearby_facility_show',
                'room_image_access', 'room_image_store', 'room_image_update', 'room_image_delete', 'room_image_show',
                'building_image_access', 'building_image_store', 'building_image_update', 'building_image_delete', 'building_image_show',
                'room_amenity_access', 'room_amenity_store', 'room_amenity_update', 'room_amenity_delete', 'room_amenity_show',
            ],
            'employee' => [
                'user_access', 'user_store', 'user_update', 'user_show',
                'building_access', 'building_store', 'building_update', 'building_delete', 'building_show',
                'room_access', 'room_store', 'room_update', 'room_delete', 'room_show',
                'use_case_access', 'use_case_store', 'use_case_update', 'use_case_delete', 'use_case_show',
                'room_use_case_access', 'room_use_case_store', 'room_use_case_update', 'room_use_case_delete',
                'amenity_access', 'amenity_store', 'amenity_update', 'amenity_delete', 'amenity_show',
                'facility_access', 'facility_store', 'facility_update', 'facility_delete', 'facility_show',
                'order_access', 'order_store', 'order_update', 'order_delete', 'order_show',
                'payment_access', 'payment_update', 'payment_show',
                'nearby_facility_access', 'nearby_facility_store', 'nearby_facility_update', 'nearby_facility_delete', 'nearby_facility_show',
                'room_image_access', 'room_image_store', 'room_image_update', 'room_image_delete', 'room_image_show',
                'building_image_access', 'building_image_store', 'building_image_update', 'building_image_delete', 'building_image_show',
                'room_amenity_access', 'room_amenity_store', 'room_amenity_update', 'room_amenity_delete', 'room_amenity_show',
            ],
            'owner' => [
                'user_access', 'user_update', 'user_show',
                'building_access', 'building_store', 'building_update', 'building_delete', 'building_show',
                'room_access', 'room_store', 'room_update', 'room_delete', 'room_show',
                'use_case_access', 'use_case_show',
                'room_use_case_access',
                'amenity_access', 'amenity_show',
                'facility_access', 'facility_show',
                'order_access', 'order_show',
                'payment_access', 'payment_show',
                'nearby_facility_access', 'nearby_facility_store', 'nearby_facility_update', 'nearby_facility_delete', 'nearby_facility_show',
                'room_image_access', 'room_image_store', 'room_image_update', 'room_image_delete', 'room_image_show',
                'building_image_access', 'building_image_store', 'building_image_update', 'building_image_delete', 'building_image_show',
                'room_amenity_access', 'room_amenity_store', 'room_amenity_update', 'room_amenity_delete', 'room_amenity_show',
            ],
            'customer' => [
                'user_access', 'user_update', 'user_show',
                'building_access', 'building_show',
                'room_access', 'room_show',
                'use_case_access',
                'room_use_case_access',
                'amenity_access',
                'facility_access',
                'order_access', 'order_store', 'order_update', 'order_show',
                'payment_access', 'payment_store', 'payment_update', 'payment_show',
                'nearby_facility_access',
                'room_image_access', 'room_image_show',
                'building_image_access', 'building_image_show',
                'room_amenity_access',
            ]
        ];

        Permission::insert([
            // User Management
            ['name' => 'user_access'],
            ['name' => 'user_store'],
            ['name' => 'user_update'],
            ['name' => 'user_delete'],
            ['name' => 'user_show'],

            // Building Management
            ['name' => 'building_access'],
            ['name' => 'building_store'],
            ['name' => 'building_update'],
            ['name' => 'building_delete'],
            ['name' => 'building_show'],

            // Room Management
            ['name' => 'room_access'],
            ['name' => 'room_store'],
            ['name' => 'room_update'],
            ['name' => 'room_delete'],
            ['name' => 'room_show'],

            // Use Case Management
            ['name' => 'use_case_access'],
            ['name' => 'use_case_store'],
            ['name' => 'use_case_update'],
            ['name' => 'use_case_delete'],
            ['name' => 'use_case_show'],

            // Room Use Case Pivot Management
            ['name' => 'room_use_case_access'],
            ['name' => 'room_use_case_store'],
            ['name' => 'room_use_case_update'],
            ['name' => 'room_use_case_delete'],

            // Amenity Management
            ['name' => 'amenity_access'],
            ['name' => 'amenity_store'],
            ['name' => 'amenity_update'],
            ['name' => 'amenity_delete'],
            ['name' => 'amenity_show'],

            // Facility Management
            ['name' => 'facility_access'],
            ['name' => 'facility_store'],
            ['name' => 'facility_update'],
            ['name' => 'facility_delete'],
            ['name' => 'facility_show'],

            // Order Management
            ['name' => 'order_access'],
            ['name' => 'order_store'],
            ['name' => 'order_update'],
            ['name' => 'order_delete'],
            ['name' => 'order_show'],

            // Payment Management
            ['name' => 'payment_access'],
            ['name' => 'payment_store'],
            ['name' => 'payment_update'],
            ['name' => 'payment_delete'],
            ['name' => 'payment_show'],

            // Nearby Facility Management
            ['name' => 'nearby_facility_access'],
            ['name' => 'nearby_facility_store'],
            ['name' => 'nearby_facility_update'],
            ['name' => 'nearby_facility_delete'],
            ['name' => 'nearby_facility_show'],

            // Room Image Management
            ['name' => 'room_image_access'],
            ['name' => 'room_image_store'],
            ['name' => 'room_image_update'],
            ['name' => 'room_image_delete'],
            ['name' => 'room_image_show'],

            // Building Image Management
            ['name' => 'building_image_access'],
            ['name' => 'building_image_store'],
            ['name' => 'building_image_update'],
            ['name' => 'building_image_delete'],
            ['name' => 'building_image_show'],

            // Room Amenity Management
            ['name' => 'room_amenity_access'],
            ['name' => 'room_amenity_store'],
            ['name' => 'room_amenity_update'],
            ['name' => 'room_amenity_delete'],
            ['name' => 'room_amenity_show'],
        ]);

        Role::create(['name' => 'admin'])->givePermissionTo($permissionsByRole['admin']);
        Role::create(['name' => 'employee'])->givePermissionTo($permissionsByRole['employee']);
        Role::create(['name' => 'owner'])->givePermissionTo($permissionsByRole['owner']);
        Role::create(['name' => 'customer'])->givePermissionTo($permissionsByRole['customer']);
    }
}
