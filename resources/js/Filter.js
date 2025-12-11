// Данные для фильтров
const filterData = {
    educationLevels: [
        'Бакалавриат (3++)',
        'Бакалавриат академический',
        'Бакалавриат прикладной',
        'Магистратура (3++)',
        'Магистратура прикладная',
        'Специалитет (3++)',
        'Специалитет',
        'Среднее профессиональное образование',
        'Среднее профессиональное образование (3++)',
        'Среднее профессиональное образование (4)',
        'Аспирантура',
        'Аспирантура (ФГТ)'
    ],
    
    directions: [
        '09.03 - Информатика и вычислительная техника',
        '09.04 - Информатика и вычислительная техника (Магистратура)',
        '07.03 - Архитектура',
        '08.03 - Строительство',
        '23.03 - Эксплуатация транспортно-технологических машин и комплексов'
    ],
    
    faculties: [
        'Архитектуры и градостроительства',
        'Дорожно-транспортный факультет',
        'Факультет информационных технологий и компьютерной безопасности',
        'Строительный факультет',
        'Энергетический факультет'
    ],
    
    egeSubjects: [
        'Математика',
        'География',
        'Физика',
        'Информатика',
        'Химия',
        'Русский язык'
    ]
};

// Данные программ (пример)
const programsData = [
    {
        id: 1,
        title: 'Информационные системы и технологии',
        profile: 'Информационные системы и технологии в дизайне',
        code: '09.03.02',
        level: 'Бакалавриат (3++)',
        form: 'Очная',
        budget: 'Бюджет',
        faculty: 'Факультет информационных технологий и компьютерной безопасности',
        description: 'Программа направлена на подготовку специалистов, владеющих современными информационными технологиями в области промышленного дизайна.',
        image: 'img/image-3.png'
    },
    {
        id: 2,
        title: 'Информационные системы и технологии',
        profile: 'Информационные системы и технологии в дизайне',
        code: '09.03.02',
        level: 'Бакалавриат академический',
        form: 'Заочная',
        budget: 'Контракт',
        faculty: 'Факультет информационных технологий и компьютерной безопасности',
        description: 'Программа направлена на подготовку специалистов, владеющих современными информационными технологиями в области промышленного дизайна.',
        image: 'img/image-2.png'
    },
    {
        id: 3,
        title: 'Информационные системы и технологии',
        profile: 'Информационные системы и технологии в дизайне',
        code: '09.03.02',
        level: 'Магистратура (3++)',
        form: 'Очная',
        budget: 'Бюджет',
        faculty: 'Факультет информационных технологий и компьютерной безопасности',
        description: 'Программа направлена на подготовку специалистов, владеющих современными информационными технологиями в области промышленного дизайна.',
        image: 'img/image.png'
    }
];

// Текущие активные фильтры
let activeFilters = {
    search: '',
    educationLevel: '',
    direction: '',
    faculty: '',
    ege: '',
    custom: ''
};

// DOM элементы
const filterElements = {
    searchInput: null,
    filterButtons: null,
    resultsCount: null,
    programsContainer: null,
    activeFiltersContainer: null
};

// Инициализация при загрузке страницы
document.addEventListener('DOMContentLoaded', function() {
    initElements();
    initFilters();
    renderPrograms();
    updateResultsCount();
});

// Инициализация DOM элементов
function initElements() {
    filterElements.searchInput = document.querySelector('.text-wrapper-43').closest('.view-7').querySelector('.rectangle-5');
    filterElements.filterButtons = document.querySelectorAll('.group-5 > div');
    filterElements.resultsCount = document.querySelector('.text-wrapper-47');
    filterElements.programsContainer = document.querySelector('.frame');
    filterElements.activeFiltersContainer = document.querySelector('.view-9');
}

// Инициализация фильтров
function initFilters() {
    // Обработчики для кнопок фильтров
    filterElements.filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filterType = getFilterType(this);
            showFilterModal(filterType);
        });
    });
    
    // Поиск по вводу
    filterElements.searchInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            performSearch(this.textContent || '');
        }
    });
    
    // Кнопка поиска
    const searchButton = document.querySelector('.view-8');
    if (searchButton) {
        searchButton.addEventListener('click', function() {
            const searchText = filterElements.searchInput.textContent || '';
            performSearch(searchText);
        });
    }
    
    // Кнопка удаления активного фильтра
    const removeFilterBtn = document.querySelector('.group-7');
    if (removeFilterBtn) {
        removeFilterBtn.addEventListener('click', function() {
            removeActiveFilter();
        });
    }
}

// Определение типа фильтра
function getFilterType(element) {
    const text = element.textContent || '';
    if (text.includes('Уровень образования')) return 'educationLevel';
    if (text.includes('Направление')) return 'direction';
    if (text.includes('Факультет')) return 'faculty';
    if (text.includes('ЕГЭ')) return 'ege';
    return '';
}

