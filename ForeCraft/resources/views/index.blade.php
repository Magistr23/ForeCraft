<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>ForeCraft</title>
    <style>
        * {
            margin: 0;
        }
        html, body {
            height: 100%;
        }
        body {
            background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(255,255,255,1) 100%)no-repeat;
        }
        .header {
            background-color: #595959;
        }
        .header-menu{
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-around;
            margin: 0 10%;
        }
        ul {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
        }
        li {
            margin: 20px 0;
        }
        .menu-element {
            color: white;
            margin: 20px 0;
        }
        .tab-content {
            margin: 0 30%;
        }
        button {
            font-size: 20px !important
        }
    </style>
</head>
<body>
    <header class="header">
        <menu class="header-menu">
            <div class="menu-element">mc.forecraft.org</div>
            <div class="menu-element">Правила</div>
            <div class="menu-element">Группа вк</div>
            <div class="menu-element">Описание доната</div>
            <div class="menu-element">Дискорд</div>
        </menu>
    </header>
    <div class="conteiner">
        <div class="conteiner-form">
            @include('/components/form')
        </div>
    </div>
    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </footer>
</body>
</html>