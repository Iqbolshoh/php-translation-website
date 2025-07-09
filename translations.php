<?php
header('Content-Type: application/json; charset=utf-8');

$translations = [
    "hello" => [
        "uz" => "Salom",
        "en" => "Hello",
        "ru" => "Привет"
    ],
    "goodbye" => [
        "uz" => "Xayr",
        "en" => "Goodbye",
        "ru" => "Пока"
    ],
    "thank_you" => [
        "uz" => "Rahmat",
        "en" => "Thank you",
        "ru" => "Спасибо"
    ],
    "please" => [
        "uz" => "Iltimos",
        "en" => "Please",
        "ru" => "Пожалуйста"
    ],
    "yes" => [
        "uz" => "Ha",
        "en" => "Yes",
        "ru" => "Да"
    ],
    "no" => [
        "uz" => "Yo‘q",
        "en" => "No",
        "ru" => "Нет"
    ],
    "how_are_you" => [
        "uz" => "Qalaysiz?",
        "en" => "How are you?",
        "ru" => "Как дела?"
    ],
    "good_morning" => [
        "uz" => "Xayrli tong",
        "en" => "Good morning",
        "ru" => "Доброе утро"
    ],
    "good_night" => [
        "uz" => "Xayrli tun",
        "en" => "Good night",
        "ru" => "Спокойной ночи"
    ],
    "welcome" => [
        "uz" => "Xush kelibsiz",
        "en" => "Welcome",
        "ru" => "Добро пожаловать"
    ],
    "sorry" => [
        "uz" => "Kechirasiz",
        "en" => "Sorry",
        "ru" => "Извините"
    ],
    "excuse_me" => [
        "uz" => "Kechirasiz",
        "en" => "Excuse me",
        "ru" => "Простите"
    ],
    "what_is_your_name" => [
        "uz" => "Ismingiz nima?",
        "en" => "What is your name?",
        "ru" => "Как вас зовут?"
    ],
    "my_name_is" => [
        "uz" => "Mening ismim...",
        "en" => "My name is...",
        "ru" => "Меня зовут..."
    ],
    "nice_to_meet_you" => [
        "uz" => "Tanishganimdan xursandman",
        "en" => "Nice to meet you",
        "ru" => "Приятно познакомиться"
    ],
    "i_love_you" => [
        "uz" => "Men seni sevaman",
        "en" => "I love you",
        "ru" => "Я тебя люблю"
    ],
    "help" => [
        "uz" => "Yordam bering",
        "en" => "Help",
        "ru" => "Помогите"
    ],
    "stop" => [
        "uz" => "To‘xta",
        "en" => "Stop",
        "ru" => "Стоп"
    ],
    "wait" => [
        "uz" => "Kut",
        "en" => "Wait",
        "ru" => "Подожди"
    ],
    "where_is" => [
        "uz" => "Qayerda?",
        "en" => "Where is...?",
        "ru" => "Где...?"
    ],
    "bathroom" => [
        "uz" => "Hammom",
        "en" => "Bathroom",
        "ru" => "Ванная"
    ],
    "food" => [
        "uz" => "Oziq-ovqat",
        "en" => "Food",
        "ru" => "Еда"
    ],
    "water" => [
        "uz" => "Suv",
        "en" => "Water",
        "ru" => "Вода"
    ],
    "money" => [
        "uz" => "Pul",
        "en" => "Money",
        "ru" => "Деньги"
    ],
    "friend" => [
        "uz" => "Do‘st",
        "en" => "Friend",
        "ru" => "Друг"
    ]
];

echo json_encode($translations);