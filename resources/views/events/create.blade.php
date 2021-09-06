@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-group">
            <label for="title">Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Items disponíveis no evento:</label>
            <div class="form-group inputGroup">
                <input class="inputCheck" type="checkbox" name="items[]" value="Cadeiras" id="cadeiras">
                <label id="labelCheck" for="cadeiras">Cadeiras</label>
            </div>
            <div class="form-group inputGroup">
                <input class="inputCheck" type="checkbox" name="items[]" value="Palco" id="palco">
                <label id="labelCheck" for="palco">Palco</label>
            </div>
            <div class="form-group inputGroup">
                <input class="inputCheck" type="checkbox" name="items[]" value="Mesas" id="mesas">
                <label id="labelCheck" for="mesas">Mesas</label>
            </div>
            <div class="form-group inputGroup">
                <input class="inputCheck" type="checkbox" name="items[]" value="Computadores" id="computadores">
                <label id="labelCheck" for="computadores">Computadores</label>
            </div>
            <div class="form-group inputGroup">
                <input class="inputCheck" type="checkbox" name="items[]" value="Auditório" id="auditorio">
                <label id="labelCheck" for="auditorio">Auditório</label>
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>
    <script src="/js/textarea.js"></script>
@endsection