<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nom'=>'admin',
            'is_admin' => true,
            'email'=>'admin2@gmail.com',
            'password'=> Hash::make('admin12345')
        ]);
    }
}
