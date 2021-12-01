<?php
session_start();
if (!isset($_SESSION['data'])) $_SESSION['data'] = array();
$data = $_SESSION['data'];
session_write_close();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
    <title>Lab 1</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>

<!-- Header -->
<body>
<header class="header">
    <div class="container">
        <div class="header__inner">
            <a class="header__logo" target="_blank"
               href="https://docs.google.com/spreadsheets/d/148tsdbIgCsHCHWiAtN3T1RA5vrvwnLc4LWTqHinwGYM/edit#gid=32915778">P3212</a>

            <nav class="nav">
                <a class="nav__link" target="_blank" href="https://github.com/Xaviontt">GitHub</a>
                <a class="nav__link" target="_blank" href="https://vk.com/xavionti">Титилин Павел</a>
            </nav>

        </div>
    </div>
</header>

<!-- Intro -->
<div class="intro">
    <div class="container">
        <div class="intro__inner">
            <h1 class="intro__title">
                Web-программирование Lab1 Вариант 12020
            </h1>
            <a class="btn btn--red" href="#X-input">Start</a>
        </div>
    </div>
</div>

<!-- Form -->
<div class="form">
    <div class="container">
        <div class="form__inner">

            <form id="main-form" class="form__data">

                <div class="form__X" id="X-input">
                    <p>Введите X</p>
                    <input class="form__X-text" type="number" placeholder="-3..3" name="X" value="">
                    <div class="form__error" id="form__X-error"></div>
                </div>

                <div class="form__Y">
                    <p>Выберите Y</p>
                    <div class="form__Y-input-wrapper">
                        <input class="form__Y-radio" type="radio" name="Y" id="Y_-4" value="-4">
                        <label for="Y_-4">-4</label>
                    </div>

                    <div class="form__Y-input-wrapper">
                        <input class="form__Y-radio" type="radio" name="Y" id="Y_-3" value="-3">
                        <label for="Y_-3">-3</label>
                    </div>

                    <div class="form__Y-input-wrapper">
                        <input class="form__Y-radio" type="radio" name="Y" id="Y_-2" value="-2">
                        <label for="Y_-2">-2</label>
                    </div>

                    <div class="form__Y-input-wrapper">
                        <input class="form__Y-radio" type="radio" name="Y" id="Y_-1" value="-1">
                        <label for="Y_-1">-1</label>
                    </div>

                    <div class="form__Y-input-wrapper">
                        <input class="form__Y-radio" type="radio" name="Y" id="Y_0" value="0">
                        <label for="Y_0">0</label>
                    </div>

                    <div class="form__Y-input-wrapper">
                        <input class="form__Y-radio" type="radio" name="Y" id="Y_1" value="1">
                        <label for="Y_1">1</label>
                    </div>

                    <div class="form__Y-input-wrapper">
                        <input class="form__Y-radio" type="radio" name="Y" id="Y_2" value="2">
                        <label for="Y_2">2</label>
                    </div>

                    <div class="form__Y-input-wrapper">
                        <input class="form__Y-radio" type="radio" name="Y" id="Y_3" value="3">
                        <label for="Y_3">3</label>
                    </div>

                    <div class="form__Y-input-wrapper">
                        <input class="form__Y-radio" type="radio" name="Y" id="Y_4" value="4">
                        <label for="Y_4">4</label>
                    </div>
                    <div class="form__error" id="form__Y-error"></div>
                </div>

                <div class="form__R">
                    <p>Выберите R</p>

                    <input class="form__R-button" type="button" name="R" value="1" active="false">

                    <input class="form__R-button" type="button" name="R" value="2" active="false">

                    <input class="form__R-button" type="button" name="R" value="3" active="false">

                    <input class="form__R-button" type="button" name="R" value="4" active="false">

                    <input class="form__R-button" type="button" name="R" value="5" active="false">

                    <div class="form__error" id="form__R-error"></div>
                </div>
                <button class="btn btn--red" type="submit" id="form-btn-send">Check</button>
                <div class="btn btn--red" role="button" id="btn-clear">Clear</div>

            </form>


            <div class="form__graph">
                <img src="img/test_graph.png" alt="">
            </div>
        </div>
        <div id="table">
            <?php
            require 'table.php'
            ?>
        </div>
    </div>
</div>


<script src="main.js"></script>

</body>
</html>