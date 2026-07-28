document.addEventListener('DOMContentLoaded', () => {
    const registrationSection = document.getElementById('registration');
    const form = document.getElementById('registration-form');
    const message = document.getElementById('form-message');
    const selectionSummary = document.getElementById('selection-summary');
    const tariffInput = document.getElementById('selected-tariff');
    const registrationButtons = document.querySelectorAll('.btn-register, [data-open-registration]');
    const pricingLinks = document.querySelectorAll('[data-pricing-link]');
    const purposeChips = document.querySelectorAll('.purpose-chip');
    const mobileStickyButton = document.querySelector('.mobile-sticky-cta');
    const trackedFields = new Set();

    const tariffs = {
        direct: {
            label: 'Запись без выбранного тарифа',
            detail: 'Поможем выбрать при звонке',
            button: 'Отправить заявку',
        },
        basic: {
            label: 'Вы выбрали тариф «Базовый»',
            detail: '4 900 ₽',
            button: 'Записаться на Базовый',
        },
        extended: {
            label: 'Вы выбрали тариф «Расширенный»',
            detail: '7 900 ₽',
            button: 'Записаться на Расширенный',
        },
        corporate: {
            label: 'Вы выбрали тариф «Корпоративный»',
            detail: '12 900 ₽',
            button: 'Обсудить корпоративное обучение',
        },
    };

    let selectedTariff = 'direct';
    let formStarted = false;

    const reachMetrikaGoal = (goal, params = {}) => {
        if (typeof window.ym === 'function') {
            window.ym(110922170, 'reachGoal', goal, params);
        }
    };

    const setSelectedTariff = (tariffKey) => {
        selectedTariff = Object.hasOwn(tariffs, tariffKey) ? tariffKey : 'direct';
        const tariff = tariffs[selectedTariff];

        if (tariffInput instanceof HTMLInputElement) {
            tariffInput.value = selectedTariff;
        }

        if (selectionSummary) {
            const label = selectionSummary.querySelector('span');
            const detail = selectionSummary.querySelector('strong');

            if (label) {
                label.textContent = tariff.label;
            }

            if (detail) {
                detail.textContent = tariff.detail;
            }
        }

        if (form) {
            const submitButton = form.querySelector('button[type="submit"]');

            if (submitButton instanceof HTMLButtonElement && !submitButton.disabled) {
                submitButton.textContent = tariff.button;
            }
        }

        registrationButtons.forEach((button) => {
            const card = button.closest('.pricing-card');

            if (card) {
                card.classList.toggle('is-selected', button.dataset.tariff === selectedTariff);
            }
        });
    };

    const openRegistration = (button) => {
        const tariff = button.dataset.tariff || 'direct';
        const location = button.dataset.ctaLocation || 'pricing';

        setSelectedTariff(tariff);
        reachMetrikaGoal('ym-open-leadform', {
            tariff: selectedTariff,
            location,
        });

        if (registrationSection) {
            registrationSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    };

    registrationButtons.forEach((button) => {
        button.addEventListener('click', () => {
            openRegistration(button);
        });
    });

    pricingLinks.forEach((link) => {
        link.addEventListener('click', () => {
            reachMetrikaGoal('ym-pricing-open', {
                location: link.dataset.ctaLocation || 'unknown',
            });
        });
    });

    purposeChips.forEach((chip) => {
        chip.addEventListener('click', () => {
            if (!form) {
                return;
            }

            const purpose = form.elements.namedItem('purpose');

            if (!(purpose instanceof HTMLTextAreaElement)) {
                return;
            }

            purpose.value = chip.dataset.purpose || '';
            purpose.dispatchEvent(new Event('input', { bubbles: true }));
            purpose.dispatchEvent(new Event('change', { bubbles: true }));
            purpose.focus();

            purposeChips.forEach((item) => {
                item.classList.toggle('is-selected', item === chip);
            });

            trackFormInteraction('purpose');
            reachMetrikaGoal('ym-purpose-choice', {
                choice: chip.textContent.trim(),
                tariff: selectedTariff,
            });
        });
    });

    if ('IntersectionObserver' in window) {
        const viewedSections = new Set();
        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                const section = entry.target.dataset.trackSection;

                if (!entry.isIntersecting || !section || viewedSections.has(section)) {
                    return;
                }

                viewedSections.add(section);
                reachMetrikaGoal('ym-section-view', { section });
                sectionObserver.unobserve(entry.target);
            });
        }, { threshold: 0.35 });

        document.querySelectorAll('[data-track-section]').forEach((section) => {
            sectionObserver.observe(section);
        });

        const heroPrimaryCta = document.querySelector('.hero-actions .btn-primary');

        if (registrationSection && heroPrimaryCta && mobileStickyButton) {
            const stickyVisibility = {
                hero: true,
                registration: false,
            };
            const updateStickyVisibility = () => {
                mobileStickyButton.classList.toggle(
                    'is-hidden',
                    stickyVisibility.hero || stickyVisibility.registration,
                );
            };
            const stickyObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.target === heroPrimaryCta) {
                        stickyVisibility.hero = entry.isIntersecting;
                    }

                    if (entry.target === registrationSection) {
                        stickyVisibility.registration = entry.isIntersecting;
                    }

                    updateStickyVisibility();
                });
            }, { threshold: 0.1 });

            stickyObserver.observe(heroPrimaryCta);
            stickyObserver.observe(registrationSection);
        }
    }

    if (!form) {
        return;
    }

    const trackFormInteraction = (field) => {
        if (!formStarted) {
            formStarted = true;
            reachMetrikaGoal('ym-form-start', { tariff: selectedTariff });
        }

        if (!field || !['name', 'phone', 'email', 'purpose'].includes(field) || trackedFields.has(field)) {
            return;
        }

        trackedFields.add(field);
        reachMetrikaGoal('ym-form-field', {
            field,
            tariff: selectedTariff,
        });
    };

    form.addEventListener('click', (event) => {
        const field = event.target instanceof HTMLElement ? event.target.getAttribute('name') : null;
        trackFormInteraction(field);
    });

    form.addEventListener('focusin', (event) => {
        const field = event.target instanceof HTMLElement ? event.target.getAttribute('name') : null;
        trackFormInteraction(field);
    });

    form.addEventListener('input', (event) => {
        const field = event.target instanceof HTMLElement ? event.target.getAttribute('name') : null;
        trackFormInteraction(field);
    });

    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const submitButton = form.querySelector('button[type="submit"]');
        const formData = new FormData(form);
        const buttonLabel = tariffs[selectedTariff].button;
        let errorStage = 'network';

        if (submitButton instanceof HTMLButtonElement) {
            submitButton.disabled = true;
            submitButton.textContent = 'Отправляем заявку…';
        }

        if (message) {
            message.textContent = '';
            message.className = 'form-message';
        }

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData,
            });

            errorStage = 'response';
            const data = await response.json();

            if (!response.ok || !data.ok) {
                throw new Error(data.error || 'Не удалось отправить заявку.');
            }

            reachMetrikaGoal('ym-submit-leadform', { tariff: selectedTariff });

            if (message) {
                message.textContent = 'Заявка отправлена. Мы свяжемся с вами, чтобы подтвердить место.';
                message.className = 'form-message success';
            }

            form.reset();
            purposeChips.forEach((chip) => {
                chip.classList.remove('is-selected');
            });
            setSelectedTariff(selectedTariff);
        } catch (error) {
            reachMetrikaGoal('ym-form-error', {
                stage: errorStage,
                tariff: selectedTariff,
            });

            if (message) {
                message.textContent = error instanceof Error ? error.message : 'Не удалось отправить заявку.';
                message.className = 'form-message error';
            }
        } finally {
            if (submitButton instanceof HTMLButtonElement) {
                submitButton.disabled = false;
                submitButton.textContent = buttonLabel;
            }
        }
    });

    setSelectedTariff(selectedTariff);
});
