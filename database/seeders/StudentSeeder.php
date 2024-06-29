<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'nama' => 'Mafaza Husnadani',
            'tempat_lahir' => 'Ponorogo',
            'tanggal_lahir' => '2007-02-20',
            'sekolah' => 'SMKN 1 Jenangan',
            'keterangan' => 'Siswa baru',
        ]);

        Student::factory(5)->create();
    }
}
