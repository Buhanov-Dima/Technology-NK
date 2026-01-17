const PhoneFormatter = (function () {
    function clean(raw) {
        return raw.replace(/\D/g, '');
    }

    function normalize(digits) {
        if (digits.length === 11 && digits.startsWith('8')) return '7' + digits.slice(1);
        if (digits.length === 10) return '7' + digits;
        if (digits.length === 11 && digits.startsWith('7')) return digits;
        return null;
    }

    function format(normalized) {
        if (!normalized || normalized.length !== 11 || !normalized.startsWith('7')) return null;
        return `+7 (${normalized.slice(1, 4)}) ${normalized.slice(4, 7)}-${normalized.slice(7, 9)}-${normalized.slice(9)}`;
    }

    function isValid(phone) {
        const digits = clean(phone);
        const norm = normalize(digits);
        return norm !== null;
    }

    function getClean(phone) {
        const digits = clean(phone);
        return normalize(digits) || digits;
    }

    function autoFormatInput(input) {
        const val = input.value;
        const digits = clean(val);
        const norm = normalize(digits);
        const formatted = format(norm);
        input.value = formatted ?? val;
        return formatted !== null;
    }

    function applyLiveMask(input) {
        input.addEventListener("input", () => {
            const selectionStart = input.selectionStart;

            let digits = input.value.replace(/\D/g, '');
            if (digits.length > 0 && digits[0] === '8') {
                digits = '7' + digits.slice(1);
            }
            digits = digits.slice(0, 11);

            let formatted = '';
            if (digits.length >= 1) formatted = '+7';
            if (digits.length >= 2) formatted += ' (' + digits.slice(1, 4);
            if (digits.length >= 4) formatted += ') ' + digits.slice(4, 7);
            if (digits.length >= 7) formatted += '-' + digits.slice(7, 9);
            if (digits.length >= 9) formatted += '-' + digits.slice(9, 11);

            const prevLength = input.value.length;
            const offset = prevLength - selectionStart;

            input.value = formatted;

            const newLength = input.value.length;
            const newPos = newLength - offset;

            requestAnimationFrame(() => {
                input.setSelectionRange(newPos, newPos);
            });
        });

        input.addEventListener("keydown", (e) => {
            if (
                e.key === 'Backspace' &&
                input.selectionStart === 1 &&
                input.value.startsWith('+')
            ) {
                input.value = '';
                e.preventDefault();
            }
        });

        input.addEventListener("focus", () => {
            if (input.value.replace(/\D/g, '').length <= 1) {
                input.value = '';
            }
        });
    }

    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function initValidation(phoneSelector = '.phone-validate', formSelector = '.form-validate') {
        document.querySelectorAll(phoneSelector).forEach(input => {
            input.addEventListener('blur', () => {
                const raw = input.value.trim();
                if (raw === '') {
                    input.classList.remove('is-invalid');
                    return;
                }

                const ok = autoFormatInput(input);
                if (!ok) {
                    input.classList.add('is-invalid');
                    if (typeof toastr !== 'undefined') {
                        toastr.warning(`Проверьте номер: ${input.value}`);
                    }
                } else {
                    input.classList.remove('is-invalid');
                }
            });
        });

        document.querySelectorAll(formSelector).forEach(form => {
            form.addEventListener('submit', (e) => {
                let formValid = true;

                form.querySelectorAll(phoneSelector).forEach(input => {
                    const raw = input.value.trim();
                    if (raw !== '') {
                        const valid = isValid(raw);
                        if (!valid) {
                            input.classList.add('is-invalid');
                            formValid = false;
                        } else {
                            input.classList.remove('is-invalid');
                            input.value = getClean(input.value);
                        }
                    }
                });

                form.querySelectorAll('.email-validate').forEach(input => {
                    const raw = input.value.trim();
                    if (raw !== '') {
                        const valid = isValidEmail(raw);
                        if (!valid) {
                            input.classList.add('is-invalid');
                            formValid = false;
                        } else {
                            input.classList.remove('is-invalid');
                        }
                    }
                });

                if (!formValid) {
                    e.preventDefault();
                    if (typeof toastr !== 'undefined') {
                        toastr.error('Пожалуйста, корректно заполните все обязательные поля.');
                    }
                }
            });
        });
    }

    function initEmailValidation(classSelector = '.email-validate') {
        document.querySelectorAll(classSelector).forEach(input => {
            input.addEventListener('blur', () => {
                const value = input.value.trim();
                if (value === '') {
                    input.classList.remove('is-invalid');
                    return;
                }

                const valid = isValidEmail(value);
                if (!valid) {
                    input.classList.add('is-invalid');
                    if (typeof toastr !== 'undefined') {
                        toastr.warning(`Проверьте email: ${value}`);
                    }
                } else {
                    input.classList.remove('is-invalid');
                }
            });
        });
    }

    function initFormatterOnly(classSelector = '.phone-format') {
        document.querySelectorAll(classSelector).forEach(input => {
            input.addEventListener('blur', () => {
                autoFormatInput(input);
            });
        });
    }

    function initLiveMask(classSelector = '.phone-mask') {
        document.querySelectorAll(classSelector).forEach(input => {
            applyLiveMask(input);
        });
    }

    function formatDisplayPhones(classSelector = '.phone-display') {
        document.querySelectorAll(classSelector).forEach(el => {
            const cleaned = clean(el.textContent);
            const norm = normalize(cleaned);
            const formatted = format(norm);
            if (formatted) {
                el.textContent = formatted;
            }
        });
    }

    // Автоинициализация
    document.addEventListener("DOMContentLoaded", () => {
        initValidation();         // .phone-validate
        initFormatterOnly();      // .phone-format
        initLiveMask();           // .phone-mask
        formatDisplayPhones();    // .phone-display
        initEmailValidation();    // .email-validate
    });

    return {
        initValidation,
        initFormatterOnly,
        initLiveMask,
        formatDisplayPhones,
        isValid,
        getClean,
        format,
        normalize,
        isValidEmail,
        initEmailValidation,
        applyLiveMask // ← ЭКСПОРТИРУЕМ!
    };
})();
