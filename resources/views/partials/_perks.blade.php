<div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel"
     aria-labelledby="vert-tabs-profile-tab">
    <div class="accordion" id="accordionExample">
        <h2>Изменение</h2>
        @foreach ($alteration_perks as $key => $data)
            <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                <div class="card-header" id="heading{{ $key }}">
                    <h2 class="mb-0">
                        <button class="btn btn-info" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            {{ $data['value'] }}
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {!! nl2br(e($data['comment'])) !!}
                    </div>
                </div>
            </div>
        @endforeach
        <h2>Разрушение</h2>
        @foreach ($destruction_perks as $key => $data)
            <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                <div class="card-header" id="heading{{ $key }}">
                    <h2 class="mb-0">
                        <button class="btn btn-info" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            {{ $data['value'] }}
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {!! nl2br(e($data['comment'])) !!}
                    </div>
                </div>
            </div>
        @endforeach
        <h2>Колдавство</h2>
        @foreach ($conjuration_perks as $key => $data)
            <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                <div class="card-header" id="heading{{ $key }}">
                    <h2 class="mb-0">
                        <button class="btn btn-info" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            {{ $data['value'] }}
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {!! nl2br(e($data['comment'])) !!}
                    </div>
                </div>
            </div>
        @endforeach
        <h2>Зачарование</h2>
        @foreach ($enchanting_perks as $key => $data)
            <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                <div class="card-header" id="heading{{ $key }}">
                    <h2 class="mb-0">
                        <button class="btn btn-info" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            {{ $data['value'] }}
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {!! nl2br(e($data['comment'])) !!}
                    </div>
                </div>
            </div>
        @endforeach
        <h2>Иллюзия</h2>
        @foreach ($illusion_perks as $key => $data)
            <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                <div class="card-header" id="heading{{ $key }}">
                    <h2 class="mb-0">
                        <button class="btn btn-info" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            {{ $data['value'] }}
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {!! nl2br(e($data['comment'])) !!}
                    </div>
                </div>
            </div>
        @endforeach
        <h2>Восстановление</h2>
        @foreach ($restoration_perks as $key => $data)
            <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                <div class="card-header" id="heading{{ $key }}">
                    <h2 class="mb-0">
                        <button class="btn btn-info" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            {{ $data['value'] }}
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {!! nl2br(e($data['comment'])) !!}
                    </div>
                </div>
            </div>
        @endforeach

        <h2>Стрельба</h2>
        @foreach ($archery_perks as $key => $data)
            <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                <div class="card-header" id="heading{{ $key }}">
                    <h2 class="mb-0">
                        <button class="btn btn-danger" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            {{ $data['value'] }}
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {!! nl2br(e($data['comment'])) !!}
                    </div>
                </div>
            </div>
        @endforeach

        <h2>Блокирование</h2>
        @foreach ($block_perks as $key => $data)
            <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                <div class="card-header" id="heading{{ $key }}">
                    <h2 class="mb-0">
                        <button class="btn btn-danger" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            {{ $data['value'] }}
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {!! nl2br(e($data['comment'])) !!}
                    </div>
                </div>
            </div>
        @endforeach

        <h2>Тяжёлая броня</h2>
        @foreach ($heavy_Armor_perks as $key => $data)
            <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                <div class="card-header" id="heading{{ $key }}">
                    <h2 class="mb-0">
                        <button class="btn btn-danger" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            {{ $data['value'] }}
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {!! nl2br(e($data['comment'])) !!}
                    </div>
                </div>
            </div>
        @endforeach

        <h2>Одноручное оружие</h2>
        @foreach ($one_Handed_perks as $key => $data)
            <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                <div class="card-header" id="heading{{ $key }}">
                    <h2 class="mb-0">
                        <button class="btn btn-danger" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            {{ $data['value'] }}
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {!! nl2br(e($data['comment'])) !!}
                    </div>
                </div>
            </div>
        @endforeach

        <h2>Кузнечное дело</h2>
        @foreach ($smithing_perks as $key => $data)
            <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                <div class="card-header" id="heading{{ $key }}">
                    <h2 class="mb-0">
                        <button class="btn btn-danger" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            {{ $data['value'] }}
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {!! nl2br(e($data['comment'])) !!}
                    </div>
                </div>
            </div>
        @endforeach

        <h2>Двуручное оружие</h2>
        @foreach ($two_Handed_perks as $key => $data)
            <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                <div class="card-header" id="heading{{ $key }}">
                    <h2 class="mb-0">
                        <button class="btn btn-danger" style="background-color: rgba(0, 0, 0, 0.6)!important;" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            {{ $data['value'] }}
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {!! nl2br(e($data['comment'])) !!}
                    </div>
                </div>
            </div>
        @endforeach

        <h2>Алхимия</h2>
        @foreach ($alchemy_perks as $key => $data)
            <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                <div class="card-header" id="heading{{ $key }}">
                    <h2 class="mb-0">
                        <button class="btn btn-success" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            {{ $data['value'] }}
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {!! nl2br(e($data['comment'])) !!}
                    </div>
                </div>
            </div>
        @endforeach

        <h2>Лёгкая броня</h2>
        @foreach ($light_Armor_perks as $key => $data)
            <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                <div class="card-header" id="heading{{ $key }}">
                    <h2 class="mb-0">
                        <button class="btn btn-success" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            {{ $data['value'] }}
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {!! nl2br(e($data['comment'])) !!}
                    </div>
                </div>
            </div>
        @endforeach

        <h2>Взлом</h2>
        @foreach ($lockpicking_perks as $key => $data)
            <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                <div class="card-header" id="heading{{ $key }}">
                    <h2 class="mb-0">
                        <button class="btn btn-success" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            {{ $data['value'] }}
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {!! nl2br(e($data['comment'])) !!}
                    </div>
                </div>
            </div>
        @endforeach

        <h2>Карманные кражи</h2>
        @foreach ($pickpocket_perks as $key => $data)
            <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                <div class="card-header" id="heading{{ $key }}">
                    <h2 class="mb-0">
                        <button class="btn btn-success" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            {{ $data['value'] }}
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {!! nl2br(e($data['comment'])) !!}
                    </div>
                </div>
            </div>
        @endforeach

        <h2>Скрытность</h2>
        @foreach ($sneak_perks as $key => $data)
            <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                <div class="card-header" id="heading{{ $key }}">
                    <h2 class="mb-0">
                        <button class="btn btn-success" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            {{ $data['value'] }}
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {!! nl2br(e($data['comment'])) !!}
                    </div>
                </div>
            </div>
        @endforeach

        <h2>Красноречие</h2>
        @foreach ($speech_perks as $key => $data)
            <div class="card" style="background-color: rgba(0, 0, 0, 0.6)!important;">
                <div class="card-header" id="heading{{ $key }}">
                    <h2 class="mb-0">
                        <button class="btn btn-success" style="background-color: rgba(0, 0, 0, 0.6)!important;" type="button" data-toggle="collapse" data-target="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                            {{ $data['value'] }}
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="heading{{ $key }}" data-parent="#accordionExample">
                    <div class="card-body">
                        {!! nl2br(e($data['comment'])) !!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
