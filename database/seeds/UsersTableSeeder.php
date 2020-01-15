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
        //créer un utilisateur admin
        DB::table('users')->insert([
            [
            'name' => 'admin',
            'email' => 'admin@admin.fr',
            'password' => Hash::make('admin'), // crypté le mot de passe ,
            ]
        ]);
    }
}
