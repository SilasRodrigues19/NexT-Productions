@extends('layouts.main')

@section('title', 'NexT Productions')

@section('content')
    
    <div id="search-container" class="col-md-12">
        <h1>
            NexT Productions
            <span class="iconify" data-icon="emojione-monotone:angry-face-with-horns"></span>
        </h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procure por um evento...">
            <button class="btn btn-primary form-control mt-2" type="submit">
                Buscar
                <span class="iconify" data-icon="fluent:sidebar-search-rtl-20-regular"></span>
            </button>
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if($search)
        <h2>Buscando por: {{ $search }}</h2>
        @else
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        @endif
        <div id="cards-container" class="row">
            @foreach($events as $event)
                <div class="card col-md-3">
                    <img src="img/events/{{ $event->image }}" alt="{{ $event->title }}">
                    <div class="card-body">
                        <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">{{ count($event->users ) }} Participantes</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">
                            <span class="iconify" data-icon="carbon:zoom-area"></span>
                            Saber mais
                        </a>
                    </div>
                </div>
            @endforeach
            @if(count($events) == 0 && $search)
            <p>Não foi possível encontrar nenhum evento com {{ $search }} <br><br> <a href="/" class="btn btn-primary">Ver todos</a></p>
            @elseif(count($events) == 0)
                <p>Não há eventos no momento <br><br>
                <a href="/events/create" class="btn btn-primary">Crie o seu!</a></p>
            @endif
        </div>
    </div>
    <script src="/js/script.js"></script>
@endsection