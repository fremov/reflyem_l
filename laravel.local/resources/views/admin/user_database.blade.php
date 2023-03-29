<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Таблица(Броня)</title>

    <!-- Custom fonts for this template -->
    <link href="{{asset('admin_panel/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('admin_panel/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('admin_panel/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style/preloader.css')}}">
    <link rel="shortcut icon" href="{{asset('images/slidkiy_rulet.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/slidkiy_rulet.png')}}">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <x-preloader />
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Админ <sup>Панель</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>На главную</span></a>
            </li>

            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin.database')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Таблица(оружие)</span></a>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin.armor')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Таблица(броня)</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <x-admin_topbar />

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Таблица {{'Пользователи'}}</h6>
                            <a class="text-success" href="{{route('admin.user.create')}}">Добавить</a>
                            <a class="text-danger" href="{{route('deleted_user')}}">Удалённые записи</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Имя</th>
                                            <th>Почта</th>
                                            <th>Роль</th>
                                            <th>Когда создан</th>
                                            <th>Когда изменен</th>
                                            <th>Действие</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $item)
                                        <tr>
                                            <td style="width: 10%;">{{$item->id}}</td>
                                            <td style="width: 20%; height: 45px!important;">{{$item->name}}</td>
                                            <td style="width: 20%;">{{$item->email}}</td>
                                            <td style="width: 20%;">
                                                @if($item->is_admin == 1)
                                                    Админ
                                                @else
                                                    Пользователь
                                                @endif
                                            </td>
                                            <td style="width: 20%;">{{$item->created_at}}</td>
                                            <td style="width: 20%;">{{$item->update_at}}</td>
                                            <td class="d-flex">
                                                <a class="text-white" href="{{ route('admin.user.show', $item->id) }}"><button class="btn btn-info ">Show</button></a>
                                                <a class="text-white" href="{{ route('admin.user.edit', $item->id) }}"><button class="btn btn-warning ms-1">Edit</button></a>
                                                <form action="{{ route('admin.user.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   <x-admin_logout_modal />

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin_panel/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin_panel/vendor/bootstrap/js/bootstrap.bundle.min.js')}} "></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin_panel/vendor/jquery-easing/jquery.easing.min.js')}} "></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin_panel/js/sb-admin-2.min.js')}} "></script>

    <!-- Page level plugins -->
    <script src="{{asset('admin_panel/vendor/datatables/jquery.dataTables.min.js')}} "></script>
    <script src="{{asset('admin_panel/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('admin_panel/js/demo/datatables-demo.js')}} "></script>

</body>

</html>
