<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Contact
 *
 * @property $nombre
 * @property $email
 * @property $telefono
 * @property $asunto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */

class Contact extends Model
{
    static $rules = [
		'nombre' => 'required',
		'email' => 'required',
		'telefono' => 'required',
		'asunto' => 'required',
    ];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','email','telefono','asunto'];

protected $table= "contacts";

    
}
