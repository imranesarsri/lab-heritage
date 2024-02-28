<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Personne;
use App\Traits\MorphType;

class Formateur extends Personne
{
    use HasFactory, MorphType;
}