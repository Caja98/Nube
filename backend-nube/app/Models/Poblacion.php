<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Poblacion
 * 
 * @property int $id_poblacion
 * @property int $id_municipio
 * @property int $anio
 * @property int|null $poblacion_total
 * @property int|null $hombres
 * @property int|null $mujeres
 * 
 * @property Municipio $municipio
 *
 * @package App\Models
 */
class Poblacion extends Model
{
	protected $table = 'poblacion';
	protected $primaryKey = 'id_poblacion';
	public $timestamps = false;

	protected $casts = [
		'id_municipio' => 'int',
		'anio' => 'int',
		'poblacion_total' => 'int',
		'hombres' => 'int',
		'mujeres' => 'int'
	];

	protected $fillable = [
		'id_municipio',
		'anio',
		'poblacion_total',
		'hombres',
		'mujeres'
	];

	public function municipio()
	{
		return $this->belongsTo(Municipio::class, 'id_municipio');
	}
}
