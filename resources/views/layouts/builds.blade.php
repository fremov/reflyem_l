<!doctype html>
<html lang="en">
<x-head />
<x-header />

<body class="bg-dark">


<div class="container-fluid text-white" style="height: 900px">
    <div class="d-flex h-100 justify-content-center align-items-center">

        <div class="d-inline-block">
            <h2 id="Actor_name">Actor</h2>
            <input type="text" id="create_Actor" disabled value="" class="w-50" placeholder="Введите Имя персонажа">
            <input type="submit" id="create_actor_butun" disabled value="Создать" class="btn btn-success">
            <hr>
            <div class="d-flex flex-column">
                <label for="race">Раса:</label><select id="race" class="form-control w-100 mb-2">
                    <option value="Норд">Норд</option>
                    <option value="Орк">Орк</option>
                    <option value="Аргонианин">Аргонианин</option>
                    <option value="Каджит">Каджит</option>
                    <option value="Имперец">Имперец</option>
                    <option value="Данмер">Данмер</option>
                    <option value="Босмер">Босмер</option>
                    <option value="Редгард">Редгард</option>
                    <option value="Бретонец">Бретонец</option>
                    <option value="Альтмер">Альтмер</option>
                </select>
                Уровень:
                <label>
                    <input type="number" class="form-control" value="" placeholder="Уровень:" id="set_lvl">
                </label>

                <label>
                    Перки:
                    <select id="set_perks" class="form-control mt-1">
                        <option class="text-danger" selected>Выберите перки...</option>
                    </select>
                </label>

                <label>
                    Заклинания:
                    <select id="set_spells" class="form-control mt-1">
                        <option class="text-danger" selected>Выберите заклинания...</option>
                    </select>
                </label>
                <!-- Создаем элемент select с использованием Bootstrap -->
                <label>
                    Оружие:
                    <select id="set_weapon" class="form-control mt-1">
                        <option class="text-danger" selected>Выберите оружие...</option>
                    </select>
                </label>

                <label>
                    Броня:
                    <select id="set_armor_set" class="form-control mt-1">
                        <option class="text-danger" selected>Выберите броню...</option>
                    </select>
                </label>

                <label>
                    Кольцо:
                    <select id="set_ring" class="form-control mt-1">
                        <option class="text-danger" selected>Выберите кольцо...</option>
                    </select>
                </label>

                <label>
                    Амулет:
                    <select id="set_amulet" class="form-control mt-1">
                        <option class="text-danger" selected>Выберите амулет...</option>
                    </select>
                </label>

                <input type="submit" class="btn btn-success mt-3 me-auto w-50" value="Добавить" id="add_to_actor">
                <button id="download_build" class="mt-3 btn btn-info"  disabled >Скачать PDF</button>
            </div>
        </div>

        <div class="d-inline-block ms-5">
            <div class="container-fluid">
                <span id="get_race">Раса: </span> <br>
                <span id="get_lvl">Уровень: </span> <br>
                <span id="get_weapon">Оружие: </span> <br>
                <span id="get_ring">Кольцо: </span> <br>
                <span id="get_amulet">Амулет: </span> <br>
                <span id="get_armor_set">Набор брони: </span> <br>
                <span id="get_spells">Заклинания: </span> <br>
                <span id="get_perks">Перки: </span> <br>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('script/Player_script.js')}}"></script>
</body>

</html>


