<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso = new Curso();
        $curso->name = "PHP 8";
        $curso->description = "Curso de PHP 8";
        $curso->save();

        
        $curso = new Curso();
        $curso->name = "IA";
        $curso->description = "Curso de IA";
        $curso->save();
    }
}
