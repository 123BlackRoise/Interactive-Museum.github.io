<?php
    require "db.php";
    $user = R::findOne('users', 'id = ?', array($_SESSION['user']->id));
    $museum = R::findOne('museums', 'id = ?', array($_SESSION['museum']->id));
    $museumid = $museum->id;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Музеї користувачів</title>
    <link rel="stylesheet" href="CSS/MyMuseum_Style.css">
</head>

<script>
    function flipPanel(element) {
  const contentContainer = element.querySelector('.content-container');
  contentContainer.style.transform = contentContainer.style.transform === 'rotateY(180deg)' ? 'rotateY(0deg)' : 'rotateY(180deg)';
}
</script>

<body>
    <?php require 'Construction\Header_Search.php' ?>
    <div class="wrapper">
        <div class="content">
            <section class="Section-Panels">
                <?php 
                    $museum = R::findAll('museums');
                    foreach($museum as $museums):
                ?>
                <div class="panel" onclick="flipPanel(this)">
                    <div class="content-container">
                        <div class="content_card front">
                            <img class="img-panel" src="upload/avatars/<?= $museums->ImageMuseum;?>" alt="Картинка експонату">
                            <p class="first-content"><?= $museums->nameMuseum ?></p>
                            <p class="first-author">Автор: <?= $museums->author ?></p>
                            <div class="views_comentw_wrap">
                                    <span class="views"><?= $museums->views; ?></span>
                                    <span class="comments"><?= $museums->comments;?></span>
                            </div>
                        </div>
                        <div class="content_card back">
                            <div class="container_back_content">
                                <p>Категорія: <?= $museums->category ?></p>
                                <p>Про музей: <?= $museums->ecsponatinfo ?></p>
                                <a href="MuseumCreateUser.php?id=<?= $museums->id; ?>" class="link-panel">Перейти до музею</a>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php endforeach; ?>
            </section>
        </div>
    </div>

    <?php require 'Construction\Footer.php' ?>
</body>
</html>