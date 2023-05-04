<!DOCTYPE html>
<html lang="en">
<head>
    <x-head/>
    <link rel="stylesheet" href="{{ asset('style/calcLPstyle.css') }}">
</head>
<x-header/>

<x-preloader/>
<!--Выбор расы(кнопка)-->

<body class="bg-dark mt-5 bg-dark">

<!--Выбор расы(кнопка)-->
<div class="d-flex justify-content-evenly w-100 mb-3 pt-3 mt-2">

    <!--Инструкция-->
    <button type="button" id="FAQ" class="btn btn-danger" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
        Инструкция
    </button>
    <!--Инструкция-->

    <!-- Инструкция -->
    <div class="modal fade modal-xl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-dark" style="background-color: rgb(255, 229, 153)">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel">Как пользоваться калькулятором</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background-color: rgb(217, 210, 233)">
                    <div class="row">
                        <div class="col-4">
                            <div class="list-group list-group-light" id="list-tab" role="tablist">
                                <a class="text-info fw-bold text-center list-group-item list-group-item-action active px-3 border-0"
                                   id="list-home-list"
                                   data-mdb-toggle="list" href="#list-home" role="tab" aria-controls="list-home">1
                                    Шаг</a>
                                <a class="text-info fw-bold text-center list-group-item list-group-item-action px-3 border-0"
                                   id="list-profile-list"
                                   data-mdb-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">2
                                    Шаг</a>
                                <a class="text-info fw-bold text-center list-group-item list-group-item-action px-3 border-0"
                                   id="list-messages-list"
                                   data-mdb-toggle="list" href="#list-messages" role="tab"
                                   aria-controls="list-messages">3 Шаг</a>

                                <a class="text-info fw-bold text-center list-group-item list-group-item-action px-3 border-0"
                                   id="list-messages-list-1"
                                   data-mdb-toggle="list" href="#list-messages-2" role="tab"
                                   aria-controls="list-messages2">4 Шаг</a>

                                <a class="text-info fw-bold text-center list-group-item list-group-item-action px-3 border-0"
                                   id="list-messages-list-2"
                                   data-mdb-toggle="list" href="#list-messages-1" role="tab"
                                   aria-controls="list-messages">5 Шаг</a>
                                <a class="text-info fw-bold text-center list-group-item list-group-item-action px-3 border-0"
                                   id="list-settings-list"
                                   data-mdb-toggle="list" href="#list-settings" role="tab"
                                   aria-controls="list-settings">6 Шаг</a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                     aria-labelledby="list-home-list">
                                    <span class="fw-bold">Выбираем нужную расу персонажа: </span> <br>
                                    <img src="{{asset('images/insruction1.png')}}" alt="pic">
                                </div>
                                <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                     aria-labelledby="list-profile-list">
                                    <span class="fw-bold">Выбираем нужный камень для персонажа: </span> <br>
                                    <img src="{{asset('images/insruction2.png')}}" alt="pic"> <br>
                                    <span class="fw-bold">Если камень не: 'Вор', 'Воин', 'Маг', <br> тогда этот пункт пропускаем, посколько другие камни никак не повлияют на вычисления </span>
                                </div>
                                <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                     aria-labelledby="list-messages-list">
                                    <span class="fw-bold">Выбираем нужный уровень сложности: </span><br>
                                    <img src="{{asset('images/insruction3.png')}}" alt="pic">
                                </div>

                                <div class="tab-pane fade" id="list-messages-2" role="tabpanel"
                                     aria-labelledby="list-messages-list-2">
                                    <span class="fw-bold">Выбираем нужное количество перков: </span><br>
                                    <img src="{{asset('images/Capture.png')}}" alt="pic">
                                </div>

                                <div class="tab-pane fade" id="list-messages-1" role="tabpanel"
                                     aria-labelledby="list-messages-list-1">
                                    <span class="fw-bold">В первом поле вводим текущее значение нужного навыка: </span>
                                    <br>
                                    <span class="fw-bold">Во втором поле вводим значение навыка до которого вы хотите повысить: </span>
                                    <img class="w-75" style="width: 300px!important;"
                                         src="{{asset('images/insruction6.png')}}" alt="pic">
                                </div>
                                <div class="tab-pane fade" id="list-settings" role="tabpanel"
                                     aria-labelledby="list-settings-list">
                                    <span class="fw-bold">И наконец нажимаем на кнопку "Расчитать" и смотрим на результаты: </span>
                                    <br>
                                    <img class="mb-2" src="{{asset('images/insruction4.png')}}" alt="pic"> <br>
                                    <img style="width: 650px!important;" src="{{asset('images/instruction.png')}}"
                                         alt="pic">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="background-color: rgb(255, 229, 153)">
                    <button type="button" class="btn btn-primary" data-mdb-dismiss="modal">Понятно</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Инструкция -->

    <div class="dropdown">
        <button
            class="btn btn-info dropdown-toggle"
            type="submit"
            id="raceButton000"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
        >
            Выберите расу
        </button>
        <!--Выбор расы(кнопка)-->
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="radio" name="race" id="raceArgo" value="Аргонианин">
                    <label class="form-check-label" for="raceArgo">
                        Аргонианин
                    </label>
                </div>
            </li>
            <li>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="radio" name="race" id="raceOrc" value="Орк">
                    <label class="form-check-label" for="raceOrc">
                        Орк
                    </label>
                </div>
            </li>
            <li>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="radio" name="race" id="raceNord" value="Норд">
                    <label class="form-check-label" for="raceNord">
                        Норд
                    </label>
                </div>
            </li>
            <li>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="radio" name="race" id="raceRedgarc" value="Редгард">
                    <label class="form-check-label" for="raceRedgarc">
                        Редгард
                    </label>
                </div>
            </li>
            <li>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="radio" name="race" id="raceDanmer" value="Данмер">
                    <label class="form-check-label" for="raceDanmer">
                        Данмер
                    </label>
                </div>
            </li>
            <li>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="radio" name="race" id="raceImperec" value="Имперец">
                    <label class="form-check-label" for="raceImperec">
                        Имперец
                    </label>
                </div>
            </li>
            <li>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="radio" name="race" id="raceBosmer" value="Босмер">
                    <label class="form-check-label" for="raceBosmer">
                        Босмер
                    </label>
                </div>
            </li>
            <li>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="radio" name="race" id="raceCatjit" value="Каджит">
                    <label class="form-check-label" for="raceCatjit">
                        Каджит
                    </label>
                </div>
            </li>
            <li>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="radio" name="race" id="raceAltmer" value="Альтмер">
                    <label class="form-check-label" for="raceAltmer">
                        Альтмер
                    </label>
                </div>
            </li>
            <li>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="radio" name="race" id="raceBreton" value="Бретонец">
                    <label class="form-check-label" for="raceBreton">
                        Бретонец
                    </label>
                </div>
            </li>
        </ul>

    </div>

    <!--Выбор камня(кнопка)-->
    <div class="dropdown">
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton2" data-mdb-toggle="dropdown"
                aria-expanded="false">
            Выберите камень
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="radio" name="stoneClass" id="stoneWarrior" value="warrior">
                    <label class="form-check-label" for="stoneWarrior">
                        Воин
                    </label>
                </div>
            </li>
            <li>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="radio" name="stoneClass" id="stoneThif" value="thief">
                    <label class="form-check-label" for="stoneThif">
                        Вор
                    </label>
                </div>
            </li>
            <li>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="radio" name="stoneClass" id="stoneMage" value="mage">
                    <label class="form-check-label" for="stoneMage">
                        Маг
                    </label>
                </div>
            </li>
        </ul>
    </div>
    <!--Выбор камня(кнопка)-->

    <!--Выбор количества LP(кнопка)-->
    <div class="dropdown">
        <button
            class="btn btn-info dropdown-toggle"
            type="button"
            id="dropdownMenuButton3"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
        >
            Выберите уровень сложности
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="radio" name="difficulty_level" id="tenLP" value="10">
                    <label class="form-check-label" for="tenLP">
                        10 LP
                    </label>
                </div>
            </li>
            <li>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="radio" name="difficulty_level" id="fifteenLp" value="15">
                    <label class="form-check-label" for="fifteenLp">
                        15 LP
                    </label>
                </div>
            </li>
            <li>
                <div class="form-check ms-3">
                    <input class="form-check-input" type="radio" name="difficulty_level" id="twentyLP" value="20">
                    <label class="form-check-label" for="twentyLP">
                        20 LP
                    </label>
                </div>
            </li>
        </ul>
    </div>
    <!--Выбор количества LP(кнопка)-->

    <!--Перки-->
    <input type="number" class="input" placeholder="Количество перков" id="numPerks" name="numPerks" value="0">


    <!--кнопка рассчитать-->
    <button type="submit" id="result" class="btn btn-danger" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
        Расчитать
    </button>
    <!--кнопка рассчитать-->

    <!-- Modal -->
    <div class="modal fade modal-xl" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgb(255, 229, 153)">
                    <h5 class="modal-title fw-bold text-dark" id="exampleModalLabel1">Итоги</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background-color: black">
                    <!--                    <img src="assets/image/slidkiy_rulet.png" class="w-25" alt="" srcset="">-->
                    <table class="table table-bordered border border-5 border-dark text-dark"
                           style="background-color: rgb(217, 210, 233)">
                        <thead>
                        <tr>
                            <th scope="col" class="fw-bold border border-3 border-dark text-center">Раса</th>
                            <th scope="col" class="fw-bold border border-3 border-dark text-center">Камень</th>
                            <th scope="col" class="fw-bold border border-3 border-dark text-center">Уровень сложности
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th class="fw-bold border border-3 border-dark text-danger text-center" scope="row"
                                id="chosenRace">Не выбрано
                            </th>
                            <td class="fw-bold border border-3 border-dark text-danger text-center" id="chosenStone">Не
                                выбрано
                            </td>
                            <td class="fw-bold border border-3 border-dark text-danger text-center" id="chosenLevel">Не
                                выбрано
                            </td>

                        </tr>
                        <tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered border border-5 border-dark text-dark"
                           style="background-color: rgb(217, 210, 233)">
                        <tr>
                            <th scope="col" class="fw-bold border border-3 border-dark text-center">Очки способностей
                            </th>
                            <th scope="col" class="fw-bold border border-3 border-dark text-center">Необходимо золота
                            </th>
                            <th scope="col" class="fw-bold border border-3 border-dark text-center">Нужно уровней</th>
                        </tr>
                        <tr>
                            <td class="fw-bold border border-3 border-dark text-danger text-center" id="allLPTable">0
                            </td>
                            <td class="fw-bold border border-3 border-dark text-danger text-center" id="allGoldTable">
                                0
                            </td>
                            <td class="fw-bold border border-3 border-dark text-danger text-center" id="needLvlForUpF">
                                0
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer" style="background-color: rgb(255, 229, 153)">
                    <button type="button" class="btn btn-primary" data-mdb-dismiss="modal">Ок</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
