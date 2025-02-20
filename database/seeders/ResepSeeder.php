<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $obat = DB::table('obats')->first();

        DB::table('reseps')->insert([
            [
                'nama_pasien' => 'Johanes Bernard',
                'obat_id' => $obat->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
