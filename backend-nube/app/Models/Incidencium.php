<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Incidencium
 * 
 * @property int $id_incidencia
 * @property int $id_municipio
 * @property int $id_delito
 * @property int $id_tiempo
 * @property int|null $total_casos
 * @property string|null $fuente
 * @property string|null $notas
 * 
 * @property Delito $delito
 * @property Municipio $municipio
 * @property Tiempo $tiempo
 * @property Collection|Victima[] $victimas
 *
 * @package App\Models
 */
class Incidencium extends Model
{
	protected $table = 'incidencia';
	protected $primaryKey = 'id_incidencia';
	public $timestamps = false;

	protected $casts = [
		'id_municipio' => 'int',
		'id_delito' => 'int',
		'id_tiempo' => 'int',
		'total_casos' => 'int'
	];

	protected $fillable = [
		'id_municipio',
		'id_delito',
		'id_tiempo',
		'total_casos',
		'fuente',
		'notas'
	];

	public function delito()
	{
		return $this->belongsTo(Delito::class, 'id_delito');
	}

	public function municipio()
	{
		return $this->belongsTo(Municipio::class, 'id_municipio');
	}

	public function tiempo()
	{
		return $this->belongsTo(Tiempo::class, 'id_tiempo');
	}

	public function victimas()
	{
		return $this->hasMany(Victima::class, 'id_incidencia');
	}
}
