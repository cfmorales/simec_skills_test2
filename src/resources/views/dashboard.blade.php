@extends('main')
@section('content')
    <div class="dashboard">
        <div class="title m-b-md">
            Available Games
        </div>

        <div class="games_container">
            <a href="#" class="game_item" data-toggle="modal" data-target="#current_user_modal">
                <div class="module">
                    <h4>Lizard-Spock Expansion Rock</h4>

                </div>

            </a>

            <a href="#" class="game_item" data-toggle="modal" data-target="#mastermind_current_user_modal">
                <div class="module">
                    <h4>Mastermind</h4>
                </div>
            </a>

        </div>
    </div>

@endsection

