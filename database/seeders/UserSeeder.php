<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Models\User();
        $admin->name = 'admin';
        $admin->username = 'admin';
        $admin->email = 'admin@admin.com';
        $admin->password = '$2y$10$RNAvB.t.OfaZ6aHvqn0sLOP0pDxcn.Mg7rpAT1HF7DBTGLoViujBm';
        $admin->save();
    }
}
