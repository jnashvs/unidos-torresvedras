<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishes;
use Illuminate\Support\Facades\Log;

class WishesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $response = $this->validate($request, [
            'email' => 'required|email|max:100',
            'freguesia' => 'required',
            //'data_nascimento' => 'nullable|date_format:dd/md/YY',
            'politica_privacidade' => 'required',
            'msg' => 'required',
        ]);

        $time = strtotime($request->data_nascimento);

        $request['data_nascimento'] = date('Y-m-d',$time);

        Log::info($request);
        Log::info(date('Y-m-d',$time));

        if($response)
            Wishes::create($request->all());

        return response()->json($response);

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
