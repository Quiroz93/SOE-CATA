<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Programa;

class ProgramaSeeder extends Seeder
{
    public function run(): void
    {
        $programas = [
            [
                "nivel" => "OPERARIO",
                "nombre" => "PROCESOS DE PANADERIA",
                "codigo" => "3410523",
                "estado" => "publicado"
            ],
            [
                "nivel" => "TÉCNICO",
                "nombre" => "DIBUJO ARQUITECTÓNICO – FIC",
                "codigo" => "3410525",
                "estado" => "publicado"
            ],
            [
                "nivel" => "TÉCNICO",
                "nombre" => "ATENCIÓN INTEGRAL A LA PRIMERA INFANCIA",
                "codigo" => "3410527",
                "estado" => "publicado"
            ],
            [
                "nivel" => "TÉCNICO",
                "nombre" => "COSMETOLOGÍA Y ESTÉTICA INTEGRAL",
                "codigo" => "3410528",
                "estado" => "publicado"
            ],
            [
                "nivel" => "TÉCNICO",
                "nombre" => "EJECUCIÓN DE PROGRAMAS DEPORTIVO",
                "codigo" => "3410546",
                "estado" => "publicado"
            ],
            [
                "nivel" => "TECNÓLOGO",
                "nombre" => "ACTIVIDAD FÍSICA",
                "codigo" => "3410548",
                "estado" => "publicado"
            ],
            [
                "nivel" => "TECNÓLOGO",
                "nombre" => "GESTIÓN ADMINISTRATIVA",
                "codigo" => "3410568",
                "estado" => "publicado"
            ],
            [
                "nivel" => "TECNÓLOGO",
                "nombre" => "ANÁLISIS Y DESARROLLO DE SOFTWARE",
                "codigo" => "3410551",
                "estado" => "publicado"
            ],
            [
                "nivel" => "TECNÓLOGO",
                "nombre" => "COORDINACIÓN EN SISTEMAS INTEGRADOS DE GESTIÓN",
                "codigo" => "3410564",
                "estado" => "publicado"
            ],
            [
                "nivel" => "TECNÓLOGO",
                "nombre" => "GESTIÓN CONTABLE Y DE INFOMACION FINANCIERA",
                "codigo" => "3410558",
                "estado" => "publicado"
            ],
            [
                "nivel" => "TECNÓLOGO",
                "nombre" => "LEVATAMIENTOS TOPOGRÁFICOS Y GEORREFERENCIACIÓN –FIC",
                "codigo" => "3410569",
                "estado" => "publicado"
            ]
        ];

        foreach ($programas as $item) {
            Programa::updateOrCreate(
                ['codigo' => $item['codigo']],
                [
                    'nivel' => $item['nivel'],
                    'nombre' => $item['nombre'],
                    'estado' => $item['estado']
                ]
            );
        }

        $this->command->info("Seeder de Programas ejecutado correctamente. Se insertaron " . count($programas) . " registros.");
    }
}
