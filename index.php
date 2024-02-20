<?php 
    require "db.php";
    $user = R::findOne('users', 'id = ?', array($_SESSION['user']->id));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Головна</title>
    <link rel="stylesheet" href="CSS/Test.css">
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->

</head>
<body>
    <?php if($user): ?>
        <div class="wrapper">
            <?php require 'Construction\Header_Authorization.php'; ?>
            <div class="content">
                <div class="content_container">
                    <div class="Slider-Body">
                        <div class="container_slider">
                            <input type="radio" name="slider" id="s1" checked>
                            <input type="radio" name="slider" id="s2">
                            <input type="radio" name="slider" id="s3">
                            <input type="radio" name="slider" id="s4">
                            <input type="radio" name="slider" id="s5">
                            
                            <div class="cards">
                                <label for="s1" id="slide1">
        
                                    <div class="card">
        
                                        <div class="image">
                                            <img src="Images/Egipt.jpg" alt="Єгипет">
                                            <div class="dots">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
        
                                        <div class="infos">
                                            <span class="name">Таємниці Єгипту</span>
                                            <a href="#First-Museum-Name" class="btn-details">Деталі</a>
        
                                            <div class="actions">
                                                <i class="fa-regular fa-heart"></i>
                                                <i class="fa-regular fa-bookmark"></i>
                                                <i class="fa-solid fa-share-nodes"></i>
                                            </div>
                                        </div>
                                    </div>
                                </label>
        
                                <label for="s2" id="slide2">
        
                                    <div class="card">
        
                                        <div class="image">
                                            <img src="Images\zodiak.jpg" alt="zodiak">
                                            <div class="dots">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
        
                                        <div class="infos">
                                            <span class="name">Сузір'я</span>
                                            <a href="#Zodiac_Museum_Name" class="btn-details">Деталі</a>
        
                                            <div class="actions">
                                                <i id="heart" class="fa-regular fa-heart"></i>
                                                <i class="fa-regular fa-bookmark"></i>
                                                <i class="fa-solid fa-share-nodes"></i>
                                            </div>
                                        </div>
                                    </div>
                                </label>
        
                                <label for="s3" id="slide3">
        
                                    <div class="card">
        
                                        <div class="image">
                                            <img src="#" alt="">
                                            <div class="dots">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
        
                                        <div class="infos">
                                            <span class="name">Обеліск</span>
                                            <a href="/details" class="btn-details">Деталі</a>
        
                                            <div class="actions">
                                                <i class="fa-regular fa-heart"></i>
                                                <i class="fa-regular fa-bookmark"></i>
                                                <i class="fa-solid fa-share-nodes"></i>
                                            </div>
                                        </div>
                                    </div>
                                </label>
        
                                <label for="s4" id="slide4">
        
                                    <div class="card">
        
                                        <div class="image">
                                            <img src="#" alt="">
                                            <div class="dots">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
        
                                        <div class="infos">
                                            <span class="name">Мумія</span>
                                            <a href="/details" class="btn-details">Деталі</a>
        
                                            <div class="actions">
                                                <i class="fa-regular fa-heart"></i>
                                                <i class="fa-regular fa-bookmark"></i>
                                                <i class="fa-solid fa-share-nodes"></i>
                                            </div>
                                        </div>
                                    </div>
                                </label>
        
                                <label for="s5" id="slide5">
        
                                    <div class="card">
        
                                        <div class="image">
                                            <img src="#" alt="">
                                            <div class="dots">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                        </div>
        
                                        <div class="infos">
                                            <span class="name">Лабіринт</span>
                                            <a href="/details" class="btn-details">Деталі</a>
        
                                            <div class="actions">
                                                <i class="fa-regular fa-heart"></i>
                                                <i class="fa-regular fa-bookmark"></i>
                                                <i class="fa-solid fa-share-nodes"></i>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <section class="First-Museum">
                        <h2 id="First-Museum-Name" class="First-Museum-Name">Таємниці Єгипту</h2>
                        <img class="Museum-image" src="Images/Egipt.jpg" >
                        <p class="Museum-Info">Про музей</p>
                        <a class="Linked" href="Museum-First.html">Перейти до музею</a>
                    </section>
                    <section class="Zodiac-Museum">
                        <h2 id="Zodiac_Museum_Name" class="Zodiac_Museum_Name">Сузір'я</h2>
                        <img src="Images\zodiak.jpg" alt="zodiak" class="Museum-Zodiac-image">
                        <p class="Museum-Info">Про музей</p>
                        <a class="Linked" href="Zodiac-Museum.html">Перейти до музею</a>
                    </section>
                </div>
            </div>
            <?php require 'Construction\Footer.php'; ?>
        </div>
             <?php else: ?>
        <div class="wrapper">
                <?php require 'Construction\Header.php'; ?>
                <div class="content">
                    <div class="content_container">
                        <div class="Slider-Body">
                            <div class="container_slider">
                                <input type="radio" name="slider" id="s1" checked>
                                <input type="radio" name="slider" id="s2">
                                <input type="radio" name="slider" id="s3">
                                <input type="radio" name="slider" id="s4">
                                <input type="radio" name="slider" id="s5">
                                
                                <div class="cards">
                                    <label for="s1" id="slide1">
            
                                        <div class="card">
            
                                            <div class="image">
                                                <img src="Images/Egipt.jpg" alt="Єгипет">
                                                <div class="dots">
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
            
                                            <div class="infos">
                                                <span class="name">Таємниці Єгипту</span>
                                                <a href="#First-Museum-Name" class="btn-details">Деталі</a>
            
                                                <div class="actions">
                                                    <i class="fa-regular fa-heart"></i>
                                                    <i class="fa-regular fa-bookmark"></i>
                                                    <i class="fa-solid fa-share-nodes"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
            
                                    <label for="s2" id="slide2">
            
                                        <div class="card">
            
                                            <div class="image">
                                                <img src="Images\zodiak.jpg" alt="zodiak">
                                                <div class="dots">
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
            
                                            <div class="infos">
                                                <span class="name">Сузір'я</span>
                                                <a href="#Zodiac_Museum_Name" class="btn-details">Деталі</a>
            
                                                <div class="actions">
                                                    <i id="heart" class="fa-regular fa-heart"></i>
                                                    <i class="fa-regular fa-bookmark"></i>
                                                    <i class="fa-solid fa-share-nodes"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
            
                                    <label for="s3" id="slide3">
            
                                        <div class="card">
            
                                            <div class="image">
                                                <img src="#" alt="">
                                                <div class="dots">
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
            
                                            <div class="infos">
                                                <span class="name">Обеліск</span>
                                                <a href="/details" class="btn-details">Деталі</a>
            
                                                <div class="actions">
                                                    <i class="fa-regular fa-heart"></i>
                                                    <i class="fa-regular fa-bookmark"></i>
                                                    <i class="fa-solid fa-share-nodes"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
            
                                    <label for="s4" id="slide4">
            
                                        <div class="card">
            
                                            <div class="image">
                                                <img src="#" alt="">
                                                <div class="dots">
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
            
                                            <div class="infos">
                                                <span class="name">Мумія</span>
                                                <a href="/details" class="btn-details">Деталі</a>
            
                                                <div class="actions">
                                                    <i class="fa-regular fa-heart"></i>
                                                    <i class="fa-regular fa-bookmark"></i>
                                                    <i class="fa-solid fa-share-nodes"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
            
                                    <label for="s5" id="slide5">
            
                                        <div class="card">
            
                                            <div class="image">
                                                <img src="#" alt="">
                                                <div class="dots">
                                                    <div></div>
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
            
                                            <div class="infos">
                                                <span class="name">Лабіринт</span>
                                                <a href="/details" class="btn-details">Деталі</a>
            
                                                <div class="actions">
                                                    <i class="fa-regular fa-heart"></i>
                                                    <i class="fa-regular fa-bookmark"></i>
                                                    <i class="fa-solid fa-share-nodes"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <section class="First-Museum">
                            <h2 id="First-Museum-Name" class="First-Museum-Name">Таємниці Єгипту</h2>
                            <img class="Museum-image" src="Images/Egipt.jpg" >
                            <p class="Museum-Info">Про музей</p>
                            <a class="Linked" href="Museum-First.html">Перейти до музею</a>
                        </section>
                        <section class="Zodiac-Museum">
                            <h2 id="Zodiac_Museum_Name" class="Zodiac_Museum_Name">Сузір'я</h2>
                            <img src="Images\zodiak.jpg" alt="zodiak" class="Museum-Zodiac-image">
                            <p class="Museum-Info">Про музей</p>
                            <a class="Linked" href="Zodiac-Museum.html">Перейти до музею</a>
                        </section>
                    </div>
                </div>
                <?php require 'Construction\Footer.php'; ?>
        </div>
    <?php endif; ?>
</body>
</html>