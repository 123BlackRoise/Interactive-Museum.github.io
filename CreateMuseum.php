<?php
    require "db.php";
    $data = $_POST;
    $showError = False;
    $user = R::findOne('users', 'id = ?', array($_SESSION['user']->id));

    $author = $user->name;
    $authorid = $user->id;

    if(empty($errors)){
        // Зображення
        $uploadDir = 'upload/avatars/';  // Шлях до папки, куди ви хочете зберігати зображення
        $uploadedFile = $uploadDir . basename($_FILES['ImageMuseum']['name']);
        
        if (move_uploaded_file($_FILES['ImageMuseum']['tmp_name'], $uploadedFile)) {
            $museum = R::dispense('museums');
            $museum->nameMuseum = $data['nameMuseum'];
            $museum->ImageMuseum = basename($_FILES['ImageMuseum']['name']); // Збереження імені файлу
            $museum->category = $data['category'];
            $museum->ecsponatinfo = $data['ecsponatinfo'];
            $museum->author = $author;
            $museum->authorid = $authorid;
            $museum->views = "0";
            $museum->comments = "0";
            $newMuseumId = R::store($museum); // Зберегти музей і отримати його id

            // Зберегти id у сесії
            $_SESSION['museum']->id = $newMuseumId;
            $_SESSION['museum']->authorid = $authorid;
        } else {
            // Обробка помилок завантаження
            $errors[] = 'Помилка завантаження зображення.';
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/MyMuseum_Style.css">
    <title>Мої музеї</title>
</head>
<body>
    <?php if($user): ?>
    <?php require 'Construction\Header_Authorization.php'; ?>
    <div class="wrapper">
        <div class="content">
            <div class="content_container">
                    <form action="/CreateMuseum.php" class="Form_Create_Museum" id="Form_Create_Museum" method="post" enctype="multipart/form-data">
                        <label class="Form_Label" for="name">Назва музею</label> 
                        <input name="nameMuseum" id="Inpu_Create_Name" class="Input_Create_Name" type="text" placeholder="Введіть назву музею">
                        <label id="Form_Label" class="Form_Label" for="image">Обрати зображення</label>
                        <input name="ImageMuseum" type="file" id="Input_Create_Image" class="Input_Create_Image" placeholder="Оберіть зображення" accept="image/*">
                        <Label class="Form_Label">Категорія музею</Label>
                        <!-- <input type="text" name="category" id="category" class="Input_Create_Name" placeholder="Введіть категорію"> -->
                        <select name="category" id="category" class="category">
                            <option value=" ">Категорія музею</option>
                            <option value="Історичний">Історичний</option>
                            <option value="Мистецький">Мистецький</option>
                            <option value="Археологічний">Археологічний</option>
                            <option value="Природний">Природний</option>
                            <option value="Краєзнавчий">Краєзнавчий</option>
                            <option value="Меморіальний">Меморіальний</option>
                            <option value="Літературний">Літературний</option>
                            <option value="Етнографічний">Етнографічний</option>
                            <option value="Технічний">Технічний</option>
                            <option value="Галузевий">Галузевий</option>
                        </select>
                        <Label class="Form_Label">Інформація про експонат</Label>
                        <textarea name="ecsponatinfo" id="ecsponatinfo" class="Input_Create_Info" placeholder="Введіть інформацію про свій музей"></textarea>
                        <button type="submit" name="create" class="Button_Create_Museum">Створити Музей</button>
                    </form>
            </div>
        </div>
    </div>
    <?php require 'Construction\Footer.php'; ?>
    <?php else: ?>
        <?php require 'Construction\Header.php'; ?>
        <div class="wrapper">
            <div class="content">
                <div class="content_container">
                        <h1>Ви не авторизовані!</h1>
                </div>
            </div>
        </div>
    <?php require 'Construction\Footer.php'; ?>
    <?php endif; ?>
</body>
</html>