<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            [
                'description' => 'Pago de servicios de internet',
                'price'       => 35000,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'description' => 'Pago de arriendo',
                'price'       => 850000,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'description' => 'Pago de factura eléctrica',
                'price'       => 120000,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'description' => 'Pago de suscripción mensual',
                'price'       => 29900,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'description' => 'Pago de servicio de agua',
                'price'       => 45000,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
