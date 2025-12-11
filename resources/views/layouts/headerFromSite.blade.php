<!-- СПИЗЖЕНО С ВГТУ САЙТА, ЛИШНИЕ ЭЛЕМЕНТЫ УБРАНЫ НО ПОЛОВИНЫ НУЖНЫХ РЕСУРСОВ И ССЫЛОК ТОЖЕ НЕТ
  resources/views/partials/header.blade.php ЕСЛИ ВЫ ХОТИТЕ ЭТО ВСТАВИТЬ ЕГО НАДО ДОДЕЛАТЬ (ЧИТАЙТЕ README) 
  сейчас он просто есть -->
<header>
    <div class="header__top">
        <div class="container">
            <div class="h_w">
                <div class="wrapper">
                    <div class="header-mobile d-lg-none">
                        <div class="header-mobile_container text-left">
                            <button class="d-lg-none hamburger hamburger--squeeze" type="button" data-toggle-menu="">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                                <span class="hamburger-text d-none d-sm-inline-block"></span>
                            </button>
                        </div>
                    </div>

                    <div class="mobile-menu">
                        <div class="mobile-menu__container d-lg-none">
                            <div class="mobile-menu__nav">
                                <nav id="mobile-menu_no">
                                    <div class="search">
                                        <form action="/search/">
                                            <input type="text" value="" name="q" placeholder="Поиск по сайту">
                                            <button type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </form>
                                    </div>

                                    <a class="sveden-header-link" href="/sveden/">Сведения об образовательной организации</a>

                                    <div class="top-mobile">
                                        <ul>
                                            <li>
                                                <span><a href="/university/">Университет</a></span>
                                                <ul>
                                                    <li><a href="/university/istoriya/">История</a></li>
                                                    <li><a href="/university/structure/administration">Структура университета</a></li>
                                                    <li><a href="/university/popechitelskiy-sovet/">Попечительский совет</a></li>
                                                    <li><a href="/university/obshchestvennaya-zhizn">Общественная жизнь</a></li>
                                                    <li><a href="/university/materialno-tekhnicheskoe-obespechenie/">Материально-техническое обеспечение</a></li>
                                                    <li><a href="/university/mezhdunarodnaya-deyatelnost/">Международное сотрудничество</a></li>
                                                    <li><a href="/university/protivodeystvie-korruptsii/">Противодействие коррупции</a></li>
                                                    <li><a href="/university/protivodeystvie-terrorizmu/">Противодействие терроризму</a></li>
                                                    <li><a href="/university/otsenka-kachestva-obrazovaniya/">Оценка качества образования ВГТУ</a></li>
                                                    <li><a href="/university/ratings/">ВГТУ в рейтингах</a></li>
                                                    <li><a href="/university/events/">Мероприятия</a></li>
                                                    <li><a href="/university/konkursy-i-vybory/">Конкурсы и выборы</a></li>
                                                    <li><a href="/university/docs/">Документы</a></li>
                                                    <li><a href="/university/muzey-inzhenernogo-dela/">Музей инженерного дела</a></li>
                                                    <li><a href="/biznesu/endaument-fond/">Фонд целевого капитала (Эндаумент-фонд) ВГТУ</a></li>
                                                    <li><a href="/university/tk/">«Точка кипения ВГТУ»</a></li>
                                                    <li><a href="/university/tseli-ustoychivogo-razvitiya/">ВГТУ и Цели устойчивого развития</a></li>
                                                    <li><a href="/university/doroga-k-pobede/">Дорога к Победе</a></li>
                                                    <li><a href="/university/bessmertnyy-polk/">Бессмертный полк ВГТУ</a></li>
                                                    <li><a href="/university/firmennyy-stil/">Фирменный стиль</a></li>
                                                    <li><a href="/university/nauka-i-universitety/">Национальный проект «Наука и университеты»</a></li>
                                                    <li><a href="/university/strategiya-razvitiya-vgtu/">Стратегия развития ВГТУ</a></li>
                                                    <li><a href="/university/vgtu-dlya-fronta/">ВГТУ для фронта</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span><a href="/education/">Образование</a></span>
                                                <ul>
                                                    <li><a href="/education/inst/">Факультеты и кафедры</a></li>
                                                    <li class="is-active"><a href="/education/programms/">Образовательные программы</a></li>
                                                    <li><a href="https://bf.cchgeu.ru/">Филиал в г. Борисоглебске</a></li>
                                                    <li><a href="/education/military/">Военное обучение</a></li>
                                                    <li><a href="/education/sovet/">Учебно-методический совет</a></li>
                                                    <li><a href="/education/inclusive/">Инклюзивное обучение</a></li>
                                                    <li><a href="/education/sapr-i-bim/">Курсы САПР и BIM</a></li>
                                                    <li><a href="/education/dsdadpstupeni/">Детская студия довузовской архитектурно-дизайнерской подготовки «Ступени» </a></li>
                                                    <li><a href="/education/accred/">Руководителям образовательных программ</a></li>
                                                    <li><a href="https://dpo.cchgeu.ru/">Дополнительное профессиональное образование</a></li>
                                                    <li><a href="/university/structure/sovety/gumanitarnyy-sovet/">Гуманитарный совет</a></li>
                                                    <li><a href="/education/iot/">Индивидуальные образовательные траектории</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span><a href="/science/">Наука и инновации</a></span>
                                                <ul>
                                                    <li><a href="/university/struktura/unii/?window">Единое окно оформления научной документации</a></li>
                                                    <li><a href="/university/struktura/unii/">Управление науки и инноваций</a></li>
                                                    <li><a href="/science/podgotovka-kadrov-vysshey-kvalifikatsii/">Подготовка кадров высшей квалификации</a></li>
                                                    <li><a href="/science/dissertatsionnye-sovety/">Диссертационные советы</a></li>
                                                    <li><a href="/science/nauchnye-izdaniya/">Научные издания</a></li>
                                                    <li><a href="/university/struktura/niipi/">Академия развития строительного комплекса</a></li>
                                                    <li><a href="/science/info/">Конкурсы, гранты, конференции</a></li>
                                                    <li><a href="/science/innovatsionnaya-deyatelnost/">Инновационная деятельность</a></li>
                                                    <li><a href="/science/laboratorii-i-tsentry/">Лаборатории и центры</a></li>
                                                    <li><a href="/university/library/">Научная библиотека</a></li>
                                                    <li><a href="/university/struktura/tspa/">Центр публикационной активности</a></li>
                                                    <li><a href="/science/katalog-nauchnogo-oborudovaniya/">Каталог научного оборудования</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/partners/">Партнёры</a></li>
                                            <li>
                                                <span><a href="/contacts/">Контакты</a></span>
                                                <ul>
                                                    <li><a href="/contacts/index.php">Контакты</a></li>
                                                    <li><a href="/contacts/phones/">Телефонный справочник</a></li>
                                                    <li><a href="/contacts/bankovskie-rekvizity.php">Банковские реквизиты</a></li>
                                                    <li><a href="/contacts/karta-korpusov/">Расположение корпусов</a></li>
                                                    <li><a href="/contacts/grafik-prorektorov/">График работы ректората в учебных корпусах</a></li>
                                                    <li><a href="/contacts/vopros-otvet/">Часто задаваемые вопросы</a></li>
                                                    <li><a href="/press/polls/">Анкеты и опросы</a></li>
                                                    <li><a href="/contacts/obrashchenie/">Прием обращений граждан</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bot-mobile">
                                        <ul>
                                            <li><a href="https://abiturient.cchgeu.ru/">Абитуриенту</a></li>
                                            <li>
                                                <span><a href="/studentu/">Студенту</a></span>
                                                <ul>
                                                    <li><a href="/studentu/schedule/">Расписание занятий</a></li>
                                                    <li><a href="/education/inst/">Факультеты и кафедры</a></li>
                                                    <li><a href="/studentu/nayti-kontakty-prepodavatelya/">Найти контакты преподавателя</a></li>
                                                    <li><a href="/studentu/spravka/">Заказ справки об обучении</a></li>
                                                    <li><a href="/studentu/obshchestvennaya-zhizn/">Общественная жизнь</a></li>
                                                    <li><a href="/university/library/">Научная библиотека</a></li>
                                                    <li><a href="https://old.education.cchgeu.ru/">Образовательный портал ВГТУ</a></li>
                                                    <li><a href="/studentu/trudoustroystvo/">Трудоустройство</a></li>
                                                    <li><a href="/studentu/praktika/">Практика</a></li>
                                                    <li><a href="/science/podgotovka-kadrov-vysshey-kvalifikatsii/">Подготовка кадров высшей квалификации</a></li>
                                                    <li><a href="/science/info/">Конкурсы, гранты, конференции</a></li>
                                                    <li><a href="/studentu/stud-proekti/">Каталог студенческих проектов</a></li>
                                                    <li><a href="/studentu/stipendii/">Стипендии и иные виды материальной поддержки</a></li>
                                                    <li><a href="/studentu/potanin/">Стипендиальная программа Владимира Потанина</a></li>
                                                    <li><a href="/studentu/oplata-stoimosti-mat-kapital/">Оплата стоимости обучения за счет средств материнского (семейного) капитала</a></li>
                                                    <li><a href="/studentu/profilaktika-zabolevaniy/">Профилактика заболеваний</a></li>
                                                    <li><a href="/university/tk/">«Точка кипения ВГТУ»</a></li>
                                                    <li><a href="/press/polls/">Анкеты и опросы</a></li>
                                                    <li><a href="/studentu/sektsii/">Спортивные секции ВГТУ</a></li>
                                                    <li><a href="/studentu/onlayn-raspisanie/">Онлайн- расписание</a></li>
                                                </ul>
                                            </li>
                                            <li><span><a href="/vypuskniku/">Выпускнику</a></span>
                                                <ul>
                                                    <li><a href="/studentu/employ/">Трудоустройство и практика</a></li>
                                                    <li><a href="/vypuskniku/vypusknik-goda-2022/">Выпускник года 2022</a></li>
                                                    <li><a href="/vypuskniku/vypusknikgoda2021/">Выпускник года 2021</a></li>
                                                    <li><a href="/vypuskniku/prepodavatel-goda-2020/">Преподаватель года 2020</a></li>
                                                    <li><a href="/vypuskniku/vypusknikgoda2020/">Выпускник года 2020</a></li>
                                                </ul>
                                            </li>
                                            <li><span><a href="/biznesu/">Бизнесу</a></span>
                                                <ul>
                                                    <li><a href="/university/popechitelskiy-sovet/">Попечительский совет ВГТУ</a></li>
                                                    <li><a href="/biznesu/endaument-fond/">Фонд целевого капитала (Эндаумент-фонд) ВГТУ</a></li>
                                                    <li><a href="https://ezc.cchgeu.ru/">Экологическое строительство и устойчивое развитие</a></li>
                                                </ul>
                                            </li>
                                            <li><span><a href="/press/">Пресс-центр</a></span>
                                                <ul>
                                                    <li><a href="/press/news/official/">Новости</a></li>
                                                    <li><a href="/press/news/ad/">Объявления</a></li>
                                                    <li><a href="/press/news/digest/">СМИ о нас</a></li>
                                                    <li><a href="/press/news/interview/">Выступления, доклады, интервью</a></li>
                                                    <li><a href="/press/events/">Календарь мероприятий</a></li>
                                                    <li><a href="/press/papers/">Корпоративные издания</a></li>
                                                    <li><a href="/press/photo/">Фото</a></li>
                                                    <li><a href="/press/video/">Видео</a></li>
                                                    <li><a href="/press/polls/">Анкеты и опросы</a></li>
                                                    <li><a href="/press/kontakty-dlya-smi/">Контакты для СМИ</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="inner">
                    <div class="social-box">
                        <ul>
                            <li>
                                <div class="icon">
                                    <a href="https://vk.com/politexvoronezh" target="_blank"> <i class="fab fa-vk"></i> </a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <a href="https://t.me/VSTU_today" target="_blank"> <i class="fab fa-telegram-plane"></i> </a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <a href="https://ok.ru/group/70000001822103" target="_blank"> <i class="fa-brands fa-odnoklassniki"></i> </a>
                                </div>
                            </li>
                            <li class="special-hide-element">
                                <div class="icon">
                                    <a href="https://rutube.ru/channel/30979119/" target="_blank"> <img src="/local/img/icons/rutube-icon-gold.svg" style="width: 16px;"> </a>
                                </div>
                            </li>
                            <li class="special-hide-element">
                                <div class="icon">
                                    <a href="https://s.cchgeu.ru/zen" target="_blank"> <img src="/local/img/icons/zen-icon-gold.svg?1" style="width: 16px;"> </a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <a href="https://cchgeu.ru/press/news/rss/" target="_blank"> <i class="fas fa-rss"></i> </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="top-right">
                        <div class="search">
                            <form action="/search/">
                                <input type="text" value="" name="q" placeholder="Поиск по сайту">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                            <button class="cap">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <div class="eye">
                            <a class="special" style="background: url(/local/templates/vstu/img/header-eye.svg) no-repeat right center;" href="#special" itemprop="copy"><span>Версия для слабовидящих</span></a>
                        </div>
                        <div class="lang">
                            <div class="lang-active"><a href="/" class="ru active">
                                RU
                                <div class="flag" style="background: url(/local/templates/vstu/img/flag/ru.png) center no-repeat; background-size: cover;"></div>
                            </a></div>
                            <div class="lang-drop"> 
                                <a href="/en/" class="en">
                                    EN
                                    <div class="flag" style="background: url(/local/templates/vstu/img/flag/en.png) center no-repeat; background-size: cover;"></div>
                                </a>
                                <a href="/de/" class="de">
                                    DE
                                    <div class="flag" style="background: url(/local/templates/vstu/img/flag/de.png) center no-repeat; background-size: cover;"></div>
                                </a>
                                <a href="/fr/" class="fr">
                                    FR
                                    <div class="flag" style="background: url(/local/templates/vstu/img/flag/fr.png) center no-repeat; background-size: cover;"></div>
                                </a>
                                <a href="/cn/" class="cn">
                                    CN
                                    <div class="flag" style="background: url(/local/templates/vstu/img/flag/cn.png) center no-repeat; background-size: cover;"></div>
                                </a>
                                <a href="/ar/" class="ar">
                                    AR
                                    <div class="flag" style="background: url(/local/templates/vstu/img/flag/ar.png) center no-repeat; background-size: cover;"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="top-line-menu">
            <div class="container">
                <div class="topmenu">
                    <div class="menu-line"></div>
                    <div class="item">
                        <a href="/university/">Университет</a>
                        <div class="customer" style="display: none;"> 
                            <ul>
                                <li><a href="/university/istoriya/">История</a></li>
                                <li><a href="/university/structure/administration">Структура университета</a></li>
                                <li><a href="/university/popechitelskiy-sovet/">Попечительский совет</a></li>
                                <li><a href="/university/obshchestvennaya-zhizn">Общественная жизнь</a></li>
                                <li><a href="/university/materialno-tekhnicheskoe-obespechenie/">Материально-техническое обеспечение</a></li>
                                <li><a href="/university/mezhdunarodnaya-deyatelnost/">Международное сотрудничество</a></li>
                                <li><a href="/university/protivodeystvie-korruptsii/">Противодействие коррупции</a></li>
                                <li><a href="/university/protivodeystvie-terrorizmu/">Противодействие терроризму</a></li>
                                <li><a href="/university/otsenka-kachestva-obrazovaniya/">Оценка качества образования ВГТУ</a></li>
                                <li><a href="/university/ratings/">ВГТУ в рейтингах</a></li>
                                <li><a href="/university/events/">Мероприятия</a></li>
                                <li><a href="/university/konkursy-i-vybory/">Конкурсы и выборы</a></li>
                                <li><a href="/university/docs/">Документы</a></li>
                                <li><a href="/university/muzey-inzhenernogo-dela/">Музей инженерного дела</a></li>
                                <li><a href="/biznesu/endaument-fond/">Фонд целевого капитала (Эндаумент-фонд) ВГТУ</a></li>
                                <li><a href="/university/tk/">«Точка кипения ВГТУ»</a></li>
                                <li><a href="/university/tseli-ustoychivogo-razvitiya/">ВГТУ и Цели устойчивого развития</a></li>
                                <li><a href="/university/doroga-k-pobede/">Дорога к Победе</a></li>
                                <li><a href="/university/bessmertnyy-polk/">Бессмертный полк ВГТУ</a></li>
                                <li><a href="/university/firmennyy-stil/">Фирменный стиль</a></li>
                                <li><a href="/university/nauka-i-universitety/">Национальный проект «Наука и университеты»</a></li>
                                <li><a href="/university/strategiya-razvitiya-vgtu/">Стратегия развития ВГТУ</a></li>
                                <li><a href="/university/vgtu-dlya-fronta/">ВГТУ для фронта</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="menu-line"></div>
                    <div class="item">
                        <a href="/education/">Образование</a>
                        <div class="customer" style="display: none;"> 
                            <ul>
                                <li><a href="/education/inst/">Факультеты и кафедры</a></li>
                                <li class="active"><a href="/education/programms/">Образовательные программы</a></li>
                                <li><a href="https://bf.cchgeu.ru/">Филиал в г. Борисоглебске</a></li>
                                <li><a href="/education/military/">Военное обучение</a></li>
                                <li><a href="/education/sovet/">Учебно-методический совет</a></li>
                                <li><a href="/education/inclusive/">Инклюзивное обучение</a></li>
                                <li><a href="/education/sapr-i-bim/">Курсы САПР и BIM</a></li>
                                <li><a href="/education/dsdadpstupeni/">Детская студия довузовской архитектурно-дизайнерской подготовки «Ступени» </a></li>
                                <li><a href="/education/accred/">Руководителям образовательных программ</a></li>
                                <li><a href="https://dpo.cchgeu.ru/">Дополнительное профессиональное образование</a></li>
                                <li><a href="/university/structure/sovety/gumanitarnyy-sovet/">Гуманитарный совет</a></li>
                                <li><a href="/education/iot/">Индивидуальные образовательные траектории</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="menu-line"></div>
                    <div class="item">
                        <a href="/science/">Наука и инновации</a>
                        <div class="customer" style="display: none;"> 
                            <ul>
                                <li><a href="/university/struktura/unii/?window">Единое окно оформления научной документации</a></li>
                                <li><a href="/university/struktura/unii/">Управление науки и инноваций</a></li>
                                <li><a href="/science/podgotovka-kadrov-vysshey-kvalifikatsii/">Подготовка кадров высшей квалификации</a></li>
                                <li><a href="/science/dissertatsionnye-sovety/">Диссертационные советы</a></li>
                                <li><a href="/science/nauchnye-izdaniya/">Научные издания</a></li>
                                <li><a href="/university/struktura/niipi/">Академия развития строительного комплекса</a></li>
                                <li><a href="/science/info/">Конкурсы, гранты, конференции</a></li>
                                <li><a href="/science/innovatsionnaya-deyatelnost/">Инновационная деятельность</a></li>
                                <li><a href="/science/laboratorii-i-tsentry/">Лаборатории и центры</a></li>
                                <li><a href="/university/library/">Научная библиотека</a></li>
                                <li><a href="/university/struktura/tspa/">Центр публикационной активности</a></li>
                                <li><a href="/science/katalog-nauchnogo-oborudovaniya/">Каталог научного оборудования</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="menu-line"></div>
                    <div class="item">
                        <a href="/partners/">Партнёры</a>
                    </div>

                    <div class="menu-line"></div>
                    <div class="item">
                        <a href="/contacts/">Контакты</a>
                        <div class="customer" style="display: none;"> 
                            <ul>
                                <li><a href="/contacts/index.php">Контакты</a></li>
                                <li><a href="/contacts/phones/">Телефонный справочник</a></li>
                                <li><a href="/contacts/bankovskie-rekvizity.php">Банковские реквизиты</a></li>
                                <li><a href="/contacts/karta-korpusov/">Расположение корпусов</a></li>
                                <li><a href="/contacts/grafik-prorektorov/">График работы ректората в учебных корпусах</a></li>
                                <li><a href="/contacts/vopros-otvet/">Часто задаваемые вопросы</a></li>
                                <li><a href="/press/polls/">Анкеты и опросы</a></li>
                                <li><a href="/contacts/obrashchenie/">Прием обращений граждан</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="menu-line"></div>
                </div>
            </div>
        </div>  
    </header>

