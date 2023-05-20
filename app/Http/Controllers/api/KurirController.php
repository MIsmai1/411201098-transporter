<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Kurir;
use App\Http\Resource\KurirResource;

class KurirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurir = Kurir::all();

        return response($kurir);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new Kurir();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->password = $request->input('password');

        $data->save();
        echo "<h3>Berikut adalah data Kurir</h3>";
        
        return response()->json($data);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Perservasi::find($id);
        return response()->json($data);
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
        $data = new Kurir();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->password = $request->input('password');

        $data->save();
        echo "<h3>Data Kurir berhasil diubah</h3>";
        
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kurir::find($id);
        $data->delete();

        return response()->json('data berhasil dihapus');
    }
}
