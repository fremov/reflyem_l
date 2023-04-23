<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>База знаний</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">

    <link rel="shortcut icon" href="{{asset('images/slidkiy_rulet.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/slidkiy_rulet.png')}}">
    <link rel="stylesheet" href="{{asset('style/scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('style/dataBase.css')}}">
    <!-- Подключите bootstrap и jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-xxxxxxxxx"
            crossorigin="anonymous"></script>

    <!-- Добавьте стили для фиксированной кнопки -->
    <style>
        #scrollTopButton {
            display: none; /* кнопка изначально скрыта */
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            border: none;
            outline: none;
            cursor: pointer;
        }
    </style>
</head>
<x-header/>
<body class="layout-boxed mt-5 h-auto position-relative text-white"
      style="
          background-image: url('{{asset('images/661452.png')}}');
          background-repeat: no-repeat;
          background-position: center center;
          background-attachment: fixed;
          ">
<x-preloader/>
<div class="container-fluid d-flex h-100 justify-content-center w-75">
    <div class="card-body">
        <h1>База знаний</h1>
        <div class="row">
            <div class="col-5 col-sm-3">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                     aria-orientation="vertical">
                    <a class="nav-link active h2" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home"
                       role="tab" aria-controls="vert-tabs-home" aria-selected="true">Снаряжение</a>
                    <a class="nav-link h2" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile"
                       role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Перки</a>
                    <a class="nav-link h2" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages"
                       role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Заклинания</a>
                    <a class="nav-link h2" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                       role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Список изменений</a>
                </div>
            </div>
            <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                    <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel"
                         aria-labelledby="vert-tabs-home-tab">
                        {{--Табилца со шмотками--}}
                        @include('partials._all_items')
                    </div>
                    @include('partials._perks')
                </div>

                {{--Заклинаия--}}
                @include('partials._spells')


                {{--Чейнджлог--}}
                @include('partials._changelog')
            </div>
        </div>
    </div>
</div>
</div>
<!-- Добавьте следующий скрипт -->

<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>


<button class="btn btn-info" id="scrollTopButton">Наверх</button>
<!-- Добавьте следующий скрипт -->
<script>
    // Получаем кнопку и добавляем обработчик клика
    const scrollTopButton = document.getElementById("scrollTopButton");
    scrollTopButton.addEventListener("click", function () {
        document.documentElement.scrollTop = 0; // Поднимаем страницу вверх
    });

    // Показываем/скрываем кнопку при скролле страницы
    window.addEventListener("scroll", function () {
        if (document.documentElement.scrollTop > 100) {
            scrollTopButton.style.display = "block";
        } else {
            scrollTopButton.style.display = "none";
        }
    });
</script>
</body>
</html>
