<?php
    include('header.php');
?>


    <div class="main-container">
        <div class="digest">
            <h4 class="today">Сегодня, 28.06.2017</h4>
            <div class="digest-block today-info">
                <div class="row">
                    Номер 1:
                    <span class="guest-status live-in">
                        <span class="text">проживает</span>
                        <span class="icon"><i class="fa fa-bed" aria-hidden="true"></i></span>
                    </span>
                    <span class="booked_pole">Toli Patrancus</span>
                    <span class="guest-debt guest-action">
                        Задолженность 1000 руб.
                    </span>
                </div>
                <div class="row">Номер 2:
                    <span class="guest-status check-in">
                        <span class="text">заезд</span>
                        <span class="icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>
                    </span>
                    <span class="booked_pole">Toli Patrancus</span>
                    <span class="guest-action">
                        <a class="btn btn-small btn-yellow">Подтвердить заезд</a>
                    </span>
                </div>
                <div class="row">Номер 2:
                    <span class="guest-status check-out">
                        <span class="text">выезд</span>
                        <span class="icon"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                    </span>
                    <span class="booked_pole">Toli Patrancus</span>
                    <span class="guest-action actions-ok">
                    </span>
                </div>
                <div class="row is-late">Номер 2:
                    <span class="guest-status check-in">
                        <span class="text">заезд</span>
                        <span class="icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>
                    </span>
                    <span class="booked_pole">Toli Patrancus</span>
                    <span class="guest-action actions-ok">
                        <i class="fa fa-check" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="row">Номер 2:
                    <span class="guest-status check-out">
                        <span class="text">выезд</span>
                        <span class="icon"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
                    </span>
                    <span class="booked_pole">Toli Patrancus</span>
                    <span class="guest-action">
                        <a class="btn btn-small btn-yellow">Вернуть залог</a>
                    </span>
                </div>
            </div>
            <div class="digest-block prepayments">
                <div class="row">
                    <span class="guest-status">
                        <span class="text">Предавторизация</span>
                        <span class="icon">
                            <i class="fa fa-cc-visa" aria-hidden="true"></i>
                        </span>
                    </span>
                    <span class="booked_pole">Toli Patrancus (заезд 03.07.17)</span>
                    <span class="guest-action">
                        <a class="btn btn-small btn-default">Списать предоплату</a>
                    </span>
                </div>
            </div>
        </div>
        <div class="add-booking">
            <a class="btn btn-big btn-blue">Добавить бронирование</a>
        </div>
        <div class="filter">
            <form novalidate="novalidate" class="form-vertical form-filter-date">
                <div class="date-wrapper">
                        <div class="label">
                            <label for="date">Дата начала:</label>
                        </div>
                        <div class="input-wrapper">
                            <input id="date" name="date" type="text" class="input datepicker-here">
                        </div>
                </div>
                <div class="period-wrapper">
                        <div class="label">
                            <label for="period">Дата начала:</label>
                        </div>
                        <div class="input-wrapper">
                            <select id="period" class="input select"><option>Неделя</option></select>
                        </div>
                </div>
                <div class="btn-wrapper">
                    <input type="submit" name="" value="Показать" class="btn btn-small btn-green-no-bg">
                </div>
            </form>
            <form class="form-vertical search-form">
                <div class="search-wrapper">
                    <div class="label">
                        <label>Поиск бронирования:</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="text" class="input input-search">
                        <span class="search-pad"><input type="submit" class="btn-seatch" value="" >
</span>
                    </div>
                </div>
            </form>
        </div>

<!--        <div class="table-container">-->
<!--            <table class="booking-table">-->
<!--                <thead>-->
<!--                    <tr>-->
<!--                        <td>Номер</td>-->
<!--                        <td>№1 (Стандарт)</td>-->
<!--                        <td>№2 (Улучшенный)</td>-->
<!--                        <td>№3 (Стандарт)</td>-->
<!--                        <td>№4 (Улучшенный)</td>-->
<!--                        <td>№5 (Улучшенный)</td>-->
<!--                    </tr>-->
<!--                </thead>-->
<!--                <tbody>-->
<!--                <tr class=""><td>28.06.2017</td>-->
<!--                    <td id="0" class="booked booking-cell" title="153">-->
<!--                        <span class="genius genious status"></span>    <span class="glyphicon glyphicon-cutlery breakfast status"></span><span class="glyphicon glyphicon-cutlery breakfast status"></span>-->
<!--                        <br>-->
<!--                        <div class="in-box">-->
<!--                            <span class=""></span>-->
<!--                            <span class="glyphicon glyphicon-bed status"></span>-->
<!--                            Toli Patrancus-->
<!--                        </div>-->
<!--                    </td>-->
<!--                    <td id="1" class="booked booking-cell" title="658">-->
<!--                        <div class="in-box">-->
<!--                            Ehsan Mashali-->
<!--                        </div>-->
<!--                    </td>-->
<!--                    <td id="2" class="booked booking-cell" title="676">-->
<!--                        <span class=""></span>-->
<!--                        <br>-->
<!--                        <div class="in-box">-->
<!--                            <span class=""></span>-->
<!--                            <span class="glyphicon glyphicon-log-in in status"></span>-->
<!--                            Viktor Rotashnyuk-->
<!--                        </div>-->
<!--                    </td>-->
<!--                    <td id="3" class="booked booking-cell" title="685">-->
<!--                        <span class=""></span>-->
<!--                        <br>-->
<!--                        <div class="in-box">-->
<!--                            <span class=""></span>-->
<!--                            <span class="glyphicon glyphicon-log-in in status"></span>-->
<!--                            James Thomas-->
<!--                        </div>-->
<!--                    </td>-->
<!--                    <td id="4" class="booked booking-cell" title="671">-->
<!--                        <span class="genius genious status"></span>-->
<!--                        <br>-->
<!--                        <div class="in-box">-->
<!--                            <span class=""></span>-->
<!--                            <span class="glyphicon glyphicon-bed status"></span>-->
<!--                            Дамир Зыков-->
<!--                        </div>-->
<!--                    </td></tr>-->
<!--                </tbody>-->
<!--            </table>-->
<!--        </div>-->
    </div>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="air-datepicker/dist/js/datepicker.min.js"></script>
<script src="script.js?<?php echo(microtime(true)); ?>"></script></body>
</html>