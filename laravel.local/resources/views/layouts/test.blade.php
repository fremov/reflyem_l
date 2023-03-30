<x-head />
<h1 class="text-center mb-3 mt-3">Последние моды</h1>
@foreach($data as $mod)
    <div class="container-fluid w-50">
    <div class="card mb-3">
        <div class="card-body">
            <h3 class="card-title">{{ $mod['title'] }}</h3>
            <p class="list-group-item"><img style="width: auto; height: 250px;" src="{{$mod['image']}}" alt="image"></p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><span class="font-weight-bold">Описание:</span> {{ $mod['desc'] }}</li>
                <li class="list-group-item"><span class="font-weight-bold">Категория:</span> {{ $mod['category'] }}</li>
                <li class="list-group-item"><span class="font-weight-bold">Дата:</span> {{ $mod['date'] }}</li>
                <li class="list-group-item"><span class="font-weight-bold">Автор:</span> {{ str_replace('Author:', '', $mod['author']) }}</li>
            </ul>
            <a href="{{ $mod['link'] }}" target="_blank" class="btn btn-primary mt-3">Ссылка на мод</a>
        </div>
    </div>
    </div>
@endforeach
