<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Таблица</title>
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
    <!-- Подключите bootstrap и jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-xxxxxxxxx" crossorigin="anonymous"></script>
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
<body class="layout-boxed mt-5" style="height: auto; background-color: gainsboro">
<x-preloader/>
<div class="container-fluid d-flex h-100 justify-content-center w-75">


    <div class="card-body">
        <h4>База знаний</h4>
        <div class="row">
            <div class="col-5 col-sm-3">
                <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                     aria-orientation="vertical">
                    <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home"
                       role="tab" aria-controls="vert-tabs-home" aria-selected="true">Оружие</a>
                    <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile"
                       role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Броня</a>
                    <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages"
                       role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Messages</a>
                    <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings"
                       role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Список изменений</a>
                </div>
            </div>
            <div class="col-7 col-sm-9">
                <div class="tab-content" id="vert-tabs-tabContent">
                    <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel"
                         aria-labelledby="vert-tabs-home-tab">
                        {{--Табилца со шмотками--}}
                        <div class="card-body">
                            <table id="example1"
                                   class="table table-bordered border border-5 border-dark text-dark fs-5">
                                <thead>
                                <tr>
                                    <th class="fw-bold border-right border-dark border-3">Название</th>
                                    <th class="fw-bold">Описание</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td class="border-bottom border-3 border-dark fw-bolder">{{$item->title}}</td>
                                        <td class="border-bottom border-3 border-dark fw-bolder">{!! nl2br(e($item->description)) !!}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th class="fw-bold border-right border-dark border-3">Название</th>
                                    <th class="fw-bold">Описание</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel"
                         aria-labelledby="vert-tabs-profile-tab">
                        {{--   место для данных--}}
                    </div>
                    <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel"
                         aria-labelledby="vert-tabs-messages-tab">
                        Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue
                        id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac
                        tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit
                        condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus
                        tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet
                        sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum
                        gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend
                        ac ornare magna.
                    </div>
                    <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel"
                         aria-labelledby="vert-tabs-settings-tab">
                        {{--Список изменений--}}
                        <table id="example1" class="table table-bordered border border-5 border-dark text-dark fs-5">
                            <tbody>
                            @foreach ($changelog as $sheet_name => $sheet_data)
                                <tr>
                                    <td class="border-bottom border-3 border-dark fw-bolder">
                                        <h2>{{ $sheet_data['name'] }}</h2></td>
                                </tr>
                                @foreach ($sheet_data['data'] as $row)
                                    <tr>
                                        <td class="border-bottom border-3 border-dark fw-bolder">{{ $loop->iteration }}</td>
                                        <td class="border-bottom border-3 border-dark fw-bolder">{{ $row['Unnamed: 1'] }}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                            </tbody>
                        </table>
                    </div>
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
