@extends('layouts.main')

@section('title', 'Editando: ' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando {{ $event->title }}</h1>
    <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value="{{ $event->title }}">
        </div>
        <div class="form-group">
            <label for="title">Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" value="{{ $event->city }}">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }}>Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?">{{ $event->description }}</textarea>
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
        <input type="submit" class="btn btn-primary" value="Editar Evento">
    </form>
</div>
    <script src="/js/textarea.js"></script>
@endsection