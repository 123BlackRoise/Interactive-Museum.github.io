<?php
    require "db.php";
    $data = $_POST;
    $showError = False;

    if(isset($data['signin'])){
        $errors = array();
        $showError = True;

        if(trim($data['email']) == ''){
            $errors[] = 'Вкажіть Email';
        }
        if(trim($data['pass']) == ''){
            $errors[] = 'Вкажіть пароль';
        }

        $user = R::findOne('users', 'email = ?', array($data['email']));
        if($user){
            if(password_verify($data['pass'], $user->pass)){
                $_SESSION['user'] = $user;
            }else{
                $errors[] = 'Не правильний пароль';
            }
        }else{
            $errors[] = 'Користувача не знайдено';
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/authStyle.css">
    <title>Авторизація</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header_body">
                    <a href="index.php" class="header_logo">
                        <img src="Images/Logo_final_black.png" alt="">
                    </a>
                    <div class="header_burger">
                        <span></span>
                    </div>
                    <nav class="header_menu">
                        <ul class="header_list">
                            <li>
                                <a href="index.php" class="header_link">Головна</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <div class="content">
            <div class="content_container">
                <form action="/authorization.php" method="post" class="Form-Authorization">
                    <label class="Form-Label" for="name">Email</label> 
                    <input name="email" id="email" class="Form-Authorization-Name-Input" type="text" placeholder="Введіть Email">
                    <Label class="Form-Label">Пароль</Label>
                    <input name="pass" id="pass" class="Form-Authorization-Pass-Input" type="password" placeholder="Введіть пароль">
                    <p class="Form-Question">Не маєте акаунта ? <a href="Registration.php" class="Linked-Authorization">Зареєструватись</a></p>
                    <button type="submit" name="signin" class="Button-Authorization-Museum">Авторизуватись</button>
                </form>
                <p> <?php if($showError){ echo showError($errors); } ?> </p>
            </div>
        </div>

        <footer class="Footer">
            <a href="index.php" class="header_logo">
                <img src="Images/Logo_final_black.png" alt="">
            </a>
        </footer>
    </div>
    <script src="JS/script.js"></script>
</body>
</html>