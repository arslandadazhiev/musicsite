<?php 
        $host = 'localhost';  // Хост, у нас все локально
        $user = 'root';    // Имя созданного вами пользователя
        $pass = 'root'; // Установленный вами пароль пользователю
        $db_name = 'musicsite';   // Имя базы данных
        $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
        $id = $_GET['id'];


        // Ругаемся, если соединение установить не удалось
        if (!$link) {
        echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
        exit;
        }

        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="musicsite.css">
    <title>Musikality</title>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300&display=swap');
</style>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;800&display=swap');
</style> 
</head>
<body>

<header>

<div class="header_wr">
    <div class="header_items"> 

        <div class="item">   
             <div id="logo">
            <p>Musikality</p>
        </div>
    </div>
    <div class="item">   
        <div class="black_white">
            <div class="black_white_items">
                <div class="black">
                    <img src="int/о нас.png" alt="">
                
                      </div>
                <div class="black">
                   
                    <img src="int/отзывы.jpg" alt="">
                
                    </div>
                <div class="white">
                      <img src="int/главная.jpg" alt="">
                    
                    </div>
            </div>
        
        </div>
    </div>

    <div class="item">   
        <div id="avatar">
        <img src="pixxx/ava.jpg" >
        </div>
       
    </div>
    <div class="item"> 
    <div id="language">
            <div class="top">

            </div>
            <div class="mid">
                <img src="int/RUФлаг.png" >
                <p>RU</p>
                <img src="int/СтрелкавыбораЯзыка.svg" alt="">
            </div>
            <div class="bot">
                
            </div>
        </div> 
     </div>
</div>

</div>

</header>



<div class="subscribe_wrap">
    
<div class="offer">
    <div class="text">  
        <p> Слушай то что любишь </p>
  <label >без рекламы</label>
    </div>
  
    <button>
        Купить подписку
    </button>
</div>
</div>

<div class="toptracks_wrap">
<center><label >Топ треков</label></center>

<div class="toptrack_form">
    
    <a href="trackpage.php?id=1"> 
        <div class="toptrack_item">
        <img src="pixxx/image 5.png" >
        <div class="info"> 
        <h3>Грязь</h3>
        <p>Oxxxymiron</p>
        </div>
    </div></a>
    <a href="trackpage.php?id=3"> 
    <div class="toptrack_item">
    <img src="pixxx/image 10.png" >
    <div class="info"> 
        <h3>Love is Short</h3>
        <p>Otoboke Beaver</p>
        </div>
    </div>
    </a>
    <a href="trackpage.php?id=4"> 
    <div class="toptrack_item">
    <img src="pixxx/image 8.png" >
    <div class="info"> 
        <h3>Her</h3>
        <p>Tyler, The Creator</p>
        </div>
    </div>
    </a>
    <a href="trackpage.php?id=5"> 
    <div class="toptrack_item">
    <img src="pixxx/image 9.png" >
    <div class="info"> 
        <h3>Сукины дети</h3>
        <p>1.Kla$</p>
        </div>
    </div>
    </a>
    <a href="trackpage.php?id=6"> 
    <div class="toptrack_item">
    <img src="pixxx/image 7.png" >
    <div class="info"> 
        <h3>Paranoid</h3>
        <p>Black Sabbath</p>
        </div>
    </div>
    </a>
    <a href="trackpage.php?id=2"> 
    <div class="toptrack_item">
    <img src="pixxx/image 6.jpg" >
    <div class="info"> 
        <h3>Дакимакура</h3>
        <p>Мэйби Бэйби</p>
        </div>
    </div>
    </a>
</div>

</div>



<div class="top_albums_wrap">
<center> <label >Топ альбомов</label></center>

<div class="top_album_form">
    <div class="top_alb_item">
        <div  id="n3" > 
        <img src="pixxx/Image 14.png" width="300px" height="300px" >
        </div>
        <div class="alb_info"> 
        <h3>Акустический альбом</h3>
        <p>Король и Шут</p>
        </div>
    </div>
     <div class="top_alb_item">
    <div  id="n1"> 
    <img src="pixxx/Image 11.png" width="300px" height="300px" >
    </div>
        <div class="alb_info"> 
        <h3>Сукины дети</h3>
        <p>1.Kla$</p>
        </div>
    </div>
    <div class="top_alb_item">
    <div  id="n2"> 
    <img src="pixxx/Image 16.png" width="300px" height="300px" >
    </div>
        <div class="alb_info"> 
        <h3>2112</h3>
        <p>Rush</p>
        </div>
    </div>
</div>

</div>



<div class="topartist">
    <center><label >Топ артистов</label></center>

<div class="top_artist_catalog">

    <div class="top_artist_catalog_item">
        <img src="pixxx/image 17.png" >
        <div class="title">
            <h2>Слава КПСС</h2>
        </div>
    </div>
    <div class="top_artist_catalog_item">
      <img src="pixxx/unit.jpg" >
        <div class="title">
            <h2>UN|T</h2>
        </div>
    </div>
    <div class="top_artist_catalog_item">
    <img src="pixxx/молодёжвыбираеткосмос.jpg" >
        <div class="title">
            <h2>Молодёжь выбираеткосмос</h2>
        </div>
    </div>
    <div class="top_artist_catalog_item">
    <img src="pixxx/m1000x1000.png" >
        <div class="title">
            <h2>Овсянкин</h2>
        </div>
    </div>
    <div class="top_artist_catalog_item">
    <img src="pixxx/IF3CqAE23jc3Y.jpg" >
        <div class="title">
            <h2>шумные и угрожающие выходки </h2>
        </div>
    </div>
    <div class="top_artist_catalog_item">
    <img src="pixxx/сеул.jpg" style="width:200px ;height:200px;" >
        <div class="title">
            <h2>лезвие сеул</h2>
        </div>
    </div>




</div>

</div>
<footer class="footer">
<div class="footer_content">
        <div class="razdeli">
        <h2>РАЗДЕЛЫ<h2>
        <p>ПРАВИЛА САЙТА</p>
        <p>DMCA</p>
        <p>COPYRYGHT</p>
        </div>

        <div class="razdeli">
        <h2>ИНФО</h2>
        <p>ANDROID</p>
        </div>

        <div class="razdeli">
        <h2>КОНТАКТЫ</h2>
        <a href="https://vk.com/mi.tut.prosta2"target="_blank"><img src="int/tw_white.png" ></a> 
        <a href="https://vk.com/mi.tut.prosta2"target="_blank"><img src="int/vk_white.png" ></a> 
        </div>
</div>



</footer>
    
</body>
</html>