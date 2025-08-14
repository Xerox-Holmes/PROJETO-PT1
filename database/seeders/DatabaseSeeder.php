<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       DB::table('produtos')->insert([
            ['nome'=>'Linguiça Colonial','tipo'=>'Linguiça','peso'=>'500g','preco'=>24.90,'descricao'=>'Linguiça defumada'],
            ['nome'=>'Linguiça Mista','tipo'=>'Linguiça','peso'=>'350g','preco'=>29.90,'descricao'=>'Linguiça mista']
        ]);

        DB::table('lotes')->insert([
            ['id_produto'=>1,'quantidade'=>50,'data_validade'=>'2026-03-12'],
            ['id_produto'=>2,'quantidade'=>15,'data_validade'=>'2026-06-08']
        ]);

        DB::table('administradors')->insert([
            ['nome'=>'Mário','registro_empresa'=>'ALT12345']
        ]);
    }
}

