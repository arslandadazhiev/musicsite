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
 
$sql = mysqli_query($link, "SELECT `id`, `title`, `artist`  FROM `tracks` WHERE id=$id ");
//Если вставка прошла успешно
$row = mysqli_fetch_array($sql);



 
 //ВЫборка фото 

 $photoq=mysqli_query($link, "SELECT `cover`FROM `tracks` WHERE id=$id ");
 $photo = mysqli_fetch_array($photoq);

 $audioq=mysqli_query($link, "SELECT `track_file`FROM `tracks` WHERE id=$id ");
 $audio = mysqli_fetch_array($audioq);
 
 
 //выборка главы
 //$chapterq=mysqli_query($link, "SELECT `pages`FROM `title` WHERE id=$id ");
// $chapter = mysqli_fetch_array($chapterq);
// echo $photo[0];


 
?>
 


<!DOCTYPE html>
 
<head>
    <meta charset="UTF-8">
  
    <title>Слушать <?=$row[2]."-".$row[1]?></title>
    <link rel="stylesheet" href="musicsite.css">
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

      <a href="index.php">  <div class="item">   
             <div id="logo">
            <p>Musikality</p>
        </div></a>
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







<div class="track_form">
    
    
        <div class="track_item">
        <img src="pixxx/<?=$photo[0]?> " style="   width: 300px;
height: 300px;" >
        <div class="info"> 
        <h3><?=$row[1]?></h3>
        <p><?=$row[2]?></p>
        </div>
    </div>
    <div class="audio_col">
            <img src="int/play.png" id="icon" >

    </div>
 <audio id="mySong">
    <source src="tracks/<?=$audio[0].".mp3" ?> ">
 </audio>


<script>
    var mySong=document.getElementById("mySong");
    var icon=document.getElementById("icon");

    icon.onclick=function(){
       if(mySong.paused){
        mySong.play();
        icon.src="int/pause.png";
       }else{
        mySong.pause();
        icon.src="int/play.png";
       }
    }
</script>

</div>
 
</div>

 
    
</body>
</html>