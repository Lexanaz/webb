<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>  Главная страница </title>
    <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
</head>
<body>
<header>
    <picture>
        <img src="https://cdn.logo.com/hotlink-ok/logo-social-sq.png" class="logo" />
    </picture>

    <form class="head">
        <input type="search" placeholder="Поиск по сайту">
        <input type="submit" value="Найти">
    </form>

    <a class="head1">Связаться с нами: +7 999 999 99 99</a>
    <a class="head1">Мы в соцсетях:</a>
    <img src="https://cdn.worldvectorlogo.com/logos/vk-1.svg" class="logo" />
    <img src="https://upload.wikimedia.org/wikipedia/ru/thumb/9/9f/Twitter_bird_logo_2012.svg/1261px-Twitter_bird_logo_2012.svg.png" class="logo" />
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/1200px-Facebook_Logo_%282019%29.png" class="logo" />
</header>

<nav class="mobile-menu">
    <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
    <label for="checkbox" class="mobile-menu__btn"><div class="mobile-menu__icon"></div></label>
    <div class="mobile-menu__container">
        <ul class="mobile-menu__list">
            <li class="mobile-menu__item"><a href="#" class="mobile-menu__link">Главная</a></li>
            <li class="mobile-menu__item"><a href="#" class="mobile-menu__link">Не главная</a></li>
            <li class="mobile-menu__item"><a href="#" class="mobile-menu__link">Другая</a></li>
        </ul>
    </div>
</nav>
<section>
    <h1>Новости из разных уголков света</h1>
    <div class="news">
        <p><a href="#">В Бразилии обнаружили тысячи пропавших людей</a></p></div>
    <div class="news">
        <p><a href="#">Подольск стал курортом высшего класса</a></p></div>
    <div class="news">
        <p><a href="#">Мне хочется спать. Почему?</a></p></div>
    <div class="news">
        <p><a href="#">В Германии с этого дня нельзя поклоняться Пх’нглуи мглв’нафх Ктулху Р’льех вгах’нагл фхтагн</a></p></div>
    <div class="news">
        <p><a href="#">Была обнаружена новая хтоническая планета, на которой могла возникнуть жизнь</a></p></div>
</section>
<section>
    <h1>Новости из России</h1>
    <div class="news">
        <p><a href="#">Барнаул. Алтайский край. Последнее место обороны человечества?</a></p></div>
    <div class="news">
        <p><a href="#">В Екатеринбурге массово радуются люди</a></p></div>
    <div class="news">
        <p><a href="#">В Москве участились случаи</a></p></div>
    <div class="news">
        <p><a href="#">Уфу переименовали. Теперь она Башкартостанстан</a></p></div>
    <div class="news">
        <p><a href="#">Блогерство запретили. Наказание за нарушение закона - смерть</a></p></div>
</section>
<main>
    <h1> Главные новости </h1>
    <div class="news_block">
        <p>Президент США Джо Байден забыл кто он и где он находится прямо на заседании Конгресса</p>
        <a href="#"><img src="https://media.newyorker.com/photos/5d7b86a597788f00095a8245/master/w_2560%2Cc_limit/Cassidy-BidenThirdDebate.jpg" class="news_logo" /></a>
    </div>
    <div class="news_block">
        <p>Учёные выяснили в чём заключается послание "Квадрата Малевича". Вы не поверите....</p>
        <a href="#"><img src="https://www.fulcrumgallery.com/product-images/P818697-10/black-square-c-1923.jpg" class="news_logo" /></a>
    </div>
    <div class="news_block">
        <p>По всему миру идут разговоры о аномальной активности квадратов и всем, что с ними связано. пытаемся развеять этот миф.</p>
        <a href="#"><img src="https://wallbox.ru/resize/1280x1024/wallpapers/main/201422/1cabb2aede1e3b6.jpg" class="news_logo" /></a>
    </div>
    <div class="news_block">
        <p>Люди со всего мира жалуются, что у них проблемы с мыслями, в основном с фантазией. Помогаем разобраться в этом</p>
        <a href="#"><img src="https://valevskinika.ru/wp-content/uploads/2020/05/s1200-2.jpg" class="news_logo" /></a>
    </div>
	<div class="news_block">
	<?php
	include_once('sql.php');
	$sql = mysqli_query($db, "SELECT * FROM `news`");
	while ($end_data = mysqli_fetch_array($sql)) {
		$id = $end_data['idnews'];
		$text = $end_data['text'];
		$img = $end_data['img'];
		$del = $_GET['del']
	?>
		<p><?php echo "$text"; ?></p>
		<a href="#"><img class="news_logo" src="<?php echo "$img"; ?>" /></a>
		<a name="del" href="?del=<?php echo "$id"; ?>">X</a>
	<?php
	}
	
	if(isset($_GET['del'])) {
		$sql = mysqli_query($db, "DELETE FROM `news` WHERE `idnews` = '$del'");
?>
<script>    
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF'];?>');
		location.reload() 
    }
</script>
<?php
	}
	?>
	
	</div>
<form enctype="multipart/form-data" method="post" action="putimage.php">
<p>Добавить новость:</p>
Изображение: <input type="file" name="img" />
Текст: <input type="text" name="text" />
<input type="submit" value="Загрузить" name="upload"/>
</form>
</main>

<footer>
    <i>Сайт создан от балды</i>
</footer>
</body>

</html>