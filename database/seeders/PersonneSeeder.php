<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Personne;

class PersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Personne::create([
            'nom' => 'Ahmed',
            'prenom' => 'Ben ali',
            'email' => 'ahmed@gmail.com',
            'type' => 'stagiaire',
        ]);
        Personne::create([
            'nom' => 'Karim',
            'prenom' => 'Souiri',
            'email' => 'karim@gmail.com',
            'type' => 'stagiaire',
        ]);
        Personne::create([
            'nom' => 'imrane',
            'prenom' => 'Alami',
            'email' => 'imrane@gmail.com',
            'type' => 'stagiaire',
        ]);
        Personne::create([
            'nom' => 'Salah',
            'prenom' => 'Kamari',
            'email' => 'salah@gmail.com',
            'type' => 'stagiaire',
        ]);
    }
}