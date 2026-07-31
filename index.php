<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Первая помощь: практический курс для каждого</title>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m,e,t,r,i,k,a){
            m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
        })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=110922170', 'ym');

        (function() {
            var storageKey = 'naition_ym_internal';
            var internalTraffic = false;
            var url = new URL(window.location.href);
            var internalMode = url.searchParams.get('ym_internal');

            try {
                if (internalMode === '1') {
                    window.localStorage.setItem(storageKey, '1');
                } else if (internalMode === '0') {
                    window.localStorage.removeItem(storageKey);
                }

                internalTraffic = window.localStorage.getItem(storageKey) === '1';
            } catch (error) {
                internalTraffic = internalMode === '1';
            }

            if (internalMode !== null) {
                url.searchParams.delete('ym_internal');
                window.history.replaceState({}, document.title, url.pathname + url.search + url.hash);
            }

            var options = {
                ssr: true,
                webvisor: true,
                clickmap: true,
                referrer: document.referrer,
                url: window.location.href,
                accurateTrackBounce: true,
                trackLinks: true
            };

            if (internalTraffic) {
                options.params = { traffic_type: 'internal_test' };
            }

            window.ym(110922170, 'init', options);
        })();
    </script>
    <!-- /Yandex.Metrika counter -->
    <link rel="stylesheet" href="css/style.css">
    <script src="api/visit.php" defer></script>
    <script src="js/main.js" defer></script>
