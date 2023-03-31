<x-head/>
<h1 class="text-center mb-3 mt-3">Последние моды</h1>
<div class="container-fluid">
    <div class="row justify-content-center">
        @foreach($data as $mod)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card h-100">
                    <img src="{{$mod['image']}}" class="card-img-top" alt="image">
                    <div class="card-body">
                        <h3 class="card-title">{{ $mod['title'] }}</h3>
                        <ul class="list-group list-group-flush">
                            <hr>
                            <li class="list-group-item"><span class="font-weight-bold">Описание:</span> {{ $mod['desc'] }}</li>
                            <li class="list-group-item"><span class="font-weight-bold">Категория:</span>
                                @if(!$mod['category'])
                                    отсутвует
                                @else
                                    {{ $mod['category'] }}
                                @endif
                            </li>
                            <li class="list-group-item"><span
                                    class="font-weight-bold">Дата:</span> {{ str_replace('Uploaded:', '', $mod['date']) }}</li>
                            <li class="list-group-item"><span
                                    class="font-weight-bold">Автор:</span> {{ str_replace('Author:', '', $mod['author']) }}</li>
                            <li class="list-group-item"><span
                                    class="font-weight-bold">Вес мода: {{$mod['size']}}</li>
                            <li class="list-group-item"><span
                                    class="font-weight-bold">Лайки: {{$mod['likes']}}</li>
                        </ul>
                        <a href="{{ $mod['link'] }}" target="_blank" class="btn btn-primary mt-3">Ссылка на мод</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


