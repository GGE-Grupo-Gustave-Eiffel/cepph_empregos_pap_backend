<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
      /*  return response()->json([
            'nome' => 'Justino Filipe',
            'nomeVaga' => 'Técnico de Informática',
            'dataInscricao' => '2022-03-25',
            'telefone' => '+355900888500',
            'genero' => 'M',
            'nacionalidade' => 'Angolana',
            'nivelAcamico' => 'Técnico médio'
        ]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        echo($request);
        /*
        $rules = DB::table('candidato')->insert( [
			'Nome' => 'required',
			'BI' => 'required',
			'Email' => 'required',
            'nacionalidade' => 'required',
            'Telefone' => 'required',
            'Nivel_academico' => 'required',
            'Anos_de_experiencia' => 'required'
		]);
        */
		// $validator = Validator::make($request->all(),$rules);
		// if ($validator->fails()) {
		// 	return redirect('insert')
		// 	->withInput()
		// 	->withErrors($validator);
		// }
		// else{
        //     $data = $request->input();
		// 	try{
		// 		$candidato = new CadastroController;
        //         $candidato->Nome = $data['Nome'];
        //         $candidato->BI = $data['BI'];
		// 		$candidato->Email = $data['Email'];
		// 		$candidato->nacionalidade = $data['nacionalidade'];
        //         $candidato->Telefone = $data['Telefone'];
        //         $candidato->Nivel_academico = $data['Nivel_academico'];
        //         $candidato->Anos_de_experiencia = $data['Anos_de_experiencia'];
		// 		$candidato->save();
		// 		return redirect('insert')->with('status',"Insert successfully");
		// 	}
		// 	catch(Exception $e){
		// 		return redirect('insert')->with('failed',"operation failed");
		// 	}
		// }
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        


           DB::table('candidato')->insert(
                ['Nome' => $request->nome],
                ['BI' => $request->bi],
                ['Email' => $request->email],
                ['nacionalidade' => $request->nacionalidade],
                ['Telefone' => intval($request->telefone)],
                ['Nivel_academico' => 3],
                ['Anos_de_experiencia' => intval($request->anos_xp)]
            );
    
            return response()->json([
                'msg' => 'Candidatura enviada com sucesso!'
            ]);
                
        /*
        return response()->json([
            //'msg' => 'Candidatura enviada com sucesso!'
            'Nome' => $request->nome,
            'BI' => $request->bi,
            'Email' => $request->email,
            'nacionalidade' => $request->nacionalidade,
            'Telefone' => $request->telefone,
            'Nivel_academico' => $request->nivel_academico,
            'Anos_de_experiencia' => $request->anos_xp
        ]);*/
        /*
        return response()->json([
            'nome' => $request->get('name', 'valor padrão')
            
        ]);*/
        // $candidato = DB::create('INSERT INTO `candidato`(`Nome`, `BI`, `Email`, `nacionalidade`, 
        // `Telefone`, `Nivel_academico`, `Anos_de_experiencia`) ');

        // return response()->json([
        //     'candidato' => $candidato
        // ]);
        
        
        //echo($request);
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
