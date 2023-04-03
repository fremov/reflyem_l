<!DOCTYPE html>
<html lang="en">
<x-head />
<body>
{{--Хеадер--}}

{{--Хеадер--}}
<!-- Background image -->
<x-preloader />
<script>
    $(document).ready(function(){
        $("#myTable").DataTable({
            "searching": true,
            "paging": true,
            "ordering": true,
            "info": true,
            "columnDefs": [
                { "width": "10%", "targets": [4] }
            ],
            "language": {
                "search": "",
                "searchPlaceholder": "Поиск...",
                "lengthMenu": "Показать _MENU_ записей на странице",
                "zeroRecords": "Нету результатов поиска",
                "info": "Страница _PAGE_ из _PAGES_",
                "infoEmpty": "",
                "infoFiltered": "(отфильтровано из _MAX_ записей)"
            }
        });
    });

</script>
<div class="container-fluid d-flex h-100  align-items-center justify-content-center mt-5">
    <table class="table table-bordered table-striped" id="myTable">
        <thead>
        <tr>
            <th>№</th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Возраст</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Иванов</td>
            <td>Иван</td>
            <td>Иванович</td>
            <td>25</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Петров</td>
            <td>Петр</td>
            <td>Петрович</td>
            <td>30</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Сидоров</td>
            <td>Сидор</td>
            <td>Сидорович</td>
            <td>35</td>
        </tr>
        </tbody>
    </table>
</div>

</body>
</html>
