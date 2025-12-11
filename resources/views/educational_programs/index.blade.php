{{-- resources/views/educational_programs/index.blade.php --}}
@extends('layouts.app') {{-- если у вас есть layout, иначе удалите строку --}}

@section('content')
<div class="container" style="padding:20px;">
    <h1>Образовательные программы</h1>

    {{-- Форма поиска / фильтры --}}
    <form method="GET" action="{{ url('/educational-programs') }}" style="margin-bottom:20px; display:flex; gap:8px; flex-wrap:wrap;">
        <input type="text" name="program_name" placeholder="По названию программы" value="{{ request('program_name') }}">
        <input type="text" name="program_main_name" placeholder="По основному названию" value="{{ request('program_main_name') }}">
        <input type="text" name="program_profile" placeholder="По профилю программы" value="{{ request('program_profile') }}">
        <input type="text" name="education_level" placeholder="По уровню образования" value="{{ request('education_level') }}">
        <input type="text" name="faculty_institute" placeholder="По факультету/институту" value="{{ request('faculty_institute') }}">
        <button type="submit">Найти</button>
        <a href="{{ url('/educational-programs') }}" style="align-self:center; margin-left:8px;">Сбросить</a>
    </form>

    {{-- Если есть результаты --}}
    @if(isset($programs) && $programs->count() > 0)
        <div style="overflow-x:auto;">
            <table border="1" cellpadding="8" cellspacing="0" style="width:100%; border-collapse:collapse;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Код направления</th>
                        <th>Основное название</th>
                        <th>Название программы</th>
                        <th>Профиль</th>
                        <th>Уровень образования</th>
                        <th>Факультет / Институт</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($programs as $program)
                        <tr>
                            <td>{{ $program->id }}</td>
                            <td>{{ $program->direction_code ?? '-' }}</td>
                            <td>{{ $program->program_main_name ?? '-' }}</td>
                            <td>{{ $program->program_name ?? '-' }}</td>
                            <td>{{ $program->program_profile ?? '-' }}</td>
                            <td>{{ $program->education_level ?? '-' }}</td>
                            <td>{{ $program->faculty_institute ?? '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Если в контроллере использовался paginate(), покажем ссылки пагинации --}}
        @if(method_exists($programs, 'links'))
            <div style="margin-top:12px;">
                {{ $programs->appends(request()->all())->links() }}
            </div>
        @endif

    @else
        <p>Результатов не найдено.</p>
    @endif
</div>
@endsection
