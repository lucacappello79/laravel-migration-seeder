
@extends ('layouts/main')

@section('content')
<h1>
    Elenco Treni:
</h1>

<div class="container">
    <div class="row">
        @foreach ($trains as $item)
        <div class="col-3 mb-4">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                <h5 class="card-title">{{$item->title}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{$item->original_title}}</h6>
                <p class="card-text">{{$item->nationality}}</p>
                <p class="card-text">{{$item->date}}</p>
                <p class="card-text">{{$item->vote}}</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>      
        @endforeach
    </div>
</div>

@endsection