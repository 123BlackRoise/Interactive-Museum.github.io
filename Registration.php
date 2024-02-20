<?php
    require "db.php";
    $data = $_POST;
    $showError = False;

    if(isset($data['signup'])){
        $errors =array();
        $showError = True;

        if(trim($data['name']) == ''){
            $errors[] = 'Вкажіть нікнейм';
        }
        if(trim($data['LinkSocial']) == ''){
            $errors[] = 'Вкажіть посилання Instagram';
        }
        if(trim($data['email']) == ''){
            $errors[] = 'Вкажіть Email';
        }
        if(trim($data['pass']) == ''){
            $errors[] = 'Вкажіть пароль';
        }
        if(trim($data['pass']) != trim($data['pass_2'])){
            $errors[] = 'Паролі не співпадають';
        }

        if(R::count('users', 'email = ?', array($data['email'])) > 0){
            $errors[] = 'Користувач з таким Email уже зареєстрований';
        }

        if(empty($errors)){
            $user = R::dispense('users');
            $user->name = $data['name'];
            $user->LinkSocial = $data['LinkSocial'];
            $user->email = $data['email'];
            $user->pass = password_hash($data['pass'], PASSWORD_DEFAULT);
            $user->avatar = 'Avatarka.png';
            R::store($user); 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/regStyle.css">
    <title>Реєстрація</title>
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
                <form  action="/Registration.php" class="Form-Regestration" method="post">
                    <label class="Form-Label" for="name">Ім'я користувача</label>
                    <input name="name" id="name" class="Form-Reg-Pass-Input" type="text" placeholder="Напишіть ім'я">
                    <label class="Form-Label" for="Link_soc">Посилання на Інстаграм</label>
                    <input name="LinkSocial" id="link_Social" class="Form-Reg-Pass-Input" type="text" placeholder="Посилання на Instagram">
                    <label class="Form-Label" for="info">Введіть email</label>
                    <input name="email" id="email" type="email" class="Form-Reg-Pass-Input"  placeholder="Напишіть email"></input>
                    <Label class="Form-Label" for="pass">Пароль</Label>
                    <input name="pass" id="pass" class="Form-Reg-Pass-Input" type="password" placeholder="Введіть пароль">
                    <label for="repass" class="Form-Label">Повторіть пароль</label>
                    <input name="pass_2" id="repass" class="Form-Reg-Repass-Input" type="password" placeholder="Повторіть пароль">
                    <p class="Form-Question">Маєте акаунт ? <a href="Authorization.php" class="Linked-Authorization">Авторизуватись</a></p>
                    <button type="submit" name="signup" class="Button-Registration-Museum">Зареєструватись</button>
                </form>
            </div>
            <p> <?php if($showError){ echo showError($errors); } ?> </p>
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