document.addEventListener("DOMContentLoaded", () => {
    // Mobile menu toggle
    const burgerMenu = document.querySelector(".burger-menu");
    const navLinks = document.querySelector(".nav-links");

    burgerMenu.addEventListener("click", () => {
        navLinks.classList.toggle("active");
    });

    // Form submission handling
    document.getElementById("repair-form").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent default form submission

        const formData = new FormData(this);
        fetch("submit.php", {
            method: "POST",
            body: formData
        })
            .then(response => response.text())
            .then(data => {
                alert("Your request has been submitted successfully!");
                this.reset();
            })
            .catch(error => {
                alert("An error occurred. Please try again later.");
                console.error("Error:", error);
            });
    });
});

document.addEventListener("DOMContentLoaded", () => {
    // Функція для прокручування до елемента
    function scrollToElement(selector) {
        const element = document.querySelector(selector);
        if (element) {
            window.scrollTo({
                top: element.offsetTop - 50, // Відступ від верхньої частини екрану
                behavior: "smooth"
            });
        }
    }

    // Обробники подій для кожного елемента меню
    document.querySelector(".menu-items").addEventListener("click", (event) => {
        const targetId = event.target.getAttribute("href");
        if (targetId) {
            event.preventDefault();
            scrollToElement(targetId);
            closeBurger(); // Закриває меню після натискання
        }
    });
});

function showPhoneNumber() {
    var item = document.getElementById("text1-btn");
    item.textContent = "Контактна інформація";

    item = document.getElementById("text2-btn");
    item.textContent = "Звертайтеся!";

    var item = document.getElementById("consultation-btn");
    item.textContent = "+380-XX-XXX-XX-XX або email@gmail.com";  // Заміна тексту кнопки на номер телефону та ємейл
    item.style.cursor = "default";  // Змінюємо курсор на стандартний після заміни тексту
    item.removeAttribute("onclick");  // Видаляємо атрибут onclick, щоб не викликати функцію повторно
}

function toggleMenu() {
    const menu = document.querySelector('.menu-items');
    menu.classList.toggle('active');
}

function closeBurger() {
    const menu = document.querySelector('.menu-items');
    menu.classList.remove('active'); // Видаляє клас, який показує меню
}

function closeMenu(event) {
    const menu = document.querySelector('.menu-items');
    // Якщо клік не був всередині меню або кнопки меню
    if (!menu.contains(event.target) && !event.target.matches('.burger-menu')) {
        menu.classList.remove('active');
    }
}

// Додаємо слухач подій на весь документ, щоб закривати меню при кліку поза ним
document.addEventListener('click', closeMenu);

function validateInput1_1(event) {
    const input = event.target;
    const value = input.value;
    // Замінюємо всі символи, які не є латинськими літерами або пробілами
    input.value = value.replace(/[^A-Za-z_]+/g, '');
}

function validateInput1_2(event) {
    const input = event.target;
    const value = input.value;
    // Замінюємо всі символи, які не є латинськими літерами або пробілами
    input.value = value.replace(/_{2,}/g, '_');
}

function validateInput2_1(event) {
    const input = event.target;
    const value = input.value;
    // Замінюємо всі символи, які не є латинськими літерами або пробілами
    input.value = value.replace(/[^A-Za-z0-9@.]+/g, '');
}

function validateInput2_2(event) {
    const input = event.target;
    const value = input.value;
    // Замінюємо всі символи, які не є латинськими літерами або пробілами
    input.value = value.replace(/\.{2,}/g, '.');
}

function validateInput2_3(event) {
    const input = event.target;
    const value = input.value;
    // Замінюємо всі символи, які не є латинськими літерами або пробілами
    input.value = value.replace(/@{2,}/g, '@');
}