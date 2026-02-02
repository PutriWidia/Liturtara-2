<?php 

namespace Database\Seeders; 

use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash; 

class UserSeeder extends Seeder { 
    public function run(): void { 
        DB::table('users')->insert([ 
            [ 'email' => 'caseowner@gmail.com',
             'email_verified_at' => now(), 
             'role' => 'case owner',
              'phone_number' => '081234567890', 
              'is_verified' => 1, 'google_id' => null, 
              'password' => Hash::make('123'), 
              'remember_token' => null, 
              'created_at' => now(), 
              'updated_at' => now(), 
            ], 
            
            [ 'email' => 'talent@gmail.com', 
            'email_verified_at' => now(), 
            'role' => 'talent', 
            'phone_number' => '082345678901', 
            'is_verified' => 1, 
            'google_id' => null, 
            'password' => Hash::make('123'), 
            'remember_token' => null, 
            'created_at' => now(), 
            'updated_at' => now(), 
        ], 
        [ 'email' => 'reviewer@gmail.com', 
        'email_verified_at' => now(), 
        'role' => 'reviewer', 
        'phone_number' => '083456789012', 
        'is_verified' => 1, 
        'google_id' => null, 
        'password' => Hash::make('123'), 
        'remember_token' => null, 
        'created_at' => now(), 
        'updated_at' => now(),
     ], 
    ]);
 }
}