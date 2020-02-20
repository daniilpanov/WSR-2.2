<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Поиск пропавших домашних животных</title>
    <!-- Подключаем стили -->
    <link type="text/css" rel="stylesheet" href="css/lib/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/my/style.css">
    <!-- Подключаем JS библиотеки -->
    <script type="text/javascript" rel="script" src="js/lib/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" rel="script" src="js/lib/bootstrap.js"></script>
    <!-- Подключаем свои JS скрипты -->
    <script type="text/javascript" rel="script" src="js/my/script.js"></script>
</head>
<body class="container-fluid">

<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand btn page-sw" href="/" id="main">Главная страница</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
        <ul class="nav navbar-nav">
            <li><a href="/posts" class="page-sw" id="posts">Все посты</a></li>
        </ul>
        <form class="navbar-form navbar-right" id="search-form" role="search" action="/posts_search">
            <div class="form-group">
                <input type="text" id="search"
                       class="form-control"
                       placeholder="Строка поиска..."
                ><button type="submit"
                         class="btn btn-success"
                         id="searching">
                    Найти объявление
                </button>
            </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown" id="reg-login">
                <a href="#" class="dropdown-toggle"
                   data-toggle="dropdown" role="button"
                   aria-expanded="false">
                    Войти/Регистрация
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="/signup" id="reg">Регистрация</a></li>
                    <li><a href="/login" id="login">Вход</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>

<div id="content">
    <h2>Поиск пропавших домашних животных</h2>
    <p>Помогите людям, потерявшим своих любимцев, найти их!</p>
    <p>
        <!--Если Вы видели бездомную кошку или собаку - найдите объявление в поиске (в верхнем меню),
        свяжитесь с хозяином животного по его контактным данным, скажите, где Вы  -->
    </p>
</div>
</body>
</html>