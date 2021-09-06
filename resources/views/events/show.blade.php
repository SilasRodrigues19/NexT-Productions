@extends('layouts.main')

@section('title', $event->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city">
                    <span class="iconify" data-icon="entypo:location"></span>
                    {{ $event->city }}
                </p>
                <p class="events-participants">
                    <span class="iconify" data-icon="fluent:people-community-16-filled"></span>
                    {{ count($event->users) }} Participantes
                </p>
                <p class="event-owner">
                    <span class="iconify" data-icon="fluent:star-line-horizontal-3-24-filled"></span>
                    {{ $eventOwner['name'] }}
                </p>
                <p>
                    <span class="iconify" data-icon="fluent:mail-48-filled"></span>
                    {{ $eventOwner['email'] }}
                </p>
                @if(!$hasUserJoined)
                    <form action="/events/join/ {{ $event->id }}" method="POST">
                        @csrf
                        <a href="/events/join/ {{ $event->id }}" class="btn btn-primary mb-2" id="event-submit" onclick="event.preventDefault(); this.closest('form').submit();">
                            <span class="iconify" data-icon="codicon:check"></span>
                            Confirmar Presença
                        </a>
                    </form>
                @else
                    <p class="already-joined-msg">Você já está participando desse evento!</p>
                @endif
                <h3>O evento conta com:</h3>
                <ul id="items-list">
                    @foreach($event->items as $item)
                        <li><span class="iconify" data-icon="bx:bxs-calendar-check"></span> <span>{{ $item }}</span></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre o Evento:</h3>
                <p class="event-description">{{ $event->description }}</p>
            </div>
        </div>
    </div>

@endsection