<?php 
    require "db.php";
    $data = $_POST;
    $user = R::findOne('users', 'id = ?', array($_SESSION['user']->id));

    function loadAvatar($avatar){
        $type = $avatar['type'];
        $name = md5(microtime()).'.'.substr($type, strlen("image/"));
        $dir = 'upload/avatars/';
        $uploadfile = $dir.$name;

        if(move_uploaded_file($avatar['tmp_name'], $uploadfile)){
            $user = R::findOne('users', 'id = ?', array($_SESSION['user']->id));
            $user->avatar = $name;
            R::store($user);
        }else{
            return false;
        }

        return true;
    }

    if(isset($data['set_avatar'])){
        $avatar = $_FILES['avatar'];

        if(avatarSecurity($avatar)){
            loadAvatar($avatar);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/profilStyle.css">
    <title>Профіль</title>
</head>

<body>
    
    <div class="wrapper">
        <?php require 'Construction\Header.php'; ?>
        <div class="content">
            <div class="content_container">
                <?php if($user): ?>
                <div class="profil">
                    <div class="frame">
                      <img src="upload/avatars/<?= $user->avatar;?>" class="Avatarka">
                    </div>
                    <form action="/Profil.php" method="post" class="New_Avatar_Form" enctype="multipart/form-data">
                        <input type="file" name="avatar" class="Profil_Input">
                        <button type="submit" name="set_avatar" class="Button_Obnova">Обновити аватарку</button>
                    </form>
                    <h2 class="Name_Profil">Ім'я</h2>
                    <p class="Name_Profile"><?= $user->name;?></p>

                    <div class="Social">
                        <h2 class="SocialLink_Profil">Соц мережі</h2>
                        <div class="container_logo_soc">
                            <a href="<?= $user->LinkSocial;?>"><img src="download.jpg" class="Logo_img"></a>
                            <p class="SocialLink_Profile"><?= $user->LinkSocial;?></p>
                        </div>
                    </div>
                    <a href="/logout.php"><button class="Button_Logout">Вийти</button></a>
                </div>
                <?php else: ?>
                        <h1>Ви не авторизовані !</h1>
                <?php endif; ?>
            </div>
        </div>
        <?php require 'Construction\Footer.php'; ?>
    </div>
    
</body>
</html>