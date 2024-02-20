<?php
    require "db.php";
    $museumid = $_GET['id'];
    $museum = R::findOne('museums', 'id = ?', array($_SESSION['museum']->id));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/MuseumCreateUserStyle.css">
    <title>Назва музею</title>
</head>

<script>
    function flipPanel(element) {
  const contentContainer = element.querySelector('.content-container');
  contentContainer.style.transform = contentContainer.style.transform === 'rotateY(180deg)' ? 'rotateY(0deg)' : 'rotateY(180deg)';
}
</script>

<body>
    <?php require 'Construction/Header_Create_Element.php';?>

    <div class="wrapper">
        <div class="content">
            <section class="Section-Panels">

                <?php 
                    $element = R::findAll('elements', 'museumid = ?', array($museumid));
                    foreach($element as $elements):
                ?>

                <div class="panel" onclick="flipPanel(this)">
                    <div class="content-container">
                        <div class="content_card front">
                            <img class="img-panel" src="upload/avatars/<?= $elements->imageElement;?>" alt="Картинка експонату">
                            <div class="name_content">
                                <p class="first-content"><?= $elements->nameElement; ?></p>
                            </div>
                            
                        </div>
                        <div class="content_card back">
                            <div class="container_back_content">
                                <p><?= $elements->aboutElement ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <form action="/process_chat.php" method="post" class="Form_Comentaries" id="Form_Comentaries">
                    <textarea name="textComment" id="textComment" class="textComment" placeholder="Напишіть повідомлення в чат"></textarea>
                    <div class="emojii_container">
                        <div>
                            <img src="emoji.png" class="EmojiImage" onclick="show_emoji()">
                        </div>
                        <div class="emojis">
                            <span id="emoji0" onclick="emoji(this.innerHTML)">&#128511;</span>
                            <span id="emoji1" onclick="emoji(this.innerHTML)">&#128512</span>
                            <span id="emoji2" onclick="emoji(this.innerHTML)">&#128513</span>
                            <span id="emoji3" onclick="emoji(this.innerHTML)">&#128514</span>
                            <span id="emoji4" onclick="emoji(this.innerHTML)">&#128515</span>
                            <span id="emoji5" onclick="emoji(this.innerHTML)">&#128516</span>
                            <span id="emoji6" onclick="emoji(this.innerHTML)">&#128517</span>
                            <span id="emoji7" onclick="emoji(this.innerHTML)">&#128518</span>
                            <span id="emoji8" onclick="emoji(this.innerHTML)">&#128519</span>
                            <span id="emoji9" onclick="emoji(this.innerHTML)">&#128520</span>
                            <span id="emoji10" onclick="emoji(this.innerHTML)">&#128521</span>
                            <span id="emoji11" onclick="emoji(this.innerHTML)">&#128522</span>
                            <span id="emoji12" onclick="emoji(this.innerHTML)">&#128523</span>
                            <span id="emoji13" onclick="emoji(this.innerHTML)">&#128524</span>
                            <span id="emoji14" onclick="emoji(this.innerHTML)">&#128525</span>
                            <span id="emoji15" onclick="emoji(this.innerHTML)">&#128526</span>
                            <span id="emoji16" onclick="emoji(this.innerHTML)">&#128527</span>
                            <span id="emoji17" onclick="emoji(this.innerHTML)">&#128528</span>
                            <span id="emoji18" onclick="emoji(this.innerHTML)">&#128529</span>
                            <span id="emoji19" onclick="emoji(this.innerHTML)">&#128530</span>
                            <span id="emoji21" onclick="emoji(this.innerHTML)">&#128531</span>
                            <span id="emoji22" onclick="emoji(this.innerHTML)">&#128532</span>
                            <span id="emoji23" onclick="emoji(this.innerHTML)">&#128533</span>
                            <span id="emoji24" onclick="emoji(this.innerHTML)">&#128534</span>
                            <span id="emoji25" onclick="emoji(this.innerHTML)">&#128535</span>
                            <span id="emoji26" onclick="emoji(this.innerHTML)">&#128536</span>
                            <span id="emoji27" onclick="emoji(this.innerHTML)">&#128537</span>
                            <span id="emoji28" onclick="emoji(this.innerHTML)">&#128538</span>
                            <span id="emoji29" onclick="emoji(this.innerHTML)">&#128539</span>
                            <span id="emoji30" onclick="emoji(this.innerHTML)">&#128540</span>
                            <span id="emoji31" onclick="emoji(this.innerHTML)">&#128541</span>
                            <span id="emoji32" onclick="emoji(this.innerHTML)">&#128542</span>
                            <span id="emoji33" onclick="emoji(this.innerHTML)">&#128543</span>
                            <span id="emoji34" onclick="emoji(this.innerHTML)">&#128544</span>
                            <span id="emoji35" onclick="emoji(this.innerHTML)">&#128545</span>
                            <span id="emoji36" onclick="emoji(this.innerHTML)">&#128546</span>
                            <span id="emoji37" onclick="emoji(this.innerHTML)">&#128547</span>
                            <span id="emoji38" onclick="emoji(this.innerHTML)">&#128548</span>
                            <span id="emoji39" onclick="emoji(this.innerHTML)">&#128549</span>
                            <span id="emoji40" onclick="emoji(this.innerHTML)">&#128550</span>
                            <span id="emoji41" onclick="emoji(this.innerHTML)">&#128551</span>
                            <span id="emoji42" onclick="emoji(this.innerHTML)">&#128552</span>
                            <span id="emoji43" onclick="emoji(this.innerHTML)">&#128553</span>
                            <span id="emoji44" onclick="emoji(this.innerHTML)">&#128554</span>
                            <span id="emoji45" onclick="emoji(this.innerHTML)">&#128555</span>
                            <span id="emoji46" onclick="emoji(this.innerHTML)">&#128556</span>
                            <span id="emoji47" onclick="emoji(this.innerHTML)">&#128557</span>
                            <span id="emoji48" onclick="emoji(this.innerHTML)">&#128558</span>
                            <span id="emoji49" onclick="emoji(this.innerHTML)">&#128559</span>
                            <span id="emoji50" onclick="emoji(this.innerHTML)">&#128560</span>
                            <span id="emoji51" onclick="emoji(this.innerHTML)">&#128561</span>
                            <span id="emoji52" onclick="emoji(this.innerHTML)">&#128562</span>
                            <span id="emoji53" onclick="emoji(this.innerHTML)">&#128563</span>
                            <span id="emoji54" onclick="emoji(this.innerHTML)">&#128564</span>
                            <span id="emoji55" onclick="emoji(this.innerHTML)">&#128565</span>
                            <span id="emoji56" onclick="emoji(this.innerHTML)">&#128566</span>
                            <span id="emoji57" onclick="emoji(this.innerHTML)">&#128567</span>

                        </div>
                    </div>
                    
                    <button type="submit" name="sendComment"  class="Button_SendComment">Надіслати</button>
                </form>
                    <div class="comments_container">
                        <?php 
                            $chat = R::findAll('chats');
                            foreach($chat as $chats):
                        ?>
                            <div class="comments_user">
                                <div class="image_author_comment">
                                    <img class="author_comment_image" src="upload/avatars/<?= $chats->EmojiImage;?>" alt="">
                                </div>
                                <div class="author_and_comment">
                                    <div class="author_comment">
                                        <p><?= $chats->authorComent ?></p>
                                    </div>
                                    <div class="comment_museum">
                                        <p><?= $chats->textComment ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                
            </section>
        </div>
    </div>

    <script>
        click = false;
        function show_emoji() {
            if(click == false){
                document.getElementsByClassName("emojis")[0].style.height = "142px";
                document.getElementsByClassName("emojis")[0].style.padding = "8px 0px";
                click = true;
            }else{
                document.getElementsByClassName("emojis")[0].style.height = "0px";
                document.getElementsByClassName("emojis")[0].style.padding = "0px";
                click = false;
            } 
        }
        function emoji(emoji) {
            document.getElementById("textComment").value += emoji;
        }
    </script>

    <?php require 'Construction/Footer.php'; ?>
</body>
</html>