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

            $coment = R::dispense('comentaries');
            $coment->authorComent = $author;
            $coment->textComment = $data['textComment'];
            $coment->EmojiImage = $authoravatar; // Збереження імені файлу
            R::store($coment);
            $museum->comments += 1;
            R::store($museum);
    } 
    header("Location: /MuseumCreateUser.php?id=$museum->id");
    exit;