// Показать модальное окно фильтра
function showFilterModal(type) {
    // Создаем модальное окно для выбора значений фильтра
    const modalHtml = createFilterModal(type);
    
    // Удаляем существующее модальное окно
    const existingModal = document.querySelector('.filter-modal');
    if (existingModal) existingModal.remove();
    
    // Добавляем новое модальное окно
    document.body.insertAdjacentHTML('beforeend', modalHtml);
    
    // Обработчики для нового модального окна
    const modal = document.querySelector('.filter-modal');
    const closeBtn = modal.querySelector('.close-filter-modal');
    const applyBtn = modal.querySelector('.apply-filter');
    const items = modal.querySelectorAll('.filter-item');
    
    closeBtn.addEventListener('click', () => modal.remove());
    modal.querySelector('.modal-overlay').addEventListener('click', (e) => {
        if (e.target === modal.querySelector('.modal-overlay')) modal.remove();
    });
    
    applyBtn.addEventListener('click', () => {
        const selectedItem = modal.querySelector('.filter-item.selected');
        if (selectedItem) {
            applyFilter(type, selectedItem.dataset.value, selectedItem.textContent);
        }
        modal.remove();
    });
    
    items.forEach(item => {
        item.addEventListener('click', () => {
            items.forEach(i => i.classList.remove('selected'));
            item.classList.add('selected');
        });
    });
}

// Создание HTML модального окна фильтра
function createFilterModal(type) {
    const titles = {
        educationLevel: 'Уровень образования',
        direction: 'Направление',
        faculty: 'Факультет',
        ege: 'Предметы ЕГЭ'
    };
    
    const data = filterData[type + 's'] || [];
    
    let itemsHtml = '';
    data.forEach(item => {
        itemsHtml += `<div class="filter-item" data-value="${item}">${item}</div>`;
    });
    
    return `
    <div class="filter-modal">
        <div class="modal-overlay"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h3>${titles[type]}</h3>
                <button class="close-filter-modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="filter-items">
                    ${itemsHtml}
                </div>
            </div>
            <div class="modal-footer">
                <button class="apply-filter">Применить</button>
            </div>
        </div>
    </div>
    <style>
    .filter-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1000;
    }
    .modal-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
    }
    .modal-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: white;
        padding: 20px;
        border-radius: 12px;
        width: 400px;
        max-height: 500px;
        display: flex;
        flex-direction: column;
    }
    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }
    .modal-body {
        flex: 1;
        overflow-y: auto;
        margin-bottom: 20px;
    }
    .filter-items {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .filter-item {
        padding: 12px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s;
    }
    .filter-item:hover {
        background: #f5f5f5;
    }
    .filter-item.selected {
        background: #263145;
        color: white;
        border-color: #263145;
    }
    .modal-footer {
        display: flex;
        justify-content: flex-end;
    }
    .apply-filter {
        background: #263145;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        cursor: pointer;
        font-size: 16px;
    }
    .close-filter-modal {
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
        color: #263145;
    }
    </style>
    `;
}

// Применить фильтр
function applyFilter(type, value, displayText) {
    activeFilters[type] = value;
    
    // Обновляем отображение активного фильтра
    const activeFilterElement = document.querySelector('.view-9');
    if (activeFilterElement) {
        activeFilterElement.querySelector('.text-wrapper-46').textContent = displayText;
        
        // Показываем крестик для удаления
        const removeBtn = activeFilterElement.querySelector('.group-7');
        if (removeBtn) {
            removeBtn.style.display = 'flex';
        }
    }
    
    // Обновляем результаты
    renderPrograms();
    updateResultsCount();
}

// Удалить активный фильтр
function removeActiveFilter() {
    // Определяем какой фильтр активен и очищаем его
    for (const key in activeFilters) {
        if (activeFilters[key] && key !== 'search') {
            activeFilters[key] = '';
            break;
        }
    }
    
    // Сбрасываем отображение
    const activeFilterElement = document.querySelector('.view-9');
    if (activeFilterElement) {
        activeFilterElement.querySelector('.text-wrapper-46').textContent = 'Дизайн';
        
        // Скрываем крестик
        const removeBtn = activeFilterElement.querySelector('.group-7');
        if (removeBtn) {
            removeBtn.style.display = 'none';
        }
    }
    
    // Обновляем результаты
    renderPrograms();
    updateResultsCount();
}

// Выполнить поиск
function performSearch(searchText) {
    activeFilters.search = searchText.toLowerCase().trim();
    
    // Обновляем заголовок результатов
    const resultsHeader = document.querySelector('.text-wrapper-47');
    if (resultsHeader && searchText) {
        resultsHeader.textContent = `${searchText} - Найдено программ: ${getFilteredPrograms().length}`;
    }
    
    renderPrograms();
    updateResultsCount();
}

// Получить отфильтрованные программы
function getFilteredPrograms() {
    return programsData.filter(program => {
        // Поиск по тексту
        if (activeFilters.search) {
            const searchText = activeFilters.search.toLowerCase();
            const matchesSearch = 
                program.title.toLowerCase().includes(searchText) ||
                program.profile.toLowerCase().includes(searchText) ||
                program.faculty.toLowerCase().includes(searchText);
            if (!matchesSearch) return false;
        }
        
        // Фильтр по уровню образования
        if (activeFilters.educationLevel && program.level !== activeFilters.educationLevel) {
            return false;
        }
        
        // Фильтр по направлению (упрощённо)
        if (activeFilters.direction && !program.title.includes(activeFilters.direction.split(' - ')[1] || '')) {
            return false;
        }
        
        // Фильтр по факультету
        if (activeFilters.faculty && !program.faculty.includes(activeFilters.faculty)) {
            return false;
        }
        
        // Фильтр "Дизайн" (кастомный фильтр)
        if (activeFilters.custom === 'Дизайн' && !program.profile.toLowerCase().includes('дизайн')) {
            return false;
        }
        
        return true;
    });
}

