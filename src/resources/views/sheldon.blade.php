@extends('main')
@section('content')

    <div class="sheldon_game" style="margin-top: 50px">
        <h1>The Lizard-Spock Expansion Rock</h1>
        <p>You're going to play against web browser</p>
        <p>It's time to pick</p>
        <div class="list-group list-group-horizontal">
            <button type="button" class="list-group-item list-group-item-action " data-choise="1">
                Tijeras
            </button>
            <button type="button" class="list-group-item list-group-item-action " data-choise="2">Papel</button>
            <button type="button" class="list-group-item list-group-item-action " data-choise="3">Roca</button>
            <button type="button" class="list-group-item list-group-item-action " data-choise="4">Lagarto</button>
            <button type="button" class="list-group-item list-group-item-action " data-choise="5">Spock</button>
        </div>
        <div class="spinner-border m-5" role="status" hidden>
            <span class="sr-only">Loading...</span>
        </div>

        <h3 class="browserChoise"></h3>

        <h1 class="gameResults"></h1>
    </div>


@endsection

