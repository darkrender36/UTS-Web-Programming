<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Itemtype;
use App\Models\User;
use Illuminate\Http\Request;

class ItemtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id,$typeid)
    {
        date_default_timezone_set('Asia/Jakarta');
        $hour = date('G');
        $user = User::find($id);
        $itemtype = Itemtype::all();
        $item = Item::where('item_type_id', $typeid)->get();
        // dd($item);
        return view('coffee', ['itemtype' => $itemtype,'typeid' => $typeid, 'item' => $item, 'user' =>$user, 'hour' => $hour]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Itemtype  $itemtype
     * @return \Illuminate\Http\Response
     */
    public function show(Itemtype $itemtype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Itemtype  $itemtype
     * @return \Illuminate\Http\Response
     */
    public function edit(Itemtype $itemtype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Itemtype  $itemtype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Itemtype $itemtype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Itemtype  $itemtype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itemtype $itemtype)
    {
        //
    }
}
