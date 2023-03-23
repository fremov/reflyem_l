<!DOCTYPE html>
<html lang="en">
<head>
   <x-head />
    <link rel="stylesheet" href="{{ asset('style/main.css') }}">
</head>
<body>
{{--Хедер--}}
<x-header />
{{--Хедер--}}
<!-- Блок Главная -->
<div style="background-image: url('{{asset('images/faq-1.jpg')}}');height: 937px;">
    <div class="h-100 d-flex justify-content-start align-items-center overflow-hidden fs-3">
        <h3 class="badge bg-primary  me-auto ms-5 text-start  h-100 overflow-hidden text-light align-items-center justify-content-center w-75 shadow-1-strong lh-sm shadow-5" style="background-color: rgba(0, 0, 0, 0)!important;padding-top: 290px;">
            <span>Текстовый гайд</span> <br>
            1. Установите чистый Skyrim — Special Edition 1.5.97.0.8 <br> <span class="text-danger">НЕ устанавливайте его в Program Files или Program Files (x86)</span>,
            <br> <span class="text-danger">это может вызвать проблемы</span>
            <br><br>
            2. Скачать и распаковать содержимое архива со сборкой в корневую папку игры<br><br>
            3. Зайдите в папку МО2 и запустите ModOrganizer от имени Администратора<br><br>
            4. Слева от кнопки «Запустить» выберите из списка «Skyrim — Special Edition Launcher», <br> запустите его и настройте разрешение и графику игры<br><br>
            5. Включить опциональные моды по вкусу<br><br>
            6. Запустить SKSE и играть<br><br>

            P. S. Ректифицировать и прогонять Немезис не обязательно, все уже встроено в сборку,<br> но можете это сделать по желанию. <br>Если у вас АЕ версия Skyrim’а то необходимо его пропатчить до SE версии,<br> патчер вы найдете здесь
            <a target="_blank" href="https://www.nexusmods.com/skyrimspecialedition/mods/57618?tab=description">Установка</a></h3>
        <div class="h-100 d-flex flex-column align-items-center justify-content-center me-5 w-50 text-center">
        <h3 class="badge text-light" style="color: black; background-color: rgba(0, 0, 0, 0)!important">Видео гайд по установке </h3>
            <div class="container-fluid">
        <h3 class="badge border border-5 p-0 m-0"><iframe width="560" height="315" src="https://www.youtube.com/embed/PEtXsDkV2sc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></h3>
            </div>
        </div>
    </div>
</div>
<!-- Блок Главная -->
</body>
</html>
