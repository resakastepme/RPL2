<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('akun')->insert([
            'nama' => 'RESAKA',
            'username' => 'STEPME',
            'password' => md5('resasidewa123'),
            'created_at' => Carbon::now()
        ]);
        DB::table('akun')->insert([
            'nama' => 'AHMAD',
            'username' => 'AHMAD',
            'password' => md5('123456'),
            'created_at' => Carbon::now()
        ]);
        DB::table('akun')->insert([
            'nama' => 'HASBI',
            'username' => 'HASBI',
            'password' => md5('123456'),
            'created_at' => Carbon::now()
        ]);
        DB::table('akun')->insert([
            'nama' => 'ADIT',
            'username' => 'ADIT',
            'password' => md5('123456'),
            'created_at' => Carbon::now()
        ]);
        DB::table('akun')->insert([
            'nama' => 'ALIF',
            'username' => 'ALIF',
            'password' => md5('123456'),
            'created_at' => Carbon::now()
        ]);
        DB::table('akun')->insert([
            'nama' => 'FALEN',
            'username' => 'FALEN',
            'password' => md5('123456'),
            'created_at' => Carbon::now()
        ]);
    }
}
