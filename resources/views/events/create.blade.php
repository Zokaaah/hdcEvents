@extends('layouts.main')
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>

    <form action="/events" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Evento</label>
            <input type="text" class="form-control" id="title" name="title">

            <label for="city">Cidade</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">

            <label for="title">O evento é privado?</label>
            <select name="private" id="" class="form-control" id="private" name="private">
                <option value="0">Sim</option>
                <option value="1">Não</option>
            </select>
            <label for="title">Descrição</label>
            <textarea name="desc" id="desc" cols="30" rows="10" class="form-control" placeholder="Insira a descrição do evento"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar evento">
    </form>
</div>
@endsection