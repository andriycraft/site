<?php
//header('HTTP/1.0 503');
//die('<h3>503 - Сайт на тех. обслуговуванні</h3><a href="https://andriycraft.instatus.com/">Більше інформації</a>');

$action = $_GET["action"];
if ($action == "privacy") { 
    echo '<iframe src="./Privacy.php" style="border:0; height: 100%; width: 100%;">';
    die();
}

?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="minecraftserver, andriycraft">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="1 days">
    <meta name='language' content="UA">
    <meta name='url' content='https://andriycraft.page/'>
    <meta name='reply-to' content='admin@andriycraft.page'>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="https://andriycraft.page/"/>
    <meta property="og:url" content="https://andriycraft.page"/>
    <meta property="og:title" content="AndriyCraft"/>
    <meta property="og:image" content="https://andriycraftstaticfiles.000webhostapp.com/newwebsitefiles/img/server-icon.png"/>
    <meta property="og:locale" content="UK_ua"/>
    <meta name="twitter:site" content="AndriyCraft"/>
    <meta name="twitter:title" content="AndriyCraft"/>
    <meta name="twitter:description" content="AndriyCraft"/>
    <meta name="twitter:image" content="https://andriycraftstaticfiles.000webhostapp.com/newwebsitefiles/img/server-icon.png" />
    <title>AndriyCraft | Головна сторінка</title>
    <link href="https://andriycraftstaticfiles.000webhostapp.com/newwebsitefiles/img/server-icon.png" rel="icon">
    <link href="https://andriycraftstaticfiles.000webhostapp.com/newwebsitefiles/img/server-icon.png" rel="shortcut icon">
    <link href="https://cdn.andriycraft.page/static/css.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/minecraft-4" rel="stylesheet">
    <link rel="alternate" media="only screen and (max-width: 640px)" href="http://andriycraft.page/m/">
    <link rel="canonical" href="http://andriycraft.page/m/">
    <script type="text/javascript">
    if (screen.width <= 699) {
        location.href = "./m/";
        
    }
    if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
        location.href("./m/");
    }
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1597537622611408"
     crossorigin="anonymous"></script>
</head>
<body>
    <div id="pre-header">
        <div class="pre-header_content">
            <b>
                <a href="#" onclick="copyserverip()">play.andriycraft.page</a>
            </b>
        </div> 
    </div>
    <header class="header">
        <p class="header_title">AndriyCraft</p>
        <nav class="navbar">
            <a class="navbar-link" style="font-family: 'Minecraft', sans-serif;" href="#" onclick="copyserverip()">play.andriycraft.page</a>
            <a class="navbar-link" href="https://cdn.andriycraft.page/stat/forum/click">Форум</a>
            <a class="navbar-link" href="https://andriycraft.instatus.com/">Статус</a>
            <a class="navbar-link" href="#" onclick="v()">Голосовати</a>
        </nav>
    </header>
    <hr>
    <center class="screenshots_from_server">
        <h3>Скріншоти з сервера:</h3>
        <div class="screenshots_from_server_container">
          <div class="screenshots_from_server_item">
              <img class="screenshots_from_server_img" src="https://newcdn.andriycraft.page/newwebsitefiles/img/bg1.png" style="height:120px; width:220px;" alt="">
          </div>
          <div class="screenshots_from_server_item">
               <img class="screenshots_from_server_img" src="https://newcdn.andriycraft.page/newwebsitefiles/img/bg2.png" style="height:120px; width:220px;" alt="">
          </div>
          <div class="screenshots_from_server_item">
               <img class="screenshots_from_server_img" src="https://newcdn.andriycraft.page/newwebsitefiles/img/bg3.png" style="height:120px; width:220px;" alt="">
          </div>
    </div>
    </center>
    <center class="review">
        <h3>Останній відгук:</h3>
        <div id="review_container">
            <div class="review_1">
                <p id="review_text">
                    <script>
                    function getreviews() {
                        let request = new XMLHttpRequest(); 
                        request.onreadystatechange = function() {
                         if (this.readyState == 4) { 
                            document.getElementById("review_text").innerHTML = request.responseText;
                         }  
                        }
                        request.onerror = function() { 
                            document.getElementById("review_text").style.color = "red"
                            document.getElementById("review_text").innerHTML = "Невдалося завантажити відгуки :("
                        }
                        request.open("POST", "https://cdn.andriycraft.page/api/getreviews", true); 
                        request.send(); 
                        
                    }
                    getreviews()
                    </script>
                </p>
            </div>
        </div>
        <a href="./addreview.php">Добавити свій відгук</a> <br>
    </center>
    <hr>
    <center class="news">
        <h3>Новини сервера:</h3>
           <br>
		    <br>
		    <br>
		    <br>
		    <br><h3>Оновлення сервера AndriyCraft</h3> <br>
		    <p>
