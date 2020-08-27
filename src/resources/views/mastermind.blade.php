@extends('main')
@section('content')

    <div class="mastermind_game" style="margin-top: 50px">
        <h1>MasterMind</h1>
        <p>Available Colors</p>
        <div class="btn-group mr-2 available_colors" role="group" aria-label="First group">
            <button type="button" class="btn btn-primary" data-color="primary"></button>
            <button type="button" class="btn btn-success" data-color="success"></button>
            <button type="button" class="btn btn-danger" data-color="danger"></button>
            <button type="button" class="btn btn-warning" data-color="warning"></button>
            <button type="button" class="btn btn-dark" data-color="dark"></button>
            <button type="button" class="btn btn-info" data-color="info"></button>

        </div>
        <p>Click on the buttons to start the game</p>
        <p>In compared results black color means right color in the right place, white color means right color in the
            wrong place and no color means that that color is not in the game</p>
        <div class="table_container">
            <table class="table">
                <thead>
                <th colspan="4">Compared results</th>
                <th colspan="4">Human panel</th>
                </thead>
                <tbody>


                @for($i=0;$i<8;$i++)
                    <tr class="pos{{$i}}">
                        <td style="border: 1px solid black" class="compared_data_tr"></td>
                        <td style="border: 1px solid black" class="compared_data_tr"></td>
                        <td style="border: 1px solid black" class="compared_data_tr"></td>
                        <td style="border: 1px solid black" class="compared_data_tr"></td>
                        <td style="border: 1px solid black"></td>
                        <td style="border: 1px solid black"></td>
                        <td style="border: 1px solid black"></td>
                        <td style="border: 1px solid black"></td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary check">Check</button>
            <button type="button" class="btn btn-secondary restart" onClick="window.location.reload();">Restart</button>
        </div>
        <div class="spinner-border m-5" role="status" hidden>
            <span class="sr-only">Loading...</span>
        </div>

    </div>


@endsection

