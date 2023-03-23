{{--<h2>Оружие {{ $data->name }}</h2>--}}
{{--<p>ID: {{ $data->id }}</p>--}}
{{--<p>Название: {{ $data->name }}</p>--}}
{{--<p>Описание: {{ $data->description }}</p>--}}
{{--<p>Материал: {{ $data->weight }}</p>--}}
{{--<p>Вес: {{ $data->weight }}</p>--}}
{{--<p>Местонахождение: {{ $data->location }}</p>--}}
{{--<p>Тип: {{ $data->type }}</p>--}}

<tbody>
    <tr>
        <td style="width: 15%; height: 45px"><img style="height: 60px;" src="{{asset('images/' . $data->image)}}" alt="img"></td>
        <td style="width: 5%; height: 45px!important;">{{$data->name}}</td>
        <td style="width: 45%;">{{$data->description}}</td>
        <td style="width: 15%;">{{$data->material}}</td>
        <td style="width: 5%;">{{$data->weight}}</td>
        <td style="width: 15%;">{{$data->location}}</td>
    </tr>
</tbody>

<a href="{{ route('database.index') }}">Вернутся назад</a>
