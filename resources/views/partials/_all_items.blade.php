<div class="card-body">
    <table id="example1"
           class="table
                  table-bordered
                  border border-5
                  border-dark
                  text-white
                  fst-italic
                  fs-5"
           style="text-shadow: 1px 1px 2px black;
                                    background-color: rgba(0, 0, 0, 0.6)!important;
">
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