</head>
<body>
    <noscript><div><img src="https://mc.yandex.ru/watch/110922170" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <header class="hero">
        <div class="container hero-content">
            <span class="hero-badge">Офлайн-курс · 15 августа 2026</span>
            <h1>Научитесь оказывать первую помощь за один день</h1>
            <p class="hero-text">
                Отработайте СЛР, остановку кровотечения и помощь при травмах на манекенах
                под руководством практикующих инструкторов. Офлайн в Москве, от 4 900 ₽.
            </p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="#registration-form" data-cta-location="hero">
                    Записаться на 15 августа
                </a>
                <a class="btn btn-secondary" href="#pricing" data-pricing-link data-cta-location="hero">
                    Посмотреть тарифы
                </a>
            </div>
            <p class="hero-assurance">Группа до 14 человек · Сертификат и памятка включены</p>
            <div class="meta-grid">
                <div class="meta-card">
                    <strong>Дата</strong>
                    15 августа 2026, суббота
                </div>
                <div class="meta-card">
                    <strong>Время</strong>
                    10:00 – 18:00, перерыв на обед
                </div>
                <div class="meta-card">
                    <strong>Место</strong>
                    Москва, ул. Примерная, 10, учебный центр «Спаси-Себя»
                </div>
            </div>
            <div class="hero-note">
                Не лекция «для галочки»: больше половины дня занимает практика. Вы несколько раз
                пройдёте полный алгоритм помощи и получите обратную связь инструктора.
            </div>
        </div>
    </header>

    <main>
        <section class="section pricing-section" id="pricing" data-track-section="pricing">
            <div class="container">
                <h2 class="section-title">Выберите формат участия</h2>
                <p class="section-lead">
                    Во все тарифы входят полный день обучения, сертификат и памятка по алгоритмам первой помощи.
                </p>
                <div class="pricing-grid">
                    <article class="pricing-card featured">
                        <span class="pricing-badge">Рекомендуем</span>
                        <h3>Базовый</h3>
                        <p class="tariff-for">Чтобы освоить ключевые навыки</p>
                        <div class="price">4 900 ₽</div>
                        <ul class="pricing-list">
                            <li>Участие в полном однодневном курсе</li>
                            <li>Сертификат и памятка</li>
                            <li>Кофе-брейки</li>
                        </ul>
                        <button type="button" class="btn btn-register" data-tariff="basic" data-cta-location="pricing">Выбрать Базовый</button>
                    </article>
                    <article class="pricing-card">
                        <span class="pricing-badge pricing-badge-muted">Больше практики</span>
                        <h3>Расширенный</h3>
                        <p class="tariff-for">Чтобы увереннее закрепить навыки</p>
                        <div class="price">7 900 ₽</div>
                        <ul class="pricing-list">
                            <li>Всё из базового тарифа</li>
                            <li>Набор перевязочных материалов</li>
                            <li>Дополнительный практический блок</li>
                        </ul>
                        <button type="button" class="btn btn-register" data-tariff="extended" data-cta-location="pricing">Выбрать Расширенный</button>
                    </article>
                    <article class="pricing-card">
                        <h3>Корпоративный</h3>
                        <p class="tariff-for">Для сотрудников и руководителей</p>
                        <div class="price">12 900 ₽</div>
                        <ul class="pricing-list">
                            <li>Индивидуальный разбор рисков профессии</li>
                            <li>Консультация для HR или руководителя</li>
                            <li>Отчёт о прохождении для работодателя</li>
                        </ul>
                        <button type="button" class="btn btn-register" data-tariff="corporate" data-cta-location="pricing">Обсудить обучение</button>
                    </article>
                </div>
            </div>
        </section>

        <section class="section registration-section" id="registration" data-track-section="registration">
            <div class="container">
                <div class="registration-panel">
                    <p class="registration-kicker">Остался один шаг · без оплаты на сайте</p>
                    <h2 class="section-title">Забронируйте место за 30 секунд</h2>
                    <p class="section-lead registration-lead">
                        Начните с имени и телефона. Мы подтвердим наличие места, поможем с тарифом
                        и ответим на вопросы до оплаты.
                    </p>
                    <div class="selection-summary" id="selection-summary" aria-live="polite">
                        <span>Запись без выбранного тарифа</span>
                        <strong>Поможем выбрать при звонке</strong>
                    </div>
                    <form class="form-grid" id="registration-form" action="api/submit.php" method="post">
                        <input type="hidden" name="bot_session_id" value="">
                        <input type="hidden" name="tariff" id="selected-tariff" value="direct">
                        <div class="contact-fields">
                            <label>
                                Имя
                                <input
                                    type="text"
                                    name="name"
                                    class="ym-disable-keys"
                                    required
                                    autocomplete="name"
                                    placeholder="Как к вам обращаться"
                                >
                            </label>
                            <label>
                                Телефон
                                <input
                                    type="tel"
                                    name="phone"
                                    class="ym-disable-keys"
                                    required
                                    autocomplete="tel"
                                    inputmode="tel"
                                    placeholder="+7 999 000-00-00"
                                >
                            </label>
                        </div>
                        <label>
                            E-mail
                            <input
                                type="email"
                                name="email"
                                class="ym-disable-keys"
                                required
                                autocomplete="email"
                                inputmode="email"
                                placeholder="Для подтверждения и материалов"
                            >
                        </label>
                        <div class="form-field">
                            <label for="purpose">Цель прохождения курса</label>
                            <span class="field-hint">Выберите готовый вариант или напишите свой.</span>
                            <div class="purpose-options" aria-label="Готовые варианты цели">
                                <button type="button" class="purpose-chip" data-purpose="Хочу уверенно помогать семье и близким">Для семьи</button>
                                <button type="button" class="purpose-chip" data-purpose="Курс нужен для безопасной работы">Для работы</button>
                                <button type="button" class="purpose-chip" data-purpose="Хочу быть готовым к экстренным ситуациям в поездках">Для поездок</button>
                            </div>
                            <textarea
                                id="purpose"
                                name="purpose"
                                class="ym-disable-keys"
                                required
                                placeholder="Коротко напишите, для чего вам курс"
                            ></textarea>
                        </div>
                        <button type="submit" class="btn submit-button">Отправить заявку</button>
                        <p class="form-assurance">Контакты нужны только для подтверждения записи на курс.</p>
                    </form>
                    <ul class="registration-assurances" aria-label="Условия заявки">
                        <li>Заявка ни к чему не обязывает</li>
                        <li>Оплата после подтверждения</li>
                        <li>Контакты не передаём третьим лицам</li>
                    </ul>
                    <p class="form-message" id="form-message" aria-live="polite"></p>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2 class="section-title">О курсе</h2>
                <p class="section-lead">
                    Это не лекция «для галочки», а полноценный практический день, где каждый блок
                    заканчивается отработкой навыков под контролем инструктора.
                </p>
                <div class="features-grid">
                    <article class="feature-card">
                        <h3>8 часов практики</h3>
                        <p>Больше половины времени посвящено тренировкам на манекенах, имитации травм и работе в парах.</p>
                    </article>
                    <article class="feature-card">
                        <h3>Формат offline</h3>
                        <p>Живое общение, мгновенная обратная связь и возможность задать вопросы по вашим реальным ситуациям.</p>
                    </article>
                    <article class="feature-card">
                        <h3>Сертификат</h3>
                        <p>После курса вы получите именной сертификат и чек-лист действий для дома, работы и поездок.</p>
                    </article>
                    <article class="feature-card">
                        <h3>Малые группы</h3>
                        <p>До 14 человек в группе, чтобы каждый успел отработать все ключевые навыки несколько раз.</p>
                    </article>
                </div>
                <div class="inline-cta">
                    <div>
                        <strong>Готовы научиться действовать без паники?</strong>
                        <span>Оставьте заявку — подтвердим место и ответим на вопросы.</span>
                    </div>
                    <a class="btn" href="#pricing" data-pricing-link data-cta-location="benefits">
                        Записаться на курс
                    </a>
                </div>
            </div>
        </section>

        <section class="section" data-track-section="program">
            <div class="container">
                <h2 class="section-title">Программа курса</h2>
                <p class="section-lead program-intro">
                    Программа выстроена от базовой оценки ситуации до сложных сценариев с несколькими
                    пострадавшими. Мы подробно разбираем алгоритмы, типичные ошибки и то, как
                    действовать, когда рядом нет медикаментов и оборудования. Каждый модуль включает
                    теорию, демонстрацию инструктора и практику участников.
                </p>
                <div class="program-list">
                    <details class="program-module" open>
                        <summary>
                            <span>10:00 – 11:00</span>
                            <strong>Оценка обстановки и безопасность</strong>
                        </summary>
                        <p>
                            Проверка безопасности, сознания и дыхания, вызов скорой и первые действия
                            без риска для помощника. Отработка полного алгоритма в парах.
                        </p>
                    </details>
                    <details class="program-module">
                        <summary>
                            <span>11:00 – 12:30</span>
                            <strong>Сердечно-лёгочная реанимация</strong>
                        </summary>
                        <p>
                            Компрессии грудной клетки, работа в паре и применение тренировочного AED.
                            Каждый участник несколько раз проходит полный сценарий СЛР на манекене.
                        </p>
                    </details>
                    <details class="program-module">
                        <summary>
                            <span>12:30 – 13:30</span>
                            <strong>Обед и разбор реальных кейсов</strong>
                        </summary>
                        <p>
                            Обсуждение типичных ошибок, страхов и решений, которые помогают не замереть
                            в экстренной ситуации. Время для вопросов инструкторам.
                        </p>
                    </details>
                    <details class="program-module">
                        <summary>
                            <span>13:30 – 15:00</span>
                            <strong>Кровотечения и шок</strong>
                        </summary>
                        <p>
                            Давящая повязка, турникет, признаки шока и контроль состояния до приезда
                            медиков. Практика с имитаторами ран.
                        </p>
                    </details>
                    <details class="program-module">
                        <summary>
                            <span>15:00 – 16:30</span>
                            <strong>Переломы, вывихи и ожоги</strong>
                        </summary>
                        <p>
                            Иммобилизация подручными средствами, безопасное перемещение и правильное
                            охлаждение ожогов без распространённых опасных ошибок.
                        </p>
                    </details>
                    <details class="program-module">
                        <summary>
                            <span>16:30 – 18:00</span>
                            <strong>Итоговая практика и сертификат</strong>
                        </summary>
                        <p>
                            Сценарии с несколькими пострадавшими, ограниченным временем и индивидуальной
                            обратной связью. В завершение — сертификат и памятка.
                        </p>
                    </details>
                </div>
                <div class="inline-cta inline-cta-soft">
                    <div>
                        <strong>Все модули включают практику</strong>
                        <span>Забронируйте место, пока выбираете подходящий тариф.</span>
                    </div>
                    <button
                        type="button"
                        class="btn btn-register"
                        data-open-registration
                        data-tariff="direct"
                        data-cta-location="program"
                    >
                        Забронировать место
                    </button>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2 class="section-title">Виды травм и состояний</h2>
                <p class="section-lead">
                    На курсе мы разбираем самые частые состояния, с которыми сталкиваются очевидцы
                    в городе, дома, на работе и в путешествиях.
                </p>
                <div class="injury-grid">
                    <article class="injury-card">
                        <h3>Кровотечения</h3>
                        <p>Артериальные, венозные и капиллярные кровотечения, давящая повязка, турникет, контроль после остановки крови.</p>
                    </article>
                    <article class="injury-card">
                        <h3>Переломы и вывихи</h3>
                        <p>Признаки перелома, иммобилизация, транспортная шина, ошибки при перемещении пострадавшего.</p>
                    </article>
                    <article class="injury-card">
                        <h3>Ожоги</h3>
                        <p>Термические и химические ожоги, охлаждение, стерильная повязка, когда нельзя снимать одежду с места ожога.</p>
                    </article>
                    <article class="injury-card">
                        <h3>Обмороки и шок</h3>
                        <p>Признаки шока, положение тела, контроль дыхания, согревание, что нельзя давать пострадавшему.</p>
                    </article>
                    <article class="injury-card">
                        <h3>Остановка дыхания</h3>
                        <p>СЛР, работа в паре, использование автоматического дефibrиллятора, действия до приезда скорой.</p>
                    </article>
                    <article class="injury-card">
                        <h3>Травмы головы и позвоночника</h3>
                        <p>Подозрение на травму шеи и спины, когда нельзя менять положение, фиксация головы и ожидание медиков.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="section legal-section">
            <div class="container">
                <h2 class="section-title">Юридические аспекты</h2>
                <p class="section-lead">
                    Многие люди боятся помогать из-за страха юридической ответственности. На курсе
                    мы отдельно разбираем, что говорит закон и как действовать правильно.
                </p>
                <div class="legal-block">
                    <h3>Добросовестный помощник</h3>
                    <p>
                        В России действует принцип добросовестного помощника: если вы помогаете пострадавшему
                        в разумных пределах своих возможностей и без грубой неосторожности, закон защищает
                        вас от необоснованных претензий.
                    </p>
                </div>
                <div class="legal-block">
                    <h3>Границы ответственности</h3>
                    <p>
                        Мы разбираем, какие действия считаются разумными, когда нужно дождаться медиков,
                        и как фиксировать обстоятельства происшествия, если вы оказались свидетелем или участником помощи.
                    </p>
                </div>
                <div class="legal-block">
                    <h3>Документирование и вызов служб</h3>
                    <p>
                        Как правильно передать информацию диспетчеру, что сообщить медикам по прибытии и
                        какие данные важно сохранить для дальнейшего разбирательства или страхового случая.
                    </p>
                </div>
                <p class="content-cta-row">
                    <a class="btn" href="#registration-form">Перейти к записи</a>
                </p>
            </div>
        </section>

        <section class="emotional-photo">
            <img src="images/cpr-training.jpg" alt="Практика сердечно-легочной реанимации на манекене">
        </section>

        <section class="section">
            <div class="container">
                <h2 class="section-title">Инструкторы</h2>
                <p class="section-lead">
                    Курс ведут специалисты с многолетним опытом работы в экстренной медицине и обучения.
                </p>
                <div class="instructors-grid">
                    <article class="instructor-card">
                        <div class="instructor-photo">АК</div>
                        <h3>Алексей Кравцов</h3>
                        <p class="instructor-title">Врач скорой медицинской помощи, стаж 14 лет</p>
                        <ul class="credentials">
                            <li>Более 8 000 выездов бригады скорой помощи</li>
                            <li>Сертификат European Resuscitation Council BLS</li>
                            <li>Автор программы «Первая помощь дома и на работе»</li>
                        </ul>
                    </article>
                    <article class="instructor-card">
                        <div class="instructor-photo">МС</div>
                        <h3>Марина Соколова</h3>
                        <p class="instructor-title">Инструктор РКК, фельдшер, стаж 11 лет</p>
                        <ul class="credentials">
                            <li>Обучила более 1 200 слушателей базовой первой помощи</li>
                            <li>Член региональной команды инструкторов РКК</li>
                            <li>Специализация: помощь детям и подросткам</li>
                        </ul>
                    </article>
                    <article class="instructor-card">
                        <div class="instructor-photo">ДН</div>
                        <h3>Дмитрий Новиков</h3>
                        <p class="instructor-title">Парамедик, наставник учебного центра</p>
                        <ul class="credentials">
                            <li>Сертификат ERC First Aid Provider</li>
                            <li>Опыт работы в корпоративных программах безопасности</li>
                            <li>Ведёт практические блоки по кровотечениям и травмам</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section class="section final-cta">
            <div class="container final-cta-content">
                <div>
                    <p class="registration-kicker">15 августа · Москва · один практический день</p>
                    <h2>Будьте человеком, который знает, что делать</h2>
                    <p>Оставьте заявку сейчас — мы подтвердим место и поможем выбрать тариф.</p>
                </div>
                <button
                    type="button"
                    class="btn btn-primary btn-register"
                    data-open-registration
                    data-tariff="direct"
                    data-cta-location="final"
                >
                    Забронировать место
                </button>
            </div>
        </section>
    </main>

    <button
        type="button"
        class="mobile-sticky-cta btn-register is-hidden"
        data-open-registration
        data-tariff="direct"
        data-cta-location="mobile-sticky"
    >
        Записаться на курс
    </button>

    <footer class="site-footer">
        <div class="container">
            © 2026 Учебный центр «Спаси-Себя». Курс первой помощи, Москва.
        </div>
    </footer>

</body>
</html>
