<?php
    require "db.php";
    $data = $_POST;
    $showError = False;
    $museum = R::findOne('museums', 'id = ?', array($_SESSION['museum']->id));
    $user = R::findOne('users', 'id = ?', array($_SESSION['user']->id));

    $museum = R::findOne('museums', 'authorid = ?', array($_SESSION['museum']->authorid));

    $museumid = $museum->id;
    $authorid = $museum->authorid;

    if($user)
    {    
        if($user->id == $authorid)
        {

        
            if(empty($errors)){
                // Зображення
                $uploadDir = 'upload/avatars/';  // Шлях до папки, куди ви хочете зберігати зображення
                $uploadedFile = $uploadDir . basename($_FILES['imageElement']['name']);
                
                if (move_uploaded_file($_FILES['imageElement']['tmp_name'], $uploadedFile)) {
                    $element = R::dispense('elements');
                    $element->nameElement = $data['nameElement'];
                    $element->imageElement = basename($_FILES['imageElement']['name']); // Збереження імені файлу
                    $element->aboutElement = $data['aboutElement'];
                    $element->museumid = $museumid;
                    R::store($element);
                } else {
                    $errors[] = 'Помилка завантаження зображення.';
                }
            }
            
        }else {
            $showError = True;
            $errors[] = 'Ви не є автором цього музею.';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/MuseumCreateUserStyle.css">
    <title>Назва музею</title>
</head>
<body>
    <?php require 'Construction/Header_Create_Element.php';?>

    <div class="wrapper">
        <div class="content">
            <div class="content_container">
                <form action="/CreateElement.php" class="Form_Create_Element" id="Form_Create_Museum" method="post" enctype="multipart/form-data">
                    <label class="Form_Label" for="name">Назва елементу</label> 
                    <input name="nameElement" id="Input_Name_Element" class="Input_Name_Element" type="text" placeholder="Введіть назву">

                    <label class="Form_Label" for="image">Обрати зображення</label>
                    <input name="imageElement" type="file" id="Input_Image_Element" class="Input_Image_Element" placeholder="Оберіть зображення">

                    <textarea name="aboutElement" id="About_Element" class="About_Element"></textarea>

                    <button type="submit" name="createElement"  class="Button_Create_Element">Створити Елемент</button>
                </form>
            </div>
        </div>
    </div>

    <?php require 'Construction/Footer.php'; ?>
</body>
</html>