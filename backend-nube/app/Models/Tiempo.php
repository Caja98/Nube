<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tiempo
 * 
 * @property int $id_tiempo
 * @property int $anio
 * @property int|null $mes
 * @property int|null $trimestre
 * @property int|null $semestre
 * 
 * @property Collection|Incidencium[] $incidencia
 *
 * @package App\Models
 */
class Tiempo extends Model
{
	protected $table = 'tiempo';
	protected $primaryKey = 'id_tiempo';
	public $timestamps = false;

	protected $casts = [
		'anio' => 'int',
		'mes' => 'int',
		'trimestre' => 'int',
		'semestre' => 'int'
	];

	protected $fillable = [
		'anio',
		'mes',
		'trimestre',
		'semestre'
	];

	public function incidencia()
	{
		return $this->hasMany(Incidencium::class, 'id_tiempo');
	}
}
