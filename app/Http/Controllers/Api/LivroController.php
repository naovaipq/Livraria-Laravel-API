<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livro = Livro::all();
        return $livro;
    }

    public function show($id)
    {
        $livro = Livro::find($id);

        return $livro;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $livro = Livro::create([
                'codLivro' => $request->codLivro,
                'titulo'   => $request->titulo,
                'autor'    => $request->autor,
                'sinopse'  => $request->sinopse,
                'tipo'     => $request->tipo,
                'codISBN'  => $request->codISBN,
                'valor'    => $request->valor
            ]);

            return [$livro];

        } catch (\Exception $error) {
            return ['error', 'details' => $error];
        }
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
        try{
            $livro = Livro::find($id);
    
            $livro->update([
                'codLivro' => $request->codLivro,
                'titulo'   => $request->titulo,
                'autor'    => $request->autor,
                'sinopse'  => $request->sinopse,
                'tipo'     => $request->tipo,
                'codISBN'  => $request->codISBN,
                'valor'    => $request->valor
            ]);
    
            return ['atualizado'];

        }catch(\Exception $error){
            return ['error', 'details' => $error];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{

            $livro = Livro::find($id);
    
            $livro->delete();
    
            return ['deleted'];

        }catch (\Exception $error){
            return['error'=>$error];
        }
    }
} 
