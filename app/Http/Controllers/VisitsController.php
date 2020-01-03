<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitsController extends Controller
{
    /**npm
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Visit = DB::table('tb_farmacia as f')
        ->join('sis_usuario as u', 'f.cd_representante', '=', 'u.cdusuario')
        ->join('sis_usuario as ua', 'f.cd_anjo', '=', 'ua.cdusuario')
        ->join('tb_cidade as c', 'f.cd_cidade', '=', 'c.cdcidade')
        ->select('f.cd_farmacia', 'nm_fantasia', 'razao_social', 'cnpj', 'u.nmusuario as representante', 'ua.nmusuario as anjo', 'nm_cidade')
        ->get();
        
        return response()->json($Visit);
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
