<!DOCTYPE html>
<html lang="uk">
<meta charset="UTF-8">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сервісний центр</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <div class="logo">
        <img src="photo/IMG_20250319_185057.jpg" alt="TigerCyberTechnologies Logo" style="height: 50px; vertical-align: middle;">
    </div>
    <section class="mainTitle">
        <h1>Ремонт техніки</h1>
        <h2>TigerCyberTechnologies</h2>
    </section>
    <nav>
        <div class="burger-menu" onclick="toggleMenu()">Меню &#9776;</div>
        <ul class="menu-items">
            <li><a href="#contact" onclick="closeBurger(); showPhoneNumber();">Контакти</a></li>
            <li><a href="#services" onclick="closeBurger()">Послуги</a></li>
            <li><a href="#reviews" onclick="closeBurger()">Відгуки</a></li>
            <li><a href="#order" onclick="closeBurger()">Заповнити анкету</a></li>
        </ul>
    </nav>
</header>


<section id="contact" class="contact">
    <h1 id="text1-btn">Швидкий та надійний ремонт пристроїв</h1>
    <p id="text2-btn">Ми якісно та доступно ремонтуємо смартфони, ноутбуки та інші пристрої.</p>
    <a href="#" class="btn" id="consultation-btn" onclick="showPhoneNumber()">Отримати безкоштовну консультацію</a>
</section>

<section id="services">
    <h2>Наші послуги</h2>
    <div class="services-container">
        <div class="service">Ремонт смартфонів</div>
        <div class="service">Ремонт телевізорів</div>
        <div class="service">Ремонт комп'ютерів</div>
        <div class="service">Ремонт планшетів</div>
        <div class="service">Ремонт ноутбуків</div>
        <div class="service">Ремонт ігрових консолей</div>
        <div class="service">Ремонт побутової техніки</div>
        <div class="service">Ремонт електроніки</div>
        <div class="service">Ремонт аксесуарів</div>
        <div class="service">Та багато інших девайсів</div>
    </div>
</section>

<section id="reviews">
    <div class="reviews-header">
        <h2>Відгуки клієнтів</h2>
    </div>
    <div class="reviews-container">
        <div class="review">
            <p>"Чудовий сервіс! Мій смартфон отримав нове життя після заміни екрану. Висока якість роботи та швидкість обслуговування. Рекомендую!" - Олександр (Опубліковано: 12 березня 2025)</p>
        </div>
        <div class="review">
            <p>"Ремонт ноутбука пройшов дуже добре, майстер швидко діагностував проблему та усунув її. Дуже задоволений результатом, тепер працює як новий." - Катерина (Опубліковано: 10 березня 2025)</p>
        </div>
        <div class="review">
            <p>"Я звертався до цього сервісу для ремонту телевізора, і залишився вражений! Доступні ціни та чудова якість роботи. Знову скористаюсь їх послугами, якщо буде потрібно." - Сергій (Опубліковано: 5 березня 2025)</p>
        </div>
        <div class="review">
            <p>"Замінили батарею в моєму смартфоні за 2 години. Відмінне обслуговування, майстри все пояснили і показали. Тепер мій телефон працює безперебійно!" - Наталя (Опубліковано: 7 березня 2025)</p>
        </div>
        <div class="review">
            <p>"Замовляв ремонт планшета, потрапив сюди за рекомендацією друга. Все виконано дуже акуратно, терміни дотримано. Я дуже задоволений і буду радити цей сервіс іншим." - Андрій (Опубліковано: 9 березня 2025)</p>
        </div>
    </div>
</section>

<section id="order">
    <h2>Замовити ремонт</h2>
    <form id="repair-form" action="submit.php" method="POST">
        <input type="text" name="name" oninput="validateInput1_1(event); validateInput1_2(event);" placeholder="Ваше ім'я (Латиницею)" required>
        <input type="email" name="email" oninput="validateInput2_1(event); validateInput2_2(event); validateInput2_3(event);" placeholder="Ваш Email" required>
        <textarea name="details" placeholder="Опишіть проблему" required></textarea>
        <button type="submit">Надіслати заявку</button>
    </form>
</section>

<footer>
    <p>&copy; 2025 TigerCyberTechnologies. Усі права захищені.</p>
</footer>

<script src="script.js"></script>
</body>
</html>