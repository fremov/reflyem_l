<div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel"
     aria-labelledby="vert-tabs-settings-tab">
    {{--Список изменений--}}
    <table id="example1"
           class="table table-bordered border border-5 border-dark text-white fs-5 fst-italic"
           style="text-shadow: 1px 1px 2px black;
                               background-color: rgba(0, 0, 0, 0.6)!important;
">
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