</div>


<div class="d-flex justify-content-center align-items-center container-fluid h-100 mt-4" style="width: 1600px;">
    <table class=" table table-dark table-bordered table-sm d-sm-table-cell">
        <thead>
        <tr class="border border-3 border-dark">
            <th scope="col" class="text-dark fw-bold text-center border border-3 border-dark"
                style="background-color: rgb(255, 229, 153)">Описание
            </th>
            <th class="text-dark fw-bold text-center border border-3 border-dark"
                style="background-color: rgb(234, 153, 153)" scope="col">Кузнечное дело
            </th>
            <th class="text-dark fw-bold text-center border border-3 border-dark"
                style="background-color: rgb(234, 153, 153)" scope="col">Одноручное оружие
            </th>
            <th class="text-dark fw-bold text-center border border-3 border-dark"
                style="background-color: rgb(234, 153, 153)" scope="col">Тяжелая броня
            </th>
            <th class="text-dark fw-bold text-center border border-3 border-dark"
                style="background-color: rgb(234, 153, 153)" scope="col">Двуручное оружие
            </th>
            <th class="text-dark fw-bold text-center border border-3 border-dark"
                style="background-color: rgb(234, 153, 153)" scope="col">Стрельба
            </th>
            <th class="text-dark fw-bold text-center border border-3 border-dark"
                style="background-color: rgb(234, 153, 153)" scope="col">Блокирование
            </th>
        </tr>
        </thead>
        <tbody>
        <!--Воин-->
        <tr class="table-dark">
            <th scope="row" class="text-dark mw-100 text-center fw-bold border border-3 border-dark"
                style="background-color: rgb(207, 226, 243)">Текущее значение навыка
            </th>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="Blacksmith"
                                                                                                        value="0"
                                                                                                        aria-valuemin="0"
                                                                                                        aria-valuemax="100"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="OneHandedWeapon"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="HeavyArmor"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="TwoHandedWeapon"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="Shooting"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="Blocking"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
        </tr>

        <tr class="table-dark">
            <th class="text-dark text-center border border-3 border-dark fw-bold"
                style="background-color: rgb(207, 226, 243)" scope="row">Значение до которого вы хотите повысить навык
            </th>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        value="0"
                                                                                                        id="BlacksmithValue"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        value="0"
                                                                                                        id="OneHandedWeaponValue"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        value="0"
                                                                                                        id="HeavyArmorValue"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        value="0"
                                                                                                        id="TwoHandedWeaponValue"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        value="0"
                                                                                                        id="ShootingValue"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        value="0"
                                                                                                        id="BlockingValue"
                                                                                                        type="number">
            </td>
        </tr>
        <tr class="table-dark text-center text-dark fw-bold">
            <th class="text-dark text-center border border-3 border-dark fw-bold"
                style="background-color: rgb(207, 226, 243)" scope="row">Требуется очков обучения
            </th>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needLPBlacksmith">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needLPOneHandedWeapon">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needLPHeavyArmor">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needLPTwoHandedWeapon">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p id="needLPShooting">
                    0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p id="needLPBlocking">
                    0</p></td>
        </tr>
        <tr class="table-dark text-center text-dark fw-bold">
            <th class="text-dark text-center border border-3 border-dark fw-bold"
                style="background-color: rgb(207, 226, 243)" scope="row">Требуется золота для обучения
            </th>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needGoldBlacksmith">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needGoldOneHandedWeapon">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needGoldHeavyArmor">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needGoldTwoHandedWeapon">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needGoldShooting">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needGoldBlocking">0</p></td>
        </tr>
        <!--        Ловкач-->
        <tr class="table-dark border border-3 border-dark text-dark fw-bold text-center  border-dark">
            <th scope="row" class="text-dark fw-bold text-center border border-3 border-dark fw-bold"
                style="background-color: rgb(255, 229, 153)">Описание
            </th>
            <td style="background-color: rgb(182, 215, 168)">Уклонение</td>
            <td style="background-color: rgb(182, 215, 168)">Скрытность</td>
            <td style="background-color: rgb(182, 215, 168)">Взлом</td>
            <td style="background-color: rgb(182, 215, 168)">Карманные кражи</td>
            <td style="background-color: rgb(182, 215, 168)">Красноречие</td>
            <td style="background-color: rgb(182, 215, 168)">Алхимия</td>
        </tr>
        <tr class="table-dark">
            <th scope="row" class="text-dark text-center border border-3 border-dark fw-bold"
                style="background-color: rgb(207, 226, 243)">Текущее значение навыка
            </th>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="Evasion"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="Stealth"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="Breaking"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="Pickpocketing"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="Speech"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="Alchemy"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>

        </tr>
        <tr class="table-dark">
            <th class="text-dark text-center border border-3 border-dark fw-bold"
                style="background-color: rgb(207, 226, 243)" scope="row">Значение до которого вы хотите повысить навык
            </th>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        value="0"
                                                                                                        id="EvasionValue"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        value="0"
                                                                                                        id="StealthValue"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        value="0"
                                                                                                        id="BreakingValue"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        value="0"
                                                                                                        id="PickpocketingValue"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        value="0"
                                                                                                        id="SpeechValue"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        value="0"
                                                                                                        id="AlchemyValue"
                                                                                                        type="number">
            </td>
        </tr>
        <tr class="table-dark text-center text-dark fw-bold">
            <th class="text-dark text-center border border-3 border-dark fw-bold"
                style="background-color: rgb(207, 226, 243)" scope="row">Требуется очков обучения
            </th>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p id="needLPEvasion">
                    0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p id="needLPStealth">
                    0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p id="needLPBreaking">
                    0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needLPPickpocketing">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p id="needLPSpeech">
                    0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p id="needLPAlchemy">
                    0</p></td>

        </tr>
        <tr class="table-dark text-center text-dark fw-bold">
            <th class="text-center border border-3 border-dark fw-bold" style="background-color: rgb(207, 226, 243)"
                scope="row">Требуется золота для обучения
            </th>
            <td style="background-color: rgb(217, 210, 233)"><p id="needGoldEvasion">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needGoldStealth">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needGoldBreaking">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needGoldPickpocketing">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p id="needGoldSpeech">
                    0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needGoldAlchemy">0</p></td>
        </tr>
        <!--Маг-->
        <tr class="table-dark border border-3 border-dark text-dark fw-bold text-center">
            <th scope="row" class="fw-bold" style="background-color: rgb(255, 229, 153)">Описание</th>
            <td style="background-color: rgb(164, 194, 244)">Иллюзия</td>
            <td style="background-color: rgb(164, 194, 244)">Разрушение</td>
            <td style="background-color: rgb(164, 194, 244)">Колдовство</td>
            <td style="background-color: rgb(164, 194, 244)">Восстановление</td>
            <td style="background-color: rgb(164, 194, 244)">Изменение</td>
            <td style="background-color: rgb(164, 194, 244)">Зачарование</td>
        </tr>
        <tr class="table-dark ">
            <th scope="row" class="text-dark text-center border border-3 border-dark fw-bold"
                style="background-color: rgb(207, 226, 243)">Текущее значение навыка
            </th>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input
                    class="border-0 " id="Illusion" value="0" type="number"></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="Destruction"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="Witchcraft"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="Recovery"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="Change"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="Enchantment"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
        </tr>
        <tr class="table-dark">
            <th scope="row" class="text-dark text-center border border-3 border-dark fw-bold"
                style="background-color: rgb(207, 226, 243)">Значение до которого вы хотите повысить навык
            </th>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="IllusionValue"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="DestructionValue"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="WitchcraftValue"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="RecoveryValue"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="ChangeValue"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><input class="border-0"
                                                                                                        id="EnchantmentValue"
                                                                                                        value="0"
                                                                                                        type="number">
            </td>
        </tr>
        <tr class="table-dark text-dark fw-bold text-center">
            <th scope="row" class="text-dark text-center border border-3 border-dark fw-bold"
                style="background-color: rgb(207, 226, 243)">Требуется очков обучения
            </th>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p id="needLPIllusion">
                    0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needLPDestruction">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needLPWitchcraft">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p id="needLPRecovery">
                    0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p id="needLPChange">
                    0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needLPEnchantment">0</p></td>
        </tr>
        <tr class="table-dark text-dark fw-bold text-center border border-3 border-dark">
            <td class="border border-3 border-dark" style="background-color: rgb(207, 226, 243)"><p>Требуется золота для
                    обучения</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needGoldIllusion">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needGoldDestruction">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needGoldWitchcraft">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needGoldRecovery">0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p id="needGoldChange">
                    0</p></td>
            <td class="border border-3 border-dark" style="background-color: rgb(217, 210, 233)"><p
                    id="needGoldEnchantment">0</p></td>
        </tr>
        </tbody>
    </table>
</div>


<script src="{{asset('script/main.js')}}"></script>
</body>
</html>
