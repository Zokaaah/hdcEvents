@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')



<div id="search-container" class="col-md-12">
    <h1 class="text-center">Busque o evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procure o evento">
    </form>
</div>

<div id="events-container" class="col-md-12 text-center">
    <h3>Próximos eventos</h3>
    <p>Vejam os eventos dos proximos dias</p>

    <div class="cards-container row" >
        @foreach ($events as $event)
        <div class="cards card  col-md-3">
            <h2>{{$event -> title}}</h2>
            <p>{{$event -> desc}}</p>
            <button class="btn btn-primary">Saber mais</button>
        </div>
        @endforeach
            
    </div>
</div>

@endsection