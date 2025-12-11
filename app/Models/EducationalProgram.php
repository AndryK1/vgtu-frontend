<?php

// app/Models/EducationalProgram.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalProgram extends Model
{
    use HasFactory;

    protected $table = 'educational_programs'; // Укажите имя вашей таблицы
    protected $fillable = [
        'id',
        'direction_code',
        'program_main_name', // новый столбец
        'program_name',
        'program_profile',  // новый столбец
        'education_level',
        'faculty_institute',
    ];
}
