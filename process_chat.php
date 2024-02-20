<?php 
    require "db.php";
    $data = $_POST;
    $user = R::findOne('users', 'id = ?', array($_SESSION['user']->id));
    $museum = R::findOne('museums', 'id = ?', array($_SESSION['museum']->id));
    $author = $user->name;
    $authoravatar = $museum->ImageMuseum;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Обробка POST-запиту
            $museumid = $_GET['id'];

            $chat = R::dispense('chats');
            $chat->authorComent = $author;
            $chat->textComment = $data['textComment'];
            $chat->EmojiImage = $authoravatar; // Збереження імені файлу
            R::store($chat);
    } 
    header("Location: /chat.php");
    exit;
