<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'name' => "Syaif",
            'nim' => 13242420042,
            'prodi' => "Teknologi Informasi",
            'email' => "youemail@gmail.com",
            'nohp' => 6287776677,
        ]);
    }
}
