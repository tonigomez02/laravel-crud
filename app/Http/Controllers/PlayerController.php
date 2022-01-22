<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view("player.index")->with("players", $players);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("player.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \request()->validate([
            'name' => 'required',
            'lastname' => 'required',
            'position' => 'max:1',
            'salary' => 'required'
        ]);

        $players = new Player();

        $players->name = $request->get("name");
        $players->lastname = $request->get("lastname");
        $players->position = $request->get("position");
        $players->salary = $request->get("salary");

        $players->save();
        return redirect("/players");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::find($id);
        return view("player.edit")->with("player", $player);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $player = Player::find($id);

        \request()->validate([
            'name' => 'required',
            'lastname' => 'required',
            'position' => 'max:1',
            'salary' => 'required'
        ]);

        $player->name = $request->get("name");
        $player->lastname = $request->get("lastname");
        $player->position = $request->get("position");
        $player->salary = $request->get("salary");

        $player->save();
        return redirect("/players");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::find($id);
        $player->delete();
        return redirect("/players");
    }
}
