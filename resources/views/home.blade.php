
@extends ('layouts/main')

@section('content')
<h1>
    Elenco Treni:
</h1>

<div class="container">
    <div class="row">
        @foreach ($trains as $item)
        <div class="col-7 mb-1">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                <h5 class="card-title">{{$item->azienda}} - {{$item->tipo}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{$item->codice_treno}}</h6>
                <p class="card-text">Da: {{$item->stazione_di_partenza}}</p>
                <p class="card-text">A:{{$item->stazione_di_arrivo}}</p>
                <p class="card-text">partenza:{{$item->orario_di_partenza}}</p>
                <p class="card-text">arrivo previsto:{{$item->orario_di_arrivo}}</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>      
        @endforeach
    </div>
</div>

@endsection