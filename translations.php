<?php
header('Content-Type: application/json; charset=utf-8');

$translations = [
    "hello" => [
        "uz" => "Salom",
        "en" => "Hello",
        "ru" => "Привет",
        "tj" => "Салом"
    ],
    "goodbye" => [
        "uz" => "Xayr",
        "en" => "Goodbye",
        "ru" => "Пока",
        "tj" => "Хайр"
    ],
    "thank_you" => [
        "uz" => "Rahmat",
        "en" => "Thank you",
        "ru" => "Спасибо",
        "tj" => "Ташаккур"
    ],
    "please" => [
        "uz" => "Iltimos",
        "en" => "Please",
        "ru" => "Пожалуйста",
        "tj" => "Илтимос"
    ],
    "yes" => [
        "uz" => "Ha",
        "en" => "Yes",
        "ru" => "Да",
        "tj" => "Бале"
    ],
    "no" => [
        "uz" => "Yo‘q",
        "en" => "No",
        "ru" => "Нет",
        "tj" => "Не"
    ],
    "how_are_you" => [
        "uz" => "Qalaysiz?",
        "en" => "How are you?",
        "ru" => "Как дела?",
        "tj" => "Чӣ хелӣ?"
    ],
    "good_morning" => [
        "uz" => "Xayrli tong",
        "en" => "Good morning",
        "ru" => "Доброе утро",
        "tj" => "Субҳи хайр"
    ],
    "good_night" => [
        "uz" => "Xayrli tun",
        "en" => "Good night",
        "ru" => "Спокойной ночи",
        "tj" => "Шаби хуш"
    ],
    "welcome" => [
        "uz" => "Xush kelibsiz",
        "en" => "Welcome",
        "ru" => "Добро пожаловать",
        "tj" => "Хуш омадед"
    ],
    "sorry" => [
        "uz" => "Kechirasiz",
        "en" => "Sorry",
        "ru" => "Извините",
        "tj" => "Бубахшед"
    ],
    "excuse_me" => [
        "uz" => "Kechirasiz",
        "en" => "Excuse me",
        "ru" => "Простите",
        "tj" => "Маъзур бошед"
    ],
    "what_is_your_name" => [
        "uz" => "Ismingiz nima?",
        "en" => "What is your name?",
        "ru" => "Как вас зовут?",
        "tj" => "Номи шумо чист?"
    ],
    "my_name_is" => [
        "uz" => "Mening ismim...",
        "en" => "My name is...",
        "ru" => "Меня зовут...",
        "tj" => "Номи ман ..."
    ],
    "nice_to_meet_you" => [
        "uz" => "Tanishganimdan xursandman",
        "en" => "Nice to meet you",
        "ru" => "Приятно познакомиться",
        "tj" => "Шодам аз шиносоӣ"
    ],
    "i_love_you" => [
        "uz" => "Men seni sevaman",
        "en" => "I love you",
        "ru" => "Я тебя люблю",
        "tj" => "Ман туро дӯст медорам"
    ],
    "help" => [
        "uz" => "Yordam bering",
        "en" => "Help",
        "ru" => "Помогите",
        "tj" => "Кумак кунед"
    ],
    "stop" => [
        "uz" => "To‘xta",
        "en" => "Stop",
        "ru" => "Стоп",
        "tj" => "Ист"
    ],
    "wait" => [
        "uz" => "Kut",
        "en" => "Wait",
        "ru" => "Подожди",
        "tj" => "Интизор шав"
    ],
    "where_is" => [
        "uz" => "Qayerda?",
        "en" => "Where is...?",
        "ru" => "Где...?",
        "tj" => "Дар куҷост?"
    ],
    "bathroom" => [
        "uz" => "Hammom",
        "en" => "Bathroom",
        "ru" => "Ванная",
        "tj" => "Ҳаммом"
    ],
    "food" => [
        "uz" => "Oziq-ovqat",
        "en" => "Food",
        "ru" => "Еда",
        "tj" => "Хӯрок"
    ],
    "water" => [
        "uz" => "Suv",
        "en" => "Water",
        "ru" => "Вода",
        "tj" => "Об"
    ],
    "money" => [
        "uz" => "Pul",
        "en" => "Money",
        "ru" => "Деньги",
        "tj" => "Пул"
    ],
    "friend" => [
        "uz" => "Do‘st",
        "en" => "Friend",
        "ru" => "Друг",
        "tj" => "Дӯст"
    ],
    "family" => [
        "uz" => "Oila",
        "en" => "Family",
        "ru" => "Семья",
        "tj" => "Оила"
    ],
    "school" => [
        "uz" => "Maktab",
        "en" => "School",
        "ru" => "Школа",
        "tj" => "Мактаб"
    ],
    "teacher" => [
        "uz" => "O‘qituvchi",
        "en" => "Teacher",
        "ru" => "Учитель",
        "tj" => "Муаллим"
    ],
    "student" => [
        "uz" => "O‘quvchi",
        "en" => "Student",
        "ru" => "Ученик",
        "tj" => "Шогирд"
    ],
    "book" => [
        "uz" => "Kitob",
        "en" => "Book",
        "ru" => "Книга",
        "tj" => "Китоб"
    ],
    "pen" => [
        "uz" => "Ruchka",
        "en" => "Pen",
        "ru" => "Ручка",
        "tj" => "Қалам"
    ]
];

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['lang1']) && isset($data['lang2'])) {
    $lang1 = $data['lang1'];
    $lang2 = $data['lang2'];

    $result = [];

    $firstWord = reset($translations);
    if (!array_key_exists($lang1, $firstWord) || !array_key_exists($lang2, $firstWord)) {
        echo json_encode([
            'success' => false,
            'message' => 'Invalid language codes provided.'
        ]);
        exit;
    }

    foreach ($translations as $key => $value) {
        if (isset($value[$lang1]) && isset($value[$lang2])) {
            $result[] = [$lang1 => $value[$lang1], $lang2 => $value[$lang2]];
        }
    }

    echo json_encode([
        'success' => true,
        'message' => 'Translations retrieved successfully',
        'data' => $result
    ]);
    exit;

} else {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request. Please provide all parameters.'
    ]);
    exit;
}
// echo json_encode($translations, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);