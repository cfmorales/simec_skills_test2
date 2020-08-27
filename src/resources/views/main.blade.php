@include('login_modal')
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    {{--Boostrap--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="main">
    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
    <div class="top-right links">
        @isset($game_user)
            <div>Current score ->
                <span>Name: {{$game_user->user->name}}</span>
                Wins:<span class="game_user_wins">{{$game_user->wins}}</span>
                Losses: <span class="game_user_losses">{{$game_user->losses}}</span>
                <span class="game_user_id" hidden>{{$game_user->id}}</span>
            </div>
        @endisset
    </div>
    <div class="top_left">
        <h1>Simec Skills Test</h1>
        <nav>
            <a href="#" data-toggle="modal" data-target="#current_user_modal">Lizard-Spock Expansion Rock</a>
            <a href="#" data-toggle="modal" data-target="#mastermind_current_user_modal">Mastermind</a>
            <a href="{{url('/')}}">Dashboard</a>
        </nav>
    </div>

    <div class="content">
        @yield('content')
    </div>
    @if (session('status'))
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-warning"></i> Estado!</h4>
            <ul>
                @foreach(session('status')['name'] as $dat)
                    <li>{{$dat}}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

{{--Boostrap--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
<script src="{{asset('js/app.js')}}"></script>

@yield('js')
</body>
</html>
