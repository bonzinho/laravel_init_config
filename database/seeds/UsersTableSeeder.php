<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\feupWorld\User::class, 1)
            ->states('super_admin')
            ->create([
                'email' => 'super_admin@email.com',
                'name' => 'Super Administrador'
            ]);


        factory(\feupWorld\User::class, 1)
            ->create([
                'email' => 'admin@email.com',
                'name' => 'Administrador'
            ]);
    }
}
