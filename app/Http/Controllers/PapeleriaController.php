<?php

namespace App\Http\Controllers;
use App\Models\Papeleria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class PapeleriaController
 * @package App\Http\Controllers
 */
class PapeleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $papelerias = Papeleria::paginate();

        return view('papeleria.index', compact('papelerias'))
            ->with('i', (request()->input('page', 1) - 1) * $papelerias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $papeleria = new Papeleria();
        return view('papeleria.create', compact('papeleria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'imagen' => 'required|image|max:2048'
        ]);

        $papeleria = new Papeleria();


if( $request->hasFile('imagen')){
    $file=$request->file('imagen');
    $destinationpath='images/';
    $filename=time() . '-' . $file->getClientOriginalName();
    $uploadSucces=$request->file('imagen')->move($destinationpath, $filename);
    $papeleria->imagen =$destinationpath . $filename ;
}

        
$papeleria->nombre = $request->input('nombre');
$papeleria->producto = $request->input('producto');
$papeleria->informacion = $request->input('informacion');
$papeleria->contacto = $request->input('contacto');


       

        $papeleria->save();

        return redirect()->route('papelerias.index')
            ->with('success', 'Producto creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $papeleria = Papeleria::find($id);

        return view('papeleria.show', compact('papeleria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $papeleria = Papeleria::find($id);

        return view('papeleria.edit', compact('papeleria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Papeleria $papeleria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Papeleria $papeleria)
    {
        request()->validate(Papeleria::$rules);

        $papeleria->update($request->all());

        return redirect()->route('papelerias.index')
            ->with('success', 'Producto editado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $papeleria = Papeleria::find($id)->delete();

        return redirect()->route('papelerias.index')
            ->with('success', 'Producto eliminado');
    }
}
