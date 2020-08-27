<?php

namespace App\Http\Controllers;

use App\Game;
use App\User;
use Illuminate\Http\Request;

use Validator;

class SheldonGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $game_user
     * @return \Illuminate\Http\Response
     */


    public function validateUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => 'required',

        ]);
        if ($validator->fails()) {
            return redirect('/')->with('status', $validator->getMessageBag()->toArray());
        } else {

            $name = $request->input('name');
            $user = User::firstOrCreate(['name' => $name]);
            $game_user = Game::firstOrCreate([
                'user_id' => $user->id,
                'name' => 'sheldon'
            ]);
            return redirect()->route('sheldon', ['game_user' => $game_user]);

        }
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game_user = Game::findOrFail($id);
        return view('sheldon', compact('game_user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $game_user = Game::findOrFail($id);
        switch ($request->winner) {
            case 'h':
                $game_user->wins += 1;
                $game_user->save();
                return response()->json(array(['wins' => $game_user->wins, 'losses' => $game_user->losses]));
                break;
            case 'b':
                $game_user->losses += 1;
                $game_user->save();
                return response()->json(array(['wins' => $game_user->wins, 'losses' => $game_user->losses]));
                break;
        }
    }

}
