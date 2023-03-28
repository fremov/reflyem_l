<!DOCTYPE html>
<html lang="en">
<head>
<x-head />
</head>
<body>
{{--Хедер--}}
<x-header />
{{--Хедер--}}
<!-- Блок Главная -->
<style>
    @font-face {
        font-family: 'Zantroke';
        src: url({{asset('style/Zantroke.otf')}});
    }
    * {
        font-family: 'Zantroke';
        font-size: medium;
        text-shadow: #1a202c;
    }
</style>
<div
        class="bg-image p-5 text-center shadow-1-strong"
        style="background-image: url('{{asset('images/3690802.jpg')}}');
        height: 1000px;
"
>
        <a name="Main"></a>
        <div class="d-flex justify-content-center align-items-center h-100 " style="">
            <div class="text-white shadow-5 ">
                <h1 class="mb-3"> <img src="{{ asset('images/logo.png') }}" style="height: 150px" alt="logo"></h1>
                <h4 class="mb-3 text-center lh-base ps-3 pe-3 pt-2 border border-2 d-flex"
                    style="height: 200px; background-color: rgba(0, 0, 0, 0.6)!important;  border-color: rgba(233, 177 , 177 , 0.5)!important;">
                    Reflyem это сборка модов для Skyrim Special Edition,<br>которая меняет множество аспектов игры и создана для того,<br>чтобы
                    ваше путешествие по миру Скайрима было<br> максимально комфортным и приятным.</h4>
                <a target="_blank" class="btn text-white btn-lg fw-normal rounded-pill mt-3 justify-content-center align-items-center pt-3"
                   style="width: 250px; height: 70px;background-color: rgba(0, 0, 0, 0.6) !important; border-color: rgba(233, 177 , 177 , 0.5)!important;"
                   href="https://drive.google.com/file/d/1IjC1BkzpyYGuI8Oy1VupeaG2wx_kOhur/view?usp=share_link" role="button">Скачать сборку</a>
            </div>
        </div>
</div>
<!-- Блок Главная -->

<!-- Блок Базы знаний -->
<a name="Base"></a>
<div
        class="bg-image p-5 shadow-1-strong text-white d-flex align-items-center"
        style="background-image: url('{{asset('images/62e8e4a757055 копия.jpg')}}');

        height: 1000px;
"
>
    <div class=" ">
        <div class="text-white shadow-5  text-start">
            <h1 class="mb-3 text-center" style="font-size: 60px">База знаний</h1>
            <h4 class="mb-3 fw-normal pt-2 ps-5" style="">Основную информацию касательно сборки вы <br> можете получить
                из нашей базы знаний.<br> Здесь находится описание многих аспектов игры <br> которые вы можете изучить
                не скачивая саму <br> сборку.</h4>
            <div class="text-center pt-1">
            <a target="_blank" class="btn text-white btn-lg fw-normal rounded-pill  justify-content-center align-items-center pt-3"
               style="width: 250px; height: 70px; border-color: rgba(233, 177 , 177 , 0.5)!important;"
               href="https://docs.google.com/spreadsheets/d/1iZ5joNo9xgOA9Z-dAdt0RnIXJmdzjI13kJPduLEe38I/edit#gid=28461296"
               role="button">Узнать больше</a>
            </div>
        </div>
    </div>
</div>
<!-- Блок Базы знаний -->

<!-- Блок дискорда -->
<div
        class="bg-image p-5 text-center shadow-1-strong  text-white"
        style="background-image: url('{{asset('images/werfd.jpg')}}');
        height: 1000px;
"
>

    <a name="Discord"></a>
    <div class="h-100 d-flex justify-content-start align-items-center ms-5">
       <iframe  class="align-self-center me-auto" src="https://discord.com/widget?id=769091851977490432&theme=dark"
                width="380" height="500" allowtransparency="true" frameborder="0"
                sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
        <div class="text-white  w-50 justify-content-end me-5 pe-5">
            <h1 class="mb-3 border text-center mb-5 pt-2"
                style="height: 100px; background-color: rgba(0, 0, 0, 0.6)!important;
                border-color: rgba(233, 177 , 177 , 0.5)!important; font-size: 60px">Дискорд</h1>

            <h4 class="mb-3 fw-normal text-start border mb-5 ps-3 pe-3 pt-3"
                style="height: 230px;background-color: rgba(0, 0, 0, 0.6)!important;
                border-color: rgba(233, 177 , 177 , 0.5)!important;
                overflow: hidden !important;
                max-height: 300px !important;">
                Присоединяйся к нашему Discord сообществу Reflyem, чтобы быть в курсе последних событий связанных с развитием сборки.
                Здесь ты также найдешь ответы на интересующие тебя вопросы и сможешь просто общаться с такими же любителями Скайрима как и ты сам.</h4>
            <a target="_blank" class="btn text-white btn-lg fw-normal rounded-pill justify-content-center align-items-center pt-3 Frem"
               style="width: 270px; height: 70px; background-color: rgba(0, 0, 0, 0.6)!important; border-color:
               rgba(233, 177 , 177 , 0.5)!important;"
               href="https://discord.gg/BvRarMSpm3" role="button">Присоединиться</a>
        </div>
    </div>
</div>
<!-- Блок дискорда -->


<!-- Блок Поддержка -->
<a name="Donation"></a>
<div
        class="bg-image p-5 shadow-1-strong text-white d-flex align-items-center"
        style="background-image: url('{{asset('images/sdfds24.jpg')}}');

        height: 1000px;
"
>
    <div>
        <div class="text-white shadow-5  text-start">
            <h1 class="mb-1 text-center" style="font-size: 60px">Поддержка</h1>
            <h4 class="mb-3 fw-normal pt-2 text-center" style="">Если тебе понравилась сборка и ты хочешь <br> поддержать
                её развитие не только словом, но и
                <br> делом, то лучший способ это оформить подписку <br> на Boosty, либо перевести любую посильную
                <br> сумму через один из сервисов для донатов.</h4>
            <div class="text-center pt-1">
                <a target="_blank"
                   class="btn rounded-pill  justify-content-center align-items-center ps-2"
                   style="width: 250px; height: 70px;border-color: rgba(233, 177 , 177 , 0.5)!important;
                   background-color: #212121"
                   href="https://boosty.to/refly" role="button">
                    <img src="{{asset('images/boostyf.png')}}" style="width: 170px; height: 55px;" alt="boosty">
                </a>
                <a target="_blank" class="btn btn-outline-light btn-lg fw-normal rounded-pill  justify-content-center align-items-center pt-2"
                   style="width: 250px; height: 70px;border-color: rgba(233, 177 , 177 , 0.5)!important;
                   background-color: #212121" href="https://www.donationalerts.com/r/reflytv" role="button">
                    <img src="{{asset('images/donation%20alerts.png')}}" style="width: 170px; height: 55px" alt="DonationAlerts">
                </a>
                <a target="_blank" class="btn btn-outline-light btn-lg fw-normal rounded-pill  justify-content-center align-items-center p-1"
                   style="width: 250px; height: 70px;border-color: rgba(233, 177 , 177 , 0.5)!important;
                   background-color: #212121" href="https://new.donatepay.ru/@reflyq" role="button">
                    <img src="{{asset('images/donatepay_logo.png')}}" style="width: 170px; height: 55px" alt="donatPay">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Блок Поддержка -->


</body>
</html>
