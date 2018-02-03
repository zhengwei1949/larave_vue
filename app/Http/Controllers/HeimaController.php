<?php
namespace App\Http\Controllers;

use App\Heima;
use Illuminate\Http\Request;

class HeimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Heima::all();
        // dd($data);
        return response()->json(compact('data'));
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
     * @param  \App\Heima  $heima
     * @return \Illuminate\Http\Response
     */
    public function show(Heima $heima)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Heima  $heima
     * @return \Illuminate\Http\Response
     */
    public function edit(Heima $heima)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Heima  $heima
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Heima $heima)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Heima  $heima
     * @return \Illuminate\Http\Response
     */
    public function destroy(Heima $heima)
    {
        //
    }
}
