<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://use.fontawesome.com/c910442ee2.js"></script>
    <meta charset="UTF-8">
    <title>Base template</title>
    <link rel="stylesheet" href="buttons.css?<?php echo(microtime(true)); ?>">
    <link rel="stylesheet" href="inputs.css?<?php echo(microtime(true)); ?>">
    <link rel="stylesheet" href="main.css?<?php echo(microtime(true)); ?>">
    <link rel="stylesheet" href="header.css?<?php echo(microtime(true)); ?>">
    <link rel="stylesheet" href="booking_table.css?<?php echo(microtime(true)); ?>">
</head>
<body>
    <div class="header">
        <nav>
            <ul class="menu">
                <li>
                    <form class="form-vertical search-form">
                            <div class="input-wrapper">
                                <input type="text" class="input input-search">
                                <span class="search-pad">
                                    <input type="submit" class="btn-seatch" value="" >
                                </span>
                            </div>
                    </form>
                </li>
                <li>
                    <a class="active" href="#">Таблица бронирований</a>
                </li>
                <li>
                    <a href="#">Касса</a>
                    <ul class="dropdown">
                        <li>
                            <a href="#">Операции и остаток в кассе</a>
                        </li>
                        <li>
                            <a href="#">Залоги</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Финансы и отчеты</a>
                    <ul class="dropdown">
                        <li>
                            <a href="#">Доходы и прибыль</a>
                        </li>
                        <li>
                            <a href="#">Издержки</a>
                        </li>
                        <li>
                            <a href="#">Загрузка номерного фонда</a>
                        </li>
                        <li>
                            <a href="#">Загрузка отеля</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Пользователи</a>
                </li>
                <li>
                    <a href="#">Настройки</a>
                </li>
            </ul>
            <span class="mobile-open">
                <div class="burger-wrapper">
                    <span class="bugrer-line"></span>
                    <span class="bugrer-line"></span>
                    <span class="bugrer-line"></span>
                </div>
            </span>
            <div class="messenger">
                <i class="fa fa-commenting-o fa-2x" aria-hidden="true"></i>
                <span class="msg-cnt">0</span>
            </div>
            <div class="auth-user">
                <a class="user-name" href="#">Admin</a>
                <div class="user-menu">
                    <a href="#">Выход</a>
                </div>
            </div>
            <div class="clear"></div>
        </nav>
    </div>