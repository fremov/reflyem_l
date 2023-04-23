<div class="tab-pane fade h-auto" id="vert-tabs-messages" role="tabpanel"
     aria-labelledby="vert-tabs-messages-tab">
    <div class="card-body">
        <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
        <div id="accordion">
            <div class="card card-success">
                <div class="card-header" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                    <h4 class="card-title w-100">
                        <a class="d-block w-100 collapsed" data-toggle="collapse"
                           href="#collapseOne" aria-expanded="false">
                            Разрушение
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                    <div class="card-body">
                        <table class="table text-white fs-5">
                            <thead>
                            <tr>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($destract as $row)
                                <tr>
                                    @foreach ($row as $key => $value)
                                        @switch($value)
                                            @case('НОВИЧОК')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('УЧЕНИК')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('АДЕПТ')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('ЭКСПЕРТ')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('МАСТЕР')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('Магия крови')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('Разрушение')
                                            <td class="fw-bold h2">{{ $value }}</td>
                                            @break
                                            @default
                                            <td>{!! nl2br(e($value)) !!}</td>
                                        @endswitch
                                    @endforeach
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card card-success">
                <div class="card-header">
                    <h4 class="card-title w-100">
                        <a class="d-block w-100 collapsed" data-toggle="collapse"
                           href="#collapseTwo" aria-expanded="false">
                            Изменение
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                    <div class="card-body">
                        <table class="table fs-5 text-white">
                            <thead>
                            <tr>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($change as $row)
                                <tr>
                                    @foreach ($row as $key => $value)
                                        @switch($value)
                                            @case('НОВИЧОК')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('УЧЕНИК')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('АДЕПТ')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('ЭКСПЕРТ')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('МАСТЕР')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('Изменение')
                                            <td class="fw-bold h2">{{ $value }}</td>
                                            @break
                                            @case('Чародейская ярость')
                                            <td class="fw-bold h2">{{ $value }}</td>
                                            @break
                                            @default
                                            <td>{!! nl2br(e($value)) !!}</td>
                                        @endswitch
                                    @endforeach
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card card-success">
                <div class="card-header">
                    <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseThree"
                           aria-expanded="true">
                            Колдавство
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                        <table class="table text-white fs-5">
                            <thead>
                            <tr>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($conjura as $row)
                                <tr>
                                    @foreach ($row as $key => $value)
                                        @switch($value)
                                            @case('НОВИЧОК')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('УЧЕНИК')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('АДЕПТ')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('ЭКСПЕРТ')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('МАСТЕР')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('Колдовство')
                                            <td class="fw-bold h2">{{ $value }}</td>
                                            @break
                                            @default
                                            <td>{!! nl2br(e($value)) !!}</td>
                                        @endswitch
                                    @endforeach
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card card-success">
                <div class="card-header">
                    <h4 class="card-title w-100">
                        <a class="d-block w-100 collapsed" data-toggle="collapse"
                           href="#collapseFor" aria-expanded="false">
                            Иллюзия
                        </a>
                    </h4>
                </div>
                <div id="collapseFor" class="collapse" data-parent="#accordion" style="">
                    <div class="card-body">
                        <table class="table text-white fs-5">
                            <thead>
                            <tr>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($illision as $row)
                                <tr>
                                    @foreach ($row as $key => $value)
                                        @switch($value)
                                            @case('НОВИЧОК')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('УЧЕНИК')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('АДЕПТ')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('ЭКСПЕРТ')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('МАСТЕР')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('Иллюзия')
                                            <td class="fw-bold h2">{{ $value }}</td>
                                            @break
                                            @default
                                            <td>{!! nl2br(e($value)) !!}</td>
                                        @endswitch
                                    @endforeach
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card card-success">
                <div class="card-header">
                    <h4 class="card-title w-100">
                        <a class="d-block w-100 collapsed" data-toggle="collapse"
                           href="#collapseFive" aria-expanded="false">
                            Восстановление
                        </a>
                    </h4>
                </div>
                <div id="collapseFive" class="collapse" data-parent="#accordion" style="">
                    <div class="card-body">
                        <table class="table text-white fs-5">
                            <thead>
                            <tr>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($restore as $row)
                                <tr>
                                    @foreach ($row as $key => $value)
                                        @switch($value)
                                            @case('НОВИЧОК')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('УЧЕНИК')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('АДЕПТ')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('ЭКСПЕРТ')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('МАСТЕР')
                                            <td class="fw-bold fs-5">{{ $value }}</td>
                                            @break
                                            @case('Восстановление')
                                            <td class="fw-bold h2">{{ $value }}</td>
                                            @break
                                            @default
                                            <td>{!! nl2br(e($value)) !!}</td>
                                        @endswitch
                                    @endforeach
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
