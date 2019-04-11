<?php

namespace Garro\Http\Controllers;

use Garro\Axes;
use Illuminate\Http\Request;

class AxesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

       /* if ($request->ajax()) {
        return response()->json([
            [ text => 'One',   value => '1'],
            [ text => 'Two',   value => '2'],
            [ text => 'Three', value => '3']
                                ]);
        }*/
        $axes = Axes::all();
        return response()->json($axes);       // return view('setting.axes.index', compact('axes'));
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
        if ($request->ajax()) {
            $axes = new Axes();
            $axes->key = $request->input('key');
            $axes->name = $request->input('name');
            $axes->save();

            return response()->json([
                "message" => "Eje Creado Correctamente.",
                "axes" =>$axes
            ],200);
        }
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
        //
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
        $axes = Axes::find($id);
        $axes->key=$request->input('key');
        $axes->name=$request->input('name');
        $axes->save();

        return response()->json([
            "message" => "Eje Actualizado Correctamente.",
            "axes" =>$axes
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $axes = Axes::find($id);
        $axes->delete();
    }
}
