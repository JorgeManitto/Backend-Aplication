<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //SEEDERS PARA LA CATEGORIA
        DB::table('carcategories')->insert([
            'carcategories' => 'Volvo',
            
        ]);
        DB::table('carcategories')->insert([
            'carcategories' => 'Ford',
            
        ]);
        // SEEDERS PARA EL MODELO
        DB::table('modelcategories')->insert([
            'model' => 'Coupe',
            
        ]);
        DB::table('modelcategories')->insert([
            'model' => 'Sedan',
            
        ]);
    }
}
