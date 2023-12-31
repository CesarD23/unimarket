<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dulce
 *
 * @property $id
 * @property $nombre
 * @property $producto
 * @property $informacion
 * @property $contacto
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dulce extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'producto' => 'required',
		'informacion' => 'required',
		'contacto' => 'required',
    'imagen' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','producto','informacion','contacto'];

protected $table= "dulces";

}
