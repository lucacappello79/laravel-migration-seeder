
@extends ('layouts/main')

@section('content')
<h1>
    Elenco Trasporti:
</h1>

{{-- <a href="{{ route('home') }}">Home</a>
<a href="{{ route('flights') }}">Flights</a> --}}

{{-- <div class="container">
    <div class="row">
        @foreach ($trains as $item)
        <div class="col-4 mb-1">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                <h5 class="card-title mb-3"><strong>Treno: {{$item->azienda}} - {{$item->tipo}} regionale</strong></h5>
                <h6 class="card-subtitle mb-3 text-body-secondary">{{$item->codice_treno}}</h6>
                <p class="card-text"><strong>Da:</strong> {{$item->stazione_di_partenza}}</p>
                <p class="card-text"><strong>A</strong>: {{$item->stazione_di_arrivo}}</p>
                <p class="card-text"><strong>partenza:</strong> {{$item->orario_di_partenza}}</p>
                <p class="card-text"><strong>arrivo previsto:</strong> {{$item->orario_di_arrivo}}</p>
                <a href="#" class="card-link">Aiuto</a>
                <a href="#" class="card-link">Info treno</a>
                </div>
            </div>
        </div>      
        @endforeach
    </div>
</div> --}}

<div class="container">
    <table class="table  table-striped table-hover my-5">
        <thead class="table-dark">
            <tr>
                <th scope="col">Treno</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">Da</th>
                <th scope="col">A</th>
                <th scope="col">Partenza</th>
                <th scope="col">Arrivo Previsto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trains as $item)
                <tr>
                    <td>{{$item->azienda}} - {{$item->tipo}}</td>
                    <td>{{$item->codice_treno}}</td>
                    <td>{{$item->stazione_di_partenza}}</td>
                    <td>{{$item->stazione_di_arrivo}}</td>
                    <td>{{$item->orario_di_partenza}}</td>
                    <td>{{$item->orario_di_arrivo}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container">
    <table class="table  table-striped table-hover table-info my-5">
        <thead class="table-dark">
            <tr>
                <th scope="col">Volo</th>
                <th scope="col">Codice Volo</th>
                <th scope="col">Da</th>
                <th scope="col">A</th>
                <th scope="col">Partenza</th>
                <th scope="col">Arrivo Previsto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($flights as $item)
                <tr>
                    <td>{{$item->azienda}}</td>
                    <td>{{$item->codice_volo}}</td>
                    <td>{{$item->aeroporto_di_partenza}}</td>
                    <td>{{$item->aeroporto_di_arrivo}}</td>
                    <td>{{$item->orario_di_partenza}}</td>
                    <td>{{$item->orario_di_arrivo}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container">
    <table class="table  table-striped table-hover table-info my-5">
        <thead class="table-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Cognome</th>
                <th scope="col">Età</th>
                <th scope="col">Nato/a</th>
                <th scope="col">Codice cliente</th>
                <th scope="col">Iscritto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $item)
                <tr>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->cognome}}</td>
                    <td>{{$item->eta}}</td>
                    <td>{{$item->data_di_nascita}}</td>
                    <td>{{$item->codice_cliente}}</td>
                    <td>{{$item->iscritto}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection