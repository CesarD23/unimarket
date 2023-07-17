<?php

namespace App\Http\Controllers;
use App\Models\Contact; 
use Illuminate\Http\Request;

/**
 * Class ContactController
 * @package App\Http\Controllers
 */

class ContactController extends Controller
{

    public function show()
    {
        return view('contacto');
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
            'nombre' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'asunto' => 'required',
        ]);
        

        $contact = new Contact();
        $contact->nombre = $request->input('nombre');
        $contact->email = $request->input('email');
        $contact->telefono = $request->input('telefono');
        $contact->asunto = $request->input('asunto');
        // Asigna los demás campos según corresponda
    
        // Guarda los datos en la base de datos
        $contact->save();
    
        // Redirecciona a una página de éxito o muestra un mensaje de éxito
        return view('welcome')->with('success', 'Los datos se han guardado correctamente.');
    }
    

}