<h4>Список змін:</h4>

<p>Пофікшено багато експлоїтів</p>

<h4>Список змін дуелей:</h4>
<p>/minecraft:tell <нік> @e @e @e @e @e @e - Більше не крашить сервер</p>
<p>Пофікшено баг в /report</p>
		    <br>
		    <br>
            <br>
		    <br>         
		    <br>
		    <br>
            <br>
            <br><h3>Оновлення сервера AndriyCraft</h3> <br>
<h4>Список змін Murder Mystery:</h4>
<p>Пофікшено багато багів
<h4>Список змін:</h4>
<p>Поліпшено захист сервера</p>
<p>ПОВНА (без багів) підтримка 1.19</p>
<p>Тепер максимум гравців, які можуть грати одночасно на сервері - 50</p>
<p>Більше не можна приєднатисья на сервер з росії</p>
		    <br>         
		    <br>
		    <br>
            <br>
		    <br>     
		    <br>
		    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1597537622611408"
     crossorigin="anonymous"></script>
<!-- aa -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1597537622611408"
     data-ad-slot="8073211696"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
		    <br>
            <br>
		    <br>    
		    <br><h3>Оновлення сервера AndriyCraft</h3> <br>
<h4>Список змін /report:</h4>
<p>[1] Поправлено граматичну помилку</p>

<h4>Список змін системи акаунтів:</h4>
<p>[2] Поправлено граматичну помилку</p>

<h4>Список змін Murder Mystery:</h4>
<p>[3] Оновлено дизайн ScoreBoard<br> 
[4] Поправлено переклад<br> 
[5] Поправлено граматичну помилку в ScoreBoard<br> 
[6] Тепер ip andriycraft-a відображається в scoreboard<br> 
[7] Пофікшено дуже рідкісний баг з запуском гри<br> 
[8] Переназвано предмет 'вернутись в лоббі' на 'повернутись в лоббі'<br> 
[9] Тепер з гри можна вийти використовуючи /lobby, а не тільки /hub<br> 
[10] Тепер за кожне підбирання стріли детективом додається +1 стріла<br> 
[11] Пофікшено баги з рандомними зіллями<br> 
[12] Пофікшено баги з "невідомими" зіллями<br> 
[13] Пофікшено баги з статистикою<br> 
[14] Оновлено дизайн статистики<br> 
[15] Пофікшено баги з неправильною кількістю гравців в scoreboard<br> 
[16] Добавлено 'Мін. Гравців' в ScoreBoard<br> 
[17] Пофікшено баги з спавном золота на шахматні карті</p>
		    </p>
		    <br>
            <br>
		    <br>   
		    <br>
		    <br>
            <br>
		    <br> 
		    <br>
			<br>
		    <br>
	    	<br>
			<br>
	    	<br>
	    	<br>
			<br>
	    	<br>
			<br>
			<h4>Більше оновлень: <a style="text-decoration: underline" href="../forum">на нашому форумі</a></h4>
	    	<br>
			<br>
			<br>
			<br>
		    <br>
	    	<br>
			<br>
	    	<br>
	    	<br>
			<br>
	    	<br>
			<br>
	    	<br>
    </center>
    <center class="footer">
        <p><a href="?action=privacy">Privacy Policy</a> </p>
        <br>
        <br>
        <p>За питаннями щодо сайту: admin@andriycraft.page</p>
        <p>Всі дії фіксуються адміністраторами</p>
        <br>
        <p>
        Шрифт The Minecraft Font (Uploaded by Cameral Dias) з <a style="max-width: 5%" href="https://www.cdnfonts.com/minecraft-4.font">https://www.cdnfonts.com/minecraft-4.font</a> <br>
        </p>
        <br>
        <a href="https://icons8.com/icon/121551/pixel-star">Pixel Star icon by Icons8</a>
        <br>
        <p>© 2020 - 2022 andriycraft.page</p>
        <br>
    </center>
    <script src="https://cdn.andriycraft.page/static/js.js" type="text/javascript"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11" type="text/javascript"></script>
</body>
</html>