<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой сайт</title>
    <link href="assets/tailwind.css" rel="stylesheet">
</head>
<body>
<nav class="bg-gray-800 text-white py-4">
    <li class="container mx-auto flex justify-between items-center">
        <ul class="flex space-x-6">
            <li><a href="/" class="hover:text-green-500">Главная</a></li>
            <li><a href="#" class="hover:text-green-500">Тарифы и цены</a></li>
            <li><a href="#" class="hover:text-green-500">Автопарк</a></li>
            <li><a href="#" class="hover:text-green-500">Контакты</a></li>
            <li><a href="#" class="hover:text-green-500">Связаться со мной</a></li>
        </ul>

        </div>
</nav>

<div class="container mx-auto mt-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-6">
        <?php
        // Генерация вымышленного контента для карточек
        $cards = [
            [
                'image' => 'img/kia_k5.jpg',
                'title' => 'KIA K5',
                'description' => 'Автомобиль бизнес класса',
                'characteristics' => 'ТОп за свои деньги',
                'tariffs' => 'Ну тут 5р поездка и 5р ожидание',
            ],
            [
                'image' => 'img/kia_k3.jpg',
                'title' => 'KIA K3',
                'description' => 'Автомобиль комфорт класса',
                'characteristics' => '150 л.с. 2л объем , комплектация базик',
                'tariffs' => 'Тарифы и цены: поездка 2р , ожидание 3р',
            ],
        ];

        foreach ($cards as $card) {
            echo '<div class="bg-white p-4 rounded-lg shadow-md">';
            echo '<img src="' . $card['image'] . '" alt="' . $card['title'] . '" width="200" height="150" class="mb-4">';
            echo '<h2 class="text-xl font-semibold">' . $card['title'] . '</h2>';
            echo '<p class="text-gray-600">' . $card['description'] . '</p>';
            echo '<p class="text-gray-600 mt-2">' . $card['characteristics'] . '</p>';
            echo '<p class="text-blue-500 mt-4">' . $card['tariffs'] . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<footer class="bg-gray-900 text-white p-4">
    <div class="container mx-auto text-center">
        &copy; <?php echo date('Y'); ?> Мой вебсайт.
    </div>
</footer>
</body>
</html>
