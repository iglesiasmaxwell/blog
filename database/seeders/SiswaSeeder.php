<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //proses memasukkan data
        $data_siswa = [
            [
                'nama' => 'Alief Wafiudin',
                'kelas' => 'XIPPLG',
                'umur' => random_int(15,30),
            ],
            [
                'nama' => 'Anggara Prima',
                'kelas' => 'XIPPLG',
                'umur' => random_int(15,30),
            ],
            [
                'nama' => 'Nenni Destiani',
                'kelas' => 'XIPPLG',
                'umur' => random_int(15,30),
            ],
        ];
        
        //proses hapus data
        DB::table('siswa')->truncate();

        //proses simpan data
        foreach($data_siswa as $data) {
            DB::table('siswa') -> insert ([
                    'nama' => $data['nama'],
                    'kelas' => $data['kelas'],
                    'umur' => $data['umur'],
                ]);
        }

        //proses ambil data
        $siswa = DB::table('siswa')->get();
        dd($siswa);
    }
}