// Отобразить программы
function renderPrograms() {
    const filteredPrograms = getFilteredPrograms();
    
    // Обновляем карточки программ
    const programCards = document.querySelectorAll('[class*="view-1"]');
    programCards.forEach((card, index) => {
        if (index < filteredPrograms.length) {
            const program = filteredPrograms[index];
            updateProgramCard(card, program);
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

// Обновить карточку программы
function updateProgramCard(card, program) {

    // Обновляем изображение
    const img = card.querySelector('.image-2');
    if (img) img.src = program.image;

    // Обновляем направление
    const titleElement = card.querySelector('.div-2 .text-wrapper-48');
    if (titleElement) titleElement.textContent = program.title;

    // Обновляем профиль
    const profileElement = card.querySelector('.div-3 .text-wrapper-48');
    if (profileElement) profileElement.textContent = program.profile;

    // Обновляем уровень образования
    const levelElement = card.querySelector('.heading-7');
    if (levelElement) levelElement.textContent = program.level;

    // Обновляем форму обучения
    const formElement = card.querySelector('.heading-8');
    if (formElement) formElement.textContent = program.form;

    // Обновляем бюджет/контракт
    const budgetElement = card.querySelector('.heading-9');
    if (budgetElement) budgetElement.textContent = program.budget;

    // Обновляем описание
    const descElement = card.querySelector('.text-wrapper-49');
    if (descElement) descElement.textContent = program.description;

    // ⭐ ОБНОВЛЯЕМ ФАКУЛЬТЕТ ЧЕРЕЗ <a> (надёжный способ)
    const facultyElement = card.querySelector('.text-wrapper-50');
if (facultyElement) {
    const facultyText = program.faculty || facultyElement.textContent.trim();

    facultyElement.outerHTML = `
        <a class="faculty-link"
           href="https://cchgeu.ru/education/inst/fag/"
           target="_blank"
           style="
               display:block;
               width:100%;
               position:relative;
               z-index:1000;
               cursor:pointer;
               text-decoration:underline;
               color:inherit;
           ">
            ${facultyText}
        </a>
    `;
}

    // Цвет уровня
    const levelBox = card.querySelector('.rectangle-20, .rectangle-16');
    if (levelBox) {
        levelBox.style.backgroundColor = '';

        if (program.level.includes('Бакалавриат')) {
            levelBox.style.backgroundColor =
                program.level.includes('(3++)') ? '#2846a8' : '#b97f6e';
        } else if (program.level.includes('Магистратура')) {
            levelBox.style.backgroundColor = '#6c5ce7';
        } else if (program.level.includes('Специалитет')) {
            levelBox.style.backgroundColor = '#00b894';
        } else if (program.level.includes('Аспирантура')) {
            levelBox.style.backgroundColor = '#e17055';
        } else {
            levelBox.style.backgroundColor = '#8a6eb9';
        }
    }

    // Цвет формы
    const formBox = card.querySelector('.rectangle-21, .rectangle-17');
    if (formBox) {
        formBox.style.backgroundColor =
            program.form === 'Очная' ? '#b23a3c' : '#577d5f';
    }

    // Цвет бюджета
    const budgetBox = card.querySelector('.rectangle-22, .rectangle-18');
    if (budgetBox) {
        budgetBox.style.backgroundColor =
            program.budget === 'Бюджет' ? '#b99f6e' : '#8a6eb9';
    }
}


// Обновить количество результатов
function updateResultsCount() {
    const filteredPrograms = getFilteredPrograms();
    const countElement = filterElements.resultsCount;
    
    if (countElement) {
        countElement.textContent = `Найдено программ: ${filteredPrograms.length}`;
    }
}

// CSS для фильтров (добавить в существующий style.css)
const filterCSS = `
/* Стили для активных фильтров */
.view-9 {
    position: relative;
    cursor: pointer;
}

.group-7 {
    position: absolute;
    top: 50%;
    right: 14px;
    transform: translateY(-50%);
    width: 14px;
    height: 14px;
    display: none;
    cursor: pointer;
}

.group-7:hover {
    opacity: 0.7;
}

/* Стили для карточек программ */
.view-10, .view-14, .view-15 {
    transition: all 0.3s ease;
}

/* Анимация появления/скрытия */
.view-10[style*="display: none"],
.view-14[style*="display: none"], 
.view-15[style*="display: none"] {
    opacity: 0;
    transform: translateY(20px);
}
`;

// Добавляем CSS в документ
const styleElement = document.createElement('style');
styleElement.textContent = filterCSS;
document.head.appendChild(styleElement);