<?php

namespace App\Http\Controllers;

use App\ApoiarProjetoModel;
use Illuminate\Http\Request;
use Auth;
use Session;

class ApoiarProjetoController extends Controller
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
        $data = [
            'valor'      => request('valor'),
            'idProjeto'  => request('idProjeto'),
            'idApoiador' => auth()->user()->id,
        ];

        ApoiarProjetoModel::create($data);
        return redirect('home');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\ApoiarProjetoModel  $apoiarProjetoModel
     * @return \Illuminate\Http\Response
     */
    public function show(ApoiarProjetoModel $apoiarProjetoModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ApoiarProjetoModel  $apoiarProjetoModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ApoiarProjetoModel $apoiarProjetoModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ApoiarProjetoModel  $apoiarProjetoModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApoiarProjetoModel $apoiarProjetoModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ApoiarProjetoModel  $apoiarProjetoModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApoiarProjetoModel $apoiarProjetoModel)
    {
        //
    }

    // public function apoiar_projeto(){
    //     return view('projeto');
    // }

}
