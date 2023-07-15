<?php

namespace App\Http\Controllers;
use App\Models\Dulce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class DulceController
 * @package App\Http\Controllers
 */
class DulceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dulces = Dulce::paginate();

        return view('dulce.index', compact('dulces'))
            ->with('i', (request()->input('page', 1) - 1) * $dulces->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dulce = new Dulce();
        return view('dulce.create', compact('dulce'));
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

        $dulce = new Dulce();


if( $request->hasFile('imagen')){
    $file=$request->file('imagen');
    $destinationpath='images/';
    $filename=time() . '-' . $file->getClientOriginalName();
    $uploadSucces=$request->file('imagen')->move($destinationpath, $filename);
    $dulce->imagen =$destinationpath . $filename ;
}

        
        $dulce->nombre = $request->input('nombre');
        $dulce->producto = $request->input('producto');
        $dulce->informacion = $request->input('informacion');
        $dulce->contacto = $request->input('contacto');


       

        $dulce->save();

        return redirect()->route('dulces.index')
            ->with('success', 'Duce creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dulce = Dulce::find($id);

        return view('dulce.show', compact('dulce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dulce = Dulce::find($id);

        return view('dulce.edit', compact('dulce'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Dulce $dulce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dulce $dulce)
    {
        request()->validate(Dulce::$rules);

        $dulce->update($request->all());

        return redirect()->route('dulces.index')
            ->with('success', 'Dulce actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dulce = Dulce::find($id)->delete();

        return redirect()->route('dulces.index')
            ->with('Dulce eliminado');
    }
}
