<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationalProgramController extends Controller
{
    public function list()
    {
        // МАССИВ ДАННЫХ ВМЕСТО БАЗЫ
        $programs = [
            [
                'direction_code' => '07.03.01',
                'program_main_name' => 'Архитектура',
                'program_profile' => 'Профиль "Архитектура"',
                'education_level' => 'Бакалавриат',
                'faculty_institute' => 'Факультет архитектуры'
            ],
            [
                'direction_code' => '07.03.02',
                'program_main_name' => 'Строительство',
                'program_profile' => 'Гражданское строительство',
                'education_level' => 'Бакалавриат',
                'faculty_institute' => 'Строительный факультет'
            ],
            [
                'direction_code' => '09.03.01',
                'program_main_name' => 'Информатика и вычислительная техника',
                'program_profile' => 'Цифровые технологии',
                'education_level' => 'Бакалавриат',
                'faculty_institute' => 'Факультет ИТ'
            ],
        ];

        return view('educational_programs.list', compact('programs'));
    }

    public function index()
    {
        return "Табличный режим отключён (нет базы данных)";
    }
}
