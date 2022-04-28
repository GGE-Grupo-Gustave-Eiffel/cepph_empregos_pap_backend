<?php

namespace App\Http\Controllers;

use App\Models\vaga;
use Illuminate\Http\Request;
use DB;


class VagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vagas = DB::select('select * FROM vagas');

        return response()->json([
            'vagas' => $vagas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'ola';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            DB::beginTransaction();

            try {

                $vaga = new vaga;
                

                $vaga->Departamento = $request->Departamento;
                $vaga->Numero_de_vagas = $request->Numero_de_vagas;
                $vaga->Limite_de_candidatura = $request->Limite_de_candidatura;
                $vaga->Cargo = $request->cargo;
                $vaga->save();

                DB::commit();

                return response()->json([
                    'message' => 'Vaga enviada com sucesso!',
                ], 201);


            } catch(\Exception $e) {
                DB::rollback();
                throw $e;
            }
        }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function show(Vaga $vaga)
    {
       // return $vaga;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaga $vaga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaga $vaga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaga $vaga)
    {
        //
    }
}
